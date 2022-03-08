<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
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

    public function metode($id)
    {
        $Alternatif1 = Alternatif::all();
        $Alternatif = Alternatif::select('alternatif', 'bobot_umur', 'bobot_beratBadan', 'bobot_tinggiBadan', 'bobot_alergi')->get();

        //pembuatan matrik 2 dimensi alternatif
        $matriks = array();
        for ($i = 0; $i < sizeof($Alternatif); $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ($j == 0) {
                    $matriks[$i][$j] = $Alternatif[$i]->bobot_umur;
                } else if ($j == 1) {
                    $matriks[$i][$j] = $Alternatif[$i]->bobot_beratBadan;
                } else if ($j == 2) {
                    $matriks[$i][$j] = $Alternatif[$i]->bobot_tinggiBadan;
                } else if ($j == 3) {
                    $matriks[$i][$j] = $Alternatif[$i]->bobot_alergi;
                }
            };
        };

        //pembuatan data pembagi
        $pembagi = array();
        for ($i = 0; $i < 4; $i++) {
            $jumlah = 0;
            for ($j = 0; $j < sizeof($Alternatif); $j++) {
                $jumlah +=  pow($matriks[$j][$i], 2);
            };
            $jumlah =  sqrt($jumlah);
            $pembagi[$i] = $jumlah;
        };

        //table normalisasi
        $normalisasi = array();
        for ($k = 0; $k < sizeof($Alternatif); $k++) {
            for ($l = 0; $l < 4; $l++) {
                $normalisasi[$k][$l] = $matriks[$k][$l] / $pembagi[$l];
            };
        };

        //pembuatan matriks penentuan
        $Penentuan = Penentuan::get();
        $id = 1;
        $MPenentuan = Penentuan::select('nama', 'penentuan_umur', 'penentuan_beratBadan', 'penentuan_tinggiBadan', 'penentuan_alergi')->where('id', $id)->first();
        $matriks_penentuan = array();
        $matriks_penentuan[0] = $MPenentuan->penentuan_umur;
        $matriks_penentuan[1] = $MPenentuan->penentuan_beratBadan;
        $matriks_penentuan[2] = $MPenentuan->penentuan_tinggiBadan;
        $matriks_penentuan[3] = $MPenentuan->penentuan_alergi;

        //table normalisasi terbobot
        $terbobot = array();
        for ($k = 0; $k < sizeof($normalisasi); $k++) {
            for ($l = 0; $l < 4; $l++) {
                $terbobot[$k][$l] = $normalisasi[$k][$l] * $matriks_penentuan[$l];
            };
        };

        //Nilai Solusi Ideal Positif (Maks) dan Solusi Ideal Negatif (Min)
        $max = array();
        $min = array();
        $solusi = array();
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < sizeof($terbobot); $j++) {
                $solusi[$j] = $terbobot[$j][$i];
            };
            if ($i != 3) { //3 itu index untuk alergi (benefit)
                $max[$i] = min($solusi);
                $min[$i] = max($solusi);
            } else {
                $max[$i] = max($solusi);
                $min[$i] = min($solusi);
            }
        };

        // nilai d+ dan d-
        $d_plus = array();
        $d_min = array();
        $tes = array();
        for ($i = 0; $i < sizeof($terbobot); $i++) {
            $total_jumblah_plus = 0;
            $total_jumblah_min = 0;
            $c = "";
            for ($j = 0; $j < 4; $j++) {
                $total_jumblah_plus += pow(($max[$j] - $terbobot[$i][$j]), 2);
                $total_jumblah_min +=  pow(($min[$j] - $terbobot[$i][$j]), 2);
            };

            $total_jumblah_plus = sqrt($total_jumblah_plus);
            $d_plus[$i] = $total_jumblah_plus;
            $total_jumblah_min = sqrt($total_jumblah_min);
            $d_min[$i] = $total_jumblah_min;
        };

        //nilai preferensi
        $preferensi = array();
        $total_preferensi = array();
        for ($i = 0; $i < sizeof($d_plus); $i++) {
            for ($j = 0; $j < sizeof($d_min); $j++) {
                $preferensi[] = $d_plus[$j] + $d_min[$j];
                $total_preferensi[$j] = $d_plus[$j] / $preferensi[$j];
            };
        };

        // dd($total_preferensi);

        return view('pages.admin.metode', [
            'Alternatif' => $Alternatif,
            'Alternatif1' => $Alternatif1,
            'Penentuan' => $Penentuan,
            'pembagi' => $pembagi,
            'normalisasi' => $normalisasi,
            'terbobot' => $terbobot,
            'max' => $max,
            'min' => $min,
            'd_plus' => $d_plus,
            'd_min' => $d_min,
            'total_preferensi' => $total_preferensi
        ]);
    }
}
