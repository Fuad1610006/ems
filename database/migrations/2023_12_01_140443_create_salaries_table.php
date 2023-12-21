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
            $table->year('s_year');
            $table->integer('s_month');
            $table->double('basic_salary',10,2);
            $table->decimal('house_rent',10,2);
            $table->decimal('medical_allowance',10,2);
            $table->decimal('travel_allowance',10,2);
            $table->decimal('dearness_allowance',10,2);
            $table->decimal('overtime_amount',10,2);
            $table->decimal('bonus',10,2);
            $table->decimal('tax',10,2);
            $table->decimal('provident_fund',10,2);
            $table->decimal('leave_deduction',10,2);
            $table->decimal('salary',10,2);
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
