@extends('layout')
@section('content')
<h1>Edit Product</h1>
<div class="col-sm-6 ">
<form action="/edit" method="POST">
@csrf
<input type="hidden" name="pid" value="{{$product->pid}}">
    <div class="form-group mb-2" >
        <label for="productname">Product Name</label>
        <input type="text" class="form-control" id="productname" name="productname" value="{{$product->product_name}}" required>
    </div>
    <div class="form-group mb-2">
        <label for="productquantity">Quantity</label>
        <input type="number" class="form-control" id="productquantity" name="productquantity" value="{{$product->product_quantity}}" required>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <input class="btn btn-primary btn-float-center" type="submit" name="submit" value="Update">
    </div>
</form>
</div>

@stop
