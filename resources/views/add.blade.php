@extends('layout')
@section('content')
<h1>Add Product</h1>
<div class="col-sm-6 ">
<form action="add" method="post">
@csrf
    <div class="form-group mb-2" >
        <label for="productname">Product Name</label>
        <input type="text" class="form-control" id="productname" name="productname" placeholder="Product Name" required>
    </div>
    <div class="form-group mb-2">
        <label for="productquantity">Quantity</label>
        <input type="number" class="form-control" id="productquantity" name="productquantity" placeholder="Quantity" required>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <input class="btn btn-primary btn-float-center" type="submit" name="submit" value="Submit">
    </div>
</form>
</div>

@stop
