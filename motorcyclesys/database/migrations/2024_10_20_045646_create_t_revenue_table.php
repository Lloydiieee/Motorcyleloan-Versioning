<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('t_revenue', function (Blueprint $table) {
            $table->id();
            $table->string('rev_employer_name');
            $table->text('rev_employer_address');
            $table->string('rev_cellphone_no');
            $table->string('rev_tel_no');
            $table->string('rev_position');
            $table->string('rev_status_of_employment');
            $table->string('rev_length_of_employment_years');
            $table->string('rev_length_of_employment_months');
            $table->string('rev_sss_no');
            $table->string('rev_basic_monthly_salary');
            $table->string('rev_other_compensation');
            $table->string('rev_occupation_or_profession');
            $table->string('rev_nature_of_business');
            $table->string('rev_length_of_business_years');
            $table->string('rev_length_of_business_months');
            $table->string('rev_income');
            $table->string('rev_other_source_of_income');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_revenue');
    }
};
