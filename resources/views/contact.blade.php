@extends('layouts.app')


@section('content')
   
<div class="contact_c">
          <div class="insta_text">
         get in touch
                         <!-- contact indian food restaurant -->
          </div>

     </div>

    <div class="form_time">
    

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <center>
                            
                            <div class="con_tit">
                                Opening times
                        </div> 
                        
                        <div class="day">

                            Monday – Tuesday
                        </div>
                        
                        Dinner – 17:00 – 22:00
                        
                        <div class="day">

                            Wednesday – Friday
                        </div>
                        
                        Lunch- 12:00 – 14:00
                        <br>
                        Dinner – 17:00 – 22:00
                        
                        <div class="day">
                            
                            Saturday
                            </div>
                        
                        Dinner – 16:00 – 23:00
                        
                        <div class="day">
                            
                            Sunday
                            </div>
                        
                        Dinner – 14:00 – 22:00

                    </center>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="con_tit">
                                    contact us
                            </div> 

                            <form action="mailto:swapnilsutar@gmail.com" method="post" enctype="text/plain">

                            <input type="text" class="form-control" placeholder="Your Name" >
<br>
                            <input type="email" class="form-control" placeholder="Your email address" required>
<br>
                            
                            <input type="text" class="form-control" placeholder="Subject" required>
                            <br>

                            <textarea name="msg" id="msg" class="form-control" cols="30" rows="5" placeholder="Your Message" required></textarea>
                            <br>

                            <input type="submit" value="Submit" class="btn btn-success btn-block" >
                            </form>

                    </div>


                
                </div>
            </div>

    </div>


@endsection