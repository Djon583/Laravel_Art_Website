<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />

  <title>Художественная галерея</title>
  <meta name="description" content="Художественная галерея – это выставочное пространство, где представлены работы ведущих российских художников: живописцев, графиков и скульпторов. Среди них как состоявшиеся авторы, чьи произведения находятся в крупных музейных коллекциях, так и молодые, только начинающие свой профессиональный путь. Предпочтение отдается художникам, связанным с традиционным живописным мастерством и языком «визуального мышления»: многозначным, чувственным, иррациональным." />
  <meta name="keywords" content="" />

  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/bridge/img/favicon.ico">
  <link rel="apple-touch-icon" href="/wp-content/themes/bridge/img/favicon.ico"/>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,500,600,700&subset=cyrillic&display=swap" rel="stylesheet">

  <!--<link rel="stylesheet" async href="http://abramovagallery.art/assets/css/styles.css" media="all">-->
  <link rel="stylesheet" async href="http://abramovagallery.art/assets/css/responsive.css" media="all">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <noscript>
    <style> .wpb_animate_when_almost_visible { opacity: 1; }</style>
  </noscript>

  <script>
    !function(f,b,e,v,n,t,s)
    { if(f.fbq)return;n=f.fbq=function(){ n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window,document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '420235338876736');
      fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=420235338876736&ev=PageView&noscript=1"/>
  </noscript>
      <!-- End Facebook Pixel Code -->
</head>
<body class="home page page-template page-template-full_width page-template-full_width-php ajax_fade page_not_loaded  vertical_menu_enabled qode-title-hidden side_area_uncovered_from_content qode_grid_1300 vc_responsive" itemscope itemtype="https://schema.org/WebPage">

  <meta itemprop="accessibilityControl" content="fullKeyboardControl">
  <meta itemprop="accessibilityControl" content="fullMouseControl">
  <meta itemprop="accessibilityHazard" content="noFlashingHazard">
  <meta itemprop="accessibilityHazard" content="noMotionSimulationHazard">
  <meta itemprop="accessibilityHazard" content="noSoundHazard">
  <meta itemprop="accessibilityAPI" content="ARIA">
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPSVKH7"height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>

  <div class="ajax_loader">
    <div class="ajax_loader_1">
      <div class="double_pulse">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>
  </div>

  <section class="side_menu right ">
    <a href="#" target="_self" class="close_side_menu"></a>
  </section>

  <div class="wrapper">
    <div class="wrapper_inner">
      <!-- header controller-->
      @include('../inc.header')


      @yield('content')


      <!-- footer -->
      @include('../inc.footer');
    </div>
  </div>


  <!-- script slider -->
  @include('inc.additional');

</body>
</html>
