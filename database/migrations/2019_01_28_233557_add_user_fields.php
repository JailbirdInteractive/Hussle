<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users',function($table){

            $table->string('account_type');
            $table->string('img_url');

        });
           
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users',function($table){

            $table->dropColumn('account_type');
            $table->dropColumn('img_url');
        
        });
           
    }
}
