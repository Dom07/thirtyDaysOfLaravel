<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

// Index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Create
Route::get('/jobs/create', function(){
    return view('jobs.create');
});

// Edit
Route::get('/jobs/{id}/edit', function($id){
    return view('jobs.edit', ['job' => Job::find($id)]);
});

// update
Route::patch('/jobs/{id}', function ($id) {   
    // validate
     request()->validate([
        'title' => ['required','min:3'],
        'salary' => ['required']
    ]);
    // authorize (On hold...)
    
    // update the job
    $job = Job::findOrFail($id);

    $job->update([
        "title" => request('title'),
        "salary" => request('salary')
    ]);
    
    return redirect('/jobs/'.$job->id);
});

// delete
Route::delete('/jobs/{id}', function ($id) {   
    // authorize
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
});

// Show
Route::get('/jobs/{id}', function ($id) {   
    return view('jobs.show', [ 'job' => Job::find($id)]);
});

// store
Route::post('/jobs', function(){
    
    request()->validate([
        'title' => ['required','min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary'=> request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});