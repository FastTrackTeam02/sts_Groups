<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //if (!Schema::hasTable('tbl_customers')) {
         
            Schema::create('tbl_customers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('tel');
                $table->string('name')->nullable($value = true);
                $table->string('email')->nullable($value = true);
                $table->string('address')->nullable($value = true);
                $table->string('note')->nullable($value = true);

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
