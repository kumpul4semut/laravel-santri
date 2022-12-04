<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantriModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->unsignedBigInteger('id_santri', 11)->index();
            $table->string('nm_santri', 100)->nullable();
            $table->string('tmp_lahir', 100)->nullable();
            $table->date('tgl_lahir');
            $table->text('alamat')->nullable();
            $table->string('no_hp', 20)->nullable();
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
        Schema::dropIfExists('santri');
    }
}
