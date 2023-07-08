<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $user = DB::table('berita')
        ->orderBy('id', 'desc')->get();
        return response()->json($user);
    }
}
