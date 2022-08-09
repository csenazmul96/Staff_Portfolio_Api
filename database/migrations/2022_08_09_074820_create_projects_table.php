<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vendor')->nullable();
            $table->integer('slice');
            $table->string('error_log_url')->nullable();
            $table->string('logo')->nullable();
            $table->string('description', 512)->nullable();
            $table->boolean('authenticate')->default(1);
            $table->boolean('authenticate')->default(1);

            $table->string('domain')->nullable();
            $table->string('admin_domain')->nullable();
            $table->string('api_domain')->nullable();


            $table->string('git_url')->nullable();
            $table->string('api_git_url')->nullable();
            $table->string('admin_git_url')->nullable();

            $table->string('technology')->nullable();
            $table->string('api_technology')->nullable();
            $table->string('admin_technology')->nullable();

            $table->date('start_date');
            $table->date('api_start_date')->nullable();
            $table->date('admin_start_date')->nullable();

            $table->date('end_date')->nullable();
            $table->date('api_end_date')->nullable();
            $table->date('admin_end_date')->nullable();
            $table->boolean('complete')->default(0);
            
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
        Schema::dropIfExists('projects');
    }
}
