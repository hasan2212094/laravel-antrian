<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Antrian TPS 46</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- theme meta -->
  <meta name="theme-name" content="dot" />

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/dot_template/plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="/dot_template/plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="icon" href="/dot_template/images/favicon.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="/dot_template/assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	<header class="banner overlay bg-cover" data-background="/dot_template/images/banner.jpg">
			
		<!-- banner -->
		<div class="container section">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<h1 class="text-white mb-3">TPS 46</h1>
					<p class="text-white mb-4"> Jujur, Adil dan Terpercaya untuk suara rakyat Indonesia</p>
					
				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">Daftar Antrian Dpt, Dpttb dan DPK</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a  class="  px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_dpt}} </h3>
						<p class="mb-0">Total DPT</p>
					</a>

					<a onclick="dpt_perempuan()" class="px-4 py-5 bg-white shadow text-center d-block match-height" id="dpt_perempuan">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_dpt_perempuan}}</h3>
						<p class="mb-0">DPT Perempuan</p>
					</a>

					<a onclick="dpt_laki()" class="px-4 py-5 bg-white shadow text-center d-block match-height" id="dpt_laki">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_dpt_laki}}</h3>
						<p class="mb-0">DPT Laki-laki</p>
					</a>

				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a   class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_dpttb}}</h3>
						<p class="mb-0">DPTTB</p>
					</a>
					<a  onclick="dpttb_perempuan()"   class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_dpttb_perempuan}}</h3>
						<p class="mb-0">DPTTB Perempuan</p>
					</a>
					<a  onclick="dpttb_laki()"  class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_dpttb_laki}}</h3>
						<p class="mb-0">DPTTB Laki-laki</p>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a  class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_dpk}}</h3>
						<p class="mb-0">DPK</p>
					</a>
					</a>
					<a  onclick="dpk_perempuan()"   class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_dpk_perempuan}}</h3>
						<p class="mb-0">DPK Perempuan</p>
					</a>
					<a  onclick="dpk_laki()"  class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{$antri_dpk_laki}}</h3>
						<p class="mb-0">DPK Laki-laki</p>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->

	
	<!-- footer -->
	<footer class="section pb-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 text-md-left text-center">
				
				</div>
				<div class="col-md-4 text-md-right text-center">
					
				</div>
			</div>
		</div>
	</footer>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="/dot_template/plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="/dot_template/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="/dot_template/plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="/dot_template/assets/script.js"></script>
    <script >

    function dpt_perempuan(){
        var audio = new Audio('/Audio/dpt.mp3')
        audio.play()
        audio.addEventListener('ended',function(){
            location.href = "/antri_dpt_perempuan/"+{{$antri_dpt_perempuan}}+"/"+{{$antri_dpt_laki}}+"/"+{{$antri_dpttb_perempuan}}+"/"+{{$antri_dpttb_laki}}+"/"+{{$antri_dpk_perempuan}}+"/"+{{$antri_dpk_laki}}
        })
        total_perempuan+=1;
    }

    function dpt_laki(){
        var audio = new Audio('/Audio/dpt.mp3')
        audio.play()
        audio.addEventListener('ended',function(){
            location.href = "/antri_dpt_laki/"+{{$antri_dpt_perempuan}}+"/"+{{$antri_dpt_laki}}+"/"+{{$antri_dpttb_perempuan}}+"/"+{{$antri_dpttb_laki}}+"/"+{{$antri_dpk_perempuan}}+"/"+{{$antri_dpk_laki}}
        })
    }
	   function dpttb_perempuan(){
            var audio = new Audio('/Audio/dpttb.mp3')
            audio.play()
            audio.addEventListener('ended',function(){
                location.href = "/antri_dpttb_perempuan/"+{{$antri_dpt_perempuan}}+"/"+{{$antri_dpt_laki}}+"/"+{{$antri_dpttb_perempuan}}+"/"+{{$antri_dpttb_laki}}+"/"+{{$antri_dpk_perempuan}}+"/"+{{$antri_dpk_laki}}
            })
		}
		function dpttb_laki(){
            var audio = new Audio('/Audio/dpttb.mp3')
            audio.play()
            audio.addEventListener('ended',function(){
                location.href = "/antri_dpttb_laki/"+{{$antri_dpt_perempuan}}+"/"+{{$antri_dpt_laki}}+"/"+{{$antri_dpttb_perempuan}}+"/"+{{$antri_dpttb_laki}}+"/"+{{$antri_dpk_perempuan}}+"/"+{{$antri_dpk_laki}}
            })
		}

		function dpk_perempuan(){
            var audio = new Audio('/Audio/dpk.mp3')
            audio.play()
            audio.addEventListener('ended',function(){
                location.href = "/antri_dpk_perempuan/"+{{$antri_dpt_perempuan}}+"/"+{{$antri_dpt_laki}}+"/"+{{$antri_dpttb_perempuan}}+"/"+{{$antri_dpttb_laki}}+"/"+{{$antri_dpk_perempuan}}+"/"+{{$antri_dpk_laki}}
            })
		}
		function dpk_laki(){
            var audio = new Audio('/Audio/dpk.mp3')
            audio.play()
            audio.addEventListener('ended',function(){
                location.href = "/antri_dpk_laki/"+{{$antri_dpt_perempuan}}+"/"+{{$antri_dpt_laki}}+"/"+{{$antri_dpttb_perempuan}}+"/"+{{$antri_dpttb_laki}}+"/"+{{$antri_dpk_perempuan}}+"/"+{{$antri_dpk_laki}}
            })
		}

    </script>
</body>

</html>
