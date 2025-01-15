<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url('template') ?>/assets/assets/images/favicon.ico">
	<title>LKS SMK KAB TEGAL</title>
	<!-- Simple bar CSS -->
	<link rel="stylesheet" href="<?= base_url('template') ?>/css/simplebar.css">
	<!-- Fonts CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?= base_url('template') ?>/css/feather.css">
	<!-- Date Range Picker CSS -->
	<link rel="stylesheet" href="<?= base_url('template') ?>/css/daterangepicker.css">
	<!-- App CSS -->
	<link rel="stylesheet" href="<?= base_url('template') ?>/css/app-light.css" id="lightTheme" disabled="">
	<link rel="stylesheet" href="<?= base_url('template') ?>/css/app-dark.css" id="darkTheme">
	<style class="datamaps-style-block">
		.datamap path.datamaps-graticule {
			fill: none;
			stroke: #777;
			stroke-width: 0.5px;
			stroke-opacity: .5;
			pointer-events: none;
		}

		.datamap .labels {
			pointer-events: none;
		}

		.datamap path:not(.datamaps-arc),
		.datamap circle,
		.datamap line {
			stroke: #FFFFFF;
			vector-effect: non-scaling-stroke;
			stroke-width: 1px;
		}

		.datamaps-legend dt,
		.datamaps-legend dd {
			float: left;
			margin: 0 3px 0 0;
		}

		.datamaps-legend dd {
			width: 20px;
			margin-right: 6px;
			border-radius: 3px;
		}

		.datamaps-legend {
			padding-bottom: 20px;
			z-index: 1001;
			position: absolute;
			left: 4px;
			font-size: 12px;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		}

		.datamaps-hoverover {
			display: none;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		}

		.hoverinfo {
			padding: 4px;
			border-radius: 1px;
			background-color: #FFF;
			box-shadow: 1px 1px 5px #CCC;
			font-size: 12px;
			border: 1px solid #CCC;
		}

		.hoverinfo hr {
			border: 1px dotted #CCC;
		}
	</style>
	<style type="text/css">
		.apexcharts-canvas {
			position: relative;
			user-select: none;
			/* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
		}


		/* scrollbar is not visible by default for legend, hence forcing the visibility */
		.apexcharts-canvas ::-webkit-scrollbar {
			-webkit-appearance: none;
			width: 6px;
		}

		.apexcharts-canvas ::-webkit-scrollbar-thumb {
			border-radius: 4px;
			background-color: rgba(0, 0, 0, .5);
			box-shadow: 0 0 1px rgba(255, 255, 255, .5);
			-webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
		}


		.apexcharts-inner {
			position: relative;
		}

		.apexcharts-text tspan {
			font-family: inherit;
		}

		.legend-mouseover-inactive {
			transition: 0.15s ease all;
			opacity: 0.20;
		}

		.apexcharts-series-collapsed {
			opacity: 0;
		}

		.apexcharts-tooltip {
			border-radius: 5px;
			box-shadow: 2px 2px 6px -4px #999;
			cursor: default;
			font-size: 14px;
			left: 62px;
			opacity: 0;
			pointer-events: none;
			position: absolute;
			top: 20px;
			overflow: hidden;
			white-space: nowrap;
			z-index: 12;
			transition: 0.15s ease all;
		}

		.apexcharts-tooltip.apexcharts-active {
			opacity: 1;
			transition: 0.15s ease all;
		}

		.apexcharts-tooltip.apexcharts-theme-light {
			border: 1px solid #e3e3e3;
			background: rgba(255, 255, 255, 0.96);
		}

		.apexcharts-tooltip.apexcharts-theme-dark {
			color: #fff;
			background: rgba(30, 30, 30, 0.8);
		}

		.apexcharts-tooltip * {
			font-family: inherit;
		}


		.apexcharts-tooltip-title {
			padding: 6px;
			font-size: 15px;
			margin-bottom: 4px;
		}

		.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
			background: #ECEFF1;
			border-bottom: 1px solid #ddd;
		}

		.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
			background: rgba(0, 0, 0, 0.7);
			border-bottom: 1px solid #333;
		}

		.apexcharts-tooltip-text-value,
		.apexcharts-tooltip-text-z-value {
			display: inline-block;
			font-weight: 600;
			margin-left: 5px;
		}

		.apexcharts-tooltip-text-z-label:empty,
		.apexcharts-tooltip-text-z-value:empty {
			display: none;
		}

		.apexcharts-tooltip-text-value,
		.apexcharts-tooltip-text-z-value {
			font-weight: 600;
		}

		.apexcharts-tooltip-marker {
			width: 12px;
			height: 12px;
			position: relative;
			top: 0px;
			margin-right: 10px;
			border-radius: 50%;
		}

		.apexcharts-tooltip-series-group {
			padding: 0 10px;
			display: none;
			text-align: left;
			justify-content: left;
			align-items: center;
		}

		.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
			opacity: 1;
		}

		.apexcharts-tooltip-series-group.apexcharts-active,
		.apexcharts-tooltip-series-group:last-child {
			padding-bottom: 4px;
		}

		.apexcharts-tooltip-series-group-hidden {
			opacity: 0;
			height: 0;
			line-height: 0;
			padding: 0 !important;
		}

		.apexcharts-tooltip-y-group {
			padding: 6px 0 5px;
		}

		.apexcharts-tooltip-candlestick {
			padding: 4px 8px;
		}

		.apexcharts-tooltip-candlestick>div {
			margin: 4px 0;
		}

		.apexcharts-tooltip-candlestick span.value {
			font-weight: bold;
		}

		.apexcharts-tooltip-rangebar {
			padding: 5px 8px;
		}

		.apexcharts-tooltip-rangebar .category {
			font-weight: 600;
			color: #777;
		}

		.apexcharts-tooltip-rangebar .series-name {
			font-weight: bold;
			display: block;
			margin-bottom: 5px;
		}

		.apexcharts-xaxistooltip {
			opacity: 0;
			padding: 9px 10px;
			pointer-events: none;
			color: #373d3f;
			font-size: 13px;
			text-align: center;
			border-radius: 2px;
			position: absolute;
			z-index: 10;
			background: #ECEFF1;
			border: 1px solid #90A4AE;
			transition: 0.15s ease all;
		}

		.apexcharts-xaxistooltip.apexcharts-theme-dark {
			background: rgba(0, 0, 0, 0.7);
			border: 1px solid rgba(0, 0, 0, 0.5);
			color: #fff;
		}

		.apexcharts-xaxistooltip:after,
		.apexcharts-xaxistooltip:before {
			left: 50%;
			border: solid transparent;
			content: " ";
			height: 0;
			width: 0;
			position: absolute;
			pointer-events: none;
		}

		.apexcharts-xaxistooltip:after {
			border-color: rgba(236, 239, 241, 0);
			border-width: 6px;
			margin-left: -6px;
		}

		.apexcharts-xaxistooltip:before {
			border-color: rgba(144, 164, 174, 0);
			border-width: 7px;
			margin-left: -7px;
		}

		.apexcharts-xaxistooltip-bottom:after,
		.apexcharts-xaxistooltip-bottom:before {
			bottom: 100%;
		}

		.apexcharts-xaxistooltip-top:after,
		.apexcharts-xaxistooltip-top:before {
			top: 100%;
		}

		.apexcharts-xaxistooltip-bottom:after {
			border-bottom-color: #ECEFF1;
		}

		.apexcharts-xaxistooltip-bottom:before {
			border-bottom-color: #90A4AE;
		}

		.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
			border-bottom-color: rgba(0, 0, 0, 0.5);
		}

		.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
			border-bottom-color: rgba(0, 0, 0, 0.5);
		}

		.apexcharts-xaxistooltip-top:after {
			border-top-color: #ECEFF1
		}

		.apexcharts-xaxistooltip-top:before {
			border-top-color: #90A4AE;
		}

		.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
			border-top-color: rgba(0, 0, 0, 0.5);
		}

		.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
			border-top-color: rgba(0, 0, 0, 0.5);
		}

		.apexcharts-xaxistooltip.apexcharts-active {
			opacity: 1;
			transition: 0.15s ease all;
		}

		.apexcharts-yaxistooltip {
			opacity: 0;
			padding: 4px 10px;
			pointer-events: none;
			color: #373d3f;
			font-size: 13px;
			text-align: center;
			border-radius: 2px;
			position: absolute;
			z-index: 10;
			background: #ECEFF1;
			border: 1px solid #90A4AE;
		}

		.apexcharts-yaxistooltip.apexcharts-theme-dark {
			background: rgba(0, 0, 0, 0.7);
			border: 1px solid rgba(0, 0, 0, 0.5);
			color: #fff;
		}

		.apexcharts-yaxistooltip:after,
		.apexcharts-yaxistooltip:before {
			top: 50%;
			border: solid transparent;
			content: " ";
			height: 0;
			width: 0;
			position: absolute;
			pointer-events: none;
		}

		.apexcharts-yaxistooltip:after {
			border-color: rgba(236, 239, 241, 0);
			border-width: 6px;
			margin-top: -6px;
		}

		.apexcharts-yaxistooltip:before {
			border-color: rgba(144, 164, 174, 0);
			border-width: 7px;
			margin-top: -7px;
		}

		.apexcharts-yaxistooltip-left:after,
		.apexcharts-yaxistooltip-left:before {
			left: 100%;
		}

		.apexcharts-yaxistooltip-right:after,
		.apexcharts-yaxistooltip-right:before {
			right: 100%;
		}

		.apexcharts-yaxistooltip-left:after {
			border-left-color: #ECEFF1;
		}

		.apexcharts-yaxistooltip-left:before {
			border-left-color: #90A4AE;
		}

		.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
			border-left-color: rgba(0, 0, 0, 0.5);
		}

		.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
			border-left-color: rgba(0, 0, 0, 0.5);
		}

		.apexcharts-yaxistooltip-right:after {
			border-right-color: #ECEFF1;
		}

		.apexcharts-yaxistooltip-right:before {
			border-right-color: #90A4AE;
		}

		.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
			border-right-color: rgba(0, 0, 0, 0.5);
		}

		.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
			border-right-color: rgba(0, 0, 0, 0.5);
		}

		.apexcharts-yaxistooltip.apexcharts-active {
			opacity: 1;
		}

		.apexcharts-yaxistooltip-hidden {
			display: none;
		}

		.apexcharts-xcrosshairs,
		.apexcharts-ycrosshairs {
			pointer-events: none;
			opacity: 0;
			transition: 0.15s ease all;
		}

		.apexcharts-xcrosshairs.apexcharts-active,
		.apexcharts-ycrosshairs.apexcharts-active {
			opacity: 1;
			transition: 0.15s ease all;
		}

		.apexcharts-ycrosshairs-hidden {
			opacity: 0;
		}

		.apexcharts-selection-rect {
			cursor: move;
		}

		.svg_select_boundingRect,
		.svg_select_points_rot {
			pointer-events: none;
			opacity: 0;
			visibility: hidden;
		}

		.apexcharts-selection-rect+g .svg_select_boundingRect,
		.apexcharts-selection-rect+g .svg_select_points_rot {
			opacity: 0;
			visibility: hidden;
		}

		.apexcharts-selection-rect+g .svg_select_points_l,
		.apexcharts-selection-rect+g .svg_select_points_r {
			cursor: ew-resize;
			opacity: 1;
			visibility: visible;
		}

		.svg_select_points {
			fill: #efefef;
			stroke: #333;
			rx: 2;
		}

		.apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
			cursor: crosshair
		}

		.apexcharts-canvas.apexcharts-zoomable .hovering-pan {
			cursor: move
		}

		.apexcharts-zoom-icon,
		.apexcharts-zoomin-icon,
		.apexcharts-zoomout-icon,
		.apexcharts-reset-icon,
		.apexcharts-pan-icon,
		.apexcharts-selection-icon,
		.apexcharts-menu-icon,
		.apexcharts-toolbar-custom-icon {
			cursor: pointer;
			width: 20px;
			height: 20px;
			line-height: 24px;
			color: #6E8192;
			text-align: center;
		}

		.apexcharts-zoom-icon svg,
		.apexcharts-zoomin-icon svg,
		.apexcharts-zoomout-icon svg,
		.apexcharts-reset-icon svg,
		.apexcharts-menu-icon svg {
			fill: #6E8192;
		}

		.apexcharts-selection-icon svg {
			fill: #444;
			transform: scale(0.76)
		}

		.apexcharts-theme-dark .apexcharts-zoom-icon svg,
		.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
		.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
		.apexcharts-theme-dark .apexcharts-reset-icon svg,
		.apexcharts-theme-dark .apexcharts-pan-icon svg,
		.apexcharts-theme-dark .apexcharts-selection-icon svg,
		.apexcharts-theme-dark .apexcharts-menu-icon svg,
		.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
			fill: #f3f4f5;
		}

		.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
		.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
		.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
			fill: #008FFB;
		}

		.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
		.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
		.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
		.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
		.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
		.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
			fill: #333;
		}

		.apexcharts-selection-icon,
		.apexcharts-menu-icon {
			position: relative;
		}

		.apexcharts-reset-icon {
			margin-left: 5px;
		}

		.apexcharts-zoom-icon,
		.apexcharts-reset-icon,
		.apexcharts-menu-icon {
			transform: scale(0.85);
		}

		.apexcharts-zoomin-icon,
		.apexcharts-zoomout-icon {
			transform: scale(0.7)
		}

		.apexcharts-zoomout-icon {
			margin-right: 3px;
		}

		.apexcharts-pan-icon {
			transform: scale(0.62);
			position: relative;
			left: 1px;
			top: 0px;
		}

		.apexcharts-pan-icon svg {
			fill: #fff;
			stroke: #6E8192;
			stroke-width: 2;
		}

		.apexcharts-pan-icon.apexcharts-selected svg {
			stroke: #008FFB;
		}

		.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
			stroke: #333;
		}

		.apexcharts-toolbar {
			position: absolute;
			z-index: 11;
			max-width: 176px;
			text-align: right;
			border-radius: 3px;
			padding: 0px 6px 2px 6px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.apexcharts-menu {
			background: #fff;
			position: absolute;
			top: 100%;
			border: 1px solid #ddd;
			border-radius: 3px;
			padding: 3px;
			right: 10px;
			opacity: 0;
			min-width: 110px;
			transition: 0.15s ease all;
			pointer-events: none;
		}

		.apexcharts-menu.apexcharts-menu-open {
			opacity: 1;
			pointer-events: all;
			transition: 0.15s ease all;
		}

		.apexcharts-menu-item {
			padding: 6px 7px;
			font-size: 12px;
			cursor: pointer;
		}

		.apexcharts-theme-light .apexcharts-menu-item:hover {
			background: #eee;
		}

		.apexcharts-theme-dark .apexcharts-menu {
			background: rgba(0, 0, 0, 0.7);
			color: #fff;
		}

		@media screen and (min-width: 768px) {
			.apexcharts-canvas:hover .apexcharts-toolbar {
				opacity: 1;
			}
		}

		.apexcharts-datalabel.apexcharts-element-hidden {
			opacity: 0;
		}

		.apexcharts-pie-label,
		.apexcharts-datalabels,
		.apexcharts-datalabel,
		.apexcharts-datalabel-label,
		.apexcharts-datalabel-value {
			cursor: default;
			pointer-events: none;
		}

		.apexcharts-pie-label-delay {
			opacity: 0;
			animation-name: opaque;
			animation-duration: 0.3s;
			animation-fill-mode: forwards;
			animation-timing-function: ease;
		}

		.apexcharts-canvas .apexcharts-element-hidden {
			opacity: 0;
		}

		.apexcharts-hide .apexcharts-series-points {
			opacity: 0;
		}

		.apexcharts-gridline,
		.apexcharts-annotation-rect,
		.apexcharts-tooltip .apexcharts-marker,
		.apexcharts-area-series .apexcharts-area,
		.apexcharts-line,
		.apexcharts-zoom-rect,
		.apexcharts-toolbar svg,
		.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
		.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
		.apexcharts-radar-series path,
		.apexcharts-radar-series polygon {
			pointer-events: none;
		}


		/* markers */

		.apexcharts-marker {
			transition: 0.15s ease all;
		}

		@keyframes opaque {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}


		/* Resize generated styles */

		@keyframes resizeanim {
			from {
				opacity: 0;
			}

			to {
				opacity: 0;
			}
		}

		.resize-triggers {
			animation: 1ms resizeanim;
			visibility: hidden;
			opacity: 0;
		}

		.resize-triggers,
		.resize-triggers>div,
		.contract-trigger:before {
			content: " ";
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			overflow: hidden;
		}

		.resize-triggers>div {
			background: #eee;
			overflow: auto;
		}

		.contract-trigger:before {
			width: 200%;
			height: 200%;
		}
	</style>
	<style type="text/css">
		.jqstooltip {
			position: absolute;
			left: 0px;
			top: 0px;
			visibility: hidden;
			background: rgb(0, 0, 0) transparent;
			background-color: rgba(0, 0, 0, 0.6);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
			-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
			color: white;
			font: 10px arial, san serif;
			text-align: left;
			white-space: nowrap;
			padding: 5px;
			border: 1px solid white;
			box-sizing: content-box;
			z-index: 10000;
		}

		.jqsfield {
			color: white;
			font: 10px arial, san serif;
			text-align: left;
		}
	</style>
</head>





<body class="horizontal light  ">
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
			<div class="container-fluid">
				<a class="navbar-brand mx-lg-1 mr-0" href="welcome">
					<span class="avatar avatar-sm mt-2">
						<img src="<?= base_url('template') ?>/assets/foto/logo.png" alt="..." class="avatar-img rounded-circle">
					</span> </a>
				<button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
					<i class="fe fe-menu navbar-toggler-icon"></i>
				</button>
				<div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
					<a href="#" class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
						<i class="fe fe-x"><span class="sr-only"></span></i>
					</a>
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a href="welcome" id="dashboardDropdown" class="nav-link" role="button">
								<span class="ml-lg-2">Beranda</span><span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="ml-lg-2">Mata Lomba</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
								<a class="nav-link pl-lg-2" href="./ui-color.html"><span class="ml-1">Colors</span></a>
								<a class="nav-link pl-lg-2" href="./ui-typograpy.html"><span class="ml-1">Typograpy</span></a>
								<a class="nav-link pl-lg-2" href="./ui-icons.html"><span class="ml-1">Icons</span></a>
								<a class="nav-link pl-lg-2" href="./ui-buttons.html"><span class="ml-1">Buttons</span></a>
								<a class="nav-link pl-lg-2" href="./ui-notification.html"><span class="ml-1">Notifications</span></a>
								<a class="nav-link pl-lg-2" href="./ui-modals.html"><span class="ml-1">Modals</span></a>
								<a class="nav-link pl-lg-2" href="./ui-tabs-accordion.html"><span class="ml-1">Tabs &amp; Accordion</span></a>
								<a class="nav-link pl-lg-2" href="./ui-progress.html"><span class="ml-1">Progress</span></a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="widgets.html">
								<span class="ml-lg-2">Berita</span>
								<span class="badge badge-pill badge-primary">New</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#" id="formsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="ml-lg-2">Pendaftaran</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="formsDropdown">
								<a class="nav-link pl-lg-2" href="./form_elements.html"><span class="ml-1"> Koordinator</span></a>
								<a class="nav-link pl-lg-2" href="./form_advanced.html"><span class="ml-1"> Peserta</span></a>
								<a class="nav-link pl-lg-2" href="./form_validation.html"><span class="ml-1">Validation</span></a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" id="tablesDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="ml-lg-2">Download</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="tablesDropdown">
								<a class="nav-link pl-lg-2" href="./table_basic.html"><span class="ml-1">Basic Tables</span></a>
								<a class="nav-link pl-lg-2" href="./table_advanced.html"><span class="ml-1">Advanced Tables</span></a>
								<a class="nav-link pl-lg-2" href="./table_datatables.html"><span class="ml-1">Data Tables</span></a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="dropdown-toggle nav-link pl-lg-3" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Apps </a>
							<ul class="dropdown-menu" aria-labelledby="appsDropdown">
								<li class="nav-item">
									<a class="nav-link pl-lg-2" href="./calendar.html">
										<span class="ml-1">Calendar</span>
									</a>
								</li>
								<li class="nav-item dropdown">
									<a class="dropdown-toggle nav-link pl-lg-2" href="#" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="ml-1">Contacts</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="contactDropdown">
										<a class="nav-link pl-lg-2" href="./contacts-list.html"><span class="ml-1">Contact List</span></a>
										<a class="nav-link pl-lg-2" href="./contacts-grid.html"><span class="ml-1">Contact Grid</span></a>
										<a class="nav-link pl-lg-2" href="./contacts-new.html"><span class="ml-1">New Contact</span></a>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="dropdown-toggle nav-link pl-lg-2" href="#" data-toggle="collapse" id="profileDropdown" aria-expanded="false">
										<span class="ml-1">Profile</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="profileDropdown">
										<a class="nav-link pl-lg-2" href="./profile.html"><span class="ml-1">Overview</span></a>
										<a class="nav-link pl-lg-2" href="./profile-settings.html"><span class="ml-1">Settings</span></a>
										<a class="nav-link pl-lg-2" href="./profile-security.html"><span class="ml-1">Security</span></a>
										<a class="nav-link pl-lg-2" href="./profile-notification.html"><span class="ml-1">Notifications</span></a>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="dropdown-toggle nav-link pl-lg-2" href="#" data-toggle="collapse" id="fileDropdown" aria-expanded="false">
										<span class="ml-1">File Manager</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="fileDropdown">
										<a class="nav-link pl-lg-2" href="./files-list.html"><span class="ml-1">Files List</span></a>
										<a class="nav-link pl-lg-2" href="./files-grid.html"><span class="ml-1">Files Grid</span></a>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="dropdown-toggle nav-link pl-lg-2" href="#" data-toggle="collapse" id="supportDropdown" aria-expanded="false">
										<span class="ml-1">Help Desk</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="supportDropdown">
										<a class="nav-link pl-lg-2" href="./support-center.html"><span class="ml-1">Home</span></a>
										<a class="nav-link pl-lg-2" href="./support-tickets.html"><span class="ml-1">Tickets</span></a>
										<a class="nav-link pl-lg-2" href="./support-ticket-detail.html"><span class="ml-1">Ticket Detail</span></a>
										<a class="nav-link pl-lg-2" href="./support-faqs.html"><span class="ml-1">FAQs</span></a>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<form class="form-inline ml-md-auto d-none d-lg-flex searchform text-muted">
					<input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
				</form>
				<ul class="navbar-nav d-flex flex-row">
					<li class="nav-item">
						<a class="nav-link text-muted my-2" href="./#" id="modeSwitcher" data-mode="dark">
							<i class="fe fe-sun fe-16"></i>
						</a>
					</li>
					<li class="nav-item nav-notif">
						<a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
							<i class="fe fe-bell fe-16"></i>
							<span class="dot dot-md bg-success"></span>
						</a>
					</li>
					<li class="nav-item dropdown ml-lg-0">
						<a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="avatar avatar-sm mt-2">
								<img src="<?= base_url('template') ?>/assets/assets/images/user.png" alt="..." class="avatar-img rounded-circle">
							</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

							<li class="nav-item">
								<a href="<?= base_url('template') ?>/login" class="dropdown-item">
									<i class="fe fe-unlock mr-2"></i> Login

								</a>
							</li>
							<li class="nav-item"><a href="<?= base_url('template') ?>/login" class="dropdown-item">
								</a><a href="<?= base_url('template') ?>/login" class="dropdown-item">
									<i class="fe fe-unlock mr-2"></i> Setting

								</a></li>
							<li class="nav-item"><a href="<?= base_url('template') ?>/login" class="dropdown-item">
								</a><a href="<?= base_url('template') ?>/login" class="dropdown-item">
									<i class="fe fe-unlock mr-2"></i> Profil

								</a></li>
							<li class="nav-item"><a href="<?= base_url('template') ?>/login" class="dropdown-item">
								</a><a class="nav-link pl-3" href="#"></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
  

  <!-- Content Wrapper. Contains page content -->
		<div class="content">
			<div class="container">
				<div class="content-header">
					<main role="main" class="main-content">
						<div class="container-fluid">
							<div class="row justify-content-center">
								<div class="col-12">
									<div class="row align-items-center mb-2">
										<div class="col">
											<h2 class="h5 page-title">Welcome to LKS SMK Kab. Tegal !</h2>
										</div>
										<div class="col-auto">
											<form class="form-inline">
												<div class="form-group d-none d-lg-inline">
													<label for="reportrange" class="sr-only">Date Ranges</label>
													<div id="reportrange" class="px-2 py-2 text-muted">
														<span class="small"></span>
													</div>
												</div>
												<div class="form-group">
													<button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
													<button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- /.content-header -->
								<!-- Main content -->
								<div class="content">

									<div class="row">
										<div class="col-lg-9">
											<div class="card">
												<div class="card-header">
													<h5 class="card-title m-0">Apa itu LKS !</h5>
												</div>
												<div class="card-body">
													<p align="justify">
														<img src="<?= base_url('template') ?>/assets/foto/logo.png" alt="LKS_Logo" style="float: left" width="150">
														Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.
													</p>
													<a href="https://lksjateng.com/" class="card-link">Sumber LKS Jateng</a>
												</div>
											</div>
											<br>
											<div class="card card-primary card-outline">
												<div class="card-header">
													<h5 class="card-title m-0">Pengumuman</h5>
												</div>
												<div class="card-body">
													<p class="card-text" align="justify">
														Menindaklanjuti rencana kegiatan Lomba Kompetensi Siswa (LKS) SMK ke ... Tingkat Provinsi Jawa Tengah Tahun 2023 dapat kami informasikan sebagai berikut :
														Rencana Pelaksanaan pada tanggal Maret 2024 secara luring
														Pendaftaran di buka mulai tanggal Februari 2024
														Pendaftaran peserta dilakukan oleh Guru Pendamping, petunjuk dapat di unduh pada : Berkas dan format untuk pendamping dan peserta dapat di unduh pada link : Setelah berhasil mendaftar proses selanjutnya adalah menunggu aprov/persetujuan dari Admin Mata Lomba LKS Setelah disetujui maka dilanjutkan dengan login dan input peserta lks
														Jika ada kendala atau hal lain bisa menghubungi admin mata lomba yang ada di berkas petunjuk pendaftaran
													</p>
													<a href="#" class="card-link">Card link</a>
													<a href="#" class="card-link">Another link</a>
												</div>
											</div><!-- /.card -->
										</div>
										<!-- /.col-md-6 -->
										<div class="col-lg-3">
											<div class="card">
												<div class="card-header">
													<h5 class="card-title m-0">Pendaftaran</h5>
												</div>
												<div class="card-body">
													<h6 class="card-title">Special title treatment</h6>
													<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
													<a href="registrasi_lomba" class="btn btn-primary">Daftar disini</a>
												</div>
											</div>
											<br>
											<div class="card card-primary card-outline">
												<div class="card-header">
													<h5 class="card-title m-0">Link Download</h5>
												</div>
												<div class="card-body">
													<ul style="list-style-type: circle">
														<li> <a href="#">Download Persyaratan</a></li>
														<li> <a href="#">Download Pengumuman</a></li>
														<li> <a href="#">link...</a></li>
														<li> <a href="#">link...</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</main> <!-- main -->
				</div> <!-- .wrapper -->
				<!-- /.col-md-6 -->
			</div>
			<br>
			<!-- /.row -->
			<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">

				<footer class="main-footer">

					<!-- Default to the left -->
					<strong>Copyright © 2025 <a href="welcome">LKS SMK Kab.Tegal</a>.</strong> All rights reserved.
				</footer>
			</nav>
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->

	<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
	<script src="<?= base_url('template') ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('template') ?>/js/popper.min.js"></script>
	<script src="<?= base_url('template') ?>/js/moment.min.js"></script>
	<script src="<?= base_url('template') ?>/js/bootstrap.min.js"></script>
	<script src="<?= base_url('template') ?>/js/simplebar.min.js"></script>
	<script src="<?= base_url('template') ?>/js/daterangepicker.js"></script>
	<script src="<?= base_url('template') ?>/js/jquery.stickOnScroll.js"></script>
	<script src="<?= base_url('template') ?>/js/tinycolor-min.js"></script>
	<script src="<?= base_url('template') ?>/js/config.js"></script>
	<script src="<?= base_url('template') ?>/js/d3.min.js"></script>
	<script src="<?= base_url('template') ?>/js/topojson.min.js"></script>
	<script src="<?= base_url('template') ?>/js/datamaps.all.min.js"></script>
	<script src="<?= base_url('template') ?>/js/datamaps-zoomto.js"></script>
	<script src="<?= base_url('template') ?>/js/datamaps.custom.js"></script>
	<script src="<?= base_url('template') ?>/js/Chart.min.js"></script>
	<script>
		/* defind global options */
		Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
		Chart.defaults.global.defaultFontColor = colors.mutedColor;
	</script>
	<script src="<?= base_url('template') ?>/js/gauge.min.js"></script>
	<script src="<?= base_url('template') ?>/js/jquery.sparkline.min.js"></script>
	<script src="<?= base_url('template') ?>/js/apexcharts.min.js"></script>
	<script src="<?= base_url('template') ?>/js/apexcharts.custom.js"></script>
	<script src="<?= base_url('template') ?>/js/apps.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
	


	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-56159088-1');
	</script>



	<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
		<defs id="SvgjsDefs1002"></defs>
		<polyline id="SvgjsPolyline1003" points="0,0"></polyline>
		<path id="SvgjsPath1004" d="M0 0 "></path>
	</svg>
</body>

</html>