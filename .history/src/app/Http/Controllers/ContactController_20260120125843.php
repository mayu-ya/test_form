<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
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
        $contact = $request->all();
        $Category = Category::find($request->category_id);
        //dd($request->all());

        return view('confirm', compact('contact'));
    }

    public function back(Request $request)
    {
        return redirect('/')->withInput();
    }
}
