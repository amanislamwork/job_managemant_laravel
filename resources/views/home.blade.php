<x-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('jobs.index') }}">Find Jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>
