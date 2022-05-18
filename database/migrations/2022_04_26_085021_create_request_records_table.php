<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("row");
            $table->morphs("requester");
            $table->morphs("requested");
            $table->unsignedBigInteger("operation_id");
            $table->string("request_description");

            $table->string("status")->default("open");

            $table->string("status_description");
            $table->timestamp("closed_at");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
