<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("nama_awal")->nullable();
            $table->string("nama_belakang")->nullable();
            $table->string("tmpt_lahir")->nullable();
            $table->date("tgl_lahir")->nullable();
            $table->string("email")->nullable();
            $table->string("nomor_hp")->nullable();
            $table->text("alamat")->nullable();
            $table->string("status")->nullable();
            $table->string("transaction_id")->nullable();
            $table->string("order_id")->nullable();
            $table->integer("qty")->nullable();
            $table->bigInteger("gross_amount")->nullable();
            $table->string("payment_type")->nullable();
            $table->string("payment_code")->nullable();
            $table->string("pdf_url")->nullable();
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
        Schema::dropIfExists('orders');
    }
}
