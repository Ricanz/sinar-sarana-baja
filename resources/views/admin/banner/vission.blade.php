<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Vission Banner</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('vission_update') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Foto</label>
            <input type="file" name="image" id="image" class="form-control" value="{{ $vission->image }}">
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Simpan</button>
    </form>
</x-app-layout>