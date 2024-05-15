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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description') -> nullable();
            $table->string('image')->nullable();
            $table ->string('price',10,2);
            $table ->integer('view') ->default(0);
            $table ->integer('new') ->default(0);
            $table-> integer('sold') ->default(0);
            $table ->integer('quantity') ->default(0);
            $table ->unsignedBigInteger('category_id') ->nullable();
            $table -> foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
