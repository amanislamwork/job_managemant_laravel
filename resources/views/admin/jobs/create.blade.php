<x-layout>

@if($errors->any())
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Whoops!</strong>
        <span class="block sm:inline">Something went wrong.</span>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
    <form method="POST" action="{{ route('admin.jobs.store') }}" enctype="multipart/form-data" class="mb-4">
        @csrf
        @method('POST')
        <div class="container col-md-8 border shadow-sm rounded-3 py-3 py-4 bg-white" >
            <h1 class="pb-4">Create Job</h1>
            <div class="row">
                <div class="col-md-12 mb-4">
                    <input type="text" name="jobtitle" class="form-control" placeholder="Job title">
                </div>
                <div class="col-md-12 mb-4">
                    <input type="text" name="jobdescription" class="form-control" placeholder="Job description">
                </div>
                <div class="col-md-12 mb-4">
                    <input type="text" name="joblocation" class="form-control" placeholder="City, state">
                </div>
                <div class="col-md-12 mb-4">
                    <input type="text" name="experience" class="form-control" placeholder="Experience e.g Years">
                </div>
                <div class="col-md-12 mb-4">
                    <input type="text" name="jobtype" class="form-control"
                        placeholder="Jobs Type e.g Full time, part time">
                </div>
                <div class="col-md-12 mb-4">
                    <input type="text" name="salary" class="form-control" placeholder="Salary e.g 10,000-1,00,000">
                </div>
                <div class="col-md-12 mb-4">
                    <select class="form-select form-control" name="skillset[]" id="tags" multiple>
                        @foreach(\Helper::jobSkillSet()['skills'] as $skill)
                        <option value="{{ $skill['id'] }}">{{ $skill['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mb-4">
                    <input type="text" name="companyname" class="form-control" placeholder="Company name">
                </div>

                <div class="col-md-12 mb-4 ml-auto text-end">
                    <input type="submit" value="Create Job" class="btn btn-success" >
                </div>
            </div>
        </div>

    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const element = document.getElementById('tags');
            const choices = new Choices(element, {
                removeItemButton: true,
                placeholderValue: 'Select tags',
                noResultsText: 'No tags found',
            });
        });
    </script>
</x-layout>