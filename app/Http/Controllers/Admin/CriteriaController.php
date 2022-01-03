<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function criteria(Request $request)
    {
        return view("pages.admin.criteria");
    }

    public function umur(Request $request)
    {
        return view("pages.admin.umur");
    }

    public function berat(Request $request)
    {
        return view("pages.admin.berat");
    }

    public function tinggi(Request $request)
    {
        return view("pages.admin.tinggi");
    }
}
