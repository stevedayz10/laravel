<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('proyectos', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('nombreproyecto');
			$table->string('fuentefondos');
			$table->string('montoplanificado');
			$table->string('montopatrocinado');
			$table->string('montofondospropios');
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
        //
    }
}
