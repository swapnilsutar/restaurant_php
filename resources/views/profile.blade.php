@extends('layouts.app')

@section('content')

<div class="container">

    <div class="profile_me">
        <div class="row">
            <div class="col-md-3">
                    <img src="/images/user.png" alt="" height="250" width="250">
            </div>

            <div class="col-md-5">
                
                <div class="p_name">
                    Name : 
                </div>
        
                <div class="p_ans">

                 
                 {{ Auth::user()->email }}
                 
                
                </div> 


            </div>
        
        </div>

    </div>
     

    
</div>

@endsection

