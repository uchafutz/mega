<x-web.header/>

<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
     <div class="sportsmagazine-main-section sportsmagazine-thumb sportsmagazine-player-thumb">
                <span class="thumb-transparent"></span>

                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="sportsmagazine-player-thumb-wrap">
                                <figure><img src="{{$myorder->mkeka->picture}}" alt=""></figure>
                                <div class="sportsmagazine-player-thumb-text">
                                    <h2>{{$myorder->amount}} TSH</h2>
                                    <h3>Olds<br><span> {{$myorder->mkeka->total_olds}}</span></h3>
                                    <ul class="sportsmagazine-player-info">
                                        <li>
                                            <h5> {{$myorder->status}}</h5>
                                            <span>Status</span>
                                        </li>
                                        
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

<div class="sportsmagazine-main-section">
  <div class="container">
	<div class="row">
        <div class="sportsmagazine-fancy-title">
        <h2>MPESA LIPA NO 18299 Please Confrim Your Payment</h2>
     </div> 
         <div class="row container my-3">
                <div class="col-sm-3">
                    <div class="border-danger bg-white py-3 text-start">
                        {{-- <img src="{{ asset('images/brand/mpesaaa.png') }}" alt="Bootstrap" height="30"> --}}
                        <div class="card-body">
                            <div class="card-title fw-bold"> <b>M-PESA, *150*00#</b></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Chagua 4 - LIPA kwa M-PESA</li>
                                <li class="list-group-item">Chagua 1 - LIPA kwa Simu</li>
                                <li class="list-group-item">Chagua 1 - LIPA Namba</li>
                                <li class="list-group-item">Weka <strong> LIPA Namba</strong></li>
                                <li class="list-group-item">Weka <strong>kiasi unacholipa</strong> </li>
                                <li class="list-group-item">Weka <strong>namba ya Siri ya M-Pesa</strong></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bg-white py-3 text-start">
                        {{-- <img src="{{ asset('images/brand/tpesa.jpg') }}" alt="Bootstrap" height="30"> --}}
                        <div class="card-body">
                            <div class="card-title fw-bold"><b> TIGOPESA, *150*01#</b></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Chagua 5 - LIPA kwa SIM</li>
                                <li class="list-group-item">Chagua 3 - Kwenda mitandao mingine</li>
                                <li class="list-group-item">Chagua 1 - M-PESA</li>
                                <li class="list-group-item">Weka <strong>M-PESA LIPA Namba</strong></li>
                                <li class="list-group-item">Weka <strong>kiasi unacholipa</strong> </li>
                                <li class="list-group-item">Weka <strong>Namba ya siri</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bg-white py-3 text-start">
                        {{-- <img src="{{ asset('images/brand/airtel.png') }}" alt="Bootstrap" height="30"> --}}
                        <div class="card-body">
                            <div class="card-title fw-bold"> <b>AIRTEL MONEY, *150*60#</b></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Chagua 5 - Lipa bili</li>
                                <li class="list-group-item">Chagua 1 - LIPA kwa Simu (Mitandao yote) </li>
                                <li class="list-group-item">Chagua 2 - LIPA kwa Voda Lipa</li>
                                <li class="list-group-item">Ingiza kiasi cha pesa</li>
                                <li class="list-group-item">Ingiza namba ya kumbukumbu </li>
                                <li class="list-group-item">Weka <strong>namba ya Siri</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bg-white py-3 text-start">
                        {{-- <img src="{{ asset('images/brand/lipa.jpg') }}" alt="Bootstrap" height="30"> --}}
                        <div class="card-body">
                            <div class="card-title fw-bold"> <b>Kulipa Kutoka MITANDAO MINGINE</b></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Chagua - LIPA kwa SIMU</li>
                                <li class="list-group-item">Chagua - Kwenda Mitandao Mingine</li>
                                <li class="list-group-item">Chagua M-PESA</li>
                                <li class="list-group-item">Ingiza namba ya Mfanyabiasha</li>
                                <li class="list-group-item">Ingiza kiasi cha kulipa</li>
                                <li class="list-group-item">Ingiza <strong>namba ya Siri kuthibitisha</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
         <div class="col-md-9">
            <div class="comment-respond sportsmagazine-contact-form">
                
                               <div class="sportsmagazine-section-heading"><h2>Confirm Your Payement</h2></div>
                               <form method="POST" action="{{route('orders.customer',["order"=>$myorder])}}">
                                   @csrf
                                    <ul>
                                      
                                        <li class="full-input">
                                            <label>Comment:</label>
                                            <p>
                                                <textarea name="description" placeholder="Type here"></textarea>
                                                <span><i class="fa fa-comment"></i></span>
                                            </p>

                                        </li>
                                        <li>
                                            <p><label><input value="Submit" type="submit"></label></p>
                                        </li>
                                    </ul>
                                </form>
                              </div>
            
                      </div>
                </div>

                  
      </div>
    </div>
    
</div>

</div>

<x-web.footer/>