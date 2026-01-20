<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('index', compact('categories'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['category_id', 'last_name', 'first_name', 'gender', 'email', 'tel','address', 'building', 'content', 'detail']);
        dd($request->all());

        return view('confirm', compact('contact'));
    }

    public function back(Request $request)
    {
        return redirect('/')->withInput();
    }
}
