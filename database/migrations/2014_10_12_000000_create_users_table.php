<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriptomoedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criptomoedas', function (Blueprint $table) {
            $table->id('assed_id');
            $table->decimal('price');
            $table->decimal('volume_24');
            $table->decimal('change_1h');
            $table->decimal('change_24h');
            $table->decimal('change_7d');
            $table->string('updated_at');
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
        Schema::dropIfExists('criptomoedas');
    }
}
