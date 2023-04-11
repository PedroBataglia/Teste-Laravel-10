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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('objectguid')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('departamento_id')->nullable();
            $table->integer('other_departament')->nullable();
            $table->integer('rule_id')->nullable();
            $table->integer('status_id')->default(1);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

           // $table->foreign('status_id')->references('id')->on('statuses');
           // $table->foreign('rule_id')->references('id')->on('user_rules');
           // $table->foreign('departamento_id')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
