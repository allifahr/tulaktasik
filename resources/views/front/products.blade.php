@extends('front.master')
@section('content')
@include('front.ourJs')

<div class="greyBg">
    <div class="container">
		<div class="wrapper">
			<div class="row">
				<div class="col-sm-12">
				<div class="breadcrumbs">
			        <ul>
			          <li><a href="#">Home   </a></li>
			          <li><span class="dot">/</span>
                  @if(count($data)=="0")
                  <b>{{$catByUser}}</b>
                  @else
                  @if($catByUser=="Semua Produk")
                  <a href="{{url('products')}}">
                    {{$catByUser}}</a>
                  @else
                    <a href="{{url('products')}}/{{$catByUser}}">
                      {{$catByUser}}</a>
                      @endif
                  @endif
                 </li>
			        </ul>
                </div>
                </div>
		    </div>
		  @if(count($data)!="0")
        <h1 class="text-center">{{$catByUser}} </h1>
		    <div class="row">
		    		<div class="col-xs-6 col-sm-3">

							<select id="catID">
							   <option value="">Pilih Kategori</option>
                 @foreach(App\cats::all() as $cList)
                 <option class="option" value="{{$cList->id}}">{{$cList->cat_name}}</option>
                 @endforeach
               </select>

				    </div>
				    <div class="col-xs-6 col-sm-3">
						<select id="priceID">
						    <option value="">Urutkan Harga</option>
						    <option value="0-100">0-10000</option>
						    <option value="100-300">11000-30000</option>
						    <option value="300-500">31000-50000</option>
						    <option value="500-1000">>50000</option>
						</select>
          </div>


				<div class="col-sm-6 hidden-xs">
					<div class="row">

						<div class="col-sm-4 pull-right">
							<button id="findBtn" class="btn btn-success">Find</button>
						</div>
						<div class="styleNm">16 style(s)</div>
					</div>
				</div>
        @endif
		    </div>
	    	<div class="row top25">


        @if(count($data)=="0")
        <div class="col-md-12" align="center">

            <h1 align="center" style="margin:20px">
              No products found under
              <b style="color:red">{{$catByUser}} </b>
                Category </h1>

        </div>
        @else
        <div id="productData">
          @foreach($data as $p)
          <div class="col-xs-6 col-sm-4" >
	    			<div class="itemBox">
	    				<div class="prod">
                <img
                src="{{Config::get('app.url')}}/public/img/{{$p->pro_img}}" alt=""
                width="400px" height="360px" /></div>
	    				<label style="padding-top: 20px">{{$p->pro_name}}</label>
	    				<span class="hidden-xs"> <!-- Code: {{$p->pro_code}} -->
              {{$p->pro_info}}</span>
	    				<div class="addcart">
	    					<div class="price">Rp {{$p->pro_price}}</div>
	    					<div class="cartIco hidden-xs"><a href="{{url('/cart/add')}}/{{$p->id}}"></a></div>
	    				</div>
	    			</div>
	    		</div>
          @endforeach
        </div>
          @endif
	    	</div>
		</div>
	</div>
</div>

@endsection
