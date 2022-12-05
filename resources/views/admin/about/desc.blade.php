<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Homepage Short Desc</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('updateShortDesc') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $short->vission }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="mytextarea" class="form-control" cols="30" rows="15">{{ $short->description }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="left">Left Description</label>
            <textarea name="left" id="mytextarea" class="form-control" cols="30" rows="15">{{ $left->description }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="right">Right Description</label>
            <textarea name="right" id="mytextarea" class="form-control" cols="30" rows="15">{{ $right->description }}</textarea>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Save</button>
    </form>
</x-app-layout>