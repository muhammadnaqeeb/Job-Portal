<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/addjob.css') }}">


</head>
<body>
    
    <div class="mainContainer">
    <h1>Add job</h1>
    <form action="{{url('/')}}/jobAddedSuccessfully" method="post">
        <!-- this is security check -->
        @csrf
        <label for="job_title">Job Title</label>
        <input placeholder="Add Job Title" required type="text" Name="jobTitle" id="jobTitle" />
    
        <label for="job_location">Job Location</label>
        <input placeholder="Add Job Location" required type="text" Name="jobLocation" id="jobLocation" />

        <label for="job_type">Job Type</label>
        <input placeholder="Add Job type i.e. Part time or Full time" required type="text" Name="jobType" id="jobType" />

        <label for="job_description">Job Description</label>
        <input placeholder="Add Job Description" required type="text" Name="jobDescription" id="jobDescription" />

        <label for="job_salary">Job Salary</label>
        <input placeholder="Add Job Salary in $" required type="text" Name="jobSalary" id="jobSalary" />

        <label for="job_application_deadline">Deadline</label>
        <input placeholder="Deadline Time" required type="text" Name="jobApplicationDeadline" id="jobApplicationDeadline" />

        <label for="job_salary">Job Contact</label>
        <input placeholder="Add Job Contact" required type="text" Name="jobContact" id="jobContact" />
    
        <button class="btn btn-primary py-3 px-5" id="submit" >Submit</button>
    </form>
    </div>
</body>
</html>