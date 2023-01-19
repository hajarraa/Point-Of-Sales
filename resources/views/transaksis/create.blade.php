@extends('transaksis.layout')
@section('content')
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New transaksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($error->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('transaksis.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang:</strong>
                    <select name="nama_barang" id="nama_barang" class="form-control">
                        <option value=""> Pilih Barang</option>
                        @foreach ($nama_barang as $ml)
                            <option value="{{ $ml->nama_barang }}">{{ $ml->nama_barang }} [stok : {{ $ml->stok }}]
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <div id="harga"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Barang:</strong>
                    <input type="number" name="stok" class="form-control" id="total_barang" placeholder="Total Barang">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total harga:</strong>
                    <input type="number" disabled id="total_bayar" class="form-control" placeholder="Total Harga">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Bayar:</strong>
                    <input type="number" name="total_bayar" class="form-control" placeholder="Total Bayar">
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            $('#nama_barang').on('change', function() {
                var namaBarang = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: '{{ route('getHarga') }}?nama_barang=' + namaBarang,
                    dataType: 'json',
                    success: function(response) {
                        $.each(response.hargas, function(key, item) {
                            $('#harga').empty();
                            $('#harga').append(
                                '<input class="form-control" id="harga_barang" name="harga_barang" value="' +
                                item.harga_barang +
                                '" disabled style="cursor: not-allowed;">')
                        });
                    }
                });

            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $('#total_barang').keyup(function() {
                var barang = $('#total_barang').val();
                var harga = $('#harga_barang').val();
                var total = parseInt(barang) * parseInt(harga);
                $('#total_bayar').val(total);
            });
        });
    </script>
@endsection
