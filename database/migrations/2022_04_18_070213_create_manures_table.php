<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('norm_nitrogen');
            $table->float('norm_phosphorus');
            $table->float('norm_potassium');

            $table->unsignedBigInteger('culture_id')->nullable();

            $table->string('district');
            $table->float('price');
            $table->string('description');
            $table->string('purpose');
            $table->timestamps();

            $table->softDeletes();

            $table->index('culture_id', 'manure_culture_idx');
            $table->foreign('culture_id', 'manure_culture_fk')->on('cultures')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manures');
    }
}
