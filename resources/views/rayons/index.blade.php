@extends('rayons.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rayon</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('products.index') }}">Product</a>
                <a class="btn btn-info" href="{{ route('rombels.index') }}">Rombel</a>
                <a class="btn btn-info" href="{{ route('datasiswas.index') }}">Datasiswa</a>
                <a class="btn btn-success" href="{{ route('rayons.create') }}"> Create New Rayon</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Rayon</th>
            <th>Pembimbing Rayon</th>
            <th>No.hp</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($rayons as $rayon)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $rayon->nama_rayon }}</td>
                <td>{{ $rayon->pembimbing_rayon }}</td>
                <td>{{ $rayon->no_hp }}</td>
                <td>{{ $rayon->alamat }}</td>
                <td>
                    <form action="{{ route('rayons.destroy', $rayon->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('rayons.show', $rayon->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('rayons.edit', $rayon->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Yakin mau ngehapus {{ $rayon->nama_rayon }} ?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $rayons->links() !!}
@endsection
