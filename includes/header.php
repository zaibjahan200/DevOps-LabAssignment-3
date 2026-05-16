<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title><?php if (isset($title) && isset($subtitle)) {echo $title . " | " . $subtitle;} else {echo "DevOps Terminal Exam | Welcome";}?></title>
		<meta name="description" content="DevOps Terminal Exam - Welcome Page">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"> 

		<script src="assets/js/jquery.min.js"></script>
		
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:300,400,500,600,700%7CAsap+Condensed:500" media="all">
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700", "Asap+Condensed:500"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Web font -->

		<!--begin::Page Vendors Styles -->
		<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->

		<!--begin::Base Styles -->
		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="assets/fyp/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/fyp/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Base Styles -->
		<link rel="shortcut icon" href="assets/fyp/media/img/logo/favicon.ico" />
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-37564768-1', 'auto');
			ga('send', 'pageview');
		</script>
		<style type="text/css">span.im-caret {
				-webkit-animation: 1s blink step-end infinite;
				animation: 1s blink step-end infinite;
			}

			@keyframes blink {
				from, to {
					border-right-color: black;
				}
				50% {
					border-right-color: transparent;
				}
			}

			@-webkit-keyframes blink {
				from, to {
					border-right-color: black;
				}
				50% {
					border-right-color: transparent;
				}
			}

			span.im-static {
				color: grey;
			}

			div.im-colormask {
				display: inline-block;
				border-style: inset;
				border-width: 2px;
				-webkit-appearance: textfield;
				-moz-appearance: textfield;
				appearance: textfield;
			}

			div.im-colormask > input {
				position: absolute;
				display: inline-block;
				background-color: transparent;
				color: transparent;
				-webkit-appearance: caret;
				-moz-appearance: caret;
				appearance: caret;
				border-style: none;
				left: 0; /*calculated*/
			}

			div.im-colormask > input:focus {
				outline: none;
			}

			div.im-colormask > input::-moz-selection{
				background: none;
			}

			div.im-colormask > input::selection{
				background: none;
			}
			div.im-colormask > input::-moz-selection{
				background: none;
			}

			div.im-colormask > div {
				color: black;
				display: inline-block;
				width: 100px; /*calculated*/
			}</style>
			
			<style type="text/css">/* Chart.js */
				@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
			</style>
			<script src="assets/fyp/base/scripts.bundle.js" type="text/javascript"></script>
			
			<script src="assets/app/js/dashboard.js" type="text/javascript"></script>