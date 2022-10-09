<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClipreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clipreviews', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('clip_id');
            $table->unsignedInteger('clip_reviewer_id');
            $table->string('title', 50);
            $table->string('comment', 200);
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
        Schema::dropIfExists('clipreviews');
    }
}
