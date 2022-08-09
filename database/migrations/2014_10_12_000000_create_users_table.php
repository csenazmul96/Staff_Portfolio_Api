<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('designation')->nullable();
            $table->unsignedBigInteger('department')->nullable();
            $table->string('gender');
            $table->string('office_id')->nullable();
            $table->date('dob')->nullable();
            $table->date('joining_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('job_continue')->default(1);
            $table->boolean('status')->default(0);
            $table->string('phone_number')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('current_address')->nullable();
            $table->string('nid')->nullable();
            $table->string('passport')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('banner')->nullable();
            $table->integer('casual_leave')->nullable();
            $table->integer('annual_leave')->nullable();
            $table->integer('medical_leave')->nullable();
            $table->integer('other_leave')->nullable();
            $table->integer('maternity_leave')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
