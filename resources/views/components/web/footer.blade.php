   <!--// Footer \\-->
        <footer id="sportsmagazine-footer" class="sportsmagazine-footer-one">


            <div class="sportsmagazine-copyright">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-6 sportsmagazine-copyright-left">
                            <p><a target="_blank" href="#">Mega Bet's</a></p>
                        </aside>
                        <aside class="col-md-6 sportsmagazine-copyright-right">
                            <ul class="sportsmagazine-copyright-link">
                                <li><a href="{{ asset('policy.pdf')}}" class="sportsmagazine-colorhover">Terms And Condition</a></li>
                                <li><a href="{{ asset('policy.pdf')}}" class="sportsmagazine-colorhover">Privacy Policy</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// CopyRight \\-->

        </footer>
        <!--// Footer \\-->

        <div class="clearfix"></div>
    </div>



    <!-- LoginModal -->
    <div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i
                        class="icon-uniF106"></i></a>
                <h4>Login To Your Account</h4>
                   @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                @enderror
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="text" value="Enter username*" name="email"
                        onblur="if(this.value == '') { this.value ='Enter username*'; }"
                        onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="password"  value="" name="password" onblur="if(this.value == '') { this.value =''; }"
                        onfocus="if(this.value =='') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign In"
                            class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
              
              
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Sign - Up Now !</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- SignupModal -->
    <div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i
                        class="icon-uniF106"></i></a>
                <h4>Sign Up Now</h4>
                <form  method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="text" name="name" value="Enter Your Name*"
                        onblur="if(this.value == '') { this.value ='Enter Your Name*'; }"
                        onfocus="if(this.value =='Enter Your Name*') { this.value = ''; }">
                    <input type="text" name="email" value="Enter Email*"
                        onblur="if(this.value == '') { this.value ='Enter Email*'; }"
                        onfocus="if(this.value =='Enter Email*') { this.value = ''; }">
                    <input type="password" name="password" value=""
                        onblur="if(this.value == '') { this.value ='Type your password*'; }"
                        onfocus="if(this.value =='Type your password*') { this.value = ''; }">
                    <input type="password" name="password_confirmation" value=""
                        onblur="if(this.value == '') { this.value ='Confirm your password*'; }"
                        onfocus="if(this.value =='Confirm your password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign Up"
                            class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
               
               
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Login - Now !</a></p>
            </div>
            <div class="clearfix">
                   <a href="https://wa.link/c56hdz" class="btn btn-success mr-5 text-dark px-5">Chat Whatsapp</button>
    <a href="http://t.me//MrNelson99" class="btn btn-warning px-5">Chat Telegram</button>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="{{asset('script/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/slick.slider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/fancybox.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/progressbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/counter.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/functions.js')}}"></script>

</body>

</html>