<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('contact_no')->nullable();
            $table->string('address')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('role_id');
            $table->foreignId('status_id');
            $table->foreignId('branch_id');
            $table->foreignId('department_id');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $blueprint) {
            $blueprint->fullText(['first_name', 'last_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $blueprint) {
            $blueprint->dropIndex('users_first_name_last_name_fulltext');
        });

        Schema::dropIfExists('users');
    }
};
