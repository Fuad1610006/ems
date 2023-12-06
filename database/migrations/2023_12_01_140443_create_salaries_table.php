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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->unsignedBigInteger('department_id')->index();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->unsignedBigInteger('designation_id')->index();
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');
            $table->date('pay_date');
            $table->double('basic_salary');
            $table->decimal('house_rent');
            $table->decimal('medical_allowance');
            $table->decimal('travel_allowance');
            $table->decimal('dearness_allowance');
            $table->decimal('overtime_amount');
            $table->decimal('bonus');
            $table->decimal('tax');
            $table->decimal('provident_fund');
            $table->decimal('leave_deduction');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
