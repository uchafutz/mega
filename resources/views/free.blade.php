<x-web.header/>
   <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>FREE BETTS</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('free-bets')}}">Free Bets</a></li>
                          
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
                                    @foreach ($mkekas as $mkeka)
                                    <li class="col-md-4">
                                        <figure>
                                            <a ><img src="uploads/{{$mkeka->picture}}" height="600" alt=""></a>
                                            
                                        </figure>
                                    </li>
                                        
                                    @endforeach
                                    
                               
                                </ul>
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