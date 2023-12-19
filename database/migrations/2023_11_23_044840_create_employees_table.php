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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->unique()->nullable();
            $table->string('name_en');
            $table->string('name_bn')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('contact_no_en')->unique();
            $table->string('contact_no_bn')->unique()->nullable();
            $table->string('password');
            $table->string('permanent_address')->nullable();
            $table->string('present_address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('joining_date')->nullable();
            $table->unsignedBigInteger('nid_no')->index();
            $table->enum('gender',['male','female','other'])->nullable();
            $table->string('blood_group');
            $table->decimal('basic',10,2)->nullable();
            $table->decimal('bonus',10,2)->nullable();
            $table->unsignedBigInteger('department_id')->index();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');

            $table->unsignedBigInteger('designation_id')->index();
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');

            $table->unsignedBigInteger('role_id')->index();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->integer('shift_id');
            
            // $table->unsignedBigInteger('user_id')->index();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
