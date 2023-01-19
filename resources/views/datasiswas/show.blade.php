@extends('datasiswas.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Data Siswa</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('datasiswas.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nis:</strong>
{{ $datasiswa->nis }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
{{ $datasiswa->name }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rombel:</strong>
{{ $datasiswa->rombel }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rayon:</strong>
{{ $datasiswa->rayon }}
</div>
</div>
</div>
@endsection