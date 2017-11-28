<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDnsrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dnsrecords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('ttl')->unsigned()->default(120);
            $table->string('class')->default('IN');
            $table->string('type');
            $table->string('data');
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
        Schema::dropIfExists('dnsrecords');
    }
}
