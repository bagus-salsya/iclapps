<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinterSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winter_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')
                  ->nullable();
            $table->boolean('status')
                  ->default(1)
                  ->comment('on/off')
                  ->nullable();
            $table->date('start')
                  ->nullable();
            $table->date('end')
                  ->nullable();
                  
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
        Schema::dropIfExists('winter_schools');
    }
}
