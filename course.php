<?php include('visit.php');?>
<?php include('config.php');?>
<?php $qml ="SELECT * from `course` where id='$_GET[course_id]'";
													$rest=mysqli_query($link, $qml); 
													$roww=mysqli_fetch_array($rest);
														?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="https://templatekit.jegtheme.com/skydiva/xmlrpc.php">
	<title>TT School Of Paragliding</title>
<meta name='robots' content='max-image-preview:large'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<link rel='dns-prefetch' href='//s.w.org'>
<link rel="alternate" type="application/rss+xml" title="Skydiva &raquo; Feed" href="feed/index.php">
<link rel="alternate" type="application/rss+xml" title="Skydiva &raquo; Comments Feed" href="comments/feed/index.php">
<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/templatekit.jegtheme.com\/skydiva\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.5"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='jkit-elements-main-css' href='wp-content/plugins/jeg-elementor-kit/assets/css/elements/main.css?ver=2.4.4-dev-1' type='text/css' media='all'>
<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min.css?ver=5.9.5' type='text/css' media='all'>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel='stylesheet' id='template-kit-export-css' href='wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min.css?ver=1.0.21' type='text/css' media='all'>
<link rel='stylesheet' id='hello-elementor-css' href='wp-content/themes/hello-elementor/style.min.css?ver=2.5.0' type='text/css' media='all'>
<link rel='stylesheet' id='hello-elementor-theme-style-css' href='wp-content/themes/hello-elementor/theme.min.css?ver=2.5.0' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.6.5' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-post-3-css' href='wp-content/uploads/sites/294/elementor/css/post-3.css?ver=1655879523' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.15.0' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/sites/294/elementor/css/global.css?ver=1655877969' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-post-594-css' href='https://templatekit.jegtheme.com/skydiva/wp-content/uploads/sites/294/elementor/css/post-594.css?ver=1655885165' type='text/css' media='all'>
<link rel='stylesheet' id='font-awesome-5-all-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.6.5' type='text/css' media='all'>
<link rel='stylesheet' id='font-awesome-4-shim-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.6.5' type='text/css' media='all'>
<link rel='stylesheet' id='google-fonts-1-css' href='css?family=Inter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.9.5' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-icons-jkiticon-css' href='wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon.css?ver=2.4.4-dev-1' type='text/css' media='all'>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js?ver=1.0.21' id='template-kit-export-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.6.5' id='font-awesome-4-shim-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.php"><link rel="alternate" type="application/json" href="https://templatekit.jegtheme.com/skydiva/wp-json/wp/v2/pages/594"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://templatekit.jegtheme.com/skydiva/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.9.5">
<link rel="canonical" href="index.php">
<link rel='shortlink' href='https://templatekit.jegtheme.com/skydiva/?p=594'>
<link rel="alternate" type="application/json+oembed" href="https://templatekit.jegtheme.com/skydiva/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Fskydiva%2Fgallery%2F">
<link rel="alternate" type="text/xml+oembed" href="https://templatekit.jegtheme.com/skydiva/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Fskydiva%2Fgallery%2F&format=xml">
<style id="jeg_dynamic_css" type="text/css" data-type="jeg_custom-css"></style></head>

<body class="page-template page-template-elementor_header_footer page page-id-594 jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-594">
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr><fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg><fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb><fefunca type="table" tablevalues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tablevalues="0 1"></fefuncr><fefuncg type="table" tablevalues="0 1"></fefuncg><fefuncb type="table" tablevalues="0 1"></fefuncb><fefunca type="table" tablevalues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr><fefuncg type="table" tablevalues="0 1"></fefuncg><fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb><fefunca type="table" tablevalues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tablevalues="0 1"></fefuncr><fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg><fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb><fefunca type="table" tablevalues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tablevalues="0 0"></fefuncr><fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg><fefuncb type="table" tablevalues="0 1"></fefuncb><fefunca type="table" tablevalues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr><fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg><fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb><fefunca type="table" tablevalues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr><fefuncg type="table" tablevalues="0 1"></fefuncg><fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb><fefunca type="table" tablevalues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr><fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg><fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb><fefunca type="table" tablevalues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><div id="page" class="jkit-template  site">

<?php include('header.php'); ?>




					<div data-elementor-type="wp-page" data-elementor-id="594" class="elementor elementor-594">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-5003b9c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5003b9c" data-element_type="section" style="background:url('images/7.jpg');">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5dafec9" data-id="5dafec9" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-3edd8c6 elementor-widget elementor-widget-heading" data-id="3edd8c6" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.6.5 - 27-04-2022 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default"><?php echo $roww['heading'];?></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-829683c elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="829683c" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">		<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
										<span class="elementor-icon-list-text">Home</span>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-chevron-right"></i>						</span>
										<span class="elementor-icon-list-text">Paragliding Courses</span>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				
		<div class="container" style="margin-top:20px;margin-bottom:20px;">
			<div class="row">
				<div class="col-md-6">
					<h2 style="font-weight:700;color:#31A4DA;"><?php echo $roww['title'];?></h2>
				
					<p style="color:#282828;text-align:justify;font-size:21px;line-height:normal;"><?php echo $roww['description'];?></p>
				</div>

