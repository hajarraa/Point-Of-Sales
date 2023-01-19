@extends('datasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Siswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('products.index') }}">Product</a>
                <a class="btn btn-info" href="{{ route('rombels.index') }}">Rombel</a>
                <a class="btn btn-info" href="{{ route('rayons.index') }}">Rayon</a>
                <a class="btn btn-success" href="{{ route('datasiswas.create') }}"> Create New Data Siswa</a>
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
            <th>Nis</th>
            <th>Name</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($datasiswas as $datasiswa)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $datasiswa->nis }}</td>
                <td>{{ $datasiswa->name }}</td>
                <td>{{ $datasiswa->rombel }}</td>
                <td>{{ $datasiswa->rayon }}</td>
                <td>
                    <form action="{{ route('datasiswas.destroy', $datasiswa->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('datasiswas.show', $datasiswa->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('datasiswas.edit', $datasiswa->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Yakin mau ngehapus {{ $datasiswa->name }} ?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $datasiswas->links() !!}
@endsection
