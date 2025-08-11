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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('no'); // No
            $table->string('nama_site'); // Nama Site
            $table->string('core'); // Core
            $table->enum('status_penggunaan', ['active', 'inactive']); // Status Penggunaan
            $table->enum('status_core', ['OK', 'NOK']); // Status Core
            $table->integer('otdr_m')->nullable(); // OTDR (m)
            $table->string('source_site')->nullable(); // Source Site
            $table->string('destination_site')->nullable(); // Destination Site
            $table->text('keterangan')->nullable(); // Keterangan
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
