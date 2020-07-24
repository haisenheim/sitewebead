<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChampFormulairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formulaires', function (Blueprint $table) {
            $table->string('name',40);
            $table->integer('phone');
            $table->string('email',50);
            $table->string('adress',50);
            $table->string('commentaire');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formulaires', function (Blueprint $table) {
            //
        });
    }
}
