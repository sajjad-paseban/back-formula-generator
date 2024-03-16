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
        Schema::create('variables_detail', function (Blueprint $table) {
            $table->id();

            $table->foreignId('variable_id')
            ->references('id')
            ->on('formula_variables')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->string('key', 255)
            ->nullable();

            $table->string('type',255)
            ->nullable();

            $table->string('value',255)
            ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variables_detail');
    }
};
