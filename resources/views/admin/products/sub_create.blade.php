<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Sub Product</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('addSub') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Title (Tabs)</label>
            <select name="product_detail_id" id="product_detail_id" class="form-control">
                <option value="" selected>-- Pilih Produk --</option>
                @foreach ($products as $item)
                <option value="{{ $item->id }}">{{ $item->product->name }} - {{ $item->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Title (Tabs)</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="summernote" class="form-control" cols="30" rows="15"></textarea>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Create</button>
    </form>
</x-app-layout>