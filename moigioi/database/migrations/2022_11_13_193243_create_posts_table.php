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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('company_id')->constrained();
            $table->string(column:'job_title');
            $table->string(column:'district');
            $table->string(column:'city');
            $table->integer(column:'remote');
            $table->boolean(column:'is_partime');
            $table->integer(column:'min_salary');
            $table->integer(column:'max_salary');
            $table->integer(column:'currency_salary')->default(1);
            $table->text(column:'requirement')->nullable();
            $table->date(column:'start_date')->nullable();
            $table->integer(column:'number_applicants')->nullable();
            $table->integer(column:'status')->default(0);
            $table->string(column:'slug');
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
        Schema::dropIfExists('posts');
    }
};
