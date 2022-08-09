<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Tentang Kami</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('updateAbout') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Foto Profile</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi profile</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="7">
                {{ $about->description }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="vission">Visi</label>
            <textarea name="vission" id="vission" class="form-control" cols="30" rows="7">
                {{ $about->vission }}
            </textarea>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Simpan</button>
    </form>
</x-app-layout>