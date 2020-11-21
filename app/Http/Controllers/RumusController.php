<?php

namespace App\Http\Controllers;

use App\Models\Isi;
use App\Models\Rumus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RumusController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function singapore()
    {
        return view('singapore');
    }

    public function sydney()
    {
        return view('sydney');
    }

    public function hongkong()
    {
        return view('hongkong');
    }

    public function singaporeProses(Request $request)
    {
        $messages = [
            'required'  => 'Angka terakhir keluar harus di isi',
            'digits'  => 'Harus diisi 4 digit angka'
        ];

        $validator = Validator::make($request->all(), [
            'last_number' => 'required|digits:4',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/singapore')
                ->withErrors($validator)
                ->withInput();
        }

        $pushData = [];

        $last_number = request('last_number');
        $firstNumber = $last_number[0];
        $thirdNumber = $last_number[2];

        $dataAK = Isi::whereRumusId(1)->whereKode($firstNumber)->first();
        $dataKEPALA = Isi::whereRumusId(2)->whereKode($thirdNumber)->first();

        array_push($pushData, $dataAK->nomor);
        array_push($pushData, $dataKEPALA->nomor);

        $output = $pushData[0] . $pushData[1];

        return view('singapore_output', compact('output'));
    }

    public function sydneyProses(Request $request)
    {
        //
    }

    public function hk_proses(Request $request)
    {
        //
    }
}
