<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $pendaftaran = Pendaftaran::Create([
            'NoRM' => $request->NoRM,
            'TglReg' => $request->TglReg,
            'Kdpoli' => $request->Kdpoli,
            'Kddokter' => $request->Kddokter,
        ]);
        return response()->json([
            'data' => $pendaftaran
        ]);
    }

    public function index()
    {
        $pendaftaran = Pendaftaran::paginate();
        return response()->json([
            'data'=>$pendaftaran
        ]);
    }

    // public function update(Request $request, Pendaftaran $pendaftaran)
    // {
    //     $validator = Validator::make($request->all(),[
    //         'NoRM'  => 'required',
    //         'TglReg'  => 'required',
    //         'Kdpoli'  => 'required',
    //         'Kddokter'  => 'required'
    //     ]);
    // }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran ->delete();
        return response()->json([
            'mesage' => 'Pendaftaran Dihapus'
        ], 204);
    }
}
