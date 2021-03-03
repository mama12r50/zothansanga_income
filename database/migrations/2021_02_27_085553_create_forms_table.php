<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('forwarder_status')->nullable();
            $table->string('circle_officer_status')->nullable(); 
            $table->string('field_officer_status')->nullable();             
            $table->string('Application_Number')->nullable();
            $table->string('Note_Sheet_Number')->nullable();
            $table->string('applicant_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('relationship')->nullable();
            $table->string('education')->nullable();
            $table->string('religion')->nullable();
            $table->string('occupation')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('father_income')->nullable();
            $table->string('mother_income')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('other_occupation')->nullable();
            $table->string('other_income')->nullable();
            $table->string('house_number')->nullable();
            $table->string('locality')->nullable();
            $table->string('sub_locality')->nullable();
            $table->string('location')->nullable();
            $table->string('sub_dictrict')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('country')->nullable();
            $table->string('police_station')->nullable();
            $table->string('house_number1')->nullable();
            $table->string('locality1')->nullable();
            $table->string('sub_locality1')->nullable();
            $table->string('location1')->nullable();
            $table->string('sub_dictrict1')->nullable();
            $table->string('district1')->nullable();
            $table->string('state1')->nullable();
            $table->string('pincode1')->nullable();
            $table->string('country1')->nullable();
            $table->string('police_station1')->nullable();
            $table->string('purpose')->nullable();
            $table->string('remark1')->nullable();
            $table->date('date1')->nullable();
            $table->date('date2')->nullable();
            $table->string('Note_Sheet')->nullable();
            $table->string('remark2')->nullable();
            $table->string('remark3')->nullable();
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
        Schema::dropIfExists('forms');
    }
}
