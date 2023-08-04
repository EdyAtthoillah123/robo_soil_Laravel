<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class BeritaController extends Controller
{
    public function index(){
        $user = DB::table('berita')
        ->orderBy('id', 'desc')->get();
        return response()->json($user);
    }
}
