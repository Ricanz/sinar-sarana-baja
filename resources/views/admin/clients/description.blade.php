<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Client Description</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('addClientDesc') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $description->vission }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="summernote" class="form-control" cols="30" rows="15">{{ $description->description }}</textarea>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Create</button>
    </form>
</x-app-layout>