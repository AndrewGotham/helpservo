<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('topic');
            $table->longText('content')->nullable();
            $table->string('author_name')->nullable();
            $table->string('author_email')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
