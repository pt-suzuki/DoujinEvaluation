<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('enquetes', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('pagecode');
    		$table->integer('userid');
    		$table->string('ipaddress');
    		$table->text('field');
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
        Schema::drop('enquetes');
    }
}
