<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->unsignedBigInteger('lecturer_id')->nullable();
            $table->foreign('supervisor_id')->on('supervisors')->references('id')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('lecturer_id')->on('lecturers')->references('id')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->string('password');
            $table->string('project')->nullable();
            $table->longText('chapter1_url')->nullable();
            $table->longText('chapter2_url')->nullable();
            $table->longText('chapter3_url')->nullable();
            $table->longText('chapter4_url')->nullable();
            $table->longText('chapter5_url')->nullable();
            $table->string('f2')->nullable()->default("Unmarked");
            $table->string('f3')->nullable()->default("Unmarked");
            $table->string('f4')->nullable()->default("Unmarked");
            $table->string('f5')->nullable()->default("Unmarked");
            $table->string('f13')->nullable()->default("Unmarked");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
