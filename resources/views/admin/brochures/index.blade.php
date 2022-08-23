<x-app-layout>
    <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Brochures Data</h1>
            <p class="mb-4">Data for brochures</p>

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
                                    <th>File</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brochures as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" alt="" width="100px">
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            <a href="{{ url('/'.$item->file) }}" target="_blank">
                                                Lihat File
                                            </a>
                                        </td>
                                        <td style="display: flex">
                                            <form action="{{ route('deleteBrochure') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{ $item->id }}">
                                                <button class="btn btn-danger" style="margin-right: 10px">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
</x-app-layout>