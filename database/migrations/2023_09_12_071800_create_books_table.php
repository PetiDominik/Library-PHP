<?php

use App\Models\Book;
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
            $table->id('book_id');
            $table->string('author', 32);
            $table->string('title', 150);
            $table->integer('pieces')->default(50);
            $table->timestamps();
        });

        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a bőlcsk köve', 'pieces'=> '50']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a titkok kamrája', 'pieces'=> '42']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és az azkabani fogoly', 'pieces'=> '72']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a tűz serlege', 'pieces'=> '64']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a főnix rendje', 'pieces'=> '31']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a félvér herceg', 'pieces'=> '5']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a halál ereklyéi', 'pieces'=> '45']);
        Book::create(["author" => "Kis Pista", "title" => "Apám kacsája", "pieces" => 200]);
        Book::create(["author" => "Nagy Ernő", "title" => "János utcai lányok", "pieces" => 20]);
        Book::create(["author" => "Vég Elek", "title" => "Vaskereső kisköbön", "pieces" => 10]);
        Book::create(["author" => "Kiss Klára", "title" => "Kaják"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
