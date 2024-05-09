@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Product Management</h4>
    <h6>Add Category</h6>
    </div>
    </div>
    <form action="" method="post">
        {{ csrf_field() }}
    <div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-lg-12 col-sm-6 col-12">
    <div class="form-group">
    <label>Category Name</label>
    <input type="text" value="{{old('name')}}" required name="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
    <label>Slug<span style="color: red">*</span></label>
    <input type="text"  value="{{old('slug')}}" required name="slug" placeholder="Enter slug">
    </div>
    <div class="form-group" >
        <label >Status <span style="color: red">*</span></label>
        <select class="form-control" name="status">
          <option {{(old('status') == 0) ? 'selected' : ''}} value="0">Active</option>
          <option {{(old('status') == 1) ? 'selected' : ''}} value="1">Inactive</option>
        </select>
    </div>
      <div class="form-group">
        <label> Meta Title <span style="color: red">*</span></label>
        <input type="text" class="form-control" value="{{old('meta_title')}}" name="meta_title" placeholder="Enter Meta Title">
      </div>
      <div class="form-group">
        <label> Meta Description</label>
        <textarea type="text" class="form-control" value="{{old('meta_description')}}"  name="meta_description" placeholder="Enter Meta Description"></textarea>
      </div>
      <div class="form-group">
        <label> Meta Keywords</label>
        <input type="text" class="form-control" value="{{old('meta_keywords')}}"  name="meta_keywords" placeholder="Enter Meta Keywords">
      </div>
    </div>
    </div>
    <div class="col-lg-12">
    <button type="submit" class="btn btn-submit me-2">Submit</button>
    <a href="{{url('admin/admin/list')}}" class="btn btn-cancel">Cancel</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</form>
@endsection
@section('script')

@endsection