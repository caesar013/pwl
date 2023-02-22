<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "<h1>Selamat Datang di Halaman Contact Us</h1>";
        echo "<br>";
        echo "<ul>";
        echo "<li><a href='/contact-us/create'>Create</a></li>";
        echo "<li><a href='/contact-us/store'>Store</a></li>";
        echo "<li><a href='/contact-us/show'>Show</a></li>";
        echo "<li><a href='/contact-us/update'>Update</a></li>";
        echo "<li><a href='/contact-us/destroy'>Destroy</a></li>";
        echo "</ul>"; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Buat Halaman Contact us";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "Simpan Halaman Contact us";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Halaman Contact us dengan ID = $id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Edit Halaman Contact us dengan ID = $id";
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
        return "Perbarui Halaman Contact us dengan ID = $id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Hapus Halaman Contact us dengan ID = $id";
    }
}