<div class="col-md-6" style="float:right;">
<h2 style="font-weight:700;color:#31A4DA;"><?php echo $roww['heading'];?></h2>
				<h2 style="font-size:21px;font-weight:200;"><i class="fas fa-check-square"></i> Prerequisite</h2>
					<p style="color:#282828;text-align:justify;"><?php echo $roww['prerequisite'];?></p>
</div>
				
			</div>
		

<hr>


				
<div class="row" >
<center>
<h2 style="font-weight:bold;color:#31A4DA;margin-top:20px;">Course Covers</h2>
</center>

<div class="col-md-4">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">Ground Training
</p>
<h2 style="font-size:18px;font-weight:200;text-align:justify;"><?php echo $roww['ground_training'];?></h2>
</div>
<div class="col-md-4">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">Flight Training
</p>
<h2 style="font-size:18px;font-weight:200;text-align:justify;"><?php echo $roww['flight_training'];?></h2>
</div>
<div class="col-md-4">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">Examination
</p>
<h2 style="font-size:18px;font-weight:200;text-align:justify;"><?php echo $roww['theory_exam'];?></h2>
</div>
</div>
<br>
<hr>
<br>
<div class="row" >

<div class="col-md-4">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">Course Duration</p>
<h2 style="font-size:21px;font-weight:200;"><?php echo $roww['duration'];?></h2>
</div>
<div class="col-md-4">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">Pilot Rating
</p>
<h2 style="font-size:21px;font-weight:200;"><?php echo $roww['pilot_rating'];?></h2>
</div>
<div class="col-md-4">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">Next Level
</p>
<h2 style="font-size:21px;font-weight:200;"><?php echo $roww['next_level'];?></h2>
</div>

</div>

<br>

<hr>
<br>
<div class="row" >

<div class="col-md-6">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">Course Fee</p>
<h2 style="font-size:35px;font-weight:bold;color:green;"><?php echo $roww['course_fee_1'];?></h2>
</div>

<div class="col-md-6">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">This package includes
</p>
<h2 style="font-size:21px;font-weight:200;"> <?php echo $roww['package_includes_1'];?></h2>
</div>

</div>

<br>

<hr>
<br>

<div class="row" >

<div class="col-md-6">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">Course Fee + Accommodation etc.</p>
<h2 style="font-size:35px;font-weight:bold;color:green;"><?php echo $roww['course_fee_2'];?></h2>
</div>

<div class="col-md-6">	
<p style="color:#282828;text-align:justify;color:black;text-transform:uppercase;font-weight:bold;">This package includes
</p>
<h2 style="font-size:21px;font-weight:200;"> <?php echo $roww['package_includes_2'];?></h2>
</div>

</div>

<br>
<form method="post" id="contactForm" name="contactForm" style="margin-top:0px;">
                                 
                                 <h2 style="text-align:center;color:#F62049;">Register for Paragliding Pilot Course​</h2>
                                
                                 <div class="row">
	                            <div class="col-md-6">
                                <div class="form-group">
                                    <input style="margin-bottom:5px;" type="text" name="first_name" class="form-control" placeholder="Name" required>
                                    
                                </div>
							</div>
  <div class="col-md-6">
                                 <div class="form-group">
								 <select id="gender" name="gender">
	
  <option value="male">Male</option>
  <option value="female">Female</option>

