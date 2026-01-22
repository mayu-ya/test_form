<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact

class AuthController extends Controller
{
    public function index()
    {
        return view('admin');
    }
}
