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
        Schema::create('user_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('rule_id');
            $table->integer('status_id')->default(1);
            $table->softDeletes();
            $table->timestamps();

            //$table->foreing('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_rules');
    }
};
