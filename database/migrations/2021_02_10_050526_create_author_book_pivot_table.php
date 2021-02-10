<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorBookPivotTable extends Migration
{
    public function up()
    {
        Schema::create('author_book', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id', 'book_id_fk_3156539')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id', 'author_id_fk_3156539')->references('id')->on('authors')->onDelete('cascade');
        });
    }
}