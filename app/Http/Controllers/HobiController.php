<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index()
    {
        return view('main.hobi', [
            'data' => HobiModel::all()
        ]);
    }

    public function create()
    {
        return view('task_js7.create_hobby')->with('data_form', url('/hobby'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hobi' => 'required|string|max:30|unique:hobi,hobi'
        ]);
        $data = HobiModel::create($request->except(['_token']));
        return redirect('/hobby')->with('Success', 'Data Berhasil diunggah');
    }

    public function edit($id)
    {
        $hobi = HobiModel::find($id);
        return view('task_js7.create_hobby')
        ->with('data', $hobi)
        ->with('data_form', url('/hobby/'.$id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hobi' => 'required|string|max:30|unique:hobi,hobi'
        ]);
        $data = HobiModel::where('id','=',$id)->update($request->except(['_token', '_method']));
        return redirect('/hobby')->with('Success', 'Data Berhasil diunggah');
    }

    public function destroy($id)
    {
        HobiModel::where('id','=',$id)->delete();
        return redirect('/hobby')
        ->with('success', 'Data Berhasil dihapus');
    }
}
