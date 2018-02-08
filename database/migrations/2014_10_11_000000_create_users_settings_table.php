<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('avatar')->default('unknown');
            $table->string('dashboard_theme')->default('light');
            $table->string('prefill_name')->nullable();
            $table->string('prefill_address')->nullable();
            $table->string('prefill_city')->nullable();
            $table->string('prefill_region')->nullable();
            $table->string('prefill_zip')->nullable();
            $table->string('prefill_country')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_settings');
    }
}
