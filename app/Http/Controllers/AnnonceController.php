<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use Illuminate\Support\Facades\Storage;
use App\Models\Contact;
use App\Models\User;

class AnnonceController extends Controller
{
    public function index(Request $request)
    {
        $query = Annonce::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('description')) {
            $query->where('description', 'like', '%' . $request->description . '%');
        }

        if ($request->filled('date')) {
            $query->whereDate('date', $request->date);
        }

        $annonces = $query->paginate(5); // 5 annonces par page

        // Calculate the number of ads added per week
        $adsPerWeek = Annonce::selectRaw('WEEK(created_at) as week, COUNT(*) as count')
            ->groupBy('week')
            ->pluck('count', 'week')
            ->toArray();

        // Generate the weeks array for the chart labels
        $weeks = array_keys($adsPerWeek);
        $adsPerWeek = array_values($adsPerWeek);

        return view('annonces.index', compact('annonces', 'weeks', 'adsPerWeek'));
    }

    public function create()
    {
        return view('annonces.create');
    }

    public function store(Request $request)
    {
        // تحقق من البيانات المدخلة
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // حفظ الإعلان في قاعدة البيانات
        $annonce = new Annonce($validatedData);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('annonces', 'public');
            $annonce->photo = $photoPath;
        }

        $annonce->save();

        // إعادة التوجيه إلى صفحة services حيث يتم عرض جميع الإعلانات
        return redirect()->route('services')->with('success', 'تم إنشاء الإعلان بنجاح!');
    }

    public function show($id)
    {
        $annonce = Annonce::find($id);

        if (!$annonce) {
            return redirect()->route('annonces.index')->with('error', 'Annonce not found');
        }

        return view('services', compact('annonce'));
    }

    public function showServices()
    {
        $annonces = Annonce::cursorPaginate(6); // جلب جميع الإعلانات
        return view('services', compact('annonces'));
    }

    public function edit(Annonce $annonce)
    {
        return view('annonces.edit', compact('annonce'));
    }

    public function update(Request $request, Annonce $annonce)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
        ]);

        if ($request->hasFile('photo')) {
            if ($annonce->photo) {
                Storage::disk('public')->delete($annonce->photo);
            }
            $annonce->photo = $request->file('photo')->store('annonces', 'public');
        }

        $annonce->update($request->only('name', 'description', 'date'));

        return redirect()->route('annonces.index')->with('success', 'Annonce mise à jour!');
    }

    public function destroy(Annonce $annonce)
    {
        if ($annonce->photo) {
            Storage::disk('public')->delete($annonce->photo);
        }
        $annonce->delete();

        return redirect()->route('annonces.index')->with('success', 'Annonce supprimée!');
    }

    public function getCounts()
    {
        $annoncesCount = Annonce::count();
        $contactsCount = Contact::count();
        $usersCount = User::count();

        return response()->json([
            'annoncesCount' => $annoncesCount,
            'contactsCount' => $contactsCount,
            'usersCount' => $usersCount,
        ]);
    }
}
