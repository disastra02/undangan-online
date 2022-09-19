<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_invitations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal_pernikahan');
            $table->string('nama_pria', 64);
            $table->string('ayah_pria', 64);
            $table->string('ibu_pria', 64);
            $table->string('nama_wanita', 64);
            $table->string('ayah_wanita', 64);
            $table->string('ibu_wanita', 64);
            $table->text('alamat');
            $table->text('point_maps');
            $table->text('cerita_pernikahan');
            $table->text('kata_mutiara');
            $table->text('video');
            $table->bigInteger('music_id')->unsigned();
            $table->bigInteger('transaction_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('book_invitations', function(Blueprint $table){
            $table->foreign('music_id')->references('id')->on('master_musics');
            $table->foreign('transaction_id')->references('id')->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_invitations');
    }
}
