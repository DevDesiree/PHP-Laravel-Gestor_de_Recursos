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
            $table->unsignedBigInteger('id_extraresources');
            
            $table->foreign('url_extraresources')->references('url')->on('extraresources');
           /*  $table->foreign('id_extraresources')->references('id')->on('extraresources'); */
            $table->unsignedBigInteger('id_resourcestype');
            $table->foreign('id_resourcestype')->references('id')->on('resourcestype');
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