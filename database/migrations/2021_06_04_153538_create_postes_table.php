<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postes', function (Blueprint $table) {
            $table->id();
            $table->text('titre')->nullable();
            $table->unsignedBigInteger('id_utilisateur');
            $table->unsignedBigInteger('id_imm')->nullable();
            $table->integer('nb_personnes')->nullable();
            $table->text('location');

            $table->longText('description');
           
            $table->string('slug');

           
            $table->softDeletes();

           

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
        Schema::dropIfExists('postes');
    }
}




