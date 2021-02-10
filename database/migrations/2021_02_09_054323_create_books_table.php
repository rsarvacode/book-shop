<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('slug')->nullable();
            $table->float('discount_percent', 5, 2);
            $table->boolean('need_2_review')->default(0)->nullable();
            $table->boolean('published')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}