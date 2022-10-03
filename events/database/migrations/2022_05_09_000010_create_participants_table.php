<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('profile_image')->nullable();
            $table->string('phone')->nullable();
            $table->string('token')->nullable();
            $table->string('status')->nullable();
            $table->string('company_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
