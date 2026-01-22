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

        $authors = Author::Paginate(7);
        

        return view('admin', compact('contacts', 'categories', 'authors'));
    }
}
