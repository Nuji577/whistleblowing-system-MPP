<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomortelepon')->nullable();
            $table->string('email');
            $table->string('jenispelanggaran');
            $table->text('indikasi');
            $table->string('tempat');
            $table->date('waktu');
            $table->string('terlapor');
            $table->renameColumn('saran', 'kronologi');
            $table->string('attachment')->nullable();
            $table->timestamps();
        });

        Schema::table('pengaduans', function (Blueprint $table) {
            $table->string('attachment')->nullable();
        });
        
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
