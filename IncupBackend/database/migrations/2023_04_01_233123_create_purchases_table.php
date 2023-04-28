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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->boolean('confirmed')->default("0");
            $table->boolean('type');
            // $table->double('prixSponsor');
            $table->foreignId('idea')->constrained('ideas') ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sponsor')->constrained('users') ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('purchases');
    }
};
