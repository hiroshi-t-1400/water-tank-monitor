<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('monitor_data', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp')->nullable()->index();
            $table->float('data1')->nullable()->index();
            $table->float('data2')->nullable()->index();
            $table->float('data3')->nullable()->index();
            $table->float('data4')->nullable()->index();
            $table->float('average')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitor_data');
    }
};
