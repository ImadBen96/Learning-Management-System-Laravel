<footer>
    <div style="background: linear-gradient(90deg, rgba(33,221,114,1) 0%, rgba(5,172,80,1) 100%);" class="footer-upper pt-60 pb-60 bg-blue">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="footer-right pl-80">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="footer-content-list footer-content-item">
                                    <div style="margin-bottom: 10px;" class="footer-content-title">
                                        <img style="width: 33%;" src="{{ asset('images/logo_footer.png') }}" />
                                    </div>
                                    <div class="footer-content-title">
                                        <h3 style="font-size: 26px;" @if( app()->getLocale() == "ar" ) class="arab" @endif>Association l’Heure Joyeuse</h3>
                                    </div>
                                    <ul class="footer-details footer-list">
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#"><span>Télephone : </span> 0522 41 93 00/10</a></li>

                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Adresse : 5, rue Abbas El Jiraoui, Belvédère, Casablanca</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Email : accueil@heurejoyeuse.ma</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Website : www.heurejoyeuse.ma</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="footer-content-list footer-content-item">
                                    <div style="margin-bottom: 10px;" class="footer-content-title">
                                        <img style="width: 33%;" src="{{ asset('images/logo_jiser_footer.png') }}" />
                                    </div>
                                    <div class="footer-content-title">
                                        <h3 style="font-size: 26px;" @if( app()->getLocale() == "ar" ) class="arab" @endif>Association Al Jisr</h3>
                                    </div>
                                    <ul class="footer-details footer-list">
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Télephone : 0522 98 01 36 </a></li>

                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Adresse : Ecole El Bachiri Garçons, angle Rue Ahmed Kadmiri et Rue Bachir Laâlaj – Casablanca</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Email : contact@aljisr.ma</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Website : www.aljisr.ma</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="footer-content-list footer-content-item">
                                    <div  class="footer-content-title">
                                        <img style="width: 37%;" src="{{ asset('images/Untitled-2-Recovered.png') }}" />
                                     </div>
                                    <div class="footer-content-title">
                                        <h3 style="font-size: 26px;" @if( app()->getLocale() == "ar" ) class="arab" @endif>Province de Nouaceur</h3>
                                    </div>
                                    <ul class="footer-details footer-list">
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Télephone : 0522 59 02 94/91</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Adresse : Z.I Ouled Saleh Bouskoura</a></li>
                                        <li><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">Email : das.prnouaceur@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div style="background-color: #efefef !important;" class="footer-lower bg-off-white">

        <div class="container">
            <div  class="footer-lower-grid">
                <div class="footer-lower-item footer-lower-info">
                    <div class="footer-copyright-text">
                        <p>Copyright ©2022 Design &amp; Developed By <a href="#" target="_blank">AOBC</a></p>
                    </div>
                </div>
                <div class="footer-lower-item">
                    <ul class="social-list">
                        <li><a href="#"><img src="assets/images/facebook.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/twitter.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/linkedin.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/instagram.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/youtube.png" alt="social"></a></li>
                        <li><a href="#"><img src="assets/images/skype.png" alt="social"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
