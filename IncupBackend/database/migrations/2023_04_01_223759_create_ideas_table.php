<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('vd')->nullable();
            $table->double('prixB', 8, 2)->nullable();
            $table->double('prixR', 8, 2)->nullable();
            $table->double('prixS', 8, 2)->nullable();
            $table->boolean('type')->default('0');
            $table->foreignId('categorie')->constrained('categories') ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user')->constrained('users') ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ideas');
    }
};
