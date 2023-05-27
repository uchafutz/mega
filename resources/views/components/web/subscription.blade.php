@auth
<div>
      <div class="sportsmagazine-fancy-title">
        <h2>Select Package for subscription services</h2>
     </div> <!--// Fancy Title \\-->
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
                                         
                                           <form method="POST" action="{{route('subscriptions.store')}}">
                                                @csrf
                                                <input type="hidden" name="package_duration" value="{{$package->duration}}"/>
                                                <input type="hidden" name="package_id" value="{{$package->id}}"/>
                                                <input type="hidden" name="user_id" value="{{auth::user()->id}}"/>
                                            <button type="submit"  class="shop-cart-btn">Subscribe Now</button>
                                           </form>
                                        </div>
                                    </li>
                                        
                                    @endforeach
                                  
                                  

     </ul>

</div>
</div>
@endauth
