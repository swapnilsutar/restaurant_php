@extends('layouts.app')

@section('content')

        <div class="card-session">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        </div>

<div class="container">

    <div class="profile_me">
        <form  action="{{ url('profile') }}" method="post" >

            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-3">
                    <img src="/images/user.png" alt="" height="200" width="200">
                </div>
                        
                <div class="col-lg-5">

                    <div class="form-group">
                        <div class="row">

                            <div class="col-lg-6">

                                <label class="p_name"> First Name </label>
                                <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
                                
                            </div>

                            <div class="col-lg-6">

                                <label class="p_name"> Last Name </label>
                                
                                <input type="text" name="lname" value="{{ Auth::user()->lname }}" class="form-control">
                            </div>
                        </div>
                        
                        <br>
                        <label class="p_name"> Email Id </label>
                        <input type="text" value="{{ Auth::user()->email }}" class="form-control">        
                    
                    </div>
                    
                </div>
                
            </div>
            <br>
            <div class="row ff1">
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="p_name"> Address Line 1 </label>
                        
                        <input type="text" name="address1" value="{{ Auth::user()->address1 }}" class="form-control">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="p_name"> Address Line 2 </label>
                        
                        <input type="text" name="address2" value="{{ Auth::user()->address2 }}" class="form-control">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="p_name"> City </label>
                        
                        <input type="text" name="city" value="{{ Auth::user()->city }}" class="form-control">
                    </div>
                </div>
             
                
            </div>
            
            <div class="row ff1">

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="p_name"> District </label>
                        
                        <input type="text" name="district" value="{{ Auth::user()->district }}" class="form-control">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="p_name"> State </label>
                        
                        <input type="text" name="state" value="{{ Auth::user()->state }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="p_name"> Pincode  </label>
                        
                        <input type="text" name="pincode" value="{{ Auth::user()->pincode }}" class="form-control">
                    </div>
                </div>
                
                
                
                
            </div>

            <div class="row ff1">
                
            <div class="col-md-4">
                <div class="form-group">
                    <label class="p_name"> Phone</label>
                    
                    <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control" pattern="[789][0-9]{9}" required>

                   

                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label class="p_name"> Alternate Phone </label>
                    
                    <input type="text" name="alternate_phone" value="{{ Auth::user()->alternate_phone }}" class="form-control">
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                        <br><br>
                        <input type="submit" class="btn btn-success btn-block" value="Update Profile">
                    </div>
                </div>
                
            </div>
            
            
            
        </form>
    </div>
    
    
    
</div>

@endsection


