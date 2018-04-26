<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DivisiMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisi', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama_divisi');
            $table->text('keterangan_divisi');
            $table->text('jobdesk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisi');
    }
}
