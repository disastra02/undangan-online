<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gifts', function (Blueprint $table) {
            $table->id();
            $table->string('atas_nama', 64);
            $table->string('bank', 64);
            $table->string('rekening', 64);
            $table->bigInteger('buku_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('gifts', function(Blueprint $table){
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
        Schema::dropIfExists('gifts');
    }
}
