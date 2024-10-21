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
        Schema::create('t_requirements', function (Blueprint $table) {
            $table->id();
            $table->string('req_proof_of_billing')->nullable();
            $table->string('req_status')->nullable();
            $table->string('req_capacity')->nullable();
            $table->string('req_capital')->nullable();
            $table->string('req_condition')->nullable();
            $table->string('req_id_type')->nullable();
            $table->string('req_id_number')->nullable();
            $table->date('req_id_date_issued')->nullable();
            $table->date('req_id_expiration_date')->nullable();
            $table->string('req_name_of_brgy_capt')->nullable();
            $table->string('req_brgy_capt_contact')->nullable();
            $table->string('req_feedback_comments')->nullable();
            $table->string('req_approved')->nullable();
            $table->text('req_reasons')->nullable();
            $table->timestamps();
      });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_requirements');
    }
};
