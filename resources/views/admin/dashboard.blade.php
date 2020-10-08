@extends('layout.master')

@section('title')
    dash    
@endsection

@section('content')

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registerd Users </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Full Name
                      </th>
                      <th>
                        email
                      </th>
                      <th>
                        phone
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
                          {{ $user->name }}
                          {{ $user->lname }}
                        </td>
                        <td>
                          {{ $user->email }}
                        </td>
                        <td>
                        {{ $user->phone }}
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
                      </tr>

                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      
@stop