<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Instansis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenisinstansi');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kodepos');
            $table->string('namapimpinan');
            $table->string('jabatan');
            $table->string('nope');
            $table->string('email');
            $table->string('web');
            $table->string('fax');
                $table->unsignedInteger('jenisinstansi_id');
            $table->foreign('jenisinstansi_id')->references('id')->on('jenisinstansis')->ondelete('cascade');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instansis');
    
    }
}
