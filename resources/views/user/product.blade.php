<x-layouts>
  <!-- Page Content -->
  <div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Order Now!</h4>
            <h2>Companion.ly Talents</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  </x-layouts>