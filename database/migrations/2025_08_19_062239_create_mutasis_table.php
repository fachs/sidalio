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
        Schema::create('mutasis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis', 100);
            $table->string('dbmb', 100);
			$table->integer('jumlah');
            $table->string('keterangan', 255)->nullable();
            $table->bigInteger('total_harga');
			$table->timestamps();
			$table->unsignedBigInteger('obat_id');
			$table->unsignedBigInteger('faskes_id');
			$table->unsignedBigInteger('penerimaan_id');
            
			$table->foreign('obat_id')->references('id')->on('obmhps')->onDelete('cascade');
            $table->foreign('faskes_id')->references('id')->on('faskes')->onDelete('cascade');
            $table->foreign('penerimaan_id')->references('id')->on('penerimaans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutasis');
    }
};
