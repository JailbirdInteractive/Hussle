<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jobtitle');
            $table->string('jobtype');
            $table->string('jobcat');
            $table->string('jobdesc');
            $table->string('jobtags')->nullable();
            $table->double('jobpaymin');
            $table->double('jobpaymax');
            $table->string('joblocation');
            $table->double('joblat')->nullable();
            $table->double('joblng')->nullable();
            $table->string('jobimg')->nullable();
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
        Schema::dropIfExists('_jobs');
    }
}
