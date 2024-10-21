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
        Schema::create('t_dependents', function (Blueprint $table) {
            $table->id();
            $table->string('dep_name');
            $table->integer('dep_age');
            $table->string('dep_school_status')->nullable();
            $table->string('dep_school_name')->nullable();
            $table->string('dep_address')->nullable();
            $table->string('dep_matriculation')->nullable();
            $table->string('dep_occupation')->nullable();
            $table->string('dep_company')->nullable();
            $table->decimal('dep_income', 10, 2)->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_dependents');
    }
};
