<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Product Galleries</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('addProdGal') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Title (Tabs)</label>
            <select name="tab_id" id="tab_id" class="form-control">
                <option value="" selected>-- Pilih Tab --</option>
                @foreach ($tabs as $item)
                <option value="{{ $item->id }}">{{ $item->product->name. ' - ' .$item->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Create</button>
    </form>
</x-app-layout>