<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration{
    
    public function up(){
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('logo');
            $table->string('website');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(){
        Schema::dropIfExists('companies');
    }
}
