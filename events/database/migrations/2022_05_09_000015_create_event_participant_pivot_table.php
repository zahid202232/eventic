<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventParticipantPivotTable extends Migration
{
    public function up()
    {
        Schema::create('event_participant', function (Blueprint $table) {
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id', 'event_id_fk_6564897')->references('id')->on('events')->onDelete('cascade');
            $table->unsignedBigInteger('participant_id');
            $table->foreign('participant_id', 'participant_id_fk_6564897')->references('id')->on('participants')->onDelete('cascade');
        });
    }
}
