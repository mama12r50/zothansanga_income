<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Forwarder;
class FormController extends Controller
{

 
    public function index(Request $req){
      
      $form = new form;

      $form->Application_Number="INC".time();
      $form->Note_Sheet_Number="NO".time();      
      $form->applicant_name=$req->applicant_name;
      $form->date_of_birth=$req->date_of_birth;
      $form->gender=$req->gender;
      $form->email=$req->email;
      $form->contact_number=$req->contact_number;
      $form->relationship=$req->relationship;
      $form->education=$req->education;
      $form->religion=$req->religion;
      $form->occupation=$req->occupation;
      $form->annual_income=$req->annual_income;
      $form->father_income=$req->father_income;
      $form->mother_income=$req->mother_income;
      $form->mother_occupation=$req->mother_occupation;
      $form->other_occupation=$req->other_occupation;
      $form->other_income=$req->other_income;
      $form->house_number=$req->house_number;
      $form->locality=$req->locality;
      $form->sub_locality=$req->sub_locality;
      $form->location=$req->location;
      $form->sub_dictrict=$req->sub_dictrict;
      $form->district=$req->district;
      $form->state=$req->state;
      $form->pincode=$req->pincode;
      $form->country=$req->country;
      $form->police_station=$req->police_station;
      $form->house_number1=$req->house_number1;
      $form->locality1=$req->locality1;
      $form->sub_locality1=$req->sub_locality1;
      $form->location1=$req->location1;
      $form->sub_dictrict1=$req->sub_dictrict1;
      $form->district1=$req->district1;
      $form->state1=$req->state1;
      $form->pincode1=$req->pincode1;
      $form->country1=$req->country1;
      $form->police_station1=$req->police_station1;
      $form->purpose=$req->purpose;
      $form->remark1=$req->remark1;
      $form->date1=$req->date1;
      $form->date2=$req->date2;
      $form->remark2=$req->remark2;
      $form->remark3=$req->remark3;
        
      $form->save();
    return redirect('/submitted');

    }
    
    
}
