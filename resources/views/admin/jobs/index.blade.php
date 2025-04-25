<x-layout>

    <div class="conatiner w-75 mx-auto mt-5">
        <h1 class="text-center">Jobs</h1>
        <div class="text-end mb-3">
            <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary">Create Job <i class="bi bi-plus-circle"></i></a>
        </div>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Job title</th>
                    <th scope="col">Job description</th>
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
                        <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-warning">Edit <i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete <i class="bi bi-trash3"></i></button>
                        </form>

                        <a class="btn btn-info" href="{{ route('admin.applicant', ['id' => $job ]) }}" > Applicant </a>
                       
                    </td>
                    

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>