<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Edit Mission</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('updateMission') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $mission->title }}">
            <input type="hidden" name="id" id="id" class="form-control" value="{{ $mission->id }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="mytextarea" class="form-control" cols="30" rows="15">
                {{ $mission->description }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="{{$mission->status}}" selected>{{ $mission->status }}</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Save</button>
    </form>
</x-app-layout>