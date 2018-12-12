@extends('front.master')
@section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

	
		<!-- Start Carousel -->	
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
					<img src="{{ asset('img/banner/banner1.jpg')}}" alt="Chania">
					<div class="carousel-caption">
					</div>
					</div>

					<div class="item">
					<img src="{{ asset('img/banner/banner2.jpg')}}" alt="Chicago">
					<div class="carousel-caption">
					</div>
					</div>

					<div class="item">
					<img src="{{ asset('img/banner/banner3.jpg')}}" alt="New York">
					<div class="carousel-caption">
					</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
		<!-- End Carousel -->	

	    <div class="container">
			<div class="row">
				<div class="home-text">
					<h1 class="text-center">TulakTasik.Id</h1><br><br><br>
					<img src="{{ asset('img/logoTulakTasik.png')}}" alt="" width=”80″ height=”80″><br><br><br>
					<p class="text-center">TulakTasik adalah komunitas Legal berbadan hukum yang menghimpun UMKM Tasikmalaya yang bergerak
						 di bidang kuliner baik itu makanan kemasan dan makanan non kemasan. TulakTasik adalah singkatan dari Tuangeun sareng
						 leueuteun ala Tasikmalaya. Tuangen adalah kata dalam Bahasa Sunda yang artinya makanan dan leueuteun artinya minuman.
						 TulakTasik membuat sebuah inovasi yang bernama TulakTasik.id. TulakTasik.id merupakan web apps yang berbentuk e-commerce 
						 dan didalamnya terdapat gudang informasi dari seluruh UMKM yang terhimpun di TulakTasik</p>
					<div class="blackbtn"><a href="/products"><b style="color: #ffffff" >Mulai Belanja</b></a></div> 
				</div>
			</div>
		</div>
		

	    <div class="row">
			<div class="yellowBg">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 text-center">
							<div class="col-icon"><img src="{{ asset('img/doshas.png')}}" alt="" /></div>
							<h3>> 40 UMKM</h3>
							<div class="col-text">Ada lebih dari 40 UMKM yang bergabung dalam Komunitas TulakTasik. Semua informasinya ada disini.</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col-icon"><img src="{{ asset('img/gluten-allergy.png')}}" alt="" /></div>
							<h3>Belanja Online</h3>
							<div class="col-text">Anda dapat belanja produk TulakTasik dimana saja dan kapan saja.</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col-icon"><img src="{{ asset('img/diet.png')}}" alt="" /></div>
							<h3>Kuliner Tasik</h3>
							<div class="col-text">Tasikmalaya dikenal sebagai kota kuliner berjuta pesona.</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="container hidden-xs">
            <div id="hdLine"><span><h1>Produk Kami</h1></span><hr></div><br>
       		<div class="row">
       			<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{ asset('img/1.jpg')}}" alt="" /></div>
	    				<label style="padding-top: 20px">Macho - Makaroni Coklat</label>
	    				<span class="hidden-xs">Cemilan masakini yang terbuat dari makaroni dan coklat pilihan. Rasa Coklat, Strawberry, Greentea, dan Vanilla Oreo.</span>
	    				<div class="addcart">
	    					<div class="price">Rp 10000</div>
	    					<div class="cartIco hidden-xs"><a href="/products"></a></div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{ asset('img/2.jpg')}}" alt="" /></div>
	    				<label style="padding-top: 20px">Snackel Makaroni</label>
	    				<span class="hidden-xs">Isi 250gram. Renyah, gurih, dan pedas. Cocok untuk menemani aktifitamu.</span>
	    				<div class="addcart">
	    					<div class="price">Rp 10000</div>
	    					<div class="cartIco hidden-xs"><a href="/products"></a></div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{ asset('img/3.jpg')}}" alt="" /></div>
	    				<label style="padding-top: 20px">Yaki - Bolu Kering</label>
	    				<span class="hidden-xs">Yaki Bolu Kering Kemasan Box</span>
	    				<div class="addcart">
	    					<div class="price">Rp 20000</div>
	    					<div class="cartIco hidden-xs"><a href="/products"></a></div>
	    				</div>
	    			</div>
	    		</div>
			   </div>
			   <div class="row">
       			<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{ asset('img/4.jpg')}}" alt="" /></div>
	    				<label style="padding-top: 20px">Arenda - TO Instan 105g</label>
	    				<span class="hidden-xs">Tutug oncom instan Arenda terbuat dari oncom super pilih, diproduksi dengan bumbu alami tanpa MSG dan pengawet.</span>
	    				<div class="addcart">
	    					<div class="price">Rp 15000</div>
	    					<div class="cartIco hidden-xs"><a href="/products"></a></div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{ asset('img/5.jpg')}}" alt="" /></div>
	    				<label style="padding-top: 20px">Sadulur - Snack Kewuk</label>
	    				<span class="hidden-xs">Kue kewuk Arenda terbuat dari tepung terigu tanpa bahan pengawet dan MSG.</span>
	    				<div class="addcart">
	    					<div class="price">Rp 5000</div>
	    					<div class="cartIco hidden-xs"><a href="/products"></a></div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{ asset('img/6.jpg')}}" alt="" /></div>
	    				<label style="padding-top: 20px">Juragan Cireng</label>
	    				<span class="hidden-xs">Terdapat 3 rasa : Hot, Keju, dan Udang </span>
	    				<div class="addcart">
	    					<div class="price">Rp 15000</div>
	    					<div class="cartIco hidden-xs"><a href="/products"></a></div>
	    				</div>
	    			</div>
	    		</div>
			   </div>



       		<div class="row hidden-xs">
       			<div class="col-sm-12">
		   			<div class="topSell">
		   				<h3>TEMUKAN PRODUK TERBAIK ALA KOTA TASIKMALAYA</h3>
		   				<span class="bttn"><a href="/products">Belanja Sekarang</a></span>
		   			</div>
       		    </div>
       		</div>
       		<div class="row">
       			<div class="col-sm-4 text-center">
       				<div class="helpIco">
       					<img src="{{ asset('img/free-shipping.png')}}" alt="" />
       				</div>

       				<h5>Gratis Ongkir</h5>
       				<div class="helpText">Gratis Ongkir ke seluruh Indonesia. Syarat dan Ketentuan berlaku</div>
       			</div>
       			<div class="col-sm-4 text-center">
       				<div class="helpIco"><img src="{{ asset('img/call-us.png')}}" alt="" /></div>
       				<h5>Kontak : 089 635 870 398</h5>
       				<div class="helpText">Jika Anda memiliki pertanyaan. Silahkan hubungi kami.</div>
       			</div>
       			<div class="col-sm-4 text-center">
       				<div class="helpIco"><img src="{{ asset('img/return-policy.png')}}" alt="" /></div>
       				<h5>Ketentuan Retur</h5>
       				<div class="helpText">Jika anda ingin retur silahkan hubungi Customer Service kami.</div>
       			</div>
       		</div>
        </div>
    </div>
</div>
@endsection
