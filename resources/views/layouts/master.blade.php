<!doctype html>
<html lang="en">

<head>
	<title>Admin Angsuran Perumahan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/metisMenu/metisMenu.css')}}">
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/toastr/toastr.min.css')}}">
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}">
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
	<!-- MAIN CSS -->
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('tema/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('tema/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('tema/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('tema/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
            @include('layouts.includes._navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
            @include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
        <!-- MAIN CONTENT -->
        <div id="main-content">
			<div class="container-fluid">
				<h1 class="sr-only">Dashboard</h1>
				<!-- WEBSITE ANALYTICS -->
				<div class="dashboard-section">
					<div class="section-heading clearfix">
				        <!-- SALES SUMMARY -->
				        <div class="dashboard-section">
                            <!-- <div class="panel-content"> -->
                                <!-- <div class="row"> -->
                                 @yield('content')
                                <!-- </div> -->
                            <!-- </div> -->
				        </div>
                        <!-- END SALES SUMMARY -->
                    </div>
                </div>
            </div>
        </div>
		<!-- END MAIN CONTENT -->
		<div class="clearfix">

        </div>  
		<footer>
			<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('tema/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('tema/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('tema/assets/vendor/metisMenu/metisMenu.js')}}"></script>
	<script src="{{asset('tema/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('tema/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('tema/assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js')}}"></script>
	<script src="{{asset('tema/assets/vendor/toastr/toastr.js')}}"></script>
	<script src="{{asset('tema/assets/scripts/common.js')}}"></script>
	<script src="{{asset('tema/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
	<script src="{{asset('tema/assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
	<script src="{{asset('tema/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
	<script src="{{asset('tema/assets/scripts/common.js')}}"></script>
	<script>
	$(function() {

		// Masked Inputs
		$('#phone').mask('(999) 999-9999');
		$('#phone-ex').mask('(999) 999-9999? x99999');
		$('#tax-id').mask('99-9999999');
		$('#ssn').mask('999-99-9999');
		$('#product-key').mask('a*-999-a999');


		// Multiselect
		$('#multiselect1, #multiselect2, #single-selection, #multiselect5, #multiselect6').multiselect({
			maxHeight: 300
		});

		$('#multiselect3-all').multiselect({
			includeSelectAllOption: true,
		});

		$('#multiselect4-filter').multiselect({
			enableFiltering: true,
			enableCaseInsensitiveFiltering: true,
			maxHeight: 200
		});

		$('#multiselect-size').multiselect({
			buttonClass: 'btn btn-default btn-sm'
		});

		$('#multiselect-link').multiselect({
			buttonClass: 'btn btn-link'
		});

		$('#multiselect-color').multiselect({
			buttonClass: 'btn btn-primary'
		});

		$('#multiselect-color2').multiselect({
			buttonClass: 'btn btn-success'
		});


		// Date picker
		$('.inline-datepicker').datepicker({
			todayHighlight: true
		});

	});
	</script>
</body>

</html>
