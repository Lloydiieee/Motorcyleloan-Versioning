<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMunicipalityBudgetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_municipality_budget', function (Blueprint $table) {
            $table->id('mb_id'); // Primary key
            $table->string('mb_year'); // Budget year (e.g., 2024-2025)
            $table->decimal('mb_amount', 15, 2); // Budget amount with precision for large amounts
            $table->json('mb_supporting_documents')->nullable(); // Storing multiple files as JSON
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_municipality_budget');
    }
}
