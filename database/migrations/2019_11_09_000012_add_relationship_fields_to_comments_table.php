<?php

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignIdFor(Ticket::class)->nullable();
            $table->foreignIdFor(User::class)->nullable();
        });
//        Schema::table('comments', function ($table) {
//            $table->foreign('ticket_id')->references('id')->on('tickets');
//        });
    }
};
