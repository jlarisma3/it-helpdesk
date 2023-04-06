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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->string('color')->nullable();
            $table->string('type')->nullable();
            $table->float('order')->nullable();
        });

        Schema::table('statuses', function (Blueprint $table) {
            $table->index(['code', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('statuses', function (Blueprint $table) {
            $table->dropIndex('statuses_code_type_index');
        });

        Schema::dropIfExists('statuses');
    }
};
