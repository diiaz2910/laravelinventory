<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');

            $table->unsignedBigInteger('hike_id');
            $table->foreign('hike_id')->references('id')->on('hikes');
            
            $table->string('name');
            $table->string('description')->nullable();
            $table->boolean('active')->default(true);
            $table->string('tour_guide')->nullable();
            $table->string('transportation')->nullable();
            $table->string('duration')->nullable();
            $table->string('distance')->nullable();
            $table->string('difficulty')->nullable();
            $table->integer('altitude')->nullable();
            $table->integer('temperature')->nullable();
            $table->string('equipment')->nullable();
            $table->string('food')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('cost')->nullable();
            $table->string('language')->nullable();
            $table->text('history')->nullable();


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
        Schema::dropIfExists('modes');
    }
};