</select>
                                </div>
                                
                                 </div> 
                                 </div>
                             
                                <div class="row">
									<div class="col-md-6">
									<input type="number" style="margin-bottom:5px;" name="mobile" class="form-control "  placeholder="Enter Mobile No." required>
									</div>
							
								<div class="col-md-6">
                                   
									<input type="email" style="margin-bottom:5px;" name="lgxemail" class="form-control "  placeholder="Enter email" required>
                                </div>
								</div>
                               
								<div class="row">
									<div class="col-md-6">
									<input type="number" style="margin-bottom:5px;" name="age" class="form-control "  placeholder="Age" required>
									</div>
							
								<div class="col-md-6">
                                   
									<input type="email" style="margin-bottom:5px;" name="city" class="form-control "  placeholder="Your city/Town" required>
                                </div>
								</div>

								<div class="row">
									
							
								<div class="col-md-12">
                                   
									<input type="text" style="margin-bottom:5px;" name="country" class="form-control "  placeholder="country" required>
                                </div>
								</div>

                            	<div class="row">
									
							
								<div class="col-md-12">
                                   
				  <input type="date" style="margin-bottom:5px;" name="want_at" class="form-control " required>
							   </div>

							


								</div>





								<div class="row" style="margin-top:5px;margin-bottom:5px">
									
					

									<div class="col-md-12">
									<select id="course_type" name="course_type">
	
	<option value="P1 Paragliding Pilot Course">P1 Paragliding Pilot Course</option>
	<option value="P2 Paragliding Pilot Course">P2 Paragliding Pilot Course</option>
	<option value="P3 Paragliding Pilot Course">P3 Paragliding Pilot Course</option>
	<option value="P4 Paragliding Pilot Course">P4 Paragliding Pilot Course</option>
	<option value="P5 Paragliding Pilot Course">P5 Paragliding Pilot Course</option>

  
  </select>
									</div>



	
									</div>
	
	




                                <div class="form-group">
                                    <textarea style="margin-bottom:5px;" class="form-control " name="lgxmessage" rows="3" placeholder="Additional Information" required></textarea>
                                </div>
	      <div class="form-group">
                                    
                                    <div class="row" style="margin-bottom:5px;">
						<div class="col-lg-10">
							<input type="text" class="form-control" id="captcha" placeholder="Enter captcha" name="captcha">
						</div>
						<div class="col-lg-2" >
							<img src="captcha.php"/>
						</div>
                                    
                             </div> </div>
                           
                                
                                 <button type="button" id="btnsub" class="btn btn-default btn-lg btn-block" style="background-color:#f82249;color:white;text-decoration:none;padding:10px;border:none;" onclick="submit_data()">SUBMIT</button>
                                 <br>
                                 
                             <!--  <button type="submit" id="btn" class="btn btn-lg btn-block" value="Submit Now" style="background-color:#5249b3;color:white;text-decoration:none;padding:10px;border:none;">Submit Now</button>


                                 <button type="submit" name="submit" value="contact-form" class="lgx-btn hvr-glow hvr-radial-out lgxsend lgx-send"><span>Send Message</span></button> -->
                            </form>

							<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	  <script>
	  function submit_data(){
	      	jQuery('#btnsub').html('<i class="fas fa-spinner fa-spin"></i> Please wait...');
	      		jQuery('#btnsub').attr('disabled',true);
		jQuery.ajax({
			url:'course-submit.php',
			type:'post',
			data:jQuery('#contactForm').serialize(),
			success:function(data){
				alert(data);
				
					jQuery('#contactForm')['0'].reset();
					jQuery('#btnsub').html('SUBMIT');
					jQuery('#btnsub').attr('disabled',false);
			}
		});
	  }
	  </script>	

</div>
			
				
				
							</div>

							
							<?php include 'footer.php'?>	
			</div><!-- #page -->
<link rel='stylesheet' id='elementor-post-12-css' href='wp-content/uploads/sites/294/elementor/css/post-12.css?ver=1655881177' type='text/css' media='all'>
<link rel='stylesheet' id='elementor-post-14-css' href='wp-content/uploads/sites/294/elementor/css/post-14.css?ver=1655877583' type='text/css' media='all'>
<link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.6.5' type='text/css' media='all'>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type='text/javascript' src='wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0' id='hello-theme-frontend-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.5' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.5' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.6.5","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"hello-theme-header-footer":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/templatekit.jegtheme.com\/skydiva\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":594,"title":"Gallery%20%E2%80%93%20Skydiva","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.6.5' id='elementor-frontend-js'></script>
<script type='text/javascript' id='elementor-frontend-js-after'>
var jkit_ajax_url = "https://templatekit.jegtheme.com/skydiva/?jkit-ajax-request=jkit_elements", jkit_nonce = "2f28ab3daa";
</script>
<script type='text/javascript' src='wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element.js?ver=2.4.4-dev-1' id='jkit-sticky-element-js'></script>
<script type='text/javascript' src='wp-content/plugins/jeg-elementor-kit/assets/js/elements/nav-menu.js?ver=2.4.4-dev-1' id='jkit-element-navmenu-js'></script>
<script type='text/javascript' src='wp-content/plugins/jeg-elementor-kit/assets/js/elements/gallery.js?ver=2.4.4-dev-1' id='jkit-element-gallery-js'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='wp-content/plugins/jeg-elementor-kit/assets/js/isotope/isotope.min.js?ver=3.0.6' id='isotope-js'></script>
<script type='text/javascript' src='wp-content/plugins/jeg-elementor-kit/assets/js/elements/fun-fact.js?ver=2.4.4-dev-1' id='jkit-element-funfact-js'></script>
<script type='text/javascript' id='jkit-element-pagination-js-extra'>
/* <![CDATA[ */
var jkit_element_pagination_option = {"element_prefix":"jkit_element_ajax_"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/jeg-elementor-kit/assets/js/elements/post-pagination.js?ver=2.4.4-dev-1' id='jkit-element-pagination-js'></script>
<script type='text/javascript' src='wp-content/plugins/jeg-elementor-kit/assets/js/elements/mailchimp.js?ver=2.4.4-dev-1' id='jkit-element-mailchimp-js'></script>
</body>
</html> 
<!-- Dynamic page generated in 0.681 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2022-11-17 09:22:09 -->

<!-- super cache -->