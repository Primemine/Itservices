<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServircesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servirces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_name');
            $table->string('image');
            $table->longText('description');
            $table->string('view_point1');
            $table->string('view_point2');
            $table->string('view_point3');
            $table->string('view_point4');
            $table->string('view_point5');
            $table->string('view_point6');
            $table->string('slug');
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
        Schema::dropIfExists('servirces');
    }
}
