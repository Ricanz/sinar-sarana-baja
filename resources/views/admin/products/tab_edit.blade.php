<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Product Tabs</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('updateTab') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Title (Tabs)</label>
            <select name="product_id" id="product_id" class="form-control">
                <option value="" disabled>-- Pilih Produk --</option>
                <option value="{{ $tab->product->id }}" selected>{{ $tab->product->name }}</option>
                @foreach ($products as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Title (Tabs)</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $tab->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="mytextarea" class="form-control" cols="30" rows="15">
                {{ $tab->description }}
            </textarea>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Create</button>
    </form>
</x-app-layout>