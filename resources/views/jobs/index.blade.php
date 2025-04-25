<x-layout>

    <div class="conatiner w-75 mx-auto mt-5">
        <h1 class="text-center pb-5">Jobs For You</h1>
        
        @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Job title</th>
                    <th scope="col">Job description"</th>   
                    <th scope="col">Location</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Job Type</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Skillset</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->id }}</td>
                    <td>{{ $job->jobtitle }}</td>
                    <td>{{ $job->jobdescription }}</td>
                    <td>{{ $job->joblocation }}</td>
                    <td>{{ $job->experience }}</td>
                    <td>{{ $job->jobtype }}</td>
                    <td>{{ $job->salary }}</td>
                    <td>{{ $job->companyname }}</td>
                    <td>
                        @php $skills = explode(',',$job->skillset); @endphp
                        @foreach ($skills as $skill)
                        
                                {{\Helper::jobSkillSetById($skill)['skill']['name']}} @if($loop->last) . @else , @endif  
                                
                        @endforeach
                       
                    </td>

                    <td>
                        @if(\Helper::isUserJobApplied($job->id, auth()->user()->id))
                            <button class="btn btn-success" disabled>Applied</button>
                        
                        @else
                        <form method="POST" action="{{ route( 'jobs.jobApply' , [ 'id' => $job->id ] ) }} ">
                            @csrf
                            
                        <button type="submit" class="btn btn-success">Apply</button>   

                        </form>
                        
                        @endif
                        
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>