<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpOption\None;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->time('time')->nullable();
            $table->date('date');
            $table->string('venue');
            $table->string('duration')->nullable();
            $table->string('token')->nullable();
           
            $table->text('banner')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
