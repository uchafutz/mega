<x-web.header/>
   <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>RESULTS BETTS</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('results')}}">Result Bets</a></li>
                          
                        </ul>
                    </div>
                </div>
            </div>
     </div>
    <!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
				<div class="sportsmagazine-main-section sportsmagazine-modern-galleryfull">
				<div class="container">
					<div class="row">
                        <div class="col-md-12">
                            <div class="sportsmagazine-fancy-title-two"><h2>Our Results <span></span></h2></div>
                             <div class="sportsmagazine-gallery sportsmagazine-fixture-gallery">
                                   <ul>
                                    @foreach ($mkekas as $mkeka)
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="storage/{{$mkeka->picture}}" class="fancybox"><img src="{{$mkeka->picture}}" height="700px" alt=""><i class="icon-signs23"></i></a>
                                          
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
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
     


<x-web.footer/>