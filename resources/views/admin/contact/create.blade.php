<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Contacts</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('addContact') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Phone</label>
            <input type="phone" name="phone" id="phone" class="form-control">
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Create</button>
    </form>
</x-app-layout>