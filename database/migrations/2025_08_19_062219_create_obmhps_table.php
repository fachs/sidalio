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
        Schema::create('obmhps', function (Blueprint $table) {
            $table->id();
			$table->string('nama', 255);
			$table->string('satuan', 45);
			$table->integer('isi_kemasan');
			// $table->integer('qty_min');
			// $table->string('lokasi', 100);
			$table->string('kemasan', 45);
            $table->string('golongan', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obmhps');
    }
};
