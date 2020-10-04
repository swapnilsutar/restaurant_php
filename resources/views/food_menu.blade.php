@extends('layouts.app')


@section('content')
<br><br><br><br>
<table class='menumode' border='1'>
    
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Offer</th>
        <th>Total Rate</th>
        <th>Categories</th>
    
    </tr>
    @foreach($foodData as $food)

        <tr>

               <td>
               {{ $food->dish_name }}
                </td>
        
        <td>
        {{ $food->price }}
        </td>
        <td>
        {{ $food->offer }}
        
        </td>
        <td>
        {{ $food->total_rate }}
        
        </td>
        <td>
        {{ $food->categories }}
        
        </td>
        </tr>
               
    @endforeach

    </table> 


@endsection