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
        //
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->softDeletes();
        });

        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->softDeletes();
        });

        Schema::create('support_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->softDeletes();
        });

        Schema::create('user_support_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('support_group_id');
        });

        Schema::table('branches', function (Blueprint $table) {
            $table->fullText(['name']);
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->fullText(['name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->dropIndex('branches_name_fulltext');
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->dropIndex('departments_name_fulltext');
        });

        Schema::dropIfExists('branches');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('support_groups');
        Schema::dropIfExists('user_support_groups');
    }
};
