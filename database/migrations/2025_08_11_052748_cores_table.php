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
        Schema::create('cores', function (Blueprint $table) {
            $table->id('core_id');
            $table->unsignedBigInteger('tube_id');
            $table->foreign('tube_id')->references('tube_id')->on('tubes')->onDelete('cascade');
            $table->integer('nomor_core');
            $table->string('nama_site')->nullable();
            $table->string('core')->nullable();
            $table->string('status_penggunaan')->nullable();
            $table->string('status_core')->nullable();
            $table->float('otdr_m')->nullable();
            $table->string('source_site')->nullable();
            $table->string('destination_site')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cores');
    }
};
