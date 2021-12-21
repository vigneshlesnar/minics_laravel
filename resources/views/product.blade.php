@extends('layouts.layout')

@section('content')
<!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="row">
      <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="https://4.imimg.com/data4/EJ/GI/MY-7838255/promotional-jute-bag-500x500.jpg" alt="">
              <a href="{{url('/jute')}}" class="add_cart_btn">
                <span>
                  View products
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Jute Bags
              </h5>
              
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/products/p2.png" alt="">
              <a href="{{url('/leno')}}" class="add_cart_btn">
                <span>
                  View Products
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Leno Bags
              </h5>
            
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('images/pp/Large Packing bags.webp')}}" alt="">
              <a href="{{url('pp')}}" class="add_cart_btn">
                <span>
                  View Products
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                PP Fabric
              </h5>
              
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('images/tarpaulin/Canvas.jpg')}}" alt="">
              <a href="{{url('tar')}}" class="add_cart_btn">
                <span>
                  View Products
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Tarpaulins
              </h5>
              
            </div>
          </div>
        </div>
        <!-- @foreach($products as $item)
        <div class="col-sm-6 col-lg-4 " >
          <div class="box">
            <div class="img-box">
              <img src="{{$item['gallery']}}" alt="">
              <a href="product_detail/{{$item['id']}}" class="add_cart_btn">
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
          
        @endforeach -->
        
      
    </div>
  </section>

  <!-- end product section -->
@endsection