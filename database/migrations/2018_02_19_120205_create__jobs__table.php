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
            $table->increments('id');
            $table->date('book_date');
            $table->time('time');
            $table->string('name');
            $table->string('barber');
            $table->boolean('confirmed')->default(0);
            $table->date('created_at')->useCurrent();
            $table->date('updated_at')->useCurrent();
           
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
