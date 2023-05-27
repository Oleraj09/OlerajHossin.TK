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
        Schema::create('set_infos', function (Blueprint $table) {
            $table->id();
            $table->text('logo')->nullable();
            $table->text('image')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('adress');
            $table->string('type');
            $table->string('status');
            $table->string('ssct');
            $table->string('sscv');
            $table->string('ssci');
            $table->string('hsct');
            $table->string('hscv');
            $table->string('hsci');
            $table->string('bsct');
            $table->string('bscv');
            $table->string('bsci');
            $table->string('copyright');
            $table->string('fb');
            $table->string('tw');
            $table->string('ggl');
            $table->string('ins');
            $table->string('ln');
            $table->string('git');
            $table->string('html');
            $table->string('css');
            $table->string('js');
            $table->string('jq');
            $table->string('php');
            $table->string('react');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_infos');
    }
};
