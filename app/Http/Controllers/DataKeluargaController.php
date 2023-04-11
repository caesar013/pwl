<?php

namespace App\Http\Controllers;

use App\Models\DataKeluargaModel;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    public function index()
    {
        return view('main.data-keluarga', [
            'data' => DataKeluargaModel::all()
        ]);
    }

    public function create()
    {
        return view('task_js7.create_family')->with('data_form', url('/family'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50|unique:data_keluarga,nama',
            'jenis_kelamin' => 'required|string|max:10',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|max:15|string',
            'pekerjaan' => 'required|string|max:20',
            'status' => 'required|string|max:20'
        ]);

        $data = DataKeluargaModel::create($request->except(['_token']));
        return redirect('/family')->with('success', 'Data berhasil diunggah');
    }

    public function edit($id)
    {
        $data = DataKeluargaModel::find($id);
        return view('task_js7.create_family')
        ->with('data', $data)
        ->with('data_form', url('/family/'.$id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50|unique:data_keluarga,nama,'.$id,
            'jenis_kelamin' => 'required|string|max:10',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|max:15|string',
            'pekerjaan' => 'required|string|max:20',
            'status' => 'required|string|max:20'
        ]);
        $data = DataKeluargaModel::where('id','=',$id)->update($request->except(['_token', '_method']));
        return redirect('/family')->with('success', 'Data berhasil diunggah');
    }

    public function destroy($id)
    {
        DataKeluargaModel::where('id','=',$id)->delete();
        return redirect('/family')
        ->with('success', 'Data Berhasil dihapus');
    }
}
