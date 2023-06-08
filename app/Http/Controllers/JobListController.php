<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\joblistModel;

class JobListController extends Controller
{
    public function JobListt(){
        return view('jobList');
    }

    public function DisplayJobList(){ 
        $joblistmodel = joblistModel::all();
        return view('jobList')->with('jobListData', $joblistmodel);
    }

    public function AddJobb(){
        return view('AddJob');
    }

    public function jobAddedSuccessfullyy(Request $req){
        $job = new joblistModel();
        $job->job_title = $req['jobTitle'];
        $job->job_location = $req['jobLocation'];
        $job->job_type = $req['jobType'];;
        $job->job_description = $req['jobDescription'];
        $job->job_salary = $req['jobSalary'];
        $job->job_application_deadline = $req['jobApplicationDeadline'];
        $job->job_contact = $req['jobContact'];
        $job->save();
        return view("success");
    }
}
