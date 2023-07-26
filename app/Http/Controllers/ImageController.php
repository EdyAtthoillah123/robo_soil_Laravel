<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageModel;
use DB;
class ImageController extends Controller
{
    public function store(Request $request)
    {
        $imagePath = $request->input('imagePath');
        $data = DB::table('image')->insert(['imagepath' => $imagePath]);
        if($data){
            return response()->json(['message' => 'Path gambar berhasil disimpan di database'], 200);
        }
    }

    public function index(){
        $user = DB::table('image')
        ->orderBy('id', 'desc')->get();
        return response()->json($user);
    }
}
