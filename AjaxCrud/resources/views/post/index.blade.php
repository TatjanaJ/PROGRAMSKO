@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Pitanja</h1>
  </div>
</div>

<div class="row">
  <div class="table table-responsive">
    <table class="table table-bordered" id="table">
      <tr>
        <th width="150px">No</th>
        <th>Pitanje</th>
        <th>Opis_pitanja</th>
        <th class="text-center" width="150px">
          <a href="#" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus"></i>
          </a>
        </th>
      </tr>
      {{ csrf_field() }}
      <?php  $no=1; ?>
      @foreach ($post as $value)
        <tr class="post{{$value->id}}">
          <td>{{ $no++ }}</td>
          <td>{{ $value->naziv }}</td>
          <td>{{ $value->opis }}</td>
          <td>
            <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-title="{{$value->Pitanje}}" data-body="{{$value->Opis_pitanja}}">
              <i class="fa fa-eye"></i>
            </a>
            <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-title="{{$value->Pitanej}}" data-body="{{$value->Opis_pitanja}}">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-title="{{$value->Pitanje}}" data-body="{{$value->Opis_pitanja}}">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>
        </tr>
      @endforeach

@endsection
