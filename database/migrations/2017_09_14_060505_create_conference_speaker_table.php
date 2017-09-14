<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenceSpeakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_speaker', function (Blueprint $table) {
            $table->integer('conference_id')->unsigned()->nullable();
            $table->foreign('conference_id')->references('id')
                ->on('conferences')->onDelete('cascade');

            $table->integer('speaker_id')->unsigned()->nullable();
            $table->foreign('speaker_id')->references('id')
                ->on('speakers')->onDelete('cascade');

            $table->primary(['conference_id', 'speaker_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference_speaker');
    }
}
