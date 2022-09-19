<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_books', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 64);
            $table->enum('type', [1,2,3]);
            $table->string('pesan', 64);
            $table->bigInteger('buku_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('guest_books', function(Blueprint $table){
            $table->foreign('buku_id')->references('id')->on('book_invitations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_books');
    }
}
