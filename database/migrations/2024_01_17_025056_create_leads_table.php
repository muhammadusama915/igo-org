<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Patient Info
            $table->string('status');
            $table->string('product');
            $table->integer('sip_id');
            $table->integer('phone');
            $table->integer('phone_2')->nullable();
            $table->string('f_name');
            $table->string('m_name')->nullable();
            $table->string('l_name');
            $table->date('dob');
            $table->string('gender');
            $table->text('address');
            $table->text('address_2');
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode');
            $table->string('medcare_id');
            $table->string('ssn');
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('waist')->nullable();
            $table->float('shoe_size')->nullable();
            $table->string('scale_of_pain')->nullable();
            $table->string('pain_area')->nullable();
            $table->integer('golucose_level')->nullable();
            $table->integer('pills')->nullable();
            $table->integer('injected_insulin')->nullable();
            $table->string('name_of_medicine')->nullable();
            $table->string('covid_kit')->nullable();
            $table->date('covid_kit_date')->nullable();
            $table->text('comment')->nullable();
            $table->integer('agent_id');
            //Doctor Info
            $table->integer('doc_phone')->nullable();
            $table->string('doc_f_name')->nullable();
            $table->string('doc_l_name')->nullable();
            $table->text('second_doc_details')->nullable();
            $table->text('doc_address')->nullable();
            $table->string('doc_state')->nullable(); 
            $table->string('doc_city')->nullable();
            $table->string('doc_zipcode')->nullable();
            $table->string('doc_npi')->nullable();
            $table->string('doc_fax')->nullable();
            $table->string('patient_last_visit_id')->nullable();          

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
        Schema::dropIfExists('leads');
    }
}
