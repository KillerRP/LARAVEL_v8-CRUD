@extends('layout')
@section('content')

<!-- <h1>Home Page is here</h1> -->
<div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="{{route('product-create')}}" class="btn btn-dark me-md-2">add</a>
</div>
</div>
<table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">#ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Total Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @if(isset($data))
@foreach($data as $item)
  <tr>
      <th scope="row">{{$item->pid}}</th>
      <td>{{$item->product_name}}</td>
      <td>{{$item->product_quantity}}</td>
      <td>
      <a href="{{route('product-delete',[$item->pid])}}" class="btn btn-danger">Delete</a>
      <a href="{{route('product-edit',[$item->pid])}}" class="btn btn-success">Edit</a>
      </td>
    </tr>
@endforeach
@endif
  </tbody>
</table>
@stop