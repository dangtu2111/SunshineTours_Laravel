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
        // Migration for roles table
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Migration for users table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('status')->default('active');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->timestamps();
            $table->string('avatar')->nullable();
            $table->date('birthday')->nullable(); 
            $table->boolean('deleted')->default(false);
        });

        // Migration for tokens table
        Schema::create('tokens', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('token')->primary();
            $table->timestamp('created_at')->nullable();
        });

        // Migration for categories table
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Migration for tours table
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('title');
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 10, 2)->nullable();
            $table->string('thumbnail');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->boolean('deleted')->default(false);
        });

        // Migration for images table
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->string('thumbnail');
            $table->timestamps();
        });

        // Migration for feedbacks table
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone_number');
            $table->string('subject_name');
            $table->text('note')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });

        // Migration for orders table
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->text('note')->nullable();
            $table->date('order_date');
            $table->integer('status')->default(0);
            $table->decimal('total_money', 10, 2);
            $table->timestamps();
        });

        // Migration for classify table
        Schema::create('classifies', function (Blueprint $table) {
            $table->id();
            $table->string('classname');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });

        // Migration for order_details table
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->decimal('price', 10, 2);
            $table->integer('num');
            $table->decimal('total_money', 10, 2);
            $table->timestamps();
        });
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
        Schema::create('category_posts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->timestamps();
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('img')->nullable();
            $table->text('description')->nullable();
            $table->text('content');
            $table->foreignId('category_id')->constrained('category_posts')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('classifies');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('feedbacks');
        Schema::dropIfExists('images');
        Schema::dropIfExists('tours');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('tokens');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('category_posts');
        Schema::dropIfExists('posts');
    }
};
