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
        Schema::create('t_spouse', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'spouse_first_name');
            $table->string(column: 'spouse_middle_name');
            $table->string(column: 'spouse_last_name');
            $table->string(column: 'spouse_alias');
            $table->string(column: 'spouse_birthdate');
            $table->string(column: 'spouse_birthplace');
            $table->string(column: 'spouse_civil_status');
            $table->string(column: 'spouse_gender');
            $table->string(column: 'spouse_phone_number');
            $table->string(column: 'spouse_telephone_number');
            $table->string(column: 'spouse_license');
            $table->string(column: 'spouse_present_add_region');
            $table->string(column: 'spouse_present_add_province');
            $table->string(column: 'spouse_present_add_municipal');
            $table->string(column: 'spouse_present_add_barangay');
            $table->string(column: 'spouse_present_add_house_number');
            $table->string(column: 'spouse_present_add_length_service');
            $table->string(column: 'spouse_present_add_zip_code');
            $table->string(column: 'spouse_previous_add_region');
            $table->string(column: 'spouse_previous_add_province');
            $table->string(column: 'spouse_previous_add_municipal');
            $table->string(column: 'spouse_previous_add_barangay');
            $table->string(column: 'spouse_previous_add_house_number');
            $table->string(column: 'spouse_previous_add_length_service');
            $table->string(column: 'spouse_previous_add_zip_code');
            $table->string(column: 'spouse_provincial_add_region');
            $table->string(column: 'spouse_provincial_add_province');
            $table->string(column: 'spouse_provincial_add_municipal');
            $table->string(column: 'spouse_provincial_add_barangay');
            $table->string(column: 'spouse_provincial_add_house_number');
            $table->string(column: 'spouse_provincial_add_length_service');
            $table->string(column: 'spouse_provincial_add_zip_code');
            $table->string(column: 'spouse_relative_name');
            $table->string(column: 'spouse_relative_address');
            $table->string(column: 'spouse_relative_relationship');
            $table->string(column: 'spouse_relative_phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_spouse');
    }
};