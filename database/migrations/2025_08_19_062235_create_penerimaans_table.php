<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penerimaans', function (Blueprint $table) {
            $table->id();
			$table->integer('qty');
			$table->date('exp_date');
			$table->date('in_date');
            $table->integer('harga_satuan');
            $table->string('nama_pbf', 255);
			$table->string('no_beli', 100);
			$table->string('sbbk_prov', 155)->nullable();
			$table->bigInteger('total_harga');
			$table->string('jenis_dana', 30);
			$table->string('kode_rek', 100);
			$table->string('kode_prog', 45)->nullable();
			$table->integer('kemas');
            $table->string('no_batch', 50)->nullable();
            $table->string('lokasi', 50)->nullable();
			$table->timestamps();
			$table->unsignedBigInteger('obat_id');

            $table->foreign('obat_id')->references('id')->on('obmhps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerimaans');
    }
};
