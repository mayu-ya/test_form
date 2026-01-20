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
        $contact = $request->only(['first_name', 'last_name', 'gender[1]', 'gender[2]', 'gender[3]', 'email', 'tel[1]', 'tel[2]', 'tel[3]','address', 'building', 'content', 'detail']);
         // dd($request->all());

        return $contact;
    }
}
