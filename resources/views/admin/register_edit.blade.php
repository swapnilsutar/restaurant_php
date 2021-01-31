@extends('layout.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Edit Registerd User</h2>  
        </div>

        <div class="card-body">

        <form action="/register_edit_update/{{ $user->id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name='name' value="{{ $user->name }}">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                        <label for="">Give ROle</label>
                    <select name="userType" id="" class="form-control">
                        <option value="vendor" class="form-control">vendor</option>
                        <option value="admin" class="form-control">Admin</option>
                    </select>
                </div>
            </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/userprofile" class="btn btn-danger">  Cancle</a>
        </form>

        </div>

    </div>


@endsection