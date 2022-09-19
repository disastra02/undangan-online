<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ['silver', 'gold', 'platinum']);
            $table->text('bukti_pembayaran');
            $table->enum('metode_pembayaran', ['transfer', 'shopee']);
            $table->enum('status_transaksi', ['success', 'pandding']);
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('thema_id')->unsigned();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('transactions', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('thema_id')->references('id')->on('master_themas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
