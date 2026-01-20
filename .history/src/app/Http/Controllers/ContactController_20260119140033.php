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
        $contact = $request->only(['last_name', 'first_name', 'gender[0]', 'gender[1]', 'gender[2]', 'email', 'tel[0]', 'tel[1]', 'tel[2]','address', 'building', 'content', 'detail']);
        // dd($request->all());

        return $contact;
    }
}
