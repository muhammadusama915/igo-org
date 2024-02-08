<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQA1STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('q_a1_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lead_id');
            $table->integer('agent_id');
            $table->string('calling_from');
            $table->string('recording');
            $table->float('agent_way_of_talk');
            $table->float('customer_way_of_talk');
            $table->text('remarks');
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
        Schema::dropIfExists('q_a1_s');
    }
}
