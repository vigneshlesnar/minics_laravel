@extends('layouts.layout')



@section('content')

 <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Welcome to our shop
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                    </p>
                    <a href="{{url('about')}}">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/products/p3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Welcome to our shop
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/products/p15.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Welcome to our shop
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/products/p10.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn_box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Category
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

        
      </div>
     
    </div>
  </section>

  <!-- end product section -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                We Provide Best For You
              </h2>
            </div>
            <ul>
              <li>Providing our customers with the highest quality products in the industry
</li>
              <li>Delivering maximum value for a fair price
</li>
              <li>Creating an atmosphere in which our employees can reach their full potential
</li>
              <li>Containing both customer and industry confidence in our products and commitment
</li>
            </ul>
            <a href="{{url('about')}}">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/products/leno.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- client section -->

  <section class="client_section layout_padding-bottom layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
        Mr-Ecomart Advantages
        </h2>
      </div>
    </div>
    <div class="client_container ">
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                <h3>Customer Service</h3>
                  <p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </p>
                  
                  <p>
                  Our successes is outcome of candid service to every customer. Be it before sales or after sales, service is lifeline at Mr-Ecomart . Our relentless Customer service helps our customers to focus on their core activities without any interruption to fetch outstanding results in their respective field of farm activities.
                  </p>
                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                <h3>Familial Management</h3>
                  <p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </p>
                  <p>
                  Mr-Ecomart family is homogeneously involved in day to day management of this business. Family members lead initiatives to nurture and implement excellence in every department of the organization.

                  </p>
                </div>
                <div class="client-id">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <h3>Legacy</h3>
                  <p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </p>
                  <p>
                  Working experience in packaging industry of over two decades has created a great bond of trust between us and our valued customers. Dedication and sincerity of the founders has created a proud legacy for present day establishment that thrives on trust of our customers.


                  </p>
                </div>
                <div class="client-id">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->


@endsection