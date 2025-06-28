<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        return Job::all();
    }

    public function store(Request $request) {
        return Job::create($request->all());
    }

    public function update(Request $request, $id) {
        $job = Job::find($id);
        $job->update($request->all());
        return $job;
    }

    public function destroy($id) {
        Job::find($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
