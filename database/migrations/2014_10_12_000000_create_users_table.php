<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        
        User::create(['name' => 'Gazsi', 'email' => 'gazsi@gmail.com', 
        'email_verified_at'=> '2020-02-20',
        'password'=>'Aa123456@']);
        User::create(['name' => 'Pista', 'email' => 'Pista@gmail.com', 
        'email_verified_at'=> '2020-08-20',
        'password'=>'Aa123456@']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
