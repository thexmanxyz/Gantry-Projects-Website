<!DOCTYPE html>
<html lang="en">
  <head>
  
	<?php
	
		// import minify
		$path = __DIR__ . '/libs';
		require_once $path . '/minify/src/Minify.php';
		require_once $path . '/minify/src/CSS.php';
		require_once $path . '/minify/src/JS.php';
		require_once $path . '/minify/src/Exception.php';
		require_once $path . '/minify/src/Exceptions/BasicException.php';
		require_once $path . '/minify/src/Exceptions/FileImportException.php';
		require_once $path . '/minify/src/Exceptions/IOException.php';
		require_once $path . '/path-converter/src/ConverterInterface.php';
		require_once $path . '/path-converter/src/Converter.php';

		use MatthiasMullie\Minify;
			
		// minified output paths
		$minCssPath = 'css/gp.min.css';
		$minJsPath = 'js/gp.min.js';
		
		$hasCss = file_exists(__DIR__ . '/' . $minCssPath);
		$hasJs = file_exists(__DIR__ . '/' . $minJsPath);
	
		// minify CSS only if file not exists
		if(!$hasCss){
			$minifier = new Minify\CSS('vendor/bootstrap/css/bootstrap.min.css');
			$minifier->add('css/floating-totop-button.min.css');
			$minifier->add('css/custom.min.css');
			$minifier->minify($minCssPath);
		}
		
		// minify JS only if file not exists
		if(!$hasJs){
			$minifier = new Minify\JS('vendor/jquery/jquery.min.js');
			$minifier->add('vendor/bootstrap/js/bootstrap.bundle.min.js');
			$minifier->add('vendor/jquery-easing/jquery.easing.min.js');
			$minifier->add('js/scrolling-nav.min.js');
			$minifier->add('js/floating-totop-button.min.js');
			$minifier->add('js/custom.min.js');
			$minifier->minify($minJsPath);
		}
	?>

	<!-- General -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This page serves the purpose to present and summarize all my released Gantry projects, their repositories and features.">
    <meta name="author" content="thex">
    <title>Gantry Projects | by thex</title>

	<!-- Canonical -->
	<link rel="canonical" href="https://gantryprojects.com">

    <!-- Minimized Stylesheets -->
    <link href="<?php echo $minCssPath; ?>" rel="stylesheet">
    
    <!-- Favicon / Touch Icons -->
	<link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

	<!-- Open Graph -->
	<meta property="og:title" content="Gantry Projects | by thex">
	<meta property="og:site_name" content="Gantry Projects | by thex">
	<meta property="og:url" content="https://gantryprojects.com">
	<meta property="og:description" content="This page serves the purpose to present and summarize all my released Gantry projects, their repositories and features.">
	<meta property="og:type" content="article">
	<meta property="og:image" content="img/og/og.jpg">
	
  </head>
  <body id="page-top">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Gantry Projects <span class="navbar-author">| by thex</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#atoms">Atoms</a>
            </li><li class="nav-spacer"> | </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#particles">Particles</a>
            </li><li class="nav-spacer"> | </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#extensions">Extensions</a>
            </li><li class="nav-spacer"> | </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#author">Author</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Projects Overview</h1>
        <p class="lead">This page serves the purpose to present and summarize all my released Gantry projects.</p>
      </div>
    </header>

    <!-- Atoms -->
    <section id="atoms">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <a href="#atoms"><h2>Atoms</h2></a>
            <hr>
            <p class="lead">This section covers all projects that are build upon the Atom concept.</p>
            
            <!-- Cookie Consent Neo -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Cookie-Consent-Neo-Gantry#cookie-consent-neo---atom-for-gantry" title="project documentation">Cookie Consent Neo</a></h4>
            <p class="lead-intro">Adds the <a href="https://github.com/insites/cookieconsent" title="Cookie Consent API">Cookie Consent Javascript API</a> functionality to the Gantry templating framework. <i>Cookie Consent Neo</i> encapsulates the parameterization of a Cookie Consent banner within a Gantry Atom. </p>
            <p class="lead-feature">Features and Support</p>
            <ul>
              <li>Full banner text and link customization</li>
              <li>Different color palettes, text and background customization</li>
              <li>Behavior control, layout and positioning</li>
              <li>Black- / Whitelisting and cookie configuration</li>
              <li>Good <a href="https://github.com/insites/cookieconsent" title="Cookie Consent API">Cookie Consent Javascript API</a> coverage</li>
              <li>Full control over resource loading</li>
              <li>Support for Joomla Plugin System</li>
            </ul>
            <p class="lead-feature">Languages</p>
            <ul>
              <li>English, German and Italian</li>
            </ul>
            <p class="lead-feature">Compatibility</p>
            <ul>
              <li>Joomla, Wordpress and Grav</li>
            </ul>
            <p>
                <span><a href="https://github.com/thexmanxyz/Cookie-Consent-Neo-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Cookie-Consent-Neo-Gantry#cookie-consent-neo---atom-for-gantry" title="project documentation">Documentation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Cookie-Consent-Neo-Gantry#showroom" title="installation instructions">Screenshots</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Cookie-Consent-Neo-Gantry#automatic-installation-joomla-only" title="installation instructions">Installation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Cookie-Consent-Neo-Gantry/releases" title="project releases">Releases</a></span>
            </p>

            <!-- Favicon Tag Generator (Atom) -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Atom-Gantry#favicon-tag-generator---atom-for-gantry" title="project documentation">Favicon Tag Generator (Atom)</a></h4>
            <p class="lead-intro">Improves the Favicon as well as the Touch Icon tag generation and configuration within the Gantry templating framework. <i>Favicon Tag Generator</i> encapsulates the parameterization of the most common icon sizes, allows the automatic attachment of tags and supports customized meta information.</p>
            <p class="lead-feature">Features and Support</p>
            <ul>
              <li>Improves the default Gantry favicon tag generation</li>
              <li>Different tag generation strategies, from automatic to manual</li>
              <li>Many predefined image dimensions for most common devices</li>
              <li>Manifest, Safari Mark Icon, Tile and Theme support</li>
              <li>Full control over resource loading</li>
              <li>Support for Joomla Plugin System</li>
            </ul>
            <p class="lead-feature">Languages</p>
            <ul>
              <li>English and German</li>
            </ul>            
            <p class="lead-feature">Compatibility</p>
            <ul>
              <li>Joomla, Wordpress and Grav</li>
            </ul>
            <p>
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Atom-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Atom-Gantry#favicon-tag-generator---atom-for-gantry" title="project documentation">Documentation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Atom-Gantry#showroom" title="installation instructions">Screenshots</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Atom-Gantry#automatic-installation-joomla-only" title="installation instructions">Installation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Atom-Gantry/releases" title="project releases">Releases</a></span>
            </p>
            
            <!-- Menu Tablet Fixer -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Tablet-Menu-Fixer-Gantry#menu-tablet-fixer---atom-for-gantry" title="project documentation">Menu Tablet Fixer</a></h4>
            <p class="lead-intro">Improves the default menu behavior of the Gantry templating framework. <i>Menu Tablet Fixer</i> was created to fix the broken touch handling of the default Gantry menu on devices with a large screen resolution. </p>
            <p class="lead-feature">Features and Support</p>
            <ul>
              <li>Fixes broken default touch handling</li>
              <li>Better support for touch devices with bigger screen</li>
              <li>Full control over resource loading</li>
              <li>Support for Joomla Plugin System</li>
            </ul>
            <p class="lead-feature">Languages</p>
            <ul>
              <li>English, German and Italian</li>
            </ul>
            <p class="lead-feature">Compatibility</p>
            <ul>
              <li>Joomla, Wordpress and Grav</li>
            </ul>
            <p>
                <span><a href="https://github.com/thexmanxyz/Tablet-Menu-Fixer-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Tablet-Menu-Fixer-Gantry#menu-tablet-fixer---atom-for-gantry" title="project documentation">Documentation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Tablet-Menu-Fixer-Gantry#showroom" title="installation instructions">Screenshots</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Tablet-Menu-Fixer-Gantry#automatic-installation-joomla-only" title="installation instructions">Installation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Tablet-Menu-Fixer-Gantry/releases" title="project releases">Releases</a></span>
            </p>
            
            <!-- Sticky Mobile Menu -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Sticky-Mobile-Menu-Gantry#sticky-mobile-menu---atom-for-gantry" title="project documentation">Sticky Mobile Menu</a></h4>
            <p class="lead-intro">Enable control over the default mobile menu behavior within the Gantry templating framework. <i>Sticky Mobile Menu</i> was created to keep the current selected sub menu items focused within the hamburger menu / offcanvas section.</p>
            <p class="lead-feature">Features and Support</p>
            <ul>
              <li>Different auto select stratgies</li>
              <li>Memory function for offcanvas menu</li>
              <li>Full control over resource loading</li>
              <li>Support for Joomla Plugin System</li>
            </ul>
            <p class="lead-feature">Languages</p>
            <ul>
              <li>English, German and Italian</li>
            </ul>
            <p class="lead-feature">Compatibility</p>
            <ul>
              <li>Joomla, Wordpress and Grav</li>
            </ul>
            <p>
                <span><a href="https://github.com/thexmanxyz/Sticky-Mobile-Menu-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Sticky-Mobile-Menu-Gantry#sticky-mobile-menu---atom-for-gantry" title="project documentation">Documentation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Sticky-Mobile-Menu-Gantry#showroom" title="installation instructions">Screenshots</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Sticky-Mobile-Menu-Gantry#automatic-installation-joomla-only" title="installation instructions">Installation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Sticky-Mobile-Menu-Gantry/releases" title="project releases">Releases</a></span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Particles -->
    <section id="particles" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <a href="#particles"><h2>Particles</h2></a>
            <hr>
            <p class="lead">Projects that use the Particle concept to render content directly to the DOM.</p>
            
            <!-- Logo | Image | Hover -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Logo-Image-Hover-Gantry#logo--image--hover---particle-for-gantry" title="project documentation">Logo | Image | Hover</a></h4>
            <p class="lead-intro">Adds a very powerful image render and animation component to the Gantry templating framework. <i>Logo | Image | Hover</i> is an advanced version of the standard Logo / Image Particle. However, it is much more flexible and encapsulates the parameterization of many fancy CSS3 rollover, hover and transition effects within.</p>
            <p class="lead-feature">Features and Support</p>
            <ul>
              <li>Full customization of image and text rendering</li>
              <li>Customization of links, styles and position</li>
              <li>Many different CSS3 effects, about 150 variations</li>
              <li>Multi mode to switch between two different images</li>
              <li>CSS customization support for image, text and effects</li>
              <li>Full control over resource loading</li>
              <li>Support for Joomla Plugin System</li>
            </ul>
            <p class="lead-feature">Languages</p>
            <ul>
              <li>English and German</li>
            </ul>
            <p class="lead-feature">Compatibility</p>
            <ul>
              <li>Joomla, Wordpress and Grav</li>
            </ul>
            <p>
                <span><a href="https://github.com/thexmanxyz/Logo-Image-Hover-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Logo-Image-Hover-Gantry#logo--image--hover---particle-for-gantry" title="project documentation">Documentation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Logo-Image-Hover-Gantry#showroom" title="installation instructions">Screenshots</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Logo-Image-Hover-Gantry#automatic-installation-joomla-only" title="installation instructions">Installation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Logo-Image-Hover-Gantry/releases" title="project releases">Releases</a></span>
            </p>
    
            <!-- Google+ Feed Slider -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Google-Plus-Feed-Slider-Gantry#google-feed-slider---particle-for-gantry" title="project documentation">Google+ Feed Slider</a></h4>
            <p class="lead-intro">Implements a feed slider that fetches post data from an existing Google+ profile. The <i>Google+ Feed Slider</i> supports the flexible parameterization of <a href="https://developers.google.com/+/web/api/rest/" title="Google+ REST API">API requests</a> as well as the custom slider styling and rendering.</p>
            <p class="lead-feature">Features and Support</p>
            <ul>
              <li>Renders a Google+ profile feed in a slider</li>
              <li>Supports custom styling and image configuration</li>
              <li>Different slider scroll modes and about 25 slide effects</li>
              <li>Post rendering configuration (fields, links, title and content)</li>
              <li>Full control over resource loading</li>
              <li>Support for Joomla Plugin System</li>
            </ul>
            <p class="lead-feature">Languages</p>
            <ul>
              <li>English and German</li>
            </ul>
            <p class="lead-feature">Compatibility</p>
            <ul>
              <li>Joomla, Wordpress and Grav</li>
            </ul>
            <p>
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Feed-Slider-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Feed-Slider-Gantry#google-feed-slider---particle-for-gantry" title="project documentation">Documentation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Feed-Slider-Gantry#showroom" title="installation instructions">Screenshots</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Feed-Slider-Gantry#automatic-installation-joomla-only" title="installation instructions">Installation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Feed-Slider-Gantry/releases" title="project releases">Releases</a></span>
            </p>
            
            <!-- Google+ Badge -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Google-Plus-Badge-Gantry#google-badge---particle-for-gantry" title="project documentation">Google+ Badge</a></h4>
            <p class="lead-intro">Adds the <a href="https://developers.google.com/+/web/badge/" title="Google+ Badge API">Google+ Badge API</a> functionality to the Gantry templating framework. <i>Google+ Badge</i> encapsulates the parameterization of the Google+ service within a Gantry Particle.</p>
            <p class="lead-feature">Features and Support</p>
            <ul>
              <li>Renders a Google+ profile badge</li>
              <li>Customization with CSS and theming</li>
              <li>Badge configuration (orientation, size and type)</li>
              <li>Supports all profile types and about 60 frontent languages</li>
              <li>Good coverage of the <a href="https://developers.google.com/+/web/badge/" title="Google+ Badge API">Google+ Badge API</a></li>
              <li>Full control over resource loading</li>
              <li>Support for Joomla Plugin System</li>
            </ul>
            <p class="lead-feature">Languages</p>
            <ul>
              <li>English, German and Italian</li>
            </ul>
            <p class="lead-feature">Compatibility</p>
            <ul>
              <li>Joomla, Wordpress and Grav</li>
            </ul>
            <p>
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Badge-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Badge-Gantry#google-badge---particle-for-gantry" title="project documentation">Documentation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Badge-Gantry#showroom" title="installation instructions">Screenshots</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Badge-Gantry#automatic-installation-joomla-only" title="installation instructions">Installation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Google-Plus-Badge-Gantry/releases" title="project releases">Releases</a></span>
            </p>
            
            <!-- Website Header -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Website-Header-Gantry#website-header---particle-for-gantry" title="project documentation">Website Header</a></h4>
            <p class="lead-intro">Renders the current selected Joomla Menu data on a page within the Gantry templating framework. <i>Website Header</i> encapsulates the parameterization of dynamically generated header data in dependence of the selected menu item.</p>
            <p class="lead-feature">Features and Support</p>
            <ul>
              <li>Renders data of the current Joomla menu item to the DOM</li>
              <li>Customization with CSS classes (container, title and dscription)</li>
              <li>Background styling with a randomization function</li>
              <li>Support for icon, title and description</li>
              <li>Automatic title and description fetching from Joomla with fallback</li>
              <li>Support for Joomla Plugin System</li>
            </ul>
            <p class="lead-feature">Languages</p>
            <ul>
              <li>English and German</li>
            </ul>
            <p class="lead-feature">Compatibility</p>
            <ul>
              <li>Joomla only</li>
            </ul>
            <p>
                <span><a href="https://github.com/thexmanxyz/Website-Header-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Website-Header-Gantry#website-header---particle-for-gantry" title="project documentation">Documentation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Website-Header-Gantry#showroom" title="installation instructions">Screenshots</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Website-Header-Gantry#automatic-installation-joomla-only" title="installation instructions">Installation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Website-Header-Gantry/releases" title="project releases">Releases</a></span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Extensions and Others -->
    <section id="extensions">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <a href="#extensions"><h2>Extensions and Others</h2></a>
            <hr>
            <p class="lead">Projects in this section can't be summarized under the Atom or Particle terminology.</p>

            <!-- Favicon Tag Generator (Extension) -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Gantry#favicon-tag-generator---extension-for-gantry" title="project documentation">Favicon Tag Generator (Extension)</a></h4>
            <p class="lead-intro"><i>Might be deprecated in the future! Gantry legacy support &lt; v5.4.24!</i></p>
            <p class="lead-intro">Improves the Favicon as well as the Touch Icon tag generation and configuration within the Gantry templating framework. <i>Favicon Tag Generator</i> encapsulates the parameterization of the most common icon sizes, allows the automatic attachment of tags and supports customized meta information.</p>
            <p class="lead-feature">Features and Support</p>
            <ul>
              <li>Improves the default Gantry favicon tag generation</li>
              <li>Different tag generation strategies, from automatic to manual</li>
              <li>Many predefined image dimensions for most common devices</li>
              <li>Manifest, Safari Mark Icon, Tile and Theme support</li>
              <li>Full control over resource loading</li>
              <li>Support for Joomla Plugin System</li>
            </ul>
            <p class="lead-feature">Languages</p>
            <ul>
              <li>English and German</li>
            </ul>            
            <p class="lead-feature">Compatibility</p>
            <ul>
              <li>Joomla, Wordpress and Grav</li>
            </ul>
            <p>
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Gantry#favicon-tag-generator---extension-for-gantry" title="project documentation">Documentation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Gantry#showroom" title="installation instructions">Screenshots</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Gantry#automatic-installation-joomla-only" title="installation instructions">Installation</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Favicon-Tag-Generator-Gantry/releases" title="project releases">Releases</a></span>
            </p>
            
            <!-- Package Builder -->
            <hr>
            <h4><a href="https://github.com/thexmanxyz/Package-Builder-Gantry#package-builder-gantry---shell-script" title="project documentation">Package Builder</a></h4>
            <p class="lead-intro">A windows shell script which allows with a minimal configuration to automatically build Joomla plugin and Gantry component packages.</p>
            <p>
                <span><a href="https://github.com/thexmanxyz/Package-Builder-Gantry" title="Github repository">Repository</a></span> | 
                <span><a href="https://github.com/thexmanxyz/Package-Builder-Gantry#package-builder-gantry---shell-script" title="project documentation">Documentation</a></span>
            </p>
            
          </div>
        </div>
      </div>
    </section>
    
    <!-- Author -->
    <section id="author" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <a href="#author"><h2>Author</h2></a>
            <hr>
            <a href="https://github.com/thexmanxyz" title="thex on Github">
                <img src="img/avatar_final.jpg" class="author-img" alt="avatar thex Github" width="150" height="150">
            </a>
            <hr>
            <p class="lead-author">Participation always welcome. Requests please to &lt;contact [at] gantryprojects.com&gt;. Website also hosted on <a href="https://thexmanxyz.github.io/Gantry-Projects-Website/" title="Github Pages - gantryprojects.com">Github Pages</a> | <a href="https://github.com/thexmanxyz/Gantry-Projects-Website" title="Github Repository - Homepage">Repository</a>.</p>
            <hr>
            <p class="lead-author">&copy; by <a href="https://github.com/thexmanxyz" title="thex on Github">thex</a> | Find out more about <a href="https://github.com/thexmanxyz?&tab=repositories&q=&type=sourcemy" title="project of thex on Github">my projects</a> on Github.</p>
            <hr>        
         </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; by <a href="https://github.com/thexmanxyz" title="thex on Github">thex</a>, 2018 | Template - <a href="https://github.com/BlackrockDigital/startbootstrap-scrolling-nav" title="Scrolling Nav - Start Bootstrap on Github">Scrolling Nav</a></p>
        <p class="m-0 text-center text-white"><a href="#" class="to-top-btm-button">^ scroll to top ^</a></p>

      </div>
      <!-- /.container -->
    </footer>

    <!-- Minimized Scripts -->
    <script src="<?php echo $minJsPath; ?>" defer async></script>
	
  </body>
</html>
