<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoraditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('woradit', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('date')->nullable();
            $table->string('country')->nullable();
            $table-> text('total')->nullable();
            $table->float ('active')->nullable();
            $table->integer('death')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('woradit');
    }
}
