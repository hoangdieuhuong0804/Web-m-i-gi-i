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
        Schema::create('object_languge', function (Blueprint $table) {
            $table->unsignedBigInteger(column:'object_id');
            $table->foreignId(column:'language_id')->constrained();
            $table->primary(columns:['object_id','language_id']);
            $table->integer('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('object_languge');
    }
};
