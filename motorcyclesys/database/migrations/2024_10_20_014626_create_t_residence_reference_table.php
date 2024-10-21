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
        Schema::create('t_residence_reference', function (Blueprint $table) {
            $table->id();
            
            // Residence Information
            $table->enum('rr_house_type', ['Mansion', 'Concrete', 'Semi-Concrete', 'Bamboo'])->nullable();
            $table->enum('rr_house_ownership', ['Owned', 'Free Use', 'Rented'])->nullable();
            $table->string('rr_free_use_reason')->nullable();
            $table->string('rr_rented_mo_inst')->nullable(); 
            $table->string('rr_landlord_name')->nullable();
            $table->string('rr_address')->nullable();
            $table->enum('rr_lot_ownership', ['Owned', 'Free Use'])->nullable();
            $table->string('rr_lot_free_use_reason')->nullable();

            $table->string('rr_reference1_name')->nullable();
            $table->string('rr_reference1_address')->nullable();
            $table->string('rr_reference1_relation')->nullable();
            $table->string('rr_reference1_mobile')->nullable();

          

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_residence_reference');
    }
};
