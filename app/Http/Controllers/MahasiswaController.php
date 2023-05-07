<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::with('kelas')->get();
        $paginate = MahasiswaModel::orderBy('id', 'asc')->paginate(3);
        return view('mahasiswa.student', ['mahasiswa' => $mhs, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = KelasModel::all(); // mendapatkan data dari tabel kelas
        return view('mahasiswa.create_student', ['kelas' => $kelas, 'url_form' => route('student.store')]);
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
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'id' => 'required'
        ]);

        $mhs = new MahasiswaModel();
        $mhs->nim = $request->get('nim');
        $mhs->nama = $request->get('nama');
        $mhs->jk = $request->get('jk');
        $mhs->tempat_lahir = $request->get('tempat_lahir');
        $mhs->tanggal_lahir = $request->get('tanggal_lahir');
        $mhs->hp = $request->get('hp');
        $mhs->save();

        $kelas = new KelasModel();
        $kelas->id = $request->get('id');


        $mhs->kelas()->associate($kelas);
        $mhs->save();
        // jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('student.index')->with('success', 'Data mahasiswa Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mhs = MahasiswaModel::with('kelas')->where('id', $id)->first();
        return view('mahasiswa.detail', ['mhs' => $mhs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = KelasModel::all();
        return view('mahasiswa.create_student')
        ->with('mahasiswa', $mhs)
        ->with('kelas', $kelas)
        ->with('url_form', url('/student/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'id' => 'required|exists:kelas,id'
        ]);

        $mhs = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $mhs->nim = $request->get('nim');
        $mhs->nama = $request->get('nama');
        $mhs->jk = $request->get('jk');
        $mhs->tempat_lahir = $request->get('tempat_lahir');
        $mhs->tanggal_lahir = $request->get('tanggal_lahir');
        $mhs->alamat = $request->get('alamat');
        $mhs->hp = $request->get('hp');
        $mhs->save();

        $kelas = new KelasModel();
        $kelas->id = $request->get('id');

        $mhs->kelas()->associate($kelas);
        $mhs->save();
        // jika berhasil update, kita kembalikan pada halaman student
        return redirect()->route('student.index')
        ->with('success', "Data Mahasiswa berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id','=',$id)->delete();
        return redirect()->route('student.index')
        ->with('Success', 'Data Mahasiswa Berhasil dihapus');
    }
}
