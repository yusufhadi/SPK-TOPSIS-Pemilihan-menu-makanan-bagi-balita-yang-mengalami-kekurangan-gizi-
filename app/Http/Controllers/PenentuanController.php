<?php

namespace App\Http\Controllers;

use App\Models\Penentuan;
use App\Models\SubCriteria;
use Illuminate\Http\Request;


class PenentuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Penentuan::get();
        return view('pages.admin.penentuan', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = SubCriteria::get();
        return view('pages.admin.formData', [
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // Penentuan::create($data);

        $Penentuan = new Penentuan;
        $Penentuan->nama = $request->nama;

        $p1 = $request->bobot_umur_penentuan;
        $arp1 = explode(" - ", $p1);
        $Penentuan->penentuan_umur = $arp1[0];
        $Penentuan->umur = $arp1[1];

        $p2 = $request->bobot_beratBadan_penentuan;
        $arp2 = explode(" - ", $p2);
        $Penentuan->penentuan_beratBadan = $arp2[0];
        $Penentuan->beratBadan = $arp2[1];

        $p3 = $request->bobot_tinggiBadan_penentuan;
        $arp3 = explode(" - ", $p3);
        $Penentuan->penentuan_tinggiBadan = $arp3[0];
        $Penentuan->tinggiBadan = $arp3[1];

        $p4 = $request->bobot_alergi_penentuan;
        $arp4 = explode(" - ", $p4);
        $Penentuan->penentuan_alergi = $arp4[0];
        $Penentuan->alergi = $arp4[1];
        // dd($Penentuan);
        $Penentuan->save();
        return redirect()->route('penentuan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Penentuan::findOrFail($id);

        $items = SubCriteria::get();

        return view('pages.admin.editFormData', [
            'a' => $a,
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $a = Penentuan::findOrFail($id);
        // $a->update($data);
        $id = $request->id;
        $Penentuan = Penentuan::where('id', $id)->first();
        $Penentuan->nama = $request->nama;

        $p1 = $request->bobot_umur_penentuan;
        $arp1 = explode(" - ", $p1);
        $Penentuan->penentuan_umur = $arp1[0];
        $Penentuan->umur = $arp1[1];

        $p2 = $request->bobot_beratBadan_penentuan;
        $arp2 = explode(" - ", $p2);
        $Penentuan->penentuan_beratBadan = $arp2[0];
        $Penentuan->beratBadan = $arp2[1];

        $p3 = $request->bobot_tinggiBadan_penentuan;
        $arp3 = explode(" - ", $p3);
        $Penentuan->penentuan_tinggiBadan = $arp3[0];
        $Penentuan->tinggiBadan = $arp3[1];

        $p4 = $request->bobot_alergi_penentuan;
        $arp4 = explode(" - ", $p4);
        $Penentuan->penentuan_alergi = $arp4[0];
        $Penentuan->alergi = $arp4[1];
        // dd($Penentuan);
        $Penentuan->save();

        return redirect()->route('penentuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Penentuan::findOrFail($id);
        $item->delete();

        return redirect()->route('penentuan');
    }
}
