<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('product_id')->default(1);
            $table->integer('user_id')->default(1);
            $table->string('IP',20)->nullable();
            $table->string('subject',100)->nullable();
            $table->string('comment')->nullable();
            $table->string('status',5)->nullable()->default('New');
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
        Schema::dropIfExists('reviews');
    }
}
