@extends('layouts.app')
@section('content')
    {{-- <x-web.header /> --}}
    <div class=" mt-16"
        style="background: url('{{ asset('images/bg/bg.webp') }}');   background-repeat: no-repeat; background-size: cover !important; min-height: 70vh;">
        <div class="container">

            <div class="row py-5">

                <div class="col-sm-2"></div>
                <div class="col-sm-8 mt-5">
                    <div class="d-flex justify-content-start">
                        <h1 class="fs-1 fw-bold">Pay for your Subscription Package</h1>

                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <h3 class="text-muted text-start">
                            <p>TheMega Bet uses <strong>MPESA LIPA NAMBA</strong> for transactions, we have outlined below the few
                                steps to follow to make payment.After you have received the payment confirmation SMS please click
                                the Click to verify payments button.</p>
                        </h3>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row container">
                <div class="d-flex justify-content-center col-sm-12">
                    <div class=" w-50">
                        <div class=" mb-4 rounded-3 shadow-sm text-center">
                            <div class="card-header p-3 mb-3" style="background-color: #192841">
                                <h3 class="my-3 fw-bold text-white">{{ $userPackage->package->name }}</h3>
                            </div>
                            <div class="card-body px-3">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>{{ $userPackage->package->duration }} day Access to everyday's free tickets</li>
                                    <li>Acces to see the odds from Mega bet</li>
                                    <li>Priority email support</li>
                                </ul>
    
                            </div>
                            <div class="card-header p-3 mb-3">
                                <h1 class="fs-3 fw-bold">{{ $userPackage->package->amount }}<small
                                        class="text-muted fw-light">TZS</small></h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row container my-3">
                <div class="col-sm-3">
                    <div class="border-danger bg-white py-3 text-start">
                        <img src="{{ asset('images/brand/mpesaaa.png') }}" alt="Bootstrap" height="30">
                        <div class="card-body">
                            <div class="card-title fw-bold"> M-PESA, *150*00#</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Chagua 4 - LIPA kwa M-PESA</li>
                                <li class="list-group-item">Chagua 1 - LIPA kwa Simu</li>
                                <li class="list-group-item">Chagua 1 - LIPA Namba</li>
                                <li class="list-group-item">Weka <strong> LIPA Namba</strong></li>
                                <li class="list-group-item">Weka <strong>kiasi unacholipa</strong> </li>
                                <li class="list-group-item">Weka <strong>namba ya Siri ya M-Pesa</strong></li>
                                <li class="list-group-item">Utapokea SMS kuthibitisha muamala</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bg-white py-3 text-start">
                        <img src="{{ asset('images/brand/tpesa.jpg') }}" alt="Bootstrap" height="30">
                        <div class="card-body">
                            <div class="card-title fw-bold"> TIGOPESA, *150*01#</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Chagua 5 - LIPA kwa SIM</li>
                                <li class="list-group-item">Chagua 3 - Kwenda mitandao mingine</li>
                                <li class="list-group-item">Chagua 1 - M-PESA</li>
                                <li class="list-group-item">Weka <strong>M-PESA LIPA Namba</strong></li>
                                <li class="list-group-item">Weka <strong>kiasi unacholipa</strong> </li>
                                <li class="list-group-item">Weka <strong>Kiasi unacholipa</strong></li>
                                <li class="list-group-item">Weka <strong>Namba ya siri</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bg-white py-3 text-start">
                        <img src="{{ asset('images/brand/airtel.png') }}" alt="Bootstrap" height="30">
                        <div class="card-body">
                            <div class="card-title fw-bold"> AIRTEL MONEY, *150*60#</div>
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
                        <img src="{{ asset('images/brand/lipa.jpg') }}" alt="Bootstrap" height="30">
                        <div class="card-body">
                            <div class="card-title fw-bold"> Kulipa Kutoka MITANDAO MINGINE</div>
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


            <div class="row mb-3 text-center">
                <div class="card-header p-3 bg-light">
                    <div class="card-body">
                      
                        <form style="display:inline" method="POST" action="{{route("subscriptions.update",["subscription"=>$userPackage])}}">
                            @method("PUT")
                            @csrf
                        <input type="hidden" value={{ Auth::user()->id }} name="user_id" />
                        <input type="hidden" value={{ $userPackage->id }} name="sub_id" />
                        <div class="form-group">
                            <h5 class="fw-bold mb-2" for="exampleFormControlTextarea1">Tafadhali weka jina la Wakala au La Namba ya simu uliyotumia kufanya malipo</h5>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class='p-2'></div>
                        <button class="w-100 btn btn-lg btn-outline-primary">Click to Verify payments</button>
                       
                        </form>

                    </div>
                </div>


            </div>


        </div>
        <div class="row my-3">
            <div class="col-sm-12">
                <div class="fs-4 text-center fw-bold">
                    Need Assistance
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button type="button" class="btn btn-success mr-5 text-dark px-5">Chat</button>
                <button type="button" class="btn btn-warning px-5">Help</button>
            </div>
        </div>

    </div>

    <x-footer />
@endsection
