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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->nullable()->comment('null:drafted, true:published');
            $table->string('title');
            $table->string('image')->nullable();
            $table->json('body')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->tinyInteger('position')->default(0);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
