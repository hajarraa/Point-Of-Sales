@extends('rayons.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Rayon</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('rayons.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Rayon:</strong>
{{ $rayon->nama_rayon }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Pembimbing Rayon:</strong>
{{ $rayon->pembimbing_rayon }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>No.hp:</strong>
{{ $rayon->no_hp }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Alamat:</strong>
{{ $rayon->alamat }}
</div>
</div>
</div>
@endsection