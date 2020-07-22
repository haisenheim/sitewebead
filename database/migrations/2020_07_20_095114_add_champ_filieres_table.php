<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChampFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('filieres', function (Blueprint $table) {
            $table->string('name',40);
            $table->string('description',50);
            $table->string('image_uri')->default(0);
            $table->boolean('actif')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fileres', function (Blueprint $table) {
            //
        });
    }
}
