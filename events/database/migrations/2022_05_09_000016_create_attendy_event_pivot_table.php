<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendyEventPivotTable extends Migration
{
    public function up()
    {
        Schema::create('attendy_event', function (Blueprint $table) {
            $table->unsignedBigInteger('attendy_id');
            $table->foreign('attendy_id', 'attendy_id_fk_6565128')->references('id')->on('attendies')->onDelete('cascade');
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id', 'event_id_fk_6565128')->references('id')->on('events')->onDelete('cascade');
        });
    }
}
