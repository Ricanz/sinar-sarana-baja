<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Home Banner</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('addBanner') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Foto</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $banner->vission }}">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="mytextarea-1" class="form-control" cols="30" rows="10">
                {{ $banner->description }}
            </textarea>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Simpan</button>
    </form>
</x-app-layout>