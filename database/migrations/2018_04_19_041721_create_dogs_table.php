<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->text('race')->nullable();
            $table->text('bio')->nullable();
      			$table->string('gender')->nullable(); 
      			$table->integer('age')->nullable()->unsigned();
            $table->boolean('dead')->default(0);
      			$table->string('country');
            $table->string('owner_name')->nullable();
            $table->string('owner_email')->nullable();
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
        Schema::dropIfExists('dogs');
    }
}
