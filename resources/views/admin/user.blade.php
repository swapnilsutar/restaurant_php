@extends('layout.master')

@section('title')
    User Profile
@endsection

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registerd Users </h4>
              </div>

              <div class="card-session">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>


              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>
                        id
                        </th>
                      <th>
                        Full Name
                      </th>
                      <th>
                        email
                      </th>
                      <th>
                        phone
                      </th>
                      <th>
                      Role
                      </th>
                      <th >
                        city
                      </th>
                      <th >
                        address
                      </th>
                      <th >
                        state
                      </th>
                    </thead>
                    <tbody>

                    @foreach ($udata as $user)
                      <tr>
                      <td>
                        {{ $user -> id}}
                      </td>
                        <td>
                          {{ $user->name }}
                          {{ $user->lname }}
                        </td>
                        <td>
                          {{ $user->email }}
                        </td>
                        <td>
                          {{ $user->phone }}
                        </td>
                        <td>
                        {{ $user->userType }}
                        </td>
                        <td >
                        {{ $user->city }},
                        {{ $user->district }}
                        </td>
                        <td >
                        {{ $user->address1 }},
                        {{ $user->address2 }}
                        </td>
                        <td>
                        {{ $user->state }}
                        </td>
                        <td>
                            <a href="/register_edit/{{ $user -> id }}" class="btn btn-warning">edit</a>
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

@endsection