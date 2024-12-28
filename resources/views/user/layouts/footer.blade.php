<footer class="footer__area">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer__widget">
                        <div class="logo mb-35">
                            <a href="#"><img src="{{ asset('assets/img/logo/get-skill/landscape white.png') }}"
                                    width="230px" alt="img"></a>
                        </div>
                        <div class="footer__content">
                            <p id="footer-description"></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Halaman</h4>
                        <div class="footer__link">
                            <ul class="list-wrap">
                                <li><a href="{{ route('courses.courses.index') }}">Kursus</a></li>
                                <li><a href="{{ route('events.index') }}">Events</a></li>
                                <li><a href="{{ route('news.index') }}">Berita</a></li>
                                <li><a href="{{ route('contacts.index') }}">Hubungi Kami</a></li>
                                <li><a href="{{ route('faqs.index') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Sosial Media</h4>
                        <div class="footer__link">
                            <ul class="list-wrap">
                                <li><a href="#" id="detail-whatsapp">Whatsapp</a></li>
                                <li><a href="#" id="detail-twitter">Twitter</a></li>
                                <li><a href="#" id="detail-facebook">Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Kontak</h4>
                        <div class="footer__contact-content">
                            <p><a href="" class="detail-email"></a><br> <span id="detail-phone-number"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="copy-right-text">
                        <p>© 2010-2024 GetSkill. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="footer__bottom-menu">
                        <ul class="list-wrap">
                            <li><a href="{{ route('terms-conditions.index') }}">Terms &  Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/contact",
            dataType: "json",
            success: function(response) {
                $('.detail-whatsapp').attr('href', response.data.whatsapp);
                $('.detail-facebook').attr('href', response.data.facebook);
                $('.detail-twitter').attr('href', response.data.twitter);
                $('.detail-phone-number').html(response.data.phone_number);
                $('.detail-email').attr('href', response.data.email);
            }
        });
    });
</script>
