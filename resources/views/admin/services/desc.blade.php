<x-app-layout>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Homepage Service's Description</h1>
    </div>
    
    <form class="form-group" method="POST" action="{{ route('homepageUpdateService') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="description">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $service_desc->vission }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="summernote" class="form-control" cols="30" rows="15">{{ $service_desc->description }}</textarea>
        </div>
        <button class="btn btn-primary btn-user btn-block mt-4">Create</button>
    </form>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($icons as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset($item->image) }}" alt="service icon" width="50px">
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>{!! Str::limit($item->description, 150,'...') !!}</td>
                                <td style="display: flex">
                                    <a href="{{ url('admin/service/icon/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>