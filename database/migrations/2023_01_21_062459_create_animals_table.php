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
        Schema::create('animals', function (Blueprint $table) {

            $table->id();

            $table->string('name')->unique()->required();
            $table->string('nickname')->nullable();

            $table->float('weight')->required();
            $table->float('height')->required();

            $table->integer('type')->required();
            $table->integer('gender')->required();
            $table->integer('friendliness')->required();

            $table->string('color')->nullable();
        
            $table->date('date_of_birth')->required();
            
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
        Schema::dropIfExists('animals');
    }
};
