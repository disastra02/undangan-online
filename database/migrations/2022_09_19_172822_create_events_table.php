<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('acara_kegiatan', 128);
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->string('gedung', 64);
            $table->text('alamat');
            $table->bigInteger('buku_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('events', function(Blueprint $table){
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
        Schema::dropIfExists('events');
    }
}
