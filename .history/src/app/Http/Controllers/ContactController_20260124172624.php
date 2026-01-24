<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();

        return view('index', compact('contacts', 'categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        $category = Category::find($request->category_id);

        return view('confirm', compact('contact', 'category'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'category_id', 'detail']);
        //dd($contact);
        Contact::create($contact); 
        
        return view('thanks');
    }
}
