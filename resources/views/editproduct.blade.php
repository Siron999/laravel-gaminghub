@extends('layouts.mainlayout')


@section('content')
<div class="container" style="margin-top:80px;color:#353535;">
<h1>Edit Product</h1>
<br/>
<form action="/admin/edit/product/{{$data->id}}" method="POST" enctype="multipart/form-data" >
    @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name of the Product:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$data->name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="price" class="col-sm-2 col-form-label">Price:</label>
    <div class="col-sm-10">
      <input type="price" class="form-control" id="price" placeholder="Price" name="price" value="{{$data->price}}">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">Type</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="type[]" value="pc">
        <label class="form-check-label" for="gridCheck1">
          PC
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="type[]" value="laptop">
        <label class="form-check-label" for="gridCheck1">
          Laptop
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="type[]" value="console">
        <label class="form-check-label" for="gridCheck1">
          Console
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="type[]" value="electronics">
        <label class="form-check-label" for="gridCheck1">
         Electronic Accessories
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Details:</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="name" placeholder="Details" name="details" style="height:150px;">{{$data->details}}</textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="poster" class="col-sm-2 col-form-label">Poster:</label>
    <div class="col-sm-10">
            <div class="custom-file">
            <input type="file" class="custom-file-input" name="file" value="{{$data->file}}">
            <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 mt-4">
      <button type="submit" class="btn btn-danger">Update</button>
    </div>
  </div>
</form>
</div>



@endsection