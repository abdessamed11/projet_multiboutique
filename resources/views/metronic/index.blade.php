<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="{{ asset('assetss/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet">

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="{{ asset('assetss/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" >

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{ asset('assetss/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet">
		<link href="{{ asset('assetss/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet">
		<link href="{{ asset('assetss/vendors/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet"  >
		<link href="{{ asset('assetss/vendors/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/summernote/dist/summernote.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/animate.css/animate.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/morris.js/morris.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" >
		<link href="{{ asset('assetss/vendors/custom/vendors/fontawesome5/css/all.min.css') }}" rel="stylesheet" >

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset('assetss/demo/demo9/base/style.bundle.css') }}" rel="stylesheet" >

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{ asset('assetss/media/logos/favicon.ico') }}" />
	</head>



            @yield('content')


		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#591df1",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="{{ asset('assetss/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="{{ asset('assetss/vendors/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/components/vendors/bootstrap-datepicker/init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/components/vendors/bootstrap-timepicker/init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/components/vendors/bootstrap-switch/init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/autosize/dist/autosize.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/summernote/dist/summernote.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/markdown/lib/markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/components/vendors/bootstrap-markdown/init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/components/vendors/bootstrap-notify/init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/components/vendors/jquery-validation/init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/components/vendors/sweetalert2/init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/general/dompurify/dist/purify.js') }}" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{ asset('assetss/demo/demo9/base/scripts.bundle.js') }}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="{{ asset('assetss/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="{{ asset('assetss/vendors/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{ asset('assetss/app/custom/general/dashboard.js') }}" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--begin::Global App Bundle(used by all pages) -->
		<script src="{{ asset('assetss/app/bundle/app.bundle.js') }}" type="text/javascript"></script>

		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>




