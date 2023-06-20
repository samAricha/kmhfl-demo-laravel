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
        Schema::create('facility_infos', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('code');
                $table->string('abbreviation')->nullable();
                $table->string('type');
                $table->string('owner_category');
                $table->string('owner');
                $table->unsignedInteger('beds');
                $table->unsignedInteger('cots');
                $table->string('open_on_public_holidays');
                $table->string('open_on_weekends');
                $table->string('open_24_hours');
                $table->string('open_late_night');
                $table->string('county');
                $table->string('constituency');
                $table->string('ward');
                $table->string('nearest_town');
                $table->string('longitude')->nullable();
                $table->string('latitude')->nullable();
                $table->string('directions');
                $table->string('mobile');
                $table->string('landline');
                $table->string('fax');
                $table->string('email');
                $table->string('officer_in_charge_name')->nullable();
                $table->string('officer_in_charge_registration')->nullable();
                $table->string('officer_in_charge_title')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_infos');
    }
};
