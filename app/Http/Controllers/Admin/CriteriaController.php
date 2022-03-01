<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Criteria;
use App\Models\SubCriteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function criteria(Request $request)
    {
        $criterias = Criteria::get();
        return view('pages.admin.criteria', [
            'criterias' => $criterias
        ]);
    }

    public function umur()
    {
        // $ages = SubCriteria::get()->where('criteria_id', $criteria_id);
        // $ages = SubCriteria::with('Criteria')->whereCriteriaId(Criteria::id == 1)->get();
        // dd('test');
        $ages = SubCriteria::where('criteria_id', '1')->get();
        return view('pages.admin.umur', [
            'ages' => $ages
        ]);
    }

    public function berat()
    {
        $weights = SubCriteria::where('criteria_id', '2')->get();
        return view('pages.admin.berat', [
            'weights' => $weights
        ]);
    }

    public function tinggi(Request $request)
    {
        $highs = SubCriteria::where('criteria_id', '3')->get();
        return view('pages.admin.tinggi', [
            'highs' => $highs
        ]);
    }

    public function alergi(Request $request)
    {
        $allergy = SubCriteria::where('criteria_id', '4')->get();
        return view('pages.admin.alergi', [
            'allergy' => $allergy
        ]);
    }
}
