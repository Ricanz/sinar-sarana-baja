<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Edit Article</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('updateArticle') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Image</label>
            <input type="file" name="image" id="image" class="form-control" value="{{ $article->image }}">
            <input type="hidden" name="id" id="id" class="form-control" value="{{ $article->id }}">
        </div>
        <div class="form-group">
            <label for="description">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="mytextarea" class="form-control" cols="30" rows="15">
                {{ $article->description }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="{{$article->status}}" selected>{{ $article->status }}</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Create</button>
    </form>
</x-app-layout>