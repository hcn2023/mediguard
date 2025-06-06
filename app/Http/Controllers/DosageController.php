<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosageController extends Controller
{
    // Show the form to add a dosage
    public function create()
    {
        return view('adddosage');
    }

    // Handle the form submission
    public function store(Request $request)
    {
        $request->validate([
            'medication_name' => 'required|string|max:255',
            'dosage' => 'required|numeric',
            'schedule' => 'required|string|max:255',
        ]);

        DB::table('dosages')->insert([
            'medication_name' => $request->medication_name,
            'dosage' => $request->dosage,
            'schedule' => $request->schedule,
            'created_at' => now(),
        ]);

        return redirect('/dosage')->with('success', 'Dosage saved successfully.');
    }

    // Show the list of dosages
    public function index()
    {
        $dosages = DB::table('dosages')->get();
        return view('dosage', compact('dosages'));
    }
}
