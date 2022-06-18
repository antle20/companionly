
<x-layouts>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Companion Ever</h4>
            <h2>Right Here!</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Choose The One</h4>
            <h2>You Want!</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Get Your Date</h4>
            <h2>Right Now!</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    {{-- @include('user.product') --}}
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Talent</h2>
              <a href="/ourproduct">view all talents <i class="fa fa-angle-right"></i></a>

              <form action="{{url('search')}}" method="get" class="form-inline" style="float:right; padding: 10px;">
                @csrf
                <input type="search" name="search" placeholder="Search">
                <input type="submit" value="Search" class="btn btn-success">
              </form>

            </div>
          </div>


          @foreach($data as $product)
          
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="250" width="150" src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>${{$product->price}}</h6>
                <p>{{$product->description}}</p>

                <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf
                  <input type="number" value="1" min="1" class="form-control" style="width:75px" name="quantity">
                  <br>
                  <input style="color:black" class="btn btn-success" type="submit" value="Add Cart">

                </form>

                
              </div>
            </div>
          </div>

          @endforeach


          @if(method_exists($data,'links'))

          <div class="d-flex justify-content-center">


            {!! $data->links() !!}


          </div>
          @endif


        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Companion.ly</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for companion to do fun activites?</h4>
              <p>You can find the best companion here at Companion.ly</p>
              <ul class="featured-list">
                <li>RELIABLE</li>
                <li>PERFORMANCE</li>
                <li>DURABILITY</li>
                <li>AESTHETICS</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Atracttive &amp; Fun <em>Companion.ly</em> Talents</h4>
                  <p>Wanna see our talents?</p>
                </div>
                <div class="col-md-4">
                  <a href="/ourproduct" class="filled-button">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </x-layouts>  


  