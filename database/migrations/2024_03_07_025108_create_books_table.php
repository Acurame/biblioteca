<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('code',10)->unique();
            $table->string('title');
            $table->integer('edition')->nullable();
            $table->date('publicationDate');
            $table->tinyInteger('state')->default('1');
            $table->unsignedBigInteger('author');
            $table->unsignedBigInteger('editorial');
            $table->unsignedBigInteger('categorie');
            $table->timestamps();

            $table->foreign('author')->references('id')->on('authors');
            $table->foreign('editorial')->references('id')->on('editorials');
            $table->foreign('categorie')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
