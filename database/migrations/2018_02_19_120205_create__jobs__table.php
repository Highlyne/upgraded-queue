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
        Schema::create('Jobs', function (Blueprint $table) {
            $table->autoincrement('id');
            $table->date('book_date');
            $table->time('time');
            $table->varchar('name');
            $table->varchar('barber');
            $table->boolean('confirmed')->default(0);
           
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Jobs');
    }
}
