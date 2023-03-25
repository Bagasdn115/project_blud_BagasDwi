<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function store(Request $request)
    {
        $pasien = Pasien::Create([
            'NoRM' => $request->NoRM,
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'TglLahir' => $request->TglLahir,
            'NIK' => $request->NIK,
        ]);
        return response()->json([
            'data' => $pasien
        ]);
    }

    public function index(){
        $pasien = Pasien::paginate();
        return response()->json([
            'data'=>$pasien
        ]);
    }

    public function destroy( Pasien $pasien)
    {
        $pasien ->delete();
        return response()->json([
            'mesage' => 'Pasien Telah Dihapus'
        ], 204);
    }
}
