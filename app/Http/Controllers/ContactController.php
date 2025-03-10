<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // حفظ الرسالة في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح!');
    }

    // عرض جميع الرسائل في لوحة التحكم
    public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

        if ($request->filled('status')) {
            if ($request->status == 'new') {
                $query->where('created_at', '>=', now()->subDays(7));
            } elseif ($request->status == 'old') {
                $query->where('created_at', '<', now()->subDays(7));
            }
        }

        $contacts = $query->paginate(10);

        return view('dashboard.contacts.index', compact('contacts'));
    }

    // عرض رسالة معينة
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('dashboard.contacts.show', compact('contact'));
    }

    // حذف رسالة
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('contacts.index')->with('success', 'تم حذف الرسالة بنجاح!');
    }
}
