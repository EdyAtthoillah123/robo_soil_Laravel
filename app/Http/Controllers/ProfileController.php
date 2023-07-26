<?php

namespace App\Http\Controllers;
// use App\Models\ProfileModel;
use App\Models\BeritaModel;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProfileController extends Controller
{
    public function index(){
        // $profile = ProfileModel::all();
        // $data = EducationModel::all();
        // dd($profile);
        return view('index');
    }

    public function dashboard(){
        // $profile = ProfileModel::all();
        $data = BeritaModel::all();
        return view('dashboard', compact('data'));
    }

    public function login(){

        return view('login');
    }

    public function auth(Request $request){
        if($request->username == 'admin' && $request->password == 'admin'){
            $session = [
             'id' => '1',
            ];
            session()->put($session);
            return redirect('/dashboard');
        }
    }

    public function store(Request $request){
        request()->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('image'), $imageName);
                $data = BeritaModel::create([
                    'image' => $imageName,
                    'title'=>$request->title,
                    'description' => $request->description
                ]);
       return redirect('/dashboard#berita');

    }


    // public function update(Request $request, $id){
    //     $data = EducationModel::where('id_edu',$id);
    //     $data->update([
    //         'sekolah' => $request->sekolah,
    //         'pendidikan' => $request->pendidikan,
    //         'tahun' => $request->tahun,
    //         'deskripsi' => $request->deskripsi,
    //     ]);
    //     return redirect('/dashboard#education');
    // }

    // public function delete(Request $request,$id){
    //     $data = EducationModel::where('id_edu', $id);
    //     $data->delete();
    //     return redirect('/dashboard#education');

    // }

    // public function updateprofil(Request $request)
    // {
    //     $id = session('id');
    //     $data = ProfileModel::where('id', $id);
    //     $data->update([
    //         'nama' => $request->nama,
    //         'ttl'=> $request->ttl,
    //         'alamat' => $request->alamat,
    //         'Agama' => $request->Agama,
    //         'Kewarganegaraan' => $request->Kewarganegaraan,
    //         'no_hp'=> $request->no_hp,
    //         'email'=> $request->email,
    //         'deskripsi'=> $request->deskripsi,
    //     ]);
    //     return redirect('/dashboard');
    // }

    // public function updateimage(Request $request)
    // {
    //     request()->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     $imageName = time().'.'.request()->image->getClientOriginalExtension();
    //     request()->image->move(public_path('images'), $imageName);
    //     $id = session('id');
    //     $data = ProfileModel::where('id', $id);
    //     $data->update([
    //         'image' => $imageName
    //     ]);

    //    return redirect('/dashboard');
    // }

    // public function updatebackground(Request $request)
    // {
    //     request()->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     $imageName = time().'.'.request()->image->getClientOriginalExtension();
    //     request()->image->move(public_path('background'), $imageName);
    //     $id = session('id');
    //     $data = ProfileModel::where('id', $id);
    //     $data->update([
    //         'background' => $imageName
    //     ]);

    //    return redirect('/dashboard');
    // }
}

