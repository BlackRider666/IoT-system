<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNormalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type_device_id')->unsigned()->nullable();
            $table->float('min_val',6,2);
            $table->float('max_val',6,2);
            $table->timestamps();
        });
        Schema::table('normals', function (Blueprint $table) {
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
        Schema::dropIfExists('normals');
        Schema::table('normals', function (Blueprint $table) {
            $table->dropForeign('normals_type_device_id_foreign');
        });
    }
}
