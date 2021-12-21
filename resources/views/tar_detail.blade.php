@extends('layouts.layout')
@section('content')


<div class="container">
  <div class="row">
    <div class="image-size col-md-4 mt-4">
      <img src="{{$tar['gallery']}}" alt="bags" width="300px">
      
    </div>
    <div class="col-md-8 mt-4">
      <h3>{{$tar['name']}}</h3  >
        <h3>Rs: {{$tar['price']}}</h3>
        <p>Minimum Order Quantity: 100 Meter</p>
        <table class="table">
          <tr>
            <td>GSM</td>
            <td>{{$tar['gsm']}}</td>
          </tr>
          
          <tr>
            <td>Knitted Type	</td>
            <td>{{$tar['category']}}</td>
          </tr>
         
        </table>
        <p>{{$tar['description']}}
        </p>
        <div class="my-buttons d-flex justify-content-center">
          <button class="created_button mr-4"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
&nbsp;            Get Quote</button>
        <button class="created_button"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Request a Call </button>
        </div>
        <br>
        
    </div>
    
    
  </div>
</div>







@endsection