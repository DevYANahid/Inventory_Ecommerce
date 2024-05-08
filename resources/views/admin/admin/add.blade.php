@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Admin Management</h4>
    <h6>Add Admin</h6>
    </div>
    </div>
    <form action="" method="post">
        {{ csrf_field() }}
    <div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-lg-6 col-sm-6 col-12">
    <div class="form-group">
    <label>Name</label>
    <input type="text" value="{{old('name')}}" required name="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="text"  value="{{old('email')}}" required name="email" placeholder="Enter Email">
    </div>
    <div class="form-group">
    <label>Password</label>
    <div class="pass-group">
    <input type="password" class=" pass-input" required name="password" placeholder="Password">
    <span class="fas toggle-password fa-eye-slash"></span>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <select class="form-control m-4" name="status">
            <option {{(old('status') == 0) ? 'selected' : ''}} value="0">Active</option>
            <option {{(old('status') == 1) ? 'selected' : ''}} value="1">Inactive</option>
          </select>
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