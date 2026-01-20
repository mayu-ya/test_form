<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contacts = Contact::with('category')->get();
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel','address', 'building', 'content', 'detail']);
        dd($request->all());

        return view('confirm', compact('contact', 'contacts'));
    }

    public function back(Request $request)
    {
        return redirect('/')->withInput();
    }
}
