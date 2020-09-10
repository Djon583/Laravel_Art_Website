<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-3.1.0.min.js"></script>
		<!--Google Maps API Key: AIzaSyCcxaXd_gFKNSclvDKVecf8tzxq5OyWXLY-->

		<script src="https://kit.fontawesome.com/9f48a770a4.js" async></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCIUbTPWWVTTyen2Qmw6Jd0VLaEZrkiSyg" async></script>


		<script type="text/javascript" src="http://abramovagallery.art/wp-content/themes/bridge/js/swiper.jquery.min.js" async></script>
		<script type="text/javascript" src="http://abramovagallery.art/assets/js/libs/fancybox/jquery.fancybox.min.js" async></script>
		<script type="text/javascript" src="http://abramovagallery.art/wp-content/themes/bridge/js/shorten/jquery.shorten.min.js" async></script>
		<script type="text/javascript" src="http://abramovagallery.art/wp-content/themes/bridge/js/custom_js.js" async></script>
		<script type="text/javascript" src="http://abramovagallery.art/assets/components/ajaxform/js/ajaxform.js"></script>

		<link rel="stylesheet" href="http://abramovagallery.art/wp-content/themes/bridge/css/swiper.min.css" media="all">
		<link rel="stylesheet" href="http://abramovagallery.art/assets/css/libs/fancybox/jquery.fancybox.min.css" media="all">
					<style>
									#slide_0 {
						background-image: url(http://abramovagallery.art/assets/images/slider/slider-painting.jpg)
					}
					@media (max-width: 767px) {
						#slide_0 {
							background-image: url(http://abramovagallery.art//assets/cache_image/slider/slider-painting_767x0_a1a.jpg)
						}
					}
					@media (max-width: 565px) {
						#slide_0 {
							background-image: url(http://abramovagallery.art//assets/cache_image/slider/slider-painting_565x0_791.jpg)
						}
					}
									#slide_1 {
						background-image: url(http://abramovagallery.art/assets/images/slider/bar-graphic11.jpg)
					}
					@media (max-width: 767px) {
						#slide_1 {
							background-image: url(http://abramovagallery.art//assets/cache_image/slider/bar-graphic11_767x0_a1a.jpg)
						}
					}
					@media (max-width: 565px) {
						#slide_1 {
							background-image: url(http://abramovagallery.art//assets/cache_image/slider/bar-graphic11_565x0_791.jpg)
						}
					}
									#slide_2 {
						background-image: url(http://abramovagallery.art/assets/images/slider/bar-slide-skulp.jpg)
					}
					@media (max-width: 767px) {
						#slide_2 {
							background-image: url(http://abramovagallery.art//assets/cache_image/slider/bar-slide-skulp_767x0_a1a.jpg)
						}
					}
					@media (max-width: 565px) {
						#slide_2 {
							background-image: url(http://abramovagallery.art//assets/cache_image/slider/bar-slide-skulp_565x0_791.jpg)
						}
					}

			</style>
							<!-- Yandex.Metrika counter -->
			<script type="text/javascript">
			    (function (d, w, c) {
			        (w[c] = w[c] || []).push(function() {
			            try {
			                w.yaCounter44820427 = new Ya.Metrika({
			                    id:44820427,
			                    clickmap:true,
			                    trackLinks:true,
			                    accurateTrackBounce:true,
			                    webvisor:true,
			                    trackHash:true
			                });
			            } catch(e) { }
			        });

			        var n = d.getElementsByTagName("script")[0],
			            s = d.createElement("script"),
			            f = function () { n.parentNode.insertBefore(s, n); };
			        s.type = "text/javascript";
			        s.async = true;
			        s.src = "https://mc.yandex.ru/metrika/watch.js";

			        if (w.opera == "[object Opera]") {
			            d.addEventListener("DOMContentLoaded", f, false);
			        } else { f(); }
			    })(document, window, "yandex_metrika_callbacks");
			</script>
			<noscript><div><img src="https://mc.yandex.ru/watch/44820427" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
			<!-- /Yandex.Metrika counter -->
				<script>
			document.addEventListener("DOMContentLoaded", function() {
			  var lazyloadImages;
			  var gmapArea;

			  if ("IntersectionObserver" in window) {
			    lazyloadImages = document.querySelectorAll(".lazy");

			    var imageObserver = new IntersectionObserver(function(entries, observer) {
			      entries.forEach(function(entry) {
			        if (entry.isIntersecting) {
			          var image = entry.target;
			          image.src = image.dataset.src;
			          image.classList.remove("lazy");
			          imageObserver.unobserve(image);
			        }
			      });
			    });

			    lazyloadImages.forEach(function(image) {
			      imageObserver.observe(image);
			    });

			    gmapArea = document.getElementById("myGmap");

			    var mapObserver = new IntersectionObserver(function(entries, observer) {
			        entries.forEach(function(entry) {
			        if (entry.isIntersecting) {
			          // console.log(entry.target);
			          showGoogleMap();
			        }
			      });
			    });

			    mapObserver.observe(gmapArea);
			  } else {
			    var lazyloadThrottleTimeout;
			    lazyloadImages = document.querySelectorAll(".lazy");

			    function lazyload () {
			      if(lazyloadThrottleTimeout) {
			        clearTimeout(lazyloadThrottleTimeout);
			      }

			      lazyloadThrottleTimeout = setTimeout(function() {
			        var scrollTop = window.pageYOffset;
			        lazyloadImages.forEach(function(img) {
			            if(img.offsetTop < (window.innerHeight + scrollTop)) {
			              img.src = img.dataset.src;
			              img.classList.remove('lazy');
			            }
			        });
			        if(lazyloadImages.length == 0) {
			          document.removeEventListener("scroll", lazyload);
			          window.removeEventListener("resize", lazyload);
			          window.removeEventListener("orientationChange", lazyload);
			        }
			      }, 20);
			    }

			    document.addEventListener("scroll", lazyload);
			    window.addEventListener("resize", lazyload);
			    window.addEventListener("orientationChange", lazyload);
			  }
			})
		</script>
	<script type="text/javascript">AjaxForm.initialize({"assetsUrl":"\/assets\/components\/ajaxform\/","actionUrl":"\/assets\/components\/ajaxform\/action.php","closeMessage":"\u0437\u0430\u043a\u0440\u044b\u0442\u044c \u0432\u0441\u0435","formSelector":"form.subscribe_form","pageId":1});</script>
