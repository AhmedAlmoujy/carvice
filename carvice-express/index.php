<?php get_header(); ?>


  <!-- =========================================================================
       2. Hero Section
       ========================================================================= -->
  <section class="hero-section" id="hero" style="background-image: linear-gradient(to bottom, rgba(11, 14, 17, 0.4) 0%, rgba(11, 14, 17, 0.7) 100%), url('<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/main.png')); ?>'); background-size: cover; background-position: center 30%;">
    <div class="container hero-content">
      
      <!-- Saudi Emblem Logo (عزنا) -->
      <div class="saudi-badge-wrapper reveal-scale animate-float-slow">
        <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/azna.png')); ?>" alt="عزنا بطبعنا - اليوم الوطني السعودي" class="saudi-badge-img">
      </div>

      <!-- Main Headline (Strictly 2 lines) -->
      <h1 class="hero-title reveal gold-shimmer-text">
        صيانة دورية متكاملة<br>
        بأحدث الأجهزة على يد فنيين محترفين
      </h1>

      <!-- Hero Subtitle -->
      <p class="hero-subtitle reveal delay-1">
        كارفيس .. جودة عالمية، خبرة موثوقة، وسعر يناسبك
      </p>

    </div>

    <!-- Smooth Bottom Wave Divider -->
    <div class="hero-wave-divider" aria-hidden="true">
      <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path d="M0,32L60,42.7C120,53,240,75,360,74.7C480,75,600,53,720,48C840,43,960,53,1080,64C1200,75,1320,85,1380,90.7L1440,96L1440,120L1380,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z"></path>
      </svg>
    </div>
  </section>

  <!-- =========================================================================
       3. Services Section ("خدماتنا")
       ========================================================================= -->
  <section class="section-sand services-section" id="services">
    <div class="container">
      
      <div class="section-header-block reveal">
        <h2 class="section-badge-title">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="badge-chevron">
          <span>خدماتنا</span>
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/Vice1.png')); ?>" alt="" class="badge-chevron">
        </h2>
      </div>

      <!-- 3 Interactive Hover-Reveal Service Cards (Desktop Grid / Mobile Slider) -->
      <div class="services-grid reveal-scale delay-1" id="services-slider">
        
        <!-- Card 1: العناية -->
        <article class="service-card service-hover-card">
          <!-- Front Layer: Main Photo & Title -->
          <div class="service-card-front">
            <div class="service-card-img-wrap">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/service_photo_care.png')); ?>" alt="<?php esc_attr_e('خدمات العناية بالسيارات كارفيس إكسبريس', 'carvice-express'); ?>" loading="lazy">
            </div>
            <div class="service-card-overlay">
              <h3 class="service-card-title"><?php esc_html_e('العناية', 'carvice-express'); ?></h3>
              <a href="https://carvicegroup.com/%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7/" class="service-card-btn" style="text-decoration: none;"><?php esc_html_e('اعرف المزيد', 'carvice-express'); ?></a>
            </div>
          </div>

          <!-- Hover Layer: Detailed Services Graphic -->
          <div class="service-card-back">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/service_card_care_1.png')); ?>" alt="<?php esc_attr_e('تفاصيل خدمات العناية كارفيس إكسبريس', 'carvice-express'); ?>" loading="lazy">
            <a href="https://carvicegroup.com/%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7/" class="service-card-full-link" aria-label="<?php esc_attr_e('عرض تفاصيل خدمات العناية', 'carvice-express'); ?>"></a>
          </div>
        </article>

        <!-- Card 2: الصيانة -->
        <article class="service-card service-hover-card">
          <!-- Front Layer: Main Photo & Title -->
          <div class="service-card-front">
            <div class="service-card-img-wrap">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/service_photo_maintenance.png')); ?>" alt="<?php esc_attr_e('خدمات الصيانة الدورية كارفيس إكسبريس', 'carvice-express'); ?>" loading="lazy">
            </div>
            <div class="service-card-overlay">
              <h3 class="service-card-title"><?php esc_html_e('الصيانة', 'carvice-express'); ?></h3>
              <a href="https://carvicegroup.com/%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7/" class="service-card-btn" style="text-decoration: none;"><?php esc_html_e('اعرف المزيد', 'carvice-express'); ?></a>
            </div>
          </div>

          <!-- Hover Layer: Detailed Services Graphic -->
          <div class="service-card-back">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/service_card_maint_1.png')); ?>" alt="<?php esc_attr_e('تفاصيل خدمات الصيانة كارفيس إكسبريس', 'carvice-express'); ?>" loading="lazy">
            <a href="https://carvicegroup.com/%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7/" class="service-card-full-link" aria-label="<?php esc_attr_e('عرض تفاصيل خدمات الصيانة', 'carvice-express'); ?>"></a>
          </div>
        </article>

        <!-- Card 3: الخدمات أخرى -->
        <article class="service-card service-hover-card">
          <!-- Front Layer: Main Photo & Title -->
          <div class="service-card-front">
            <div class="service-card-img-wrap">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/service_photo_other.png')); ?>" alt="<?php esc_attr_e('خدمات الفحص والتشخيص كارفيس إكسبريس', 'carvice-express'); ?>" loading="lazy">
            </div>
            <div class="service-card-overlay">
              <h3 class="service-card-title"><?php esc_html_e('الخدمات أخرى', 'carvice-express'); ?></h3>
              <a href="https://carvicegroup.com/%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7/" class="service-card-btn" style="text-decoration: none;"><?php esc_html_e('اعرف المزيد', 'carvice-express'); ?></a>
            </div>
          </div>

          <!-- Hover Layer: Detailed Services Graphic -->
          <div class="service-card-back">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/service_card_other_1.png')); ?>" alt="<?php esc_attr_e('تفاصيل الخدمات الأخرى كارفيس إكسبريس', 'carvice-express'); ?>" loading="lazy">
            <a href="https://carvicegroup.com/%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7/" class="service-card-full-link" aria-label="<?php esc_attr_e('عرض تفاصيل الخدمات المتخصصة', 'carvice-express'); ?>"></a>
          </div>
        </article>

      </div>

      <!-- Mobile Pagination Indicators for Services Slider -->
      <div class="services-pagination-dots" id="services-dots">
        <span class="pagination-dot active" data-slide="0"></span>
        <span class="pagination-dot" data-slide="1"></span>
        <span class="pagination-dot" data-slide="2"></span>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4. About Us Section ("نحن كارفيس إكسبريس")
       ========================================================================= -->
  <section class="section-sand about-section" id="about">
    <div class="container about-grid">
      
      <!-- Photo Collage Layout matching exact design with ornaments (RTL) -->
      <div class="about-visual-collage reveal-right">
        
        <!-- Top-Left Ornament: Green Tree Emblem Badge -->
        <div class="about-ornament-badge ornament-top-left animate-float-slow">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/saudi_tree_emblem.png')); ?>" alt="شعار النخلة السعودية كارفيس إكسبريس" loading="lazy">
        </div>

        <!-- Top-Right Overlapping Photo: we2.png -->
        <div class="about-photo-frame photo-top-right hover-zoom-img">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/img/we2.png')); ?>" alt="ورشة كارفيس إكسبريس المتطورة" loading="lazy">
        </div>

        <!-- Bottom-Left Overlapping Photo: we.png -->
        <div class="about-photo-frame photo-bottom-left hover-zoom-img">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/img/we.png')); ?>" alt="فريق عمل كارفيس إكسبريس المحترف" loading="lazy">
        </div>

        <!-- Bottom-Right Ornament: Saudi Traditional Pattern Badge -->
        <div class="about-ornament-badge ornament-bottom-right animate-float-slow">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/saudi_pattern_corner.png')); ?>" alt="زخرفة سعودية تقليدية كارفيس إكسبريس" loading="lazy">
        </div>

      </div>

      <!-- Left: Text Content (RTL) -->
      <div class="about-content reveal-left delay-1">
        <div class="about-eyebrow">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="eyebrow-chevron">
          <span>مرحبا بك في كارفيس إكسبريس</span>
        </div>

        <h2 class="about-title">
          نحن <span>كارفيس إكسبريس</span><br>
          <span class="about-title-gold">نقدم خدمات متخصصة</span>
        </h2>

        <ul class="about-features-list">
          <li class="about-feature-item reveal delay-1">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="bullet-chevron">
            <p class="about-feature-text">
              لصيانة السيارات الحديثة وفق أعلى معايير الجودة والاحترافية، معتمدين على أحدث الأجهزة والتقنيات العالمية لضمان دقة التشخيص وجودة الأداء.
            </p>
          </li>
          <li class="about-feature-item reveal delay-2">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="bullet-chevron">
            <p class="about-feature-text">
              نسعى لأن نكون وجهتك الأولى للعناية بسيارتك، من خلال الجمع بين الخبرة، الجودة، سرعة الإنجاز والأسعار المناسبة.
            </p>
          </li>
          <li class="about-feature-item reveal delay-3">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="bullet-chevron">
            <p class="about-feature-text">
              نحرص على تقديم تجربة مريحة وموثوقة تضمن لك راحة البال في كل زيارة.
            </p>
          </li>
          <li class="about-feature-item reveal delay-4">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="bullet-chevron">
            <p class="about-feature-text">
              يضم فريقنا فنيين فلبينيين ذوي خبرة وكفاءة عالية، يعملون باحترافية ودقة وفق معايير واضحة في الصيانة والعناية بالسيارات، لنمنحك خدمة يمكنك الوثوق بها في كل مرة.
            </p>
          </li>
        </ul>
      </div>

    </div>
  </section>

  <!-- Traditional Saudi Pattern Ribbon Banner (Divider 1) -->
  <div class="pattern-ribbon" style="background-image: url('<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/zag_banner.png')); ?>'); background-repeat: repeat-x; background-size: auto 100%; height: 75px; width: 100%; display: block;" aria-hidden="true"></div>

  <!-- =========================================================================
       5. Featured Engine Wash Section ("غسيل المحرك من الداخل")
       ========================================================================= -->
  <section class="section-dark engine-section" id="engine-feature">
    <div class="container engine-grid">
      
      <!-- RTL Right Column: 3 Feature Pillars -->
      <div class="engine-right-features reveal-right">
        
        <div class="engine-feature-card reveal delay-1">
          <div class="engine-feature-icon">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/engine_icons/icon_check.png')); ?>" alt="فحص دقيق" width="36" height="36">
          </div>
          <div>
            <h3 class="engine-feature-title">فحص دقيق</h3>
            <p class="engine-feature-desc">فحص شامل يساعد على اكتشاف احتياجات سيارتك.</p>
          </div>
        </div>

        <div class="engine-feature-card reveal delay-2">
          <div class="engine-feature-icon">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/engine_icons/icon_team.png')); ?>" alt="فريق محترف" width="36" height="36">
          </div>
          <div>
            <h3 class="engine-feature-title">فريق محترف</h3>
            <p class="engine-feature-desc">فنيون متخصصون يعتنون بسيارتك باحترافية.</p>
          </div>
        </div>

        <div class="engine-feature-card reveal delay-3">
          <div class="engine-feature-icon">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/engine_icons/icon_services.png')); ?>" alt="خدمات متكاملة" width="36" height="36">
          </div>
          <div>
            <h3 class="engine-feature-title">خدمات متكاملة</h3>
            <p class="engine-feature-desc">جميع خدمات الصيانة الدورية في مكان واحد.</p>
          </div>
        </div>

      </div>

      <!-- Center Column: Interactive Before/After Engine Comparison Slider -->
      <div class="engine-comparison-wrapper reveal-scale delay-1" id="engine-slider">
        <div class="engine-slider-container">
          <!-- Clean Base Image (After: eng2.png - Right) -->
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/eng2.png')); ?>" alt="<?php esc_attr_e('محرك السيارة بعد التنظيف كارفيس إكسبريس', 'carvice-express'); ?>" class="engine-compare-img engine-clean-img" draggable="false">
          
          <!-- Dirty Overlay Image (Before: eng1.png - Left) -->
          <div class="engine-dirty-overlay" style="clip-path: polygon(0% 0%, 50% 0%, 50% 100%, 0% 100%);">
            <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/eng1.png')); ?>" alt="<?php esc_attr_e('محرك السيارة قبل التنظيف كارفيس إكسبريس', 'carvice-express'); ?>" class="engine-compare-img engine-dirty-img" draggable="false">
          </div>

          <!-- Interactive Drag Handle -->
          <div class="engine-slider-handle" id="slider-handle" style="left: 50%;">
            <div class="engine-handle-button">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/Vice1.png')); ?>" alt="" class="handle-chevron" style="width: 22px; height: auto;">
            </div>
          </div>
        </div>
      </div>

      <!-- RTL Left Column: Engine Wash Description & Booking Button -->
      <div class="engine-left-info reveal-left delay-2">
        <h2 class="engine-title">غسيل المحرك من الداخل</h2>
        <p class="engine-desc">
          من المحرك والزيوت إلى الفرامل والإطارات والمكيف، نقدم لك في كارفيس إكسبريس خدمات عناية وصيانة متكاملة بأحدث الأجهزة وعلى يد فنيين محترفين.
        </p>
        <a href="https://wa.me/966530623461" target="_blank" rel="noopener" class="engine-cta-btn btn-gold">
          <span>احجز الآن</span>
          <span style="font-size: 1.2rem;">←</span>
        </a>
      </div>

    </div>
  </section>

  <!-- Traditional Saudi Pattern Ribbon Banner (Divider 2) -->
  <div class="pattern-ribbon" style="background-image: url('<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/zag_banner.png')); ?>'); background-repeat: repeat-x; background-size: auto 100%; height: 75px; width: 100%; display: block;" aria-hidden="true"></div>

  <!-- =========================================================================
       6. Why CarVice Section ("لماذا كارفيس")
       ========================================================================= -->
  <section class="section-sand why-us-section" id="why-us">
    <div class="container why-us-grid">
      
      <!-- Right Column: Content & Statistics (RTL) -->
      <div class="why-us-content reveal-right">
        <div class="why-us-eyebrow">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="eyebrow-chevron">
          <span>لماذا كارفيس</span>
        </div>

        <h2 class="why-us-title">
          نقدم لك أفضل خدمات الصيانة<br>
          <span>وقطع الغيار بجودة استثنائية</span>
        </h2>

        <!-- 6 Feature Perks -->
        <div class="why-perks-grid">
          <div class="why-perk-item reveal delay-1">
            <span class="why-perk-icon">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/why_icons/perk_price.png')); ?>" alt="أسعار تنافسية" width="32" height="32">
            </span>
            <span>أسعار تنافسية</span>
          </div>

          <div class="why-perk-item reveal delay-2">
            <span class="why-perk-icon">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/why_icons/perk_tech.png')); ?>" alt="تقنيات حديثة" width="32" height="32">
            </span>
            <span>تقنيات حديثة</span>
          </div>

          <div class="why-perk-item reveal delay-3">
            <span class="why-perk-icon">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/why_icons/perk_quality.png')); ?>" alt="جودة مضمونة" width="32" height="32">
            </span>
            <span>جودة مضمونة</span>
          </div>

          <div class="why-perk-item reveal delay-1">
            <span class="why-perk-icon">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/why_icons/perk_speed.png')); ?>" alt="سرعة إنجاز عالية" width="32" height="32">
            </span>
            <span>سرعة إنجاز عالية</span>
          </div>

          <div class="why-perk-item reveal delay-2">
            <span class="why-perk-icon">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/why_icons/perk_team.png')); ?>" alt="فريق عمل محترف" width="32" height="32">
            </span>
            <span>فريق عمل محترف</span>
          </div>

          <div class="why-perk-item reveal delay-3">
            <span class="why-perk-icon">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/why_icons/perk_punctual.png')); ?>" alt="التزام بالمواعيد" width="32" height="32">
            </span>
            <span>التزام بالمواعيد</span>
          </div>
        </div>

        <!-- Animated Progress Bars -->
        <div class="why-progress-group reveal delay-2">
          
          <div class="progress-item">
            <div class="progress-item-label">
              <span>جودة منتجاتنا</span>
              <span class="counter-val" data-target="92">92%</span>
            </div>
            <div class="progress-track">
              <div class="progress-fill" data-target="92"></div>
            </div>
          </div>

          <div class="progress-item">
            <div class="progress-item-label">
              <span>جودة خدماتنا</span>
              <span class="counter-val" data-target="87">87%</span>
            </div>
            <div class="progress-track">
              <div class="progress-fill" data-target="87"></div>
            </div>
          </div>

        </div>
      </div>

      <!-- Left Column: Technician Workshop Photo (RTL) -->
      <div class="why-us-visual reveal-left delay-2 hover-zoom-img">
        <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/why_carvice_tech.png')); ?>" alt="فني صيانة السيارات المحترف في كارفيس إكسبريس" loading="lazy">
      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. Exclusive Offers Banner ("عروضنا الحصرية")
       ========================================================================= -->
  <section class="section-sand offers-section" id="offers">
    <div class="container">
      
      <div class="section-header-block reveal">
        <h2 class="section-badge-title">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="badge-chevron">
          <span>عروضنا الحصرية</span>
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/Vice1.png')); ?>" alt="" class="badge-chevron">
        </h2>
        <p class="section-subtitle">
          استمتع بأفضل عروض الصيانة الحصرية من كارفيس إكسبريس جودة عالية وخدمات مميزة بأسعار تنافسية
        </p>
      </div>

      <!-- Interactive Offers Slider Carousel -->
      <div class="offers-banner-wrapper reveal-scale delay-1" id="offers-carousel">
        
        <!-- Navigation Carousel Arrows -->
        <button class="offers-nav-arrow offers-nav-prev" id="offers-prev-btn" aria-label="العرض السابق">&#10094;</button>
        <button class="offers-nav-arrow offers-nav-next" id="offers-next-btn" aria-label="العرض التالي">&#10095;</button>

        <div class="offers-slides-viewport" id="offers-viewport">
          <div class="offers-slides-track" id="offers-track">
            
            <!-- Slide 1: عروض تابي وتمارا -->
            <div class="offer-slide active">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/offers_banner.png')); ?>" alt="عروض تقسيط صيانة السيارات مع تابي وتمارا" class="offers-banner-img">
            </div>

            <!-- Slide 2: (img/s2.png) -->
            <div class="offer-slide">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/img/s2.png')); ?>" alt="عرض كارفيس إكسبريس 2" class="offers-banner-img">
            </div>

            <!-- Slide 3: (img/s3.png) -->
            <div class="offer-slide">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/img/s3.png')); ?>" alt="عرض كارفيس إكسبريس 3" class="offers-banner-img">
            </div>

            <!-- Slide 4: (img/s4.png) -->
            <div class="offer-slide">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/img/s4.png')); ?>" alt="عرض كارفيس إكسبريس 4" class="offers-banner-img">
            </div>

            <!-- Slide 5: (img/s5.png) -->
            <div class="offer-slide">
              <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/img/s5.png')); ?>" alt="عرض كارفيس إكسبريس 5" class="offers-banner-img">
            </div>

          </div>
        </div>

      </div>

      <!-- Carousel Dots Placed Below Banner -->
      <div class="offers-pagination-dots" id="offers-dots">
        <span class="offers-dot active" data-slide="0"></span>
        <span class="offers-dot" data-slide="1"></span>
        <span class="offers-dot" data-slide="2"></span>
        <span class="offers-dot" data-slide="3"></span>
        <span class="offers-dot" data-slide="4"></span>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       8. Frequently Asked Questions ("الأسئلة الشائعة")
       ========================================================================= -->
  <section class="section-sand faq-section" id="faq">
    <div class="container faq-grid">
      
      <!-- Right Column (in RTL): Accordion List -->
      <div class="faq-content reveal-right">
        
        <div class="faq-eyebrow">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="eyebrow-chevron">
          <span>الأسئلة الشائعة</span>
        </div>

        <h2 class="faq-title">لديك استفسار؟ نحن هنا للإجابة</h2>
        <p class="faq-desc">
          إليك إجابات لأبرز الأسئلة الشائعة حول خدمات كارفيس إكسبريس وطريقة الفحص والحجز.
        </p>

        <!-- Accordion List -->
        <div class="faq-accordion-group">
          
          <!-- Item 1: كيف أحجز موعد صيانة؟ -->
          <div class="faq-item reveal delay-1">
            <button class="faq-question-btn" type="button" aria-expanded="false">
              <span>كيف أحجز موعد صيانة؟</span>
              <span class="faq-icon-arrow">
                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </span>
            </button>
            <div class="faq-answer-panel">
              <p>يمكنك حجز موعد الصيانة بسهولة عبر التواصل مع كارفيس إكسبريس واختيار الفرع والموعد المناسب لك، ليكون فريقنا جاهزا لاستقبالك وخدمتك في الوقت المحدد.</p>
            </div>
          </div>

          <!-- Item 2: هل يلزم حجز موعد مسبق؟ (Active Expanded) -->
          <div class="faq-item is-active reveal delay-2">
            <button class="faq-question-btn" type="button" aria-expanded="true">
              <span>هل يلزم حجز موعد مسبق؟</span>
              <span class="faq-icon-arrow">
                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </span>
            </button>
            <div class="faq-answer-panel">
              <p>لا، يمكنك زيارة أقرب فرع من فروع كارفيس في أي وقت، وسيقوم فريقنا بخدمتك حسب توفر الفنيين. ولضمان سرعة الإنجاز وتقليل وقت الانتظار، يُفضل حجز موعد مسبق.</p>
            </div>
          </div>

          <!-- Item 3: هل يتم فحص السيارة قبل الصيانة؟ -->
          <div class="faq-item reveal delay-3">
            <button class="faq-question-btn" type="button" aria-expanded="false">
              <span>هل يتم فحص السيارة قبل الصيانة؟</span>
              <span class="faq-icon-arrow">
                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </span>
            </button>
            <div class="faq-answer-panel">
              <p>نعم، يتم فحص السيارة وتحديد حالتها واحتياجاتها قبل بدء الصيانة، لضمان تقديم الخدمة المناسبة ومعالجة المشكلة من أساسها.</p>
            </div>
          </div>

        </div>

      </div>

      <!-- Left Column (in RTL): 3D Question Visual -->
      <div class="faq-visual-card reveal-left delay-1 hover-zoom-img">
        <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/faq_illustration.png')); ?>" alt="الأسئلة الشائعة كارفيس إكسبريس" loading="lazy">
      </div>

    </div>
  </section>

  <!-- =========================================================================
       9. Customer Reviews ("آراء عملائنا")
       ========================================================================= -->
  <section class="section-dark testimonials-section" id="testimonials" style="background-image: linear-gradient(180deg, rgba(11, 14, 17, 0.88) 0%, rgba(11, 14, 17, 0.92) 100%), url('<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/testimonials_bg.jpg')); ?>'); background-size: cover; background-position: center;">
    <div class="container">
      
      <div class="testimonials-title-group reveal">
        <div class="testimonials-badge-title">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="badge-chevron">
          <span>آراء عملائنا</span>
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/Vice1.png')); ?>" alt="" class="badge-chevron">
        </div>
        <h2 class="testimonials-main-heading">ثقة عملائنا أكبر إنجاز لنا</h2>
        <p class="testimonials-subtext">
          في كارفيس نضع جودة الخدمة وراحة العميل في المقدمة، لنقدم لك تجربة صيانة احترافية تحافظ على سيارتك وتمنحك الثقة في كل زيارة.
        </p>
      </div>

      <!-- 3 Customer Review Cards -->
      <div class="reviews-grid" id="reviews-slider">
        
        <!-- Review 1 -->
        <div class="review-card reveal-scale delay-1">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/review_card_1.png')); ?>" alt="<?php esc_attr_e('تقييم عميل كارفيس إكسبريس', 'carvice-express'); ?>" class="review-card-img" loading="lazy">
        </div>

        <!-- Review 2 -->
        <div class="review-card reveal-scale delay-2">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/review_card_2.png')); ?>" alt="<?php esc_attr_e('تقييم عميل كارفيس إكسبريس', 'carvice-express'); ?>" class="review-card-img" loading="lazy">
        </div>

        <!-- Review 3 -->
        <div class="review-card reveal-scale delay-3">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/review_card_3.png')); ?>" alt="<?php esc_attr_e('تقييم عميل كارفيس إكسبريس', 'carvice-express'); ?>" class="review-card-img" loading="lazy">
        </div>

      </div>

      <!-- Pagination Indicators for Reviews Slider -->
      <div class="reviews-pagination-dots" id="reviews-dots">
        <span class="pagination-dot active" data-slide="0"></span>
        <span class="pagination-dot" data-slide="1"></span>
        <span class="pagination-dot" data-slide="2"></span>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       10. Who We Serve Section ("من نخدم؟")
       ========================================================================= -->
  <section class="section-sand personas-section" id="personas">
    <div class="container">
      
      <div class="section-header-block reveal">
        <h2 class="section-badge-title">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="badge-chevron">
          <span>من نخدم؟</span>
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/Vice1.png')); ?>" alt="" class="badge-chevron">
        </h2>
        <p class="section-subtitle">
          رعاية متخصصة لكل قائد يبحث عن الجودة والاعتمادية.
        </p>
      </div>

      <!-- 4 Persona Cards -->
      <div class="personas-grid" id="personas-slider">
        
        <!-- Persona 1: الباحثون عن التوفير الذكي -->
        <div class="persona-card reveal-scale delay-1 hover-zoom-img">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/persona_saver.png')); ?>" alt="الباحثون عن التوفير الذكي" style="width: 100%; border-radius: 12px;">
        </div>

        <!-- Persona 2: السيدات المستقلات -->
        <div class="persona-card reveal-scale delay-2 hover-zoom-img">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/persona_women.png')); ?>" alt="السيدات المستقلات" style="width: 100%; border-radius: 12px;">
        </div>

        <!-- Persona 3: ملاك السيارات الجديدة -->
        <div class="persona-card reveal-scale delay-3 hover-zoom-img">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/persona_newcar.png')); ?>" alt="ملاك السيارات الجديدة" style="width: 100%; border-radius: 12px;">
        </div>

        <!-- Persona 4: ملاك السيارات الفاخرة -->
        <div class="persona-card reveal-scale delay-4 hover-zoom-img">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/persona_luxury.png')); ?>" alt="ملاك السيارات الفاخرة" style="width: 100%; border-radius: 12px;">
        </div>

      </div>

      <!-- Mobile Pagination Dots for Personas Slider -->
      <div class="personas-pagination-dots" id="personas-dots">
        <span class="pagination-dot active" data-slide="0"></span>
        <span class="pagination-dot" data-slide="1"></span>
        <span class="pagination-dot" data-slide="2"></span>
        <span class="pagination-dot" data-slide="3"></span>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       11. Our Branches Locator ("فروعنا")
       ========================================================================= -->
  <section class="section-sand branches-section" id="branches">
    <div class="container">
      
      <div class="section-header-block reveal">
        <h2 class="section-badge-title">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/vice2.png')); ?>" alt="" class="badge-chevron">
          <span>فروعنا</span>
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/Vice1.png')); ?>" alt="" class="badge-chevron">
        </h2>
        <h3 style="font-size: 1.6rem; font-weight: 800; color: #111827; margin-top: 8px;">
          أقرب فرع... وأسرع خدمة
        </h3>
        <p class="section-subtitle">
          اعثر على فرع كارفيس الأقرب لك.
        </p>
      </div>

      <!-- 3D Glowing Relief Map -->
      <div class="branches-map-card reveal-scale delay-1">
        <picture class="branches-map-picture">
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/assets/images/map_mobile.png')); ?>">
          <img src="<?php echo esc_url(set_url_scheme(get_template_directory_uri() . '/img/map.png')); ?>" alt="خريطة فروع كارفيس إكسبريس في المنطقة الشرقية المملكة العربية السعودية" class="branches-map-img">
        </picture>
      </div>

      <!-- Bottom Map CTA Button -->
      <div class="branches-action-wrap reveal delay-2">
        <a href="https://maps.google.com/?q=Carvice+Express+Saudi+Arabia" target="_blank" rel="noopener" class="btn-gold" style="padding: 14px 44px; font-size: 1.15rem;">
          <span>اعرف موقعنا</span>
          <span style="font-size: 1.2rem;">←</span>
        </a>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       12. Footer Section
       ========================================================================= -->
  
<?php get_footer(); ?>