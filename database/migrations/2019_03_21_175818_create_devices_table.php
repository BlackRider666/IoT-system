<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('serial');
            $table->bigInteger('type_device_id')->unsigned()->nullable();
            $table->float('lat',8,6);
            $table->float('lng',8,6);
            $table->timestamps();
        });
        Schema::table('devices', function (Blueprint $table) {
            $table->foreign('type_device_id')->references('id')->on('type_devices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
        Schema::table('devices', function (Blueprint $table) {
            $table->dropForeign('devices_type_device_id_foreign');
        });
    }
}
