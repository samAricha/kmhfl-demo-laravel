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
        Schema::create('services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('category_name', 50);
            $table->string('created')->nullable();
            $table->string('updated')->nullable();
            $table->boolean('deleted')->default(false);
            $table->boolean('active')->default(true);
            $table->string('search', 255)->nullable();
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->string('abbreviation', 10);
            $table->integer('code')->nullable();
            $table->boolean('has_options')->default(false);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->uuid('category');
            $table->uuid('group');
            $table->string('keph_level', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
