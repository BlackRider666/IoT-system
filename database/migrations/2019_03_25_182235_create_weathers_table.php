<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weathers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('device_id')->unsigned()->nullable();
            $table->bigInteger('type_device')->unsigned()->nullable();
            $table->float('dev_data',6,2);
            $table->timestamps();
        });
        Schema::table('weathers', function (Blueprint $table) {
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
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
        Schema::dropIfExists('weathers');
        Schema::table('weathers', function (Blueprint $table) {
            $table->dropForeign('weathers_device_id_foreign');
            $table->dropForeign('type_device_id_foreign');
        });
    }
}
