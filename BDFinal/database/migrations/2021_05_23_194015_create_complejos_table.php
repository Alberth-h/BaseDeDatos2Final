<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplejosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complejos', function (Blueprint $table) {
            $table->id();

            $table->string('localizacion', 45);
            $table->string('jefe', 45);
            $table->float('area');
            
            $table->unsignedBigInteger('sede_id')->nullable();

            $table->foreign('sede_id')
                ->references('id')
                ->on('sedes')
                ->onDelete('set null');

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
        Schema::dropIfExists('complejos');
    }
}
