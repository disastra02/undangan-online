<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_musics', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 128);
            $table->text('thumbnail');
            $table->text('src');
            $table->text('link');
            $table->bigInteger('create_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('master_musics', function(Blueprint $table){
            $table->foreign('create_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_musics');
    }
}
