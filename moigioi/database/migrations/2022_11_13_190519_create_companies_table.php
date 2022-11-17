<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name')->unique();
            $table->string(column:'address');
            $table->string(column:'address2');
            $table->string(column:'district');
            $table->string(column:'city');
            $table->string(column:'country');
            $table->string(column:'zipcode');
            $table->string(column:'phone');
            $table->string(column:'email');
            $table->string(column:'logo');
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
        Schema::dropIfExists('companies');
    }
};
