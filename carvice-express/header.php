<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/Vice1.png')); ?>">
  <link rel="apple-touch-icon" href="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/Vice1.png')); ?>">
  
  <!-- Direct CSS Stylesheets with Protocol Auto-Scheme -->
  <link rel="stylesheet" href="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/styles/main.css')); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/styles/hero.css')); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/styles/sections.css')); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/styles/footer.css')); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(set_url_scheme(get_stylesheet_uri())); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) :
?>
  <!-- Header & Navigation Bar -->
  <header class="site-header" id="site-header" style="position: fixed; top: 0; left: 0; right: 0; width: 100%; z-index: 999999; background-color: rgba(11, 14, 17, 0.95); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); padding: 14px 0; border-bottom: 1px solid rgba(243, 168, 5, 0.3); box-shadow: 0 6px 25px rgba(0,0,0,0.5); display: block !important; visibility: visible !important; opacity: 1 !important;">
    <div class="container nav-container" style="display: flex; align-items: center; justify-content: space-between; width: 100%; max-width: 1380px; margin: 0 auto; padding: 0 24px; box-sizing: border-box;">
      
      <!-- Right: Brand Logo (in RTL) -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" aria-label="كارفيس إكسبريس الرئيسية" style="display: flex; align-items: center; gap: 12px; z-index: 1000001; text-decoration: none;">
        <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/logo.png')); ?>" alt="شعار كارفيس إكسبريس CarVice Express" style="height: 48px; max-height: 52px; width: auto; object-fit: contain; display: block;">
      </a>

      <!-- Center: Navigation Links -->
      <nav class="desktop-nav" aria-label="القائمة الرئيسية" style="display: flex; align-items: center; gap: 24px;">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link active" data-section="hero">الرئيسية</a>
        <a href="https://carvicegroup.com/%d9%85%d9%86-%d9%86%d8%ad%d9%86/" class="nav-link" data-section="about">من نحن</a>
        <a href="https://carvicegroup.com/%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7/" class="nav-link" data-section="services">خدماتنا</a>
        <a href="#offers" class="nav-link" data-section="offers">عروضنا</a>
        <a href="#branches" class="nav-link" data-section="branches">فروعنا</a>
        <a href="#faq" class="nav-link" data-section="faq">الأسئلة الشائعة</a>
        <a href="https://carvicegroup.com/%d8%a7%d9%84%d9%85%d8%af%d9%88%d9%86%d8%a9/" target="_blank" rel="noopener" class="nav-link">المدونة</a>
        <a href="https://carvicegroup.com/%d8%aa%d9%88%d8%a7%d8%b5%d9%84-%d9%85%d8%b9%d9%86%d8%a7/" class="nav-link" data-section="site-footer">تواصل معنا</a>
      </nav>

      <!-- Left: Header Actions -->
      <div class="header-actions" style="display: flex; align-items: center; gap: 14px;">
        <a href="tel:0569392700" class="header-call-btn" id="header-contact-btn" style="background-color: #F3A805; color: #0B0E11; font-weight: 800; font-size: 0.95rem; padding: 9px 22px; border-radius: 9999px; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; box-shadow: 0 4px 15px rgba(243, 168, 5, 0.35); white-space: nowrap;">
          <svg viewBox="0 0 24 24" aria-hidden="true" style="width: 17px; height: 17px; fill: currentColor;"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
          <span>اتصل بنا</span>
        </a>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-toggle" id="mobile-menu-btn" aria-label="فتح القائمة">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

    </div>
  </header>

  <!-- Mobile Drawer -->
  <div class="mobile-drawer-overlay" id="mobile-overlay"></div>
  <aside class="mobile-drawer" id="mobile-drawer">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-nav-link active" data-section="hero">الرئيسية</a>
    <a href="https://carvicegroup.com/%d9%85%d9%86-%d9%86%d8%ad%d9%86/" class="mobile-nav-link" data-section="about">من نحن</a>
    <a href="https://carvicegroup.com/%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7/" class="mobile-nav-link" data-section="services">خدماتنا</a>
    <a href="#offers" class="mobile-nav-link" data-section="offers">عروضنا</a>
    <a href="#branches" class="mobile-nav-link" data-section="branches">فروعنا</a>
    <a href="#faq" class="mobile-nav-link" data-section="faq">الأسئلة الشائعة</a>
    <a href="https://carvicegroup.com/%d8%a7%d9%84%d9%85%d8%af%d9%88%d9%86%d8%a9/" target="_blank" rel="noopener" class="mobile-nav-link">المدونة</a>
    <a href="https://carvicegroup.com/%d8%aa%d9%88%d8%a7%d8%b5%d9%84-%d9%85%d8%b9%d9%86%d8%a7/" class="mobile-nav-link" data-section="site-footer">تواصل معنا</a>
    <a href="tel:0569392700" class="btn-gold" style="margin-top: 20px; width: 100%;">اتصل بنا الآن</a>
  </aside>
<?php endif; ?>
