<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function store(Request $request)
    {
        $poli = Poli::Create([
            'Kdpoli' => $request -> Kdpoli,
            'NamaPoli' => $request -> NamaPoli,
        ]);
        return response()->json([
            'data'=> $poli
        ]);
    }

    public function index()
    {
        $poli = poli::paginate();
        return response()->json([
            'data'=>$poli
        ]);
    }

    public function destroy(Poli $poli)
    {
        $poli ->delete();
        return response()->json([
            'mesage' => 'Poli Dihapus'
        ], 204);
    }
}
