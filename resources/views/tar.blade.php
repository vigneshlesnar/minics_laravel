@extends('layouts.layout')
@section('content')
<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Tarpaulin Products
        </h2>
      </div>
      <div class="row">
        @foreach($tar as $item)
        <div class="col-sm-6 col-lg-4 " >
          <div class="box">
            <div class="img-box">
              <img src="{{$item['gallery']}}" alt="">
              <a href="tar_detail/{{$item['id']}}" class="add_cart_btn">
                <span>
                  View Details
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
               {{$item['name']}}
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> {{$item['price']}}
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        @endforeach
        
      
    </div>
  </section>
@endsection