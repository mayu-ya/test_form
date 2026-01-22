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
        $gendertext = ( $contact['gender'] )->[1 => '男性', 2 => '女性', 3=>'その他'];

        return view('admin', compact('contacts', 'categories', 'gendertext'));
    }
}
