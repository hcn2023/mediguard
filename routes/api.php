<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


Route::post('/guardian/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    $user = DB::table('users')->where('email', $email)->first();

    if ($user && Hash::check($password, $user->password)) {
        return response()->json(['status' => 'success']);
    } else {
        return response()->json(['status' => 'failed', 'message' => 'Invalid credentials']);
    }
});

Route::post('/guardian/register', function (Request $request) {
    $name = $request->input('full_name');
    $email = $request->input('email');
    $password = bcrypt($request->input('password')); // USE bcrypt instead of Hash::make

    $user = DB::table('users')->insert([
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return response()->json(['status' => 'success']);
});




Route::post('/guardian/savedosage', function (Request $request) {
    $medication_name = $request->input('medication_name');
    $dosage = $request->input('dosage');
    $schedule = $request->input('schedule');

    DB::table('dosages')->insert([
        'medication_name' => $medication_name,
        'dosage' => $dosage,
        'schedule' => $schedule,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return response()->json(['status' => 'success']);
});






Route::post('/guardian/addpatient', function(Request $request) {
    $name = $request->input('name');
    $age = $request->input('age');

    DB::table('patients')->insert([
        'name' => $name,
        'age' => $age,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return response()->json(['status' => 'success']);
});


Route::post('/guardian/adddosage', function(Request $request) {
    $medication_name = $request->input('medication_name');
    $dosage = $request->input('dosage');
    $schedule = $request->input('schedule');

    DB::table('dosages')->insert([
        'medication_name' => $medication_name,
        'dosage' => $dosage,
        'schedule' => $schedule,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return response()->json(['status' => 'success']);
});

