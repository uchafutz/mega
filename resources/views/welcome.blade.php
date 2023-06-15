<x-web.header/>
 <div class="sportsmagazine-main-content">
      <div class="sportsmagazine-main-section">
                <div class="container">
                    <div class="row">



                        <!--// Content \\-->
                        <div class="col-md-12">

                            <!--// Fancy Title \\-->
                            <div class="sportsmagazine-fancy-title">
                                <center><h2> WINNER TEAM</h2></center>
                               
                           
                                 
                                    
                            </div> <!--// Fancy Title \\-->
                            <!--// Featured Slider \\-->
                            {{-- <div class="sportsmagazine-featured-slider">
                                <div class="sportsmagazine-featured-slider-layer">
                                    <img src="images/home2.png" alt="">
                                    <span class="sportsmagazine-black-transparent"></span>
                                  
                                </div>
                                <div class="sportsmagazine-featured-slider-layer">
                                    <img src="images/home2.png" alt="">
                                    <span class="sportsmagazine-black-transparent"></span>
                                 
                                </div>
                            </div> --}}
                            <!--// Featured Slider \\-->
                           <div class="row">
                            <div class="col-md-12">
                            <div class="sportsmagazine-fancy-title-two"><h2><a  href="{{ route('subscriptions.index') }}"><h2>{{ __('Click here subscribe') }}</h2></a> <span></span></h2></div>
                             <div class="sportsmagazine-gallery sportsmagazine-fixture-gallery">
                                   <ul>
                                    @foreach ($mkekas as $mkeka)
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group"  class="fancybox"><img src="uploads/{{$mkeka->picture}}" height="700px" alt=""><i class="icon-signs23"></i></a>
                                          
                                        </figure>
                                    </li>
                                        
                                    @endforeach
                                </ul>
                            </div>
                              </div>
					
                            <!--// Pagination \\-->
                            <div class="sportsmagazine-pagination">
                              <ul class="page-numbers">
                                 <li>{{$mkekas->links()}}</li>
                                
                              </ul>
                            </div>
                            <!--// Pagination \\-->
                        </div>


					</div>



                            {{-- <div class="row">
                                <div class="col-md-4">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                        <ul class="row">
                                            <li class="col-md-12 sportsmagazine-the-team">
                                                <figure>
                                                    <a href="{{route('free-bets')}}"><img src="images/topbet.jpg"
                                                            alt=""></a>
                                                    <figcaption>
                                                        <span><small>Mega Bet's</small></span>
                                                        <a href="{{route('free-bets')}}" class="sportsmagazine-link-btn"><i
                                                                class="fa fa-link"></i></a>
                                                    </figcaption>
                                                </figure>
                                                <section>
                                                    <h2><a href="{{route('free-bets')}}">FREE BET'S</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consecttur adipis elit</p>
                                                </section>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                        <ul class="row">
                                            <li class="col-md-12 sportsmagazine-the-team">
                                                <figure>
                                                    <a href="{{route('today')}}"><img src="images/topbet.jpg"
                                                            alt=""></a>
                                                    <figcaption>
                                                        <span><small>Mega Bet's</small></span>
                                                        <a href="{{route('today')}}" class="sportsmagazine-link-btn"><i
                                                                class="fa fa-link"></i></a>
                                                    </figcaption>
                                                </figure>
                                                <section>
                                                    <h2><a href="{{route('today')}}">TODAY BET'S</a></h2>
                                                    <p>Login or Register and subscribe for services.</p>
                                                </section>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                        <ul class="row">
                                            <li class="col-md-12 sportsmagazine-the-team">
                                                <figure>
                                                    <a href="{{route('results')}}"><img src="images/topbet.jpg"
                                                            alt=""></a>
                                                    <figcaption>
                                                        <span><small>Mega Bets</small></span>
                                                        <a href="{{route('results')}}" class="sportsmagazine-link-btn"><i
                                                                class="fa fa-link"></i></a>
                                                    </figcaption>
                                                </figure>
                                                <section>
                                                    <h2><a href="{{route('results')}}">OUR RESULTS</a></h2>
                                                    <p>Review our past results.</p>
                                                </section>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div> --}}



                        </div>
                        <!--// Content \\-->



                    </div>
                </div>
            </div>

 </div>
<x-web.footer/>