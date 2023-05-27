<x-web.header/>
  <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>TODAY BETTS</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('today')}}">TODAY BETTS</a></li>
                          
                        </ul>
                    </div>
                </div>
            </div>
     </div>
     	<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-player-gridfull">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
                            <div class="sportsmagazine-player sportsmagazine-classic-player">
                                   <ul class="row">
                                  @auth
                                      
                                  
                                 @if (Auth::user()->subscription_flag==1)
                                        @foreach ($mkekas as $mkeka )
                             
                                    <li class="col-md-4">
                                       
                                             <figure>
                                            <a href="player-detail.html"><img src="extra-images/team-grid-img1.jpg" alt=""></a>
                                            <figcaption>
                                                <div class="sportsmagazine-classic-player-info">
                                                    <h4><a href="player-detail.html">{{$mkeka->total_olds}}</a></h4>
                                                    <span>Olds</span>
                                                    <ul class="classic-player-option">
                                                        {{-- <li><i class="fa fa-calendar-o"></i><time datetime="2008-02-14 20:00">{{$mkeka->create_at?->format('d/m/Y')}}</time></li> --}}
                                                        <li><i class="fa fa-futbol-o"></i> <span>{{$mkeka->price}}</span></li>
                                                    </ul>
                                                    
                                                    <a href="player-detail.html" class="classic-redmore-btn">BUY NOW</a>
                                                </div>
                                                <div class="sportsmagazine-classic-player-text">
                                                    @if ($mkeka->type=="premier")
                                                       <h4><a href="{{route("todayshow")}}">{{ $mkeka->price}}TSH</a></h4>  
                                                    @endif
                                                   
                                                    <span>Olds <b>{{$mkeka->total_olds}}</b></span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </li>
                                            
                                    
                                
                            @endforeach
                                     
                           
                            </ul>
                               <!--// Pagination \\-->
                            <div class="sportsmagazine-pagination">
                              <ul class="page-numbers">
                                
                                 <li>{{$mkekas->links()}}</li>
                                
                              </ul>
                            </div>
                            <!--// Pagination \\-->
                            @else

                            <x-web.subscription/>

                            @endif

                            
                            </div>

                            
                         
                            @else
                            <div class="sportsmagazine-shop sportsmagazine-shop-list">
                                 <ul class="row">
                                    @foreach ($packages as $package)
                                    <li class="col-md-6">
                                        
                                        <div class="sportsmagazine-shop-list-text">
                                            <h4><a href="#">{{$package->name}}</a></h4>
                                            <span class="sportsmagazine-price-cartbox">
                                                 {{$package->amount}} TSH
                                            </span>
                                            <p>Service avaliabilty only for <b>{{$package->duration}}</b>. </p>
                                          
                                            <a data-toggle="modal"
                                        data-target="#loginModal" class="shop-cart-btn">Subscribe Now</a>
                                            
                                        </div>
                                    </li>
                                        
                                    @endforeach
                                  
                                  

                                 </ul>

                            </div>
                            @endauth
                        </div>


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

<x-web.footer/>