<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategoris_id')->nullable();
            $table->string('judul');
            $table->text('sinopsis')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('image')->nullable();
            $table->string('slug');
            $table->string('genre');
            $table->integer('stock');
            $table->string('alamat');
            $table->string('penerbit');
            $table->string('pengarang');
            $table->string('tPenerbit');
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
        Schema::dropIfExists('bukus');
    }
};
