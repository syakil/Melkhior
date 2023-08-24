<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategori_perhitungans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->float('batas_bawah')->nullable();
            $table->float('batas_atas')->nullable();
            $table->timestamps();
        });
        DB::table('kategori_perhitungans')->insert([
            ['nama' => 'Sangat Kurus', 'batas_bawah' => null, 'batas_atas' => 17],
            ['nama' => 'Kurus', 'batas_bawah' => 17, 'batas_atas' => 18.5],
            ['nama' => 'Normal', 'batas_bawah' => 18.5, 'batas_atas' => 25],
            ['nama' => 'Gemuk', 'batas_bawah' => 25, 'batas_atas' => 27],
            ['nama' => 'Obesitas', 'batas_bawah' => 27, 'batas_atas' => null],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_perhitungans');
    }
};
