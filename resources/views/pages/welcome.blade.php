@extends('layouts.nubis')

@section('main')
	<router-view></router-view>
	<vue-progress-bar></vue-progress-bar>

    @include('partials.nubis.footer')
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="Top">
    </button>
@endsection
@section('page_style')
<!-- Animations -->
<link rel="stylesheet" href="assets/js/animations/css/animations.min.css"/>
<link rel="stylesheet" href="assets/js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="assets/css/responsive-leyouts.css"/>

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="assets/js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" type="text/css" href="assets/js/revolution/fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="assets/js/revolution/css/settings.css">

<!-- REVOLUTION LAYERS STYLES -->
<link rel="stylesheet" type="text/css" href="assets/js/revolution/css/layers.css">

<!-- REVOLUTION NAVIGATION STYLES -->
<link rel="stylesheet" type="text/css" href="assets/js/revolution/css/navigation.css">
<link rel="stylesheet" href="assets/js/revolution-addons/particles/css/revolution.addon.particles4bf4.css?ver=1.0.3"/>

<!-- Video PopUp -->
<link rel="stylesheet" type="text/css" href="assets/css/YouTubePopUp.css">
@endsection

@section('page_script')

<!-- Animations --> 
<script src="assets/js/animations/animations.min.js"></script> 
<script src="assets/js/animations/appear.min.js"></script> 

<!-- REVOLUTION JS FILES --> 
<script type='text/javascript' src='assets/js/revolution-addons/bubblemorph/js/revolution.addon.bubblemorph.min.js'></script> 
<script type="text/javascript" src="assets/js/revolution/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution/js/jquery.themepunch.revolution.min.js"></script> 
<script type='text/javascript' src='assets/js/revolution-addons/particles/js/revolution.addon.particles.min4bf4.js?ver=1.0.3'></script> 

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="assets/js/revolution/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="assets/js/revolution/js/extensions/revolution.extension.video.min.js"></script> 
<script type="text/javascript">
var revapi58,
	tpj;	
(function() {			
	if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();	
	function onLoad() {				
		if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
	if(tpj("#welcome").revolution == undefined){
		revslider_showDoubleJqueryError("#welcome");
	}else{
		revapi58 = tpj("#welcome").show().revolution({
			sliderType:"standard",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			particles: {startSlide: "first", endSlide: "last", zIndex: "1",
				particles: {
					number: {value: 25}, color: {value: "#ffffff"},
					shape: {
						type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
						image: {src: ""}
					},
					opacity: {value: 1, random: true, min: 0.25, anim: {enable: true, speed: 3, opacity_min: 0, sync: false}},
					size: {value: 2, random: true, min: 0.5, anim: {enable: true, speed: 5, size_min: 1, sync: false}},
					line_linked: {enable: false, distance: 150, color: "#ffffff", opacity: 0.4, width: 1},
					move: {enable: true, speed: 2, direction: "none", random: true, min_speed: 1, straight: false, out_mode: "out"}},
				interactivity: {
					events: {onhover: {enable: false, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
					modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 40, opacity: 0.5}, repulse: {distance: 200}}
				}
			},
			revealer: {
				direction: "open_horizontal",
				color: "#ffffff",
				duration: "1500",
				delay: "0",
				easing: "Power2.easeInOut",
				overlay_enabled: true,
				overlay_color: "#000000",
				overlay_duration: "1500",
				overlay_delay: "0",
				overlay_easing: "Power2.easeInOut",
				spinner: "1",
				spinnerColor: "#006dd2",
			},
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
				onHoverStop:"off",
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:false,
					hide_onleave:false,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:10,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:10,
						v_offset:0
					}
				}
			},
			viewPort: {
				enable:true,
				outof:"wait",
				visible_area:"80%",
				presize:true
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[868,768,960,720],
			lazyType:"single",
			parallax: {
				type:"scroll",
				origo:"slidercenter",
				speed:400,
				speedbg:0,
				speedls:0,
				levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
			},
			shadow:0,
			spinner:"spinner2",
			stopLoop:"on",
			stopAfterLoops:0,
			stopAtSlide:1,
			shuffle:"off",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
		
	}
	
    RsParticlesAddOn(revapi58);
    RsRevealerAddOn(tpj, revapi58, "<div class='rsaddon-revealer-spinner rsaddon-revealer-spinner-1'><div class='rsaddon-revealer-1'><span style='background: #333'><\/span><span style='background: #333'><\/span><span style='background: #333'><\/span><span style='background: #333'><\/span><span style='background: #333'><\/span><span style='background: #333'><\/span><span style='background: #333'><\/span><span style='background: #333'><\/span><span style='background: #333'><\/span><span style='background: #333'><\/span><\/div><\/div \/>");

 }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
</script> 

<!-- Video PopUp --> 
<script type="text/javascript" src="assets/js/YouTubePopUp.jquery.js"></script> 
<script type="text/javascript" src="assets/js/YouTube.int.js"></script> 
<script type="text/javascript" src="assets/js/counter/counter.js"></script> 
@endsection