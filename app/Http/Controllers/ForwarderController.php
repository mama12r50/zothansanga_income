<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Forwarder;
use App\Models\Form;


class ForwarderController extends Controller
{
    // fetch data with DB class
    // public function index()
    // {
    //     return DB::select("select * from forms");
    // }

     // fetch data with model(we can use DB class or Model to fetch data)


    

    public function forwarder_check (request $request, $id)
    {
        $checks=Form::find($id);
        if($request->has('forward'))
        {
            $checks->forwarder_status='Forwarded to CO';
            $checks->save();
            return redirect('/forwarded');
        }
        elseif
        ($request->has('reject'))
        {
            $checks->forwarder_status='reject';
            $checks->save();
            return redirect('/frejected');
        }
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function circle_officer_check (request $request, $id)
    {
        $checks=Form::find($id);

        if($request->has('issue'))
        {
            $checks->circle_officer_status='ISSUED';
            $checks->save();
            return redirect('/issued');
        }

        elseif
        ($request->has('reject'))
        {
            $checks->circle_officer_status='reject';
            $checks->save();
            return redirect('/corejected');
        }
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function field_officer_check (request $request, $id)
    {
        $checks=Form::find($id);
        if($request->has('forward'))
        {
            $checks->field_officer_status='Issued Successfully';
            $checks->save();
            return redirect('/fo_issued');
        }

        elseif
        ($request->has('reject'))
        {
            $checks->field_officer_status='reject';
            $checks->save();
            return redirect('/forejected');
        }
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Submitted Application List for Forwarder done from CSC
    public function forwarder_function ()
    {
        $forwarder=Form::all();
         return view('/forwarder')->with('forwarder', $forwarder);
    }

    //Form details for Forwarder view
    function submitted_function ($id)
    {
        $submitteds=Form::findOrFail($id);
         return view('submitted', ['submitteds'=> $submitteds]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Forwarded Application List for Circle Officer done by Forwarder
    public function circleofficer_function()
    {
        $circleofficer=DB::select('select * from forms where forwarder_status=?', ['Forwarded to CO']);
        return view('circleofficer')->with('circleofficer', $circleofficer);
    }

    //Form details for Circle Officer view
    function forwarded_application ($id)
    {
        $forwardeds=Form::findOrFail($id);
        return view('forwarded', ['forwardeds'=> $forwardeds]);
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Issued Application List for Field Officer done by Circle Officer
    public function fieldofficer_function()
    {
        $fieldofficer=DB::select('select * from forms where circle_officer_status=?', ['ISSUED']);
        return view('fieldofficer')->with('fieldofficer', $fieldofficer);
    }

    //Form details for Field Officer view
    function issued_application ($id)
    {
        $issueds=Form::findOrFail($id);
        return view('issued', ['issueds'=> $issueds]);
    }

    public function acknowledgement($id)
    {
        $acknowledgements=Form::find($id);
         return view('/acknowledgement')->with('acknowledgements', $acknowledgements);
    }
    public function search(){
        $search_text = $_GET['search'];
        $applicant_name = Form::where('applicant_name','LIKE', '%'.$search_text.'%')->get();

        return view ('search',['applicant_name'=>$applicant_name]);
    }

}

