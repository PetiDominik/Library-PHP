<?php

use App\Models\book;
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

        book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a bőlcsk köve', 'pieces'=> '50']);
        book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a titkok kamrája', 'pieces'=> '42']);
        book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és az azkabani fogoly', 'pieces'=> '72']);
        book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a tűz serlege', 'pieces'=> '64']);
        book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a főnix rendje', 'pieces'=> '31']);
        book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a félvér herceg', 'pieces'=> '5']);
        book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a halál ereklyéi', 'pieces'=> '45']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
