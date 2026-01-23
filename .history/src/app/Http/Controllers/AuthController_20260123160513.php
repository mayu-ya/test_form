<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;

class AuthController extends Controller
{
    public function index()
    {
        $contacts =Contact::with('category')->get();
        $categories = Category::all();

        $contacts = Contact::Paginate(7);
        

        return view('admin', compact('contacts', 'categories'));
    }

    public function search(Request $request)
    {
         $contacts = Contact::with('category')->KeywordSearch($request->keyword)->GenderSearch($request->gender)->CategorySearch($request->category_id)->DateSearch($request->date)->get();
         $categories = Category::all();

         return view('admin', compact('contacts', 'categories'));
    }
}
