<!--libs include-->
<script src="{{ asset('web/plugins/jquery-ui.min.js') }}"></script>
<script src="{{ asset('web/plugins/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('web/plugins/layerslider/js/greensock.js') }}"></script>
<script src="{{ asset('web/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script src="{{ asset('web/plugins/layerslider/js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('web/plugins/jquery.appear.js') }}"></script>
<script src="{{ asset('web/plugins/jquery.elevateZoom-3.0.8.min.js') }}"></script>
<script src="{{ asset('web/plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('web/plugins/jquery.easytabs.min.js') }}"></script>
<script src="{{ asset('web/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('web/plugins/twitter/jquery.tweet.min.js') }}"></script>
<script src="{{ asset('web/plugins/flickr.js') }}"></script>
<script src="{{ asset('web/plugins/afterresize.min.js') }}"></script>
<script src="{{ asset('web/plugins/jackbox/js/jackbox-packed.min.js') }}"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid="></script>
<script src="{{ asset('web/js/retina.min.js') }}"></script>
<script src="{{ asset('web/plugins/colorpicker/colorpicker.js') }}"></script>


<!--theme initializer-->
<script src="{{ asset('web/js/themeCore.js') }}"></script>
<script src="{{ asset('web/js/theme.js') }}"></script>
<script>
    $(document).ready(function() {
        var send_email = "{{ session('send_email') }}";
        console.log("send_email:", send_email);
        if(send_email === "1" || send_email === 1 || send_email === true) {
            $.ajax({
                url: "{{ route('send-mail') }}",
                method: "GET",
                success: function(response) {
                    console.log("Email sent successfully:", response);
                },
                error: function(xhr, status, error) {
                    console.error("Error sending email:", error);
                }
            });
        }
    });
</script>