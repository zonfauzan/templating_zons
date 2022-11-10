<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index()
    {
        return view("acc.account");
    }
    public function create()
    {
        return view("acc.create");
    }
    public function show()
    {
        return view("acc.show");
    }
    public function master()
    {
        return view("template.master");
    }
    public function data()
    {
        return view("index");
    }
    public function table()
    {
        return view("create");
    }
}
