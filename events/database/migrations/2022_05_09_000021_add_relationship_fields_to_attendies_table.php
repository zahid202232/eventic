<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAttendiesTable extends Migration
{
    public function up()
    {
        Schema::table('attendies', function (Blueprint $table) {
            $table->unsignedBigInteger('participant_id')->nullable();
            $table->foreign('participant_id', 'participant_fk_6565127')->references('id')->on('participants');
        });
    }
}
