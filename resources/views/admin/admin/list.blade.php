@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Admin List</h4>
    <h6>Manage your Admin</h6>
    </div>
    <div class="page-btn">
    <a href="{{url('admin/admin/add')}}" class="btn btn-added"><img src="{{asset('')}}assets/img/icons/plus.svg" alt="img" class="me-1">Add New Admin</a>
    </div>
    </div>
    @include('admin.layouts._massage')
    <div class="table-responsive">
        <table class="table  datanew">
        <thead>
        <tr>
        <th>#</th>
         <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($getRecord as $value)
        <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td><span class="{{($value->status == 0) ? 'bg-lightgreen badges' : 'bg-lightred badges'}}">{{($value->status == 0) ? 'Active' : 'Inactive'}}</span></td>
        <td>
        <a class="me-3" href="{{url('admin/admin/edit/'.$value->id)}}">
        <img src="{{asset('')}}assets/img/icons/edit.svg" alt="img">
        </a>
        <a class="me-3 confirm-text" href="{{url('admin/admin/delete/'.$value->id)}}">
        <img src="{{asset('')}}assets/img/icons/delete.svg" alt="img">
        </a>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
        </div>
        </div>
        
        </div>
        </div>
        </div>

@endsection
@section('script')

@endsection