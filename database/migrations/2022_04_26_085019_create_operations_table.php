<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("row");
            $table->morphs("requester");
            $table->unsignedBigInteger("operation_id");
            $table->string("description");
            $table->timestamp("confirm_date");

            $table->string("status");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
