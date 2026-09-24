# Design System: CarVice Express (كارفيس إكسبريس)

## 1. Visual Theme & Atmosphere
An elite, high-agency automotive experience tailored for the Saudi Arabian luxury and express maintenance market. The design alternates deliberately between **Atmospheric Dark Workshop** (Hero, Engine Wash, Testimonials, National Branches Map) and **Pristine Warm Sand** (Services, About Us, Why Us, Offers, Personas, FAQ), invoking the contrast between high-tech professional garage telemetry and warm, hospitable Saudi Arabian culture.
- **Density:** Daily App Balanced (4/10)
- **Variance:** Offset Asymmetric & High-Agency Grid (8/10)
- **Motion Intensity:** Cinematic Choreography (6/10) with GSAP scroll triggers, tactile hover physics, and interactive split-sliders.
- **Directionality:** RTL First (`dir="rtl"`), designed natively for Arabic typography hierarchy.

---

## 2. Color Palette & Roles
- **Workshop Onyx** (`#0B0E11`) — Primary dark canvas, deep radial gradient backgrounds for Hero, Testimonials, Map.
- **Warm Desert Sand** (`#FBF8F1`) — Primary light canvas, soft cream surface for daytime clarity.
- **Brand CarVice Gold** (`#F3A805`) — Primary energetic accent, buttons, badges, active indicators, glowing borders.
- **CarVice Amber Gold** (`#E29600`) — Hover states, progress bars, interactive sliders.
- **Saudi Heritage Green** (`#165B33`) — Cultural National Day badge, Founding Day palm emblem, traditional geometric pattern band.
- **Pure Surface White** (`#FFFFFF`) — Card containers, review cards, crisp text over dark surfaces.
- **Slate Charcoal** (`#1D2126`) — High-contrast text on sand surfaces, dark pill buttons.
- **Muted Steel** (`#6C747E`) — Secondary descriptions, captions, inactive pagination dots.
- **Whisper Gold Border** (`rgba(243, 168, 5, 0.35)`) — Card borders, 1px structural framing.

---

## 3. Typography Rules
- **Font Family:** `Cairo` (Google Fonts) with Arabic-optimized geometric letterforms.
- **Display Headlines:** Bold 800 / ExtraBold 900, `text-3xl md:text-5xl lg:text-6xl`, tightly tracked Arabic headline flow. Strictly capped at 2 lines on desktop to avoid wrapping clutter.
- **Section Headers:** `<< [العنوان] >>` in Brand Gold with bold stylized double-chevrons.
- **Body:** Regular 400 & Medium 500, `text-base md:text-lg`, relaxed leading (`1.7`), max-width 65ch.
- **Numerals & Metrics:** Bold 700 with tabular figures (`92%`, `87%`, `0569392700`).
- **Banned:** `Inter` for Arabic typography, generic serif fonts, unstyled browser defaults.

---

## 4. Component Stylings
- **Buttons:**
  - *Primary CTA:* Brand Gold pill (`#F3A805`), dark bold Arabic text (`#0B0E11`), subtle inner glow, tactile `-2px` transform on hover, `scale(0.98)` on active.
  - *Secondary Ghost CTA:* Transparent with 1.5px gold border and white text.
  - *App Button:* Charcoal-slate dark pill with white text and app download icon.
- **Service Cards:**
  - High-res photography background, dark vignette overlay, bottom title and gold CTA button, subtle scalloped outer golden frame.
- **Interactive Before/After Engine Slider:**
  - Split comparison view between pre-clean and post-clean engine bay with draggable gold chevron handle (`<< >>`).
- **Progress Satisfaction Bars:**
  - Smooth animated width fill (`0% -> 92%` and `0% -> 87%`) on viewport entry.
- **Accordions:**
  - Expanded item highlighted with Brand Gold background and dark text; collapsed items light with gold borders.
- **Testimonial Review Cards:**
  - White surface cards elevated over dark workshop backdrop, topped with dark circular CarVice emblem, 5 gold stars, and authentic customer quotes.
- **Audience Persona Cards:**
  - Scalloped golden borders, gold icon top, bold centered title.
- **Branches Map:**
  - High-definition 3D golden relief map of Saudi Arabia with glowing Eastern Province branch hotspots (Al Mazra'iyah, Hay Uhud, Dammam Al Shula, Khobar Hay Al Jawhara).

---

## 5. Layout Principles
- **Native RTL (`dir="rtl"`):** Right-to-left layout order for all grids, text alignments, and navigation paths.
- **Max-Width Containment:** `max-w-7xl` (`1400px`) centered container with generous horizontal gutters.
- **Spacing Rhythm:** `py-20 md:py-32` between major chapters to ensure distinct, cinematic section storytelling.
- **Full Viewport Stability:** `min-h-[100dvh]` on Hero, avoiding `h-screen` jumping on mobile browsers.

---

## 6. Motion & Micro-Interactions
- **GSAP ScrollTrigger & Reveal Cascades:** Staggered opacity and Y-translation reveals on section titles and cards.
- **Interactive Drag Slider:** Smooth mouse and touch dragging for Before/After engine comparison.
- **Tactile Feedback:** Hardware-accelerated transforms (`translateY`, `scale`) for all buttons and interactive cards.
- **Pulsing Map Pins:** Subtle CSS radar ping animations on Eastern Province branch coordinates.

---

## 7. Anti-Patterns (Banned)
- No emojis in code or visible labels (all iconography uses SVG glyphs or authentic extracted icons).
- No pure black (`#000000`) backgrounds.
- No AI purple/blue neon glows.
- No text wrapping beyond 2-3 lines in main headlines.
- No dummy English text or Lorem Ipsum.
- No broken external links or fake images. All 34 real assets are extracted directly from the Figma design.
