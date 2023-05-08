<?php

namespace App\Http\Controllers;

use App\Models\MatakuliahModel;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.subject')
        ->with('data', MatakuliahModel::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create_subject')
        ->with('url_form', route('subject.store'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_matkul' => 'required|string|max:30',
            'sks' => 'required|integer|max:11',
            'jam' => 'required|integer|max:11',
            'semester' => 'required|string|max:25',
        ]);
        $return = MatakuliahModel::create($request->except(['_token']));
        return redirect()->route('subject.index')
        ->with('success', 'Data Berhasil diunggah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = MatakuliahModel::find($id);
        return view('mahasiswa.create_student')
        ->with('data', $subject)
        ->with('url_form', route('subject.update', $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_matkul' => 'required|string|max:30',
            'sks' => 'required|integer|max:11',
            'jam' => 'required|integer|max:11',
            'semester' => 'required|string|max:25',
        ]);
        $return = MatakuliahModel::where('id', '=', $id)->update($request->except(['_token']));
        return redirect()->route('subject.index')
        ->with('success', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MatakuliahModel::where('id', $id)->delete();
        return redirect()->route('subject.index')
        ->with('success', 'Data berhasil dihapus');
    }
}
