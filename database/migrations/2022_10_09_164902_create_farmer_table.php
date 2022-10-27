<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone_number');
            $table->string('lga');
            $table->string('volume_sold');
            $table->string('amount_due');
            $table->string('price_per_kg');
            $table->integer('bank_id');
            $table->string('account_number');
            $table->string('account_name');
            $table->string('application_id');
            $table->enum('status',['pending','approved','rejected'])->default('pending');
            $table->integer('authorized_by_id')->default('0');
            $table->integer('approved_by_id')->default(0);
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
        Schema::dropIfExists('farmer');
    }
}
