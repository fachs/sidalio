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
        Schema::create('pemusnahans', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->date('exp');
            $table->string('no_batch', 100);
            $table->string('lokasi', 100);
            $table->string('status', 50);
			$table->unsignedBigInteger('obat_id');
			$table->unsignedBigInteger('moned_id');
            $table->timestamps();

			$table->foreign('obat_id')->references('id')->on('obmhps')->onDelete('cascade');
            $table->foreign('moned_id')->references('id')->on('moneds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemusnahans');
    }
};
