<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Primary Contact</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('addMaps') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Alamat</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $contact->name }}">
        </div>
        <div class="form-group">
            <label for="description">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}">
        </div>
        <div class="form-group">
            <label for="description">Phone</label>
            <input type="phone" name="phone" id="phone" class="form-control" value="{{ $contact->phone }}">
        </div>
        <div class="form-group">
            <label for="description">Embed Maps</label>
            <input type="text" name="maps" id="maps" class="form-control" value="{{ $map->description }}">
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Create</button>
    </form>
</x-app-layout>