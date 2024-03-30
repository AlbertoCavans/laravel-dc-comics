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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->string('author_first_name', 30)->nullable();
            $table->string('author_last_name', 30)->nullable();
            $table->string('cover')->nullable();
            $table->text('description')->nullable();
            $table->string('origin_country', 100)->nullable();
            $table->date('publication_date')->nullable();
            $table->integer('sold_copies')->nullable();
            $table->enum('publication_status', ['ongoing','finished','paused','uncompleted'])->nullable();
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
        Schema::dropIfExists('comics');
    }
};
