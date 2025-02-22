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
    public function index()
    {
        $contacts = Contact::paginate(5);
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
