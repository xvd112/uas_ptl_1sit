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
        Schema::create('daftardokters', function (Blueprint $table) {
            $table->id();
            $table->text('kd_dok');
            $table->string('nama');
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('department');
            $table->string('specialty');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftardokters');
    }
};
