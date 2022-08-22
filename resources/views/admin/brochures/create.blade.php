<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Brochures</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('addBrochure') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">File *pdf</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description *optional</label>
            <textarea name="description" id="mytextarea" class="form-control" cols="30" rows="15"></textarea>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Create</button>
    </form>
</x-app-layout>