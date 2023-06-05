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
        Schema::create('joblist', function (Blueprint $table) {
            $table->id('job_id');
            $table->string('job_title',100);
            $table->string('job_type',100);
            $table->string('job_description',1000);
            $table->string('job_location',100);
            $table->string('job_salary',100);
            $table->string('job_application_deadline',100);
            $table->string('job_contact',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joblist');
    }
};
