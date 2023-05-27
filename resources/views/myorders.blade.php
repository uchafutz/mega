<x-web.header/>
   <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>My Orders</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('myorders')}}">My Orders</a></li>
                          
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
                            <div class="sportsmagazine-playoff-staning">
                                <h4>My Order list</h4>
                                <table class="sportsmagazine-client-detail">
                                    <tr>
                                        <th>Mkeka ID</th>
                                        <th>Payment Status</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Download</th>
                                        
                                    </tr>

                                    @foreach ( $myorders as $myorder )
                                    <tr>
                                       
                                        <td>{{$myorder->mkeka_id}}</td>
                                        <td>{{$myorder->status}}</td>
                                        <td>{{$myorder->amount}}</td>
                                        <td>{{$myorder->description}}</td>
                                        <td></td>
                                        
                                    </tr>
                                        
                                    @endforeach
                                    
                                </table>
                            </div>
                        </div>
                    


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
     


<x-web.footer/>