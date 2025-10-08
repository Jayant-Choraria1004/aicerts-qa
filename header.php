<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Preload Fonts -->
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  
  <!-- Bootstrap CSS -->
  <link href="<?php echo esc_url(get_template_directory_uri() . "/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url(get_template_directory_uri() . "/css/owl.carousel.min.css"); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url(get_template_directory_uri() . "/css/aos.css"); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url(get_template_directory_uri() . "/css/base.css"); ?>" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri() . "/images/favicon.ico"); ?>">

  <title><?php echo wp_title(); ?></title>
  <?php 
  // Bot detection based on User-Agent
  $bot_agents = array('bot', 'crawl', 'slurp', 'spider', 'mediapartners-google', 'ahrefsbot', 'semrushbot');
  $is_bot = false;
  foreach ($bot_agents as $bot) {
      if (isset($_SERVER['HTTP_USER_AGENT']) && stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false) {
          $is_bot = true;
          break;
      }
  }
  $current_domain = $_SERVER['HTTP_HOST'];
  $live_domain = 'www.aicerts.ai'; // Live domain
  if (!is_user_logged_in() && $current_domain === $live_domain && !$is_bot ) : ?>
  <!-- Google tag (gtag.js) --> 
  <script async src="
  https://www.googletagmanager.com/gtag/js?id=G-8GBWG0T19Y"></script>
  <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-8GBWG0T19Y'); </script>

  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NLXCNLLT');</script>
  <!-- End Google Tag Manager -->
  <?php endif; ?>
  
  <?php /*
  <script type="text/javascript">
  (function(c,l,a,r,i,t,y){
      c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
      t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
      y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
  })(window, document, "clarity", "script", "om257irn2g");
  </script> */ ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php /* <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> */ ?>
  <?php wp_head(); ?>
  <link href="<?php echo esc_url(get_template_directory_uri() . "/css/easyResponsiveTabs.css"); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url(get_template_directory_uri() . "/css/style.css"); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url(get_template_directory_uri() . "/css/home2.css"); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo esc_url(get_template_directory_uri() . "/css/media.css"); ?>" rel="stylesheet" type="text/css">
  <?php /* <script src='//in.fw-cdn.com/32032354/1079421.js' chat='true' widgetId='96f480d7-7393-4840-be53-f4e833dcd9eb'></script> */ ?>
  <!-- Paste this right before your closing head tag -->
<?php /*
<script type="text/javascript">
(function (f, b) { if (!b.__SV) { var e, g, i, h; window.mixpanel = b; b._i = []; b.init = function (e, f, c) { function g(a, d) { var b = d.split("."); 2 == b.length && ((a = a[b[0]]), (d = b[1])); a[d] = function () { a.push([d].concat(Array.prototype.slice.call(arguments, 0))); }; } var a = b; "undefined" !== typeof c ? (a = b[c] = []) : (c = "mixpanel"); a.people = a.people || []; a.toString = function (a) { var d = "mixpanel"; "mixpanel" !== c && (d += "." + c); a || (d += " (stub)"); return d; }; a.people.toString = function () { return a.toString(1) + ".people (stub)"; }; i = "disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split( " "); for (h = 0; h < i.length; h++) g(a, i[h]); var j = "set set_once union unset remove delete".split(" "); a.get_group = function () { function b(c) { d[c] = function () { call2_args = arguments; call2 = [c].concat(Array.prototype.slice.call(call2_args, 0)); a.push([e, call2]); }; } for ( var d = {}, e = ["get_group"].concat( Array.prototype.slice.call(arguments, 0)), c = 0; c < j.length; c++) b(j[c]); return d; }; b._i.push([e, f, c]); }; b.__SV = 1.2; e = f.createElement("script"); e.type = "text/javascript"; e.async = !0; e.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === f.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js"; g = f.getElementsByTagName("script")[0]; g.parentNode.insertBefore(e, g); } })(document, window.mixpanel || []);

// Track when the path changes, ignoring any query string or hash changes
mixpanel.init('53b3ffd769a6ebe7429e4e90bdd3ca41', {
    track_pageview: "url-with-path"
    });
 
// Track when the path or query string change, ignoring hash changes
mixpanel.init('53b3ffd769a6ebe7429e4e90bdd3ca41', {
    track_pageview: "url-with-path-and-query-string"
    });
 
// Track any URL changes in the path, query string, or hash
mixpanel.init('53b3ffd769a6ebe7429e4e90bdd3ca41', {
    track_pageview: "full-url"
    });
</script> 
*/ ?>
<?php 
  $header_javascripts = get_field('header_javascripts','option'); 
  echo $header_javascripts;
?>
<?php /*  <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0127/3381.js" async="async"></script> */ ?>
</head>
<body <?php body_class(); ?>>
<?php if (!is_user_logged_in() && $current_domain === $live_domain && !$is_bot) : ?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLXCNLLT"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<?php endif; ?>
  <?php if ( ! is_404() ) : ?>

  <div id="main-container" class="aos-all">
    
    <div class="getcertifiedbtn">
      <?php $enroll_now_site_wide = get_field('enroll_now_site_wide', 'options'); ?>
      <?php if(!empty($enroll_now_site_wide)) : ?>
        <a href="<?php echo $enroll_now_site_wide['url']; ?>" class="btn btn-primary btnbounce bouncestyle1" target="_blank"><?php echo $enroll_now_site_wide['title']; ?> <i class="fa-solid fa-arrow-right ms-1"></i></a>
      <?php endif; ?>
    </div>

    <?php
    $header_type = get_field('header_type');
    $headerlogo = get_field('header_logo', 'option');
    $headerlogo_black = get_field('header_logo_black', 'option');
    if (!empty($header_type) && $header_type == 'Header_1') {
    ?>
      <header class="header-section text-center pt-4 pb-4">
        <div class="container-fluid align-items-start">
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>" style="width:214px;">
            <?php /* <img alt="<?php echo $headerlogo['alt']; ?>" src="<?php echo $headerlogo['url']; ?>"> */ ?>
            <img alt="<?php echo "AICerts"; ?>" src="<?php echo $headerlogo; ?>">
          </a>
        </div>
      </header>
    <?php
    } else { ?>
      <header class="header-section">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid align-items-start">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>" style="width:214px;">
            <?php if (!isset($_COOKIE['theme']) || $_COOKIE['theme'] == '0') { ?>
              <img alt="AI CERTs Logo – Advancing AI Certification Excellence" src="<?php echo $headerlogo_black; ?>">
            <?php } else { ?>
              <img alt="AI CERTs Logo – Advancing AI Certification Excellence" src="<?php echo $headerlogo; ?>">
            <?php } ?>
            </a>
            <?php if (shortcode_exists('aisearch2_form_sc')) { ?>
              <div class="mobile-search-panel">
                <a href="#" class="btn-search-mobile"><img alt="Search" class="iconsearch" src="<?php echo esc_url(get_template_directory_uri() . "/images/search-icon.svg"); ?>"></a>
                <a href="#" class="btn-search-close">Close</a>
                <?php /*
                <!-- <div class="search-form searchbar-mainnav">
                      <form role="search" method="get" id="searchform" class="searchform form" action="#">
                        <input type="search" name="q" id="q" value="<?php //echo $search_query; ?>" placeholder="Search …" class="form-control">
                        <input type="submit" id="searchsubmit" value="" class="searchbtn">
                      </form>
                    </div> --> */ ?>
                <div class="search-in-mobile-view"></div>
                <?php /* if ( shortcode_exists( 'aisearch2_form_sc' ) ) {
                        echo do_shortcode('[aisearch2_form_sc]'); 
                    } */ ?>

              </div>
            <?php } ?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php /*
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img alt="<?php echo $headerlogo['alt']; ?>" src="<?php echo $headerlogo['url']; ?>"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span> 
            </button> */ ?>
            
            <?php
            include_once get_template_directory() . "/inc/mobile_menu.php"; 
            include_once get_template_directory() . "/inc/desktop_menu.php";
            // if(wp_is_mobile())
            // {
            //   include_once get_template_directory() . "/inc/mobile_menu.php"; 
            // }
            // else {
            //   include_once get_template_directory() . "/inc/desktop_menu.php";
            // }
            ?>
          </div>
          <?php /*
          <div id="google_translate_element"></div>

          <script type="text/javascript">
              function googleTranslateElementInit() {
                  new google.translate.TranslateElement(
                      {
                          pageLanguage: 'en', // Set your website's default language here
                          includedLanguages: 'en,es,fr,de,it', // Add the languages you want to support
                          layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                      }, 
                      'google_translate_element'
                  );
              }
          </script>

          <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          */ ?>
        </nav>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "AICERTs",
            "item": "https://www.aicerts.ai/"
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Certifications",
            "item": "https://www.aicerts.ai/certifications"
          },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "AI Prompt Engineer",
            "item": "https://www.aicerts.ai/certifications/essentials/ai-prompt-engineer"
          },{
            "@type": "ListItem", 
            "position": 4, 
            "name": "Blockchain Development Certification",
            "item": "https://www.aicerts.ai/certifications/blockchain-bitcoin/blockchain-developer"
          },{
            "@type": "ListItem", 
            "position": 5, 
            "name": "AI quantum Certification",
            "item": "https://www.aicerts.ai/certifications/data-robotics/ai-quantum"
          },{
            "@type": "ListItem", 
            "position": 6, 
            "name": "AI developer",
            "item": "https://www.aicerts.ai/certifications/development/ai-developer"
          }]
        }
        </script>
        <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
          "@type": "Question",
          "name": "Who should consider getting certified with AI CERTs®?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Working professionals, entrepreneurs, students, startup founders, and more should consider getting certified with AI CERTs®, offering industry recognized in-demand AI and Blockchain certifications, to enhance their expertise and career prospects in these cutting-edge fields."
          }
        },{
          "@type": "Question",
          "name": "What is the difference between certificates and certifications?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Certificates demonstrate completion of a specific course or training, focusing on acquiring particular knowledge or skills. Certifications, on the other hand, validate expertise and competence in a field through standardized exams and ongoing requirements, ensuring sustained proficiency."
          }
        },{
          "@type": "Question",
          "name": "What are the benefits of role-based certifications?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Role-based certifications provide targeted skills and knowledge, enhancing job performance and career advancement. They demonstrate expertise in specific areas, increase employability, and often lead to higher salaries and better job opportunities. The AI CERTs® website offers specialized role-based certifications in AI and blockchain, tailored for professionals seeking to advance their careers in these fields with in-demand programs."
          }
        },{
          "@type": "Question",
          "name": "Can I get an AI certification if I don’t have a technical background?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, you can get an AI certification without a technical background. AI CERTs® offers programs designed for individuals with non-technical as well as technical backgrounds, individuals, making AI knowledge accessible to everyone."
          }
        },{
          "@type": "Question",
          "name": "What kind of support is available during the course?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The AI CERTs® website offers extensive support for learners, including access to expert educators, business coaches, and advisors. Additionally, learners benefit from detailed guidance through certifications tailored for AI and blockchain specializations, ensuring comprehensive learning and professional development."
          }
        },{
          "@type": "Question",
          "name": "How are the exams conducted?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The AI CERTs® exams are conducted online and are designed to validate the candidate's knowledge in AI and Blockchain domains. Exams include multiple-choice questions, case studies, and practical exercises, ensuring a comprehensive assessment of skills."
          }
        },{
          "@type": "Question",
          "name": "Are these certifications globally recognized?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, AI CERTs® certifications are globally recognized. They are designed by the industry and subject matter experts and offer comprehensive knowledge on AI and blockchain specializations, covering the industry demands. For detailed information, visit AI CERTs® Store"
          }
        },{
          "@type": "Question",
          "name": "Are there any group discounts or corporate training options available?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For group discounts or corporate training, you can reach out to us through support@aicerts.ai for detailed information."
          }
        },{
          "@type": "Question",
          "name": "What is our certification development process?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our certification development process involves rigorous industry analysis, curriculum design by subject matter experts, pilot testing, and continuous updates based on feedback and emerging trends to ensure relevance and effectiveness."
          }
        },{
          "@type": "Question",
          "name": "Who is involved in the certification development process?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The certification development process involves a team of experts, including educators from leading universities, business coaches, AI subject matter experts, certification strategists, and senior directors of learning and development"
          }
        },{
          "@type": "Question",
          "name": "How up to date is the course content?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The course content on AI CERTs® is designed to be up-to-date, reflecting the latest advancements and best practices in AI and blockchain technologies. The certifications offered are continuously updated to ensure relevance in the rapidly evolving tech landscape."
          }
        }]
      }
      </script>
      </header>
    <?php
    }
  endif;
    ?>