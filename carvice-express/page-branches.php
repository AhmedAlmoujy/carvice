<?php
/**
 * Template Name: Branches Page (صفحة فروعنا)
 * Description: Dedicated page template for CarVice Express branches locator matching Figma design.
 */

get_header(); 
$theme_uri = set_url_scheme(get_template_directory_uri());
?>

<!-- =========================================================================
     2. Branches Hero Section (Figma: كارفيس الفروع)
     ========================================================================= -->
<section class="branches-hero" id="branches-hero" style="background-image: linear-gradient(to bottom, rgba(11, 14, 17, 0.45) 0%, rgba(11, 14, 17, 0.25) 50%, rgba(11, 14, 17, 0.85) 90%, #FFFAEC 100%), url('<?php echo esc_url($theme_uri . '/assets/images/branches_map.png'); ?>');">
  <div class="branches-hero-overlay"></div>
  <div class="container branches-hero-content">
    
    <!-- Sub-headline -->
    <div class="branches-hero-tag">
      <img src="<?php echo esc_url($theme_uri . '/assets/images/Vice1.png'); ?>" alt="">
      <span>المملكة العربية السعودية</span>
      <img src="<?php echo esc_url($theme_uri . '/assets/images/vice2.png'); ?>" alt="">
    </div>

    <!-- Main Display Title -->
    <h1 class="branches-hero-title">فروعنا</h1>

    <!-- Description -->
    <p class="branches-hero-desc">
      شبكة فروع كارفيس إكسبريس في المنطقة الشرقية .. في خدمتكم بأحدث الأجهزة وفريق فني محترف لأسرع صيانة دورية بأعلى معايير الجودة.
    </p>

  </div>

  <!-- Smooth Bottom Wave Divider into #FFFAEC -->
  <div class="branches-wave-divider" aria-hidden="true">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
      <path d="M0,32L60,42.7C120,53,240,75,360,74.7C480,75,600,53,720,48C840,43,960,53,1080,64C1200,75,1320,85,1380,90.7L1440,96L1440,120L1380,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z"></path>
    </svg>
  </div>
</section>

<!-- =========================================================================
     3. Branches Main Content Section
     ========================================================================= -->
