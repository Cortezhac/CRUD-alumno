<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('alm_codigo', 100);
            $table->string('alm_nombre',300);
            $table->integer('alm_edad');
            $table->string('alm_sexo',100);
            $table->foreignId('alm_id_grd')->constrained('grd_grados');
            $table->string('alm_observacion');
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
        Schema::dropIfExists('alm_alumnos');
    }
}
