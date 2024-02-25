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
        Schema::create('table_employe', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('emp_name',100); 
            $table->longtext('emp_location',);
            $table->string('emp_salary');
            $table->string('emp_type');
         
            $table->string('emp_workplace');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_employe');
    }
};
