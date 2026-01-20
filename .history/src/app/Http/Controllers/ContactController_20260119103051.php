<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->(['name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        return $contact;
    }
}