<main class="branches-main-section" id="branches-list-section">
  <div class="container">

    <!-- Filter Tabs & Quick Search -->
    <div class="branches-controls-wrap">
      
      <!-- Filter Tabs -->
      <div class="branches-filter-tabs">
        <button type="button" class="branch-filter-btn active" data-filter="all">جميع الفروع (6)</button>
        <button type="button" class="branch-filter-btn" data-filter="dammam">الدمام (4)</button>
        <button type="button" class="branch-filter-btn" data-filter="khobar">الخبر (2)</button>
      </div>

      <!-- Search Input -->
      <div class="branches-search-box">
        <svg class="branches-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <input type="text" id="branches-search" class="branches-search-input" placeholder="ابحث باسم الحي أو الشارع...">
      </div>

    </div>

    <!-- Empty Search State -->
    <div id="branches-empty" class="branches-empty-state">
      <svg class="branches-empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="12" y1="8" x2="12" y2="12"></line>
        <line x1="12" y1="16" x2="12.01" y2="16"></line>
      </svg>
      <h3 style="font-size: 1.4rem; font-weight: 800; color: #1A1D20; margin-bottom: 8px;">لم نجد نتائج مطابقة</h3>
      <p style="color: #6B7280;">يرجى تجربة البحث باسم حي آخر أو اختيار "جميع الفروع".</p>
    </div>

    <!-- Branches Cards List (Figma: Frame 2147227731) -->
    <div class="branches-cards-list" id="branches-container">

      <!-- Branch 1: الدمام - حي المزروعية (طريق الملك فيصل) -->
      <article class="branch-card" data-city="dammam">
        <div class="branch-card-info">
          <span class="branch-region-tag">المنطقة الشرقية</span>
          <h2 class="branch-card-title">المنطقة الشرقية - الدمام</h2>
          <p class="branch-card-address">حي المزروعية - طريق الملك فيصل</p>
          
          <div class="branch-card-meta">
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z"/></svg>
              يومياً من 8:00 ص إلى 11:00 م
            </span>
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 10h2v4h-2zm0 6h2v2h-2z"/></svg>
              صيانة سريعة وفحص دقيق
            </span>
          </div>

          <div class="branch-card-actions">
            <a href="https://wa.me/966530623461?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%D9%8B%20%D9%83%D8%A7%D8%B1%D9%81%D9%8A%D8%B3%20%D8%A5%D9%83%D8%B3%D8%A8%D8%B1%D9%8A%D8%B3%D8%8C%20%D8%A3%D9%88%D8%AF%20%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D8%B9%D9%86%20%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D9%81%D8%B1%D8%B9%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85%20-%20%D8%AD%D9%8A%20%D8%A7%D9%84%D9%85%D8%B2%D8%B1%D9%88%D8%B9%D9%8A%D8%A9%20(%D8%B7%D8%B1%D9%8A%D9%82%20%D8%A7%D9%84%D9%85%D9%84%D9%83%20%D9%81%D9%8A%D8%B5%D9%84)" target="_blank" rel="noopener" class="branch-btn-primary">
              تواصل مع الفرع
            </a>
            <a href="https://maps.google.com/?q=%D8%B7%D8%B1%D9%8A%D9%82%20%D8%A7%D9%84%D9%85%D9%84%D9%83%20%D9%81%D9%8A%D8%B5%D9%84,%20%D8%AD%D9%8A%20%D8%A7%D9%84%D9%85%D8%B2%D8%B1%D9%88%D8%B9%D9%8A%D8%A9,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85" target="_blank" rel="noopener" class="branch-btn-secondary" title="الاتجاهات على الخريطة">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span>الاتجاهات</span>
            </a>
          </div>
        </div>

        <div class="branch-card-map-wrap">
          <a href="https://maps.google.com/?q=%D8%B7%D8%B1%D9%8A%D9%82%20%D8%A7%D9%84%D9%85%D9%84%D9%83%20%D9%81%D9%8A%D8%B5%D9%84,%20%D8%AD%D9%8A%20%D8%A7%D9%84%D9%85%D8%B2%D8%B1%D9%88%D8%B9%D9%8A%D8%A9,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85" target="_blank" rel="noopener" class="branch-map-badge">
            <span>Open in Maps</span>
            <svg viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
          </a>
          <iframe 
            class="branch-card-iframe" 
            src="https://maps.google.com/maps?q=%D8%B7%D8%B1%D9%8A%D9%82%20%D8%A7%D9%84%D9%85%D9%84%D9%83%20%D9%81%D9%8A%D8%B5%D9%84,%20%D8%AD%D9%8A%20%D8%A7%D9%84%D9%85%D8%B2%D8%B1%D9%88%D8%B9%D9%8A%D8%A9,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85&t=&z=15&ie=UTF8&iwloc=&output=embed" 
            loading="lazy" 
            allowfullscreen 
            title="خريطة فرع الدمام حي المزروعية طريق الملك فيصل">
          </iframe>
        </div>
      </article>

      <!-- Branch 2: الخبر - حي الجوهرة (طريق الملك فهد بن عبدالعزيز) -->
      <article class="branch-card" data-city="khobar">
        <div class="branch-card-info">
          <span class="branch-region-tag">المنطقة الشرقية</span>
          <h2 class="branch-card-title">المنطقة الشرقية - الخبر</h2>
          <p class="branch-card-address">حي الجوهرة - طريق الملك فهد بن عبدالعزيز</p>
          
          <div class="branch-card-meta">
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z"/></svg>
              يومياً من 8:00 ص إلى 11:00 م
            </span>
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 10h2v4h-2zm0 6h2v2h-2z"/></svg>
              غسيل محركات وعناية شاملة
            </span>
          </div>

          <div class="branch-card-actions">
            <a href="https://wa.me/966530623461?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%D9%8B%20%D9%83%D8%A7%D8%B1%D9%81%D9%8A%D8%B3%20%D8%A5%D9%83%D8%B3%D8%A8%D8%B1%D9%8A%D8%B3%D8%8C%20%D8%A3%D9%88%D8%AF%20%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D8%B9%D9%86%20%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D9%81%D8%B1%D8%B9%20%D8%A7%D9%84%D8%AE%D8%A8%D8%B1%20-%20%D8%AD%D9%8A%20%D8%A7%D9%84%D8%AC%D9%88%D9%87%D8%B1%D8%A9" target="_blank" rel="noopener" class="branch-btn-primary">
              تواصل مع الفرع
            </a>
            <a href="https://maps.google.com/?q=%D8%B7%D8%B1%D9%8A%D9%82%20%D8%A7%D9%84%D9%85%D9%84%D9%83%20%D9%81%D9%87%D8%AF%20%D8%A8%D9%86%20%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2,%20%D8%AD%D9%8A%20%D8%A7%D9%84%D8%AC%D9%88%D9%87%D8%B1%D8%A9,%20%D8%A7%D9%84%D8%AE%D8%A8%D8%B1" target="_blank" rel="noopener" class="branch-btn-secondary" title="الاتجاهات على الخريطة">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span>الاتجاهات</span>
            </a>
          </div>
        </div>

        <div class="branch-card-map-wrap">
          <a href="https://maps.google.com/?q=%D8%B7%D8%B1%D9%8A%D9%82%20%D8%A7%D9%84%D9%85%D9%84%D9%83%20%D9%81%D9%87%D8%AF%20%D8%A8%D9%86%20%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2,%20%D8%AD%D9%8A%20%D8%A7%D9%84%D8%AC%D9%88%D9%87%D8%B1%D8%A9,%20%D8%A7%D9%84%D8%AE%D8%A8%D8%B1" target="_blank" rel="noopener" class="branch-map-badge">
            <span>Open in Maps</span>
            <svg viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
          </a>
          <iframe 
            class="branch-card-iframe" 
            src="https://maps.google.com/maps?q=%D8%B7%D8%B1%D9%8A%D9%82%20%D8%A7%D9%84%D9%85%D9%84%D9%83%20%D9%81%D9%87%D8%AF%20%D8%A8%D9%86%20%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2,%20%D8%AD%D9%8A%20%D8%A7%D9%84%D8%AC%D9%88%D9%87%D8%B1%D8%A9,%20%D8%A7%D9%84%D8%AE%D8%A8%D8%B1&t=&z=15&ie=UTF8&iwloc=&output=embed" 
            loading="lazy" 
            allowfullscreen 
            title="خريطة فرع الخبر حي الجوهرة طريق الملك فهد">
          </iframe>
        </div>
      </article>

      <!-- Branch 3: الدمام - حي المزروعية -->
      <article class="branch-card" data-city="dammam">
        <div class="branch-card-info">
          <span class="branch-region-tag">المنطقة الشرقية</span>
          <h2 class="branch-card-title">المنطقة الشرقية - الدمام</h2>
          <p class="branch-card-address">حي المزروعية</p>
          
          <div class="branch-card-meta">
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z"/></svg>
              يومياً من 8:00 ص إلى 11:00 م
            </span>
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 10h2v4h-2zm0 6h2v2h-2z"/></svg>
              تغيير زيوت وفلاتر أصلية
            </span>
          </div>

          <div class="branch-card-actions">
            <a href="https://wa.me/966530623461?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%D9%8B%20%D9%83%D8%A7%D8%B1%D9%81%D9%8A%D8%B3%20%D8%A5%D9%83%D8%B3%D8%A8%D8%B1%D9%8A%D8%B3%D8%8C%20%D8%A3%D9%88%D8%AF%20%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D8%B9%D9%86%20%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D9%81%D8%B1%D8%B9%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85%20-%20%D8%AD%D9%8A%20%D8%A7%D9%84%D9%85%D8%B2%D8%B1%D9%88%D8%B9%D9%8A%D8%A9" target="_blank" rel="noopener" class="branch-btn-primary">
              تواصل مع الفرع
            </a>
            <a href="https://maps.google.com/?q=%D8%AD%D9%8A%20%D8%A7%D9%84%D9%85%D8%B2%D8%B1%D9%88%D8%B9%D9%8A%D8%A9,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85" target="_blank" rel="noopener" class="branch-btn-secondary" title="الاتجاهات على الخريطة">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span>الاتجاهات</span>
            </a>
          </div>
        </div>

        <div class="branch-card-map-wrap">
          <a href="https://maps.google.com/?q=%D8%AD%D9%8A%20%D8%A7%D9%84%D9%85%D8%B2%D8%B1%D9%88%D8%B9%D9%8A%D8%A9,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85" target="_blank" rel="noopener" class="branch-map-badge">
            <span>Open in Maps</span>
            <svg viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
          </a>
          <iframe 
            class="branch-card-iframe" 
            src="https://maps.google.com/maps?q=%D8%AD%D9%8A%20%D8%A7%D9%84%D9%85%D8%B2%D8%B1%D9%88%D8%B9%D9%8A%D8%A9,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85&t=&z=15&ie=UTF8&iwloc=&output=embed" 
            loading="lazy" 
            allowfullscreen 
            title="خريطة فرع الدمام حي المزروعية">
          </iframe>
        </div>
      </article>

      <!-- Branch 4: الدمام - حي الشعلة -->
      <article class="branch-card" data-city="dammam">
        <div class="branch-card-info">
          <span class="branch-region-tag">المنطقة الشرقية</span>
          <h2 class="branch-card-title">المنطقة الشرقية - الدمام</h2>
          <p class="branch-card-address">حي الشعلة</p>
          
          <div class="branch-card-meta">
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z"/></svg>
              يومياً من 8:00 ص إلى 11:00 م
            </span>
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 10h2v4h-2zm0 6h2v2h-2z"/></svg>
              فحص كمبيوتر وبرمجة
            </span>
          </div>

          <div class="branch-card-actions">
            <a href="https://wa.me/966530623461?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%D9%8B%20%D9%83%D8%A7%D8%B1%D9%81%D9%8A%D8%B3%20%D8%A5%D9%83%D8%B3%D8%A8%D8%B1%D9%8A%D8%B3%D8%8C%20%D8%A3%D9%88%D8%AF%20%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D8%B9%D9%86%20%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D9%81%D8%B1%D8%B9%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85%20-%20%D8%AD%D9%8A%20%D8%A7%D9%84%D8%B4%D8%B9%D9%84%D8%A9" target="_blank" rel="noopener" class="branch-btn-primary">
              تواصل مع الفرع
            </a>
            <a href="https://maps.google.com/?q=%D8%AD%D9%8A%20%D8%A7%D9%84%D8%B4%D8%B9%D9%84%D8%A9,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85" target="_blank" rel="noopener" class="branch-btn-secondary" title="الاتجاهات على الخريطة">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span>الاتجاهات</span>
            </a>
          </div>
        </div>

        <div class="branch-card-map-wrap">
          <a href="https://maps.google.com/?q=%D8%AD%D9%8A%20%D8%A7%D9%84%D8%B4%D8%B9%D9%84%D8%A9,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85" target="_blank" rel="noopener" class="branch-map-badge">
            <span>Open in Maps</span>
            <svg viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
          </a>
          <iframe 
            class="branch-card-iframe" 
            src="https://maps.google.com/maps?q=%D8%AD%D9%8A%20%D8%A7%D9%84%D8%B4%D8%B9%D9%84%D8%A9,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85&t=&z=15&ie=UTF8&iwloc=&output=embed" 
            loading="lazy" 
            allowfullscreen 
            title="خريطة فرع الدمام حي الشعلة">
          </iframe>
        </div>
      </article>

      <!-- Branch 5: الدمام - حي أحد (شارع كلثوم بن الحسين) -->
      <article class="branch-card" data-city="dammam">
        <div class="branch-card-info">
          <span class="branch-region-tag">المنطقة الشرقية</span>
          <h2 class="branch-card-title">المنطقة الشرقية - الدمام</h2>
          <p class="branch-card-address">حي أحد - طريق شارع كلثوم بن الحسين</p>
          
          <div class="branch-card-meta">
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z"/></svg>
              يومياً من 8:00 ص إلى 11:00 م
            </span>
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 10h2v4h-2zm0 6h2v2h-2z"/></svg>
              ميزان وترصيص وصيانة دورية
            </span>
          </div>

          <div class="branch-card-actions">
            <a href="https://wa.me/966530623461?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%D9%8B%20%D9%83%D8%A7%D8%B1%D9%81%D9%8A%D8%B3%20%D8%A5%D9%83%D8%B3%D8%A8%D8%B1%D9%8A%D8%B3%D8%8C%20%D8%A3%D9%88%D8%AF%20%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D8%B9%D9%86%20%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D9%81%D8%B1%D8%B9%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85%20-%20%D8%AD%D9%8A%20%D8%A3%D8%AD%D8%AF" target="_blank" rel="noopener" class="branch-btn-primary">
              تواصل مع الفرع
            </a>
            <a href="https://maps.google.com/?q=%D8%B4%D8%A7%D8%B1%D8%B9%20%D9%83%D9%84%D8%AB%D9%88%D9%85%20%D8%A8%D9%86%20%D8%A7%D9%84%D8%AD%D8%B3%D9%8A%D9%86,%20%D8%AD%D9%8A%20%D8%A3%D8%AD%D8%AF,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85" target="_blank" rel="noopener" class="branch-btn-secondary" title="الاتجاهات على الخريطة">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span>الاتجاهات</span>
            </a>
          </div>
        </div>

        <div class="branch-card-map-wrap">
          <a href="https://maps.google.com/?q=%D8%B4%D8%A7%D8%B1%D8%B9%20%D9%83%D9%84%D8%AB%D9%88%D9%85%20%D8%A8%D9%86%20%D8%A7%D9%84%D8%AD%D8%B3%D9%8A%D9%86,%20%D8%AD%D9%8A%20%D8%A3%D8%AD%D8%AF,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85" target="_blank" rel="noopener" class="branch-map-badge">
            <span>Open in Maps</span>
            <svg viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
          </a>
          <iframe 
            class="branch-card-iframe" 
            src="https://maps.google.com/maps?q=%D8%B4%D8%A7%D8%B1%D8%B9%20%D9%83%D9%84%D8%AB%D9%88%D9%85%20%D8%A8%D9%86%20%D8%A7%D9%84%D8%AD%D8%B3%D9%8A%D9%86,%20%D8%AD%D9%8A%20%D8%A3%D8%AD%D8%AF,%20%D8%A7%D9%84%D8%AF%D9%85%D8%A7%D9%85&t=&z=15&ie=UTF8&iwloc=&output=embed" 
            loading="lazy" 
            allowfullscreen 
            title="خريطة فرع الدمام حي أحد شارع كلثوم بن الحسين">
          </iframe>
        </div>
      </article>

      <!-- Branch 6: الخبر - حي الصواري -->
      <article class="branch-card" data-city="khobar">
        <div class="branch-card-info">
          <span class="branch-region-tag">المنطقة الشرقية</span>
          <h2 class="branch-card-title">المنطقة الشرقية - الخبر</h2>
          <p class="branch-card-address">حي الصواري</p>
          
          <div class="branch-card-meta">
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z"/></svg>
              يومياً من 8:00 ص إلى 11:00 م
            </span>
            <span class="branch-meta-item">
              <svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 10h2v4h-2zm0 6h2v2h-2z"/></svg>
              صيانة دورية وضمان معتمد
            </span>
          </div>

          <div class="branch-card-actions">
            <a href="https://wa.me/966530623461?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%D9%8B%20%D9%83%D8%A7%D8%B1%D9%81%D9%8A%D8%B3%20%D8%A5%D9%83%D8%B3%D8%A8%D8%B1%D9%8A%D8%B3%D8%8C%20%D8%A3%D9%88%D8%AF%20%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%81%D8%B3%D8%A7%D8%B1%20%D8%B9%D9%86%20%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D9%81%D8%B1%D8%B9%20%D8%A7%D9%84%D8%AE%D8%A8%D8%B1%20-%20%D8%AD%D9%8A%20%D8%A7%D9%84%D8%B5%D9%88%D8%A7%D8%B1%D9%8A" target="_blank" rel="noopener" class="branch-btn-primary">
              تواصل مع الفرع
            </a>
            <a href="https://maps.google.com/?q=%D8%AD%D9%8A%20%D8%A7%D9%84%D8%B5%D9%88%D8%A7%D8%B1%D9%8A,%20%D8%A7%D9%84%D8%AE%D8%A8%D8%B1" target="_blank" rel="noopener" class="branch-btn-secondary" title="الاتجاهات على الخريطة">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span>الاتجاهات</span>
            </a>
          </div>
        </div>

        <div class="branch-card-map-wrap">
          <a href="https://maps.google.com/?q=%D8%AD%D9%8A%20%D8%A7%D9%84%D8%B5%D9%88%D8%A7%D8%B1%D9%8A,%20%D8%A7%D9%84%D8%AE%D8%A8%D8%B1" target="_blank" rel="noopener" class="branch-map-badge">
            <span>Open in Maps</span>
            <svg viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
          </a>
          <iframe 
            class="branch-card-iframe" 
            src="https://maps.google.com/maps?q=%D8%AD%D9%8A%20%D8%A7%D9%84%D8%B5%D9%88%D8%A7%D8%B1%D9%8A,%20%D8%A7%D9%84%D8%AE%D8%A8%D8%B1&t=&z=15&ie=UTF8&iwloc=&output=embed" 
            loading="lazy" 
            allowfullscreen 
            title="خريطة فرع الخبر حي الصواري">
          </iframe>
        </div>
      </article>

    </div>

  </div>
</main>

<script src="<?php echo esc_url($theme_uri . '/scripts/branches.js'); ?>"></script>

<?php get_footer(); ?>
