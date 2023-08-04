<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\TanamanRequest;

use App\Models\BeritaModel;
use App\Models\PerbaikanModel;
use App\Models\TanamanModel;

class DashboardController extends Controller
{

    public function dashboard(){
        // $profile = ProfileModel::all();
        $tanaman = TanamanModel::orderBy('id_tanaman','desc')->get();
        $perbaikan = PerbaikanModel::orderBy('id_perbaikan','desc')->get();
        $data = BeritaModel::orderBy('id','desc')->get();
        return view('dashboard', compact('data', 'tanaman', 'perbaikan'));
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
    public function storetanaman(TanamanRequest $request){
        $validator = $request->validated();
        $data = TanamanModel::create($validator);
        return redirect('/dashboard#tanaman');
    }
    public function storeperbaikan(Request $request){
        $data = PerbaikanModel::create([
            'saran_perbaikan' => $request->perbaikan
        ]);
        return redirect('/dashboard#perbaikan');
    }

     public function delete($id){
        $data = BeritaModel::destroy($id);
        return redirect('/dashboard#berita');
    }
    public function deletetanaman($id){
        $data = TanamanModel::where('id_tanaman', $id)->delete();
        return redirect('/dashboard#tanaman');
    }
    public function deleteperbaikan($id){
        $data = PerbaikanModel::destroy($id);
        return redirect('/dashboard#perbaikan');
    }

    public function updatetanaman(TanamanRequest $request, $id)
    {
        $validator = $request->validated();
        $data = TanamanModel::where('id_tanaman', $id)->update($validator);
        return redirect('/dashboard#tanaman');
    }

    public function updateperbaikan(Request $request)
    {
        $data = PerbaikanModel::where('id', $request->id);
        $data->update([
            'saran_perbaikan' => $request->tanaman,
        ]);
        return redirect('/dashboard#perbaikan');
    }

    public function updateberita(Request $request)
    {
        $data = BeritaModel::where('id', $request->id);
        $data->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('/dashboard#berita');
    }

    public function updateimage(Request $request, $id)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('image'), $imageName);
        $data = BeritaModel::where('id', $id);
        $data->update([
            'image' => $imageName
        ]);

       return redirect('/dashboard#berita');
    }
}
