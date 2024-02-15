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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->unsignedBigInteger('id_themes');
            $table->foreign('id_themes')->references('id')->on('themes');
            $table->unsignedBigInteger('id_extra_resources');
            $table->foreign('id_extra_resources')->references('id')->on('extra_resources');
            $table->unsignedBigInteger('id_resources_type');
            $table->foreign('id_resources_type')->references('id')->on('resources_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
