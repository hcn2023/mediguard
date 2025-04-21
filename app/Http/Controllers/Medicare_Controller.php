<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicationSchedule as Medic;

class Medicare_Controller extends Controller
{
    public function save_dosage_schedule(Request $req){
        $medic=new Medic([
            "medication_name"=>$req->medication_name,
            "dosage"=>$req->dosage,
            "schedule"=>$req->schedule
        ]);

        if($medic->save()){
            return json_encode(["status"=>"success", "message"=>"Schedule has been created successfully"]);
        }
    }
}
