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
            $table->string('name');
            $table->string('student_id')->unique();
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
            $table->string('project');
            $table->longText('chapter1_url');
            $table->longText('chapter2_url');
            $table->longText('chapter3_url');
            $table->longText('chapter4_url');
            $table->longText('chapter5_url');
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
