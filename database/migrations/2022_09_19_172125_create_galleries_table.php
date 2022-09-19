<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->text('gambar');
            $table->enum('type', [1,2,3]);
            $table->bigInteger('buku_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('galleries', function(Blueprint $table){
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
        Schema::dropIfExists('galleries');
    }
}
