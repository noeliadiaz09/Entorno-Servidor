<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm()
    {
        return view('refuerzo8');
    }

    public function storeName(Request $r)
    {
        $name = $r->get('name');
        return view('refuerzo8', ['name' => $name]);
    }
}
?>