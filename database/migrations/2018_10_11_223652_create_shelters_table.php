<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelters', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('user_id');

            $table->string('name');
            $table->string('address1');
            $table->string('address2')->nullable();

            $table->string('email')->nullable();
            $table->string('cellular')->nullable();
            $table->string('phone')->nullable();
            
            $table->text('description')->nullable();
            $table->text('opening_hours')->nullable();

            $table->string('enterpreneurs_no')->nullable();
            $table->string('iban')->nullable();
            $table->string('bic')->nullable();

            //$table->string('email');
            $table->string('soc_facebook')->nullable();
            $table->string('soc_twitter')->nullable();
            $table->string('soc_google_plus')->nullable();

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
        Schema::dropIfExists('shelters');
    }
}
