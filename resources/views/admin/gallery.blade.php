<x-admin.admin-master>

@section('content')


<h1 class="mt-4">Gallery</h1>

{{-- DataTable --}}
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        All Photos
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Path</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Path</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($images as $image)
                    <tr>
                        <td>{{$image->id}}</td>
                        <td><img src="{{ asset('storage/' . $image->path) }}" alt="" height="175"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

</x-admin.admin-master>
