<?php

namespace App\Http\Controllers;

use App\Models\DataMataKuliahModel;
use Illuminate\Http\Request;

class DataMataKuliahController extends Controller
{
    public function index()
    {
        return view('main.data-mata-kuliah', [
            'data' => DataMataKuliahModel::all()
        ]);
    }

    public function create()
    {
        return view('task_js7.create_college')->with('data_form', url('/college'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50|unique:data_mata_kuliah,nama',
            'dosen' => 'required|string|max:50',
            'hari' => 'required|string|max:10'
        ]);
        $data = DataMataKuliahModel::create($request->except(['_token']));
        return redirect('/college')->with('success', 'Data Berhasil diunggah');
    }

    public function edit($id)
    {
        $subject = DataMataKuliahModel::find($id);
        return view('task_js7.create_college')
        ->with('data', $subject)
        ->with('data_form', url('/college/'.$id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50|unique:data_mata_kuliah,nama,'.$id,
            'dosen' => 'required|string|max:50 ',
            'hari' => 'required|string|max:10'
        ]);
        $data = DataMataKuliahModel::where('id','=',$id)->update($request->except(['_token', '_method']));
        return redirect('/college')->with('success', 'Data Berhasil diunggah');
    }

    public function destroy($id)
    {
        DataMataKuliahModel::where('id','=',$id)->delete();
        return redirect('/college')
        ->with('success', 'Data Berhasil dihapus');
    }
}
