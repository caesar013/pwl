<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            // $table->dropColumn('kelas_id'); // menghapus kolom kelas pada tabel mahasiswa
            // $table->unsignedBigInteger('kelas_id')->nullable(); // menambahkan kolom baru yang nantinya akan kita relasikan dengan tabel kelas
            $table->foreign('kelas_id')->references('id')->on('kelas'); // menambahkan relasi dengan kelas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->string('kelas_id');
            $table->dropColumn(['kelas_id']);
        });
    }
};
