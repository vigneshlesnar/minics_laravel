@extends('layouts.layout')
@section('content')


<div class="container">
  <div class="row">
    <div class="image-size col-md-4 mt-4">
      <img src="{{$jute['gallery']}}" alt="" width="300px">
      
    </div>
    <div class="col-md-8 mt-4">
      <h3>{{$jute['name']}}</h3  >
        <h3>Rs: {{$jute['price']}}</h3>
        <p>Minimum Order Quantity: 100 Meter</p>
        <table class="table">
          <tr>
            <td>GSM</td>
            <td>{{$jute['gsm']}}</td>
          </tr>
          <tr>
            <td>Category</td>
            <td>{{$jute['category']}}</td>
          </tr>
          
        </table>
        <p>{{$jute['discreption']}}
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