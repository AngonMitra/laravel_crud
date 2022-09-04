<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_models', function (Blueprint $table) {
            $table->increments("id");
            $table->string("fname");
            $table->string("lname");
            $table->string("nid");
            $table->string("address");
            $table->string("email");
            $table->string("phone");
            $table->integer("status"); 
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
        Schema::dropIfExists('employee_models');
    }
}
