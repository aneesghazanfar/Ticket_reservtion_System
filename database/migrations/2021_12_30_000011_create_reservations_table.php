<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('total_seats');

             // The trains table MUST exist and MUST have ‘id’ as Primary key
            $table->unsignedbiginteger('train_id');
                // This will create relationship at the DBMS level. 
                // So, a grey colour foreign key must appear in the students table
                // after performing this migration 
            $table->foreign('train_id')->references('id')->on('trains')->onDelete('cascade');


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
        Schema::dropIfExists('reservations');
    }
}
