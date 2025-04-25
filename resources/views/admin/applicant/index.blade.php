<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Applicant') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($finduser as $user)
                                <tr>
                                    <td>{{ $user['id'] }}</td>
                                    <td>{{ $user['user']['name'] }}</td>
                                    <td>{{ $user['user']['email'] }}</td>
                         
                                    <td>{{ $user['job']['jobtitle'] }}</td>

                                    <td>
                                        <!-- Add any action buttons here if needed -->
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>