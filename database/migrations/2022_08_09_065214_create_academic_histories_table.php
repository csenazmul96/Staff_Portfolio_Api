<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_histories', function (Blueprint $table) {
            $table->id();
            $table->string('institute_name');
            $table->string('degree_name');
            $table->string('department')->nullable();
            $table->string('location');
            $table->string('from_date');
            $table->string('to_date')->nullable();
            $table->boolean('continue')->default(0);
            $table->string('description')->nullable();
            $table->string('result')->nullable();
            $table->boolean('public_status')->default(1);
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
        Schema::dropIfExists('academic_histories');
    }
}
