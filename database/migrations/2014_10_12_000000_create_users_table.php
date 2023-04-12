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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('objectguid')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('departamento_id')->unsigned()->nullable();
            $table->bigInteger('other_departament')->nullable();
            $table->bigInteger('rule_id')->unsigned()->nullable();
            $table->bigInteger('status_id')->unsigned()->default(1);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('core_status');
            // $table->foreign('rule_id')->references('id')->on('user_rules');
            // $table->foreign('departamento_id')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForign('status_id');
            $table->dropIfExists('users');
        });
    }
};
