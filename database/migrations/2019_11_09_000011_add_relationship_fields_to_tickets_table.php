<?php

use App\Models\Category;
use App\Models\Priority;
use App\Models\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreignIdFor(Status::class);
            $table->foreignIdFor(Priority::class);
            $table->foreignIdFor(Category::class);
            $table->foreignId('assigned_to_user_id')->nullable()->constrained('users');
        });
    }
};
