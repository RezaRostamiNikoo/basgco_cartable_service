<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('request_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("request_id");
            $table->morphs("current_actor");
            $table->morphs("next_actor");
            $table->string("act")->default("reject");
            $table->string("description");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('request_records');
    }
}
