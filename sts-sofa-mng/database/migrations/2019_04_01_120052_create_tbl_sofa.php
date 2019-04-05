<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSofa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //if (!Schema::hasTable('tbl_sofas')) {
         
            Schema::create('tbl_sofas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('masofa');
                $table->string('name');
                $table->double('gia');  // don vi 1.000vnd
                $table->double('khuyenmai');
                $table->integer('type');
                $table->text('files');
                $table->text('detail');

                $table->timestamps();

                // $table->engine = 'InnoDB';//	Specify the table storage engine (MySQL).
                // $table->charset = 'utf8';//	Specify a default character set for the table (MySQL).
                // $table->collation = 'utf8_unicode_ci';//	Specify a default collation for the table (MySQL).
            });
        //}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_sofas');
    }
}
