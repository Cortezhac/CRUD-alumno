<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsgMateriaxgradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msg_materiaxgrados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mxg_id_grd')->constrained('grd_grados');
            $table->foreignId('mxg_id_mat')->constrained('mat_materias');
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
        Schema::dropIfExists('msg_materiaxgrados');
    }
}
