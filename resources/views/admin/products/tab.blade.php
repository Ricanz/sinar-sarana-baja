<x-app-layout>
    <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Product Tabs Data</h1>
            <p class="mb-4">Data for product tabs</p>
            <a href="{{ url('admin/product-tab/create') }}" class="btn btn-primary btn-sm mb-2"> Add Tab</a>

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
                                    <th>Product</th>
                                    <th>Tab</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tabs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{!! Str::limit($item->description, 150,'...') !!}</td>
                                        <td>{{ $item->status }}</td>
                                        <td style="display: flex">
                                            <form action="{{ route('deletTab') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{ $item->id }}">
                                                <button class="btn btn-danger" style="margin-right: 10px">Delete</button>
                                            </form>
                                            <a href="{{ url('admin/product-tab/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
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