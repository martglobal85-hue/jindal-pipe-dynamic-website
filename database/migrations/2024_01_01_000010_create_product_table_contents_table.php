<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_table_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                ->constrained('products')
                ->cascadeOnDelete();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('text');
            $table->boolean('status')->default(true);
            $table->index('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_table_contents');
    }
};
