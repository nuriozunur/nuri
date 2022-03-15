<!-- <footer>
    <div class="container-fluid ft">
        <div class="row">

            <div class="col-md-3 col-xs-12 footer1">
                <p>0324 237 07 67</p>
            </div>
            <div class="col-md-6 col-xs-12 footer2 ">
                <p>www.<span class="bold">dbt</span>.com.tr</p>
            </div>
            <div class="col-md-3 col-xs-12 footer3">
                <p>info@dbt.com.tr</p>
            </div>


        </div>
    </div>

</footer> -->

<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js?r=5426"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="plugin/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<script src="plugin/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<script src="plugin/WOW-master/dist/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '703302790500217',
            xfbml: true,
            version: 'v7.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<script>
    var vids = $("video");
    $.each(vids, function() {
        this.controls = false;
    });
    //Loop though all Video tags and set Controls as false

    $("video").click(function() {
        //console.log(this); 
        if (this.paused) {
            this.play();
        } else {
            this.pause();
        }
    });
</script>

<script>
    gsap.to(".cloud", {
        x: 100,
        duration: 5,
        repeat: -1,
        yoyo: true
    });

    gsap.to(".cloud2", {
        x: -30,
        duration: 5,
        repeat: -1,
        yoyo: true
    });
</script>
<script src="https://cdn.jsdelivr.net/g/jquery@1.11.3,jquery.easing@1.3(jquery.easing.1.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.drawsvg/1/jquery.drawsvg.min.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
    function giris() {
        var my_cookie = "my_cookie";
        var id = $.cookie("my_cookie");
        if (id == "true") {
            $('.wrapper').hide();
        } else {

            $('.wrapper').show();

            setTimeout(function() {
                $('.wrapper').fadeOut();
            }, 3000);

            var date = new Date();
            date.setTime(date.getTime() + (60 * 1000));
            $.cookie("my_cookie", "true", {
                path: '/',
                expires: date,
            });
        }
    }
    $(function() {
        giris(".wrapper");
    });


    var $svg = $('svg').drawsvg();

    $svg.drawsvg('animate');
</script>
<!-- <script src="https://scrollmagic.io/assets/js/lib/greensock/TweenMax.min.js"></script>
<script src="https://scrollmagic.io/scrollmagic/uncompressed/ScrollMagic.js"></script>
<script src="https://scrollmagic.io/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
<script src="https://scrollmagic.io/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
<script>
	// define images
	var images = [
		"img/bg/1.png",
		"img/bg/2.png",
		"img/bg/3.png",
		"img/bg/4.png",
	];

	// TweenMax can tween any property of any object. We use this object to cycle through the array
	var obj = {curImg: 0};

	// create tween
	var tween = TweenMax.to(obj, 2000,
		{
			curImg: images.length - 1,	// animate propery curImg to number of images
			roundProps: "curImg",				// only integers so it can be used as an array index
			repeat: 0,									// repeat 3 times
			immediateRender: true,			// load first image automatically
			ease: Linear.easeNone,			// show every image the same ammount of time
			onUpdate: function () {
			  $("#myimg").attr("src", images[obj.curImg]); // set the image source
			}
		}
	);


	// init controller
	var controller = new ScrollMagic.Controller();

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 5000})
					.setTween(tween)
					.addIndicators() // add indicators (requires plugin)
					.addTo(controller);


</script> -->

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.wrapper').fadeOut();
        }, 3000);
    });
</script>