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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name');
            $table->string(column:'avatar')->nullable();
            $table->string(column:'email');
            $table->string(column:'password');
            $table->string(column:'phone')->nullable();
            $table->string(column:'link')->nullable();
            $table->integer(column:'role')->default(1);
            $table->text(column:'bio')->nullable();
            $table->string(column:'position')->nullable();
            $table->boolean(column:'gender')->default(false);
            $table->string(column:'city');
            $table->foreignId(column:'company_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
