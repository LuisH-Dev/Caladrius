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
        Schema::table('atores', function (Blueprint $table) {
            $table->bigInteger('nacionalidade_id')->unsigned()->nullable();
            $table->foreign('nacionalidade_id')->references('id')->on('nacionalidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('atores', function (Blueprint $table) {
            //
        });
    }
};
