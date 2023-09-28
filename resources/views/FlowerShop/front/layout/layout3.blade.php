<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('front/fontawesome-free-6.3.0-web/css/all.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Main -->
    <link rel="stylesheet" href="{{url('front/css/common-3.css')}}">    
    <link rel="stylesheet" href="{{url('front/css/main-3.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{url('front/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('front/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css')}}"> 
    <!-- Icon -->
    <link rel="stylesheet" href="{{url('front/vendors/ti-icons/css/themify-icons.css')}}">
    <!-- <link rel="icon" type="image/x-icon" href="{{url('front/images/logo4.png')}}"> -->
    <link rel="icon" type="image/x-icon" href="{{url('front/images/flower-logo2.png')}}">
    <!-- Easy zoom -->
    <link rel="stylesheet" href="{{url('FlowerShop/front/zoom/i-like-robots-EasyZoom-55afefc/css/easyzoom.css')}}"> 



    <!-- <script src="script_carousel.js"></script> -->
    <!-- <link rel="stylesheet" href="slider.css"> -->
    <title>Flower shop</title>
</head>
<body>
    <div id="loading">
    <img id="loading-image" src="{{url('FlowerShop/front/images-3/Iphone-spinner-2.gif')}}" alt="Loading..." />
    </div>
    <div id="ajax_loading_overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    <div id="app">
        @include('FlowerShop.front.web_components3.header')
        @yield('content')
        @include('FlowerShop.front.web_components3.footer')
    </div>
    <script src="{{url('FlowerShop/front/js/script-3.js')}}" ></script>
    <script src="{{url('FlowerShop/front/js/custom.js')}}" ></script>
    <script src="{{url('FlowerShop/front/js/jquery-3.7.0.min.js')}}" ></script>
    <script type="text/javascript" src="{{ url('FlowerShop/front/js/owl-carousel-3.js')}}"></script>
    <script src="{{url('front/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js')}}"></script>
    <script src="{{url('front/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js')}}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{url('FlowerShop/front/zoom/i-like-robots-EasyZoom-55afefc/dist/easyzoom.js')}}"></script>
    @include('FlowerShop.front.layout.scripts')
    <script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});

		// Setup toggles example
		var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

		$('.toggle').on('click', function() {
			var $this = $(this);

			if ($this.data("active") === true) {
				$this.text("Switch on").data("active", false);
				api2.teardown();
			} else {
				$this.text("Switch off").data("active", true);
				api2._init();
			}
		});
	</script>
    <script>
        $(window).on('load', function () {
            $('#loading').hide();
        }) 
    </script>
    <script>
        jQuery(function($){
        $(document).ajaxSend(function() {
            $("#ajax_loading_overlay").fadeIn(300);　
        });
        });
    </script>
</body>
</html>