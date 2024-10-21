<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectQualityController;

use App\Models\Project;
use App\Models\ProjectAllocation;
use App\Models\ProjectMember;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/remove/project', function (Request $request) {
    $id = $request->id;
    Project::where('id', $id)->delete();
});

Route::post('/projects/quality/store', function(Request $request){
    $quality = new ProjectQualityController();
    $quality->store($request);
});

Route::post('/update/task', function (Request $request) {
    $id = $request->id;
    $type = $request->type;
    Project::where('id', $id)->update(['status' => $type]);
});
