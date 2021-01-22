<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_costs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('location_id')->index()->nullable();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('No Action')->onUpdate('No Action');
            $table->unsignedBigInteger('transport_type_id')->index()->nullable();
            $table->foreign('transport_type_id')->references('id')->on('transport_types')->onDelete('No Action')->onUpdate('No Action');
            $table->double('price')->default(0);
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
        Schema::dropIfExists('transport_costs');
    }
}
