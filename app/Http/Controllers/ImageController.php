<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageModel;
use App\Models\user;
use DB;
class ImageController extends Controller
{
    public function store(Request $request)
    {
        $imagePath = $request->input('imagePath');
        $lahan = $request->input('lahan');
        $dataran = $request->input('dataran');
        $email = $request->input('email');
        $user = DB::table('users')->where('email' , $email)->first();
        $tanamanCollection = DB::table('tanaman')
        ->where('dataran', $dataran)
        ->where('lahan', $lahan)
        ->select('saran_tanaman')
        ->get();

        $tanamanCollection = DB::table('tanaman')
        ->where('dataran', $dataran)
        ->where('lahan', $lahan)
        ->pluck('saran_tanaman');

    $saranTanamanString = implode(', ', $tanamanCollection->toArray());

    // $saranTanamanString sekarang berisi satu string yang menggabungkan semua nilai 'saran_tanaman'


        try {
            $data = DB::table('image')->insert([
                'imagepath' => $imagePath,
                'id_user' => $user->id,
                'lahan' => $lahan,
                'dataran' => $dataran,
                'tanaman' => $saranTanamanString
            ]);

            if ($data) {
                return response()->json(['message' => 'Path gambar berhasil disimpan di database'], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal menyimpan data: ' . $e->getMessage()], 500);
        }


    }

    public function index($id) {
        $data = DB::table('users')->where('email', $id)->first();

        $user = DB::table('image')
            ->where('id_user', $data->id)
            ->orderBy('id', 'desc')
            ->get();

        return response()->json(['user' => $user]);
    }

}
