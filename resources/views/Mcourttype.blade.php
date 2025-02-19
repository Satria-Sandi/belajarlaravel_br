@extends('MasterProject')
@section('title', 'MasterProject')
@section('content-title', 'MasterProject')
@section('content')
<div class="col-md-8">
    <a class="btn btn-success" href="">Add Data</a>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Court Type</th>
            <th>Court Name</th>
            <th>Action</th>
        </tr>

    @forelse($types as $type)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $court->type->name }}</td>
            <td>{{ $court->name }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="">Edit</a>
                <a class="btn btn-sm btn-danger" href="">Hapus</a>
            </td>
        </tr>
    @empty
    <div class="alert alert-danger">
        Tidak ada data
    </div>
    @endforelse
    </table>
</div>
<div class="col-md-4">
</div>
@endsection
