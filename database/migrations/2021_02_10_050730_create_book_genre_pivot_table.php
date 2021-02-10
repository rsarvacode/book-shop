<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookGenrePivotTable extends Migration
{
    public function up()
    {
        Schema::create('book_genre', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id', 'book_id_fk_3156540')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id', 'genre_id_fk_3156540')->references('id')->on('genres')->onDelete('cascade');
        });
    }
}