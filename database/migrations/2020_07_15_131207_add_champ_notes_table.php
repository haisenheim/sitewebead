<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChampNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {
            //
            $table->string('name',40);
            $table->integer('type_id')->default(0);
            $table->integer('filiere_id')->default(0);
            $table->integer('semestre_id')->default(0);
            $table->integer('annee_id')->default(0);
            $table->boolean('actif')->default(0);
            $table->string('path')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notes', function (Blueprint $table) {
            //
        });
    }
}
