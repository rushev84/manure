<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuresImportStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manures_import_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->index('user_id', 'manures_import_statuses_users_idx');
            $table->foreign('user_id', 'manures_import_statuses_users_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manures_import_statuses');
    }
}
