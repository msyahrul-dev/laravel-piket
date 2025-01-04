<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('laporans')) {
            Schema::create('laporans', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('hari');
                $table->string('tanggal');
                $table->json('before_piket')->nullable();
                $table->json('after_piket')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
