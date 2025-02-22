<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::paginate(5); // 5 annonces par page
        return view('annonces.index', compact('annonces'));
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
        ]);

        // حفظ الإعلان في قاعدة البيانات
        $annonce = Annonce::create($validatedData);

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
    $annonces = Annonce::paginate(3); ; // جلب جميع الإعلانات
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
}
