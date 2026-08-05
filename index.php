<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iskane Bénin — Foyer Universitaire Islamique A2S</title>
  <meta name="description" content="Iskane A2S Bénin — Foyer universitaire islamique offrant des bourses d'études supérieures aux étudiants nationaux et internationaux.">
  <link href="assets/img/iskanelogo.png" rel="icon">
  <link href="assets/img/iskanelogo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;600&family=Amiri:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <style>
    :root {
      --green:      #00A651;
      --green-dark: #006B35;
      --green-light:#E8F5EE;
      --gold:       #F9C800;
      --gold-dark:  #D4A800;
      --white:      #FFFFFF;
      --gray-50:    #F8FAF9;
      --gray-100:   #F0F4F2;
      --gray-600:   #4A5E55;
      --gray-900:   #1A2E24;
      --font-display: 'Playfair Display', Georgia, serif;
      --font-body:    'DM Sans', sans-serif;
      --font-arabic:  'Amiri', serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--font-body);
      color: var(--gray-900);
      background: var(--white);
      overflow-x: hidden;
    }

    /* ── Scrollbar ── */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: var(--gray-50); }
    ::-webkit-scrollbar-thumb { background: var(--green); border-radius: 3px; }

    /* ══════════════════════════════════════
       NAVBAR
    ══════════════════════════════════════ */
    #header {
      position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
      transition: all 0.4s ease;
      padding: 20px 0;
    }

    #header.scrolled {
      background: rgba(255,255,255,0.97);
      backdrop-filter: blur(12px);
      padding: 12px 0;
      box-shadow: 0 2px 30px rgba(0,0,0,0.08);
    }

    #header .container-nav {
      max-width: 1200px; margin: 0 auto;
      padding: 0 24px;
      display: flex; align-items: center; justify-content: space-between;
    }

    .logo-wrap { display: flex; align-items: center; gap: 12px; text-decoration: none; }
    .logo-img {
      width: 44px; height: 44px; border-radius: 50%;
      border: 2px solid var(--gold);
      object-fit: cover;
    }
    .logo-text { line-height: 1; }
    .logo-text .name {
      font-family: var(--font-display);
      font-size: 22px; font-weight: 700;
      color: var(--green-dark);
    }
    .logo-text .tagline {
      font-size: 10px; color: var(--green);
      letter-spacing: 2px; text-transform: uppercase; font-weight: 500;
    }

    /* Nav scrolled → dark text */
    #header.scrolled .logo-text .name { color: var(--green-dark); }

    /* Nav transparent → white */
    #header:not(.scrolled) .logo-text .name { color: white; }
    #header:not(.scrolled) .logo-text .tagline { color: rgba(255,255,255,0.8); }

    .navmenu ul {
      display: flex; align-items: center; gap: 8px;
      list-style: none;
    }

    .navmenu ul li a {
      font-size: 14px; font-weight: 500;
      color: rgba(255,255,255,0.9);
      padding: 8px 16px; border-radius: 100px;
      text-decoration: none;
      transition: all 0.25s;
    }

    #header.scrolled .navmenu ul li a { color: var(--gray-600); }

    .navmenu ul li a:hover { background: rgba(255,255,255,0.15); color: white; }
    #header.scrolled .navmenu ul li a:hover { background: var(--green-light); color: var(--green); }

    .navmenu ul li.btn-cta a {
      background: var(--gold);
      color: var(--gray-900) !important;
      font-weight: 600;
    }
    .navmenu ul li.btn-cta a:hover { background: var(--gold-dark); transform: translateY(-1px); }

    .mobile-nav-toggle {
      display: none; font-size: 24px; cursor: pointer;
      color: white; position: relative; z-index: 1001;
    }
    #header.scrolled .mobile-nav-toggle { color: var(--gray-900); }

    /* ── Sélecteur de langue ── */
    .lang-switch { position: relative; z-index: 1001; margin-left: 6px; }
    .lang-btn {
      display: flex; align-items: center; gap: 6px;
      background: rgba(255,255,255,0.15); color: white;
      border: 1px solid rgba(255,255,255,0.3);
      padding: 8px 14px; border-radius: 100px;
      font-size: 13px; font-weight: 600; cursor: pointer;
      transition: all 0.25s; white-space: nowrap;
    }
    .lang-btn:hover { background: rgba(255,255,255,0.25); }
    #header.scrolled .lang-btn { background: var(--gray-50); color: var(--gray-600); border-color: var(--gray-100); }
    #header.scrolled .lang-btn:hover { background: var(--green-light); color: var(--green); }
    .lang-btn .bi-chevron-down { font-size: 10px; transition: transform 0.25s; }
    .lang-switch.open .lang-btn .bi-chevron-down { transform: rotate(180deg); }

    .lang-dropdown {
      position: absolute; top: calc(100% + 10px); right: 0;
      background: white; border-radius: 14px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.14);
      border: 1px solid var(--gray-100);
      min-width: 170px; padding: 6px;
      opacity: 0; visibility: hidden; transform: translateY(-8px);
      transition: all 0.25s;
    }
    .lang-switch.open .lang-dropdown { opacity: 1; visibility: visible; transform: translateY(0); }

    .lang-option {
      display: flex; align-items: center; gap: 10px;
      padding: 10px 14px; border-radius: 10px;
      font-size: 14px; font-weight: 500; color: var(--gray-900) !important;
      text-decoration: none; transition: background 0.2s;
    }
    .lang-option:hover { background: var(--green-light); color: var(--green) !important; }
    .lang-option.active { background: var(--green-light); color: var(--green) !important; font-weight: 700; }
    .lang-option .flag { font-size: 16px; }

    @media (max-width: 767px) {
      .lang-btn span.lang-label { display: none; }
      .lang-btn { padding: 8px 10px; }
    }

    /* ══════════════════════════════════════
       HERO
    ══════════════════════════════════════ */
    #hero {
      min-height: 100vh;
      background:
        linear-gradient(135deg, rgba(0,107,53,0.92) 0%, rgba(0,166,81,0.85) 50%, rgba(0,107,53,0.95) 100%),
        url('assets/img/iskanelogo.png') center/cover;
      display: flex; align-items: center;
      position: relative; overflow: hidden;
    }

    /* Motif géométrique islamique en arrière-plan */
    #hero::before {
      content: '';
      position: absolute; inset: 0;
      background-image:
        radial-gradient(circle at 20% 20%, rgba(249,200,0,0.15) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(249,200,0,0.1) 0%, transparent 50%);
      pointer-events: none;
    }

    /* Forme décorative bas */
    #hero::after {
      content: '';
      position: absolute; bottom: -2px; left: 0; right: 0;
      height: 80px;
      background: white;
      clip-path: ellipse(55% 100% at 50% 100%);
    }

    .hero-content {
      max-width: 1200px; margin: 0 auto; padding: 120px 24px 80px;
      display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;
    }

    .hero-left { color: white; }

    .hero-badge {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(249,200,0,0.2); border: 1px solid rgba(249,200,0,0.4);
      color: var(--gold); padding: 6px 16px; border-radius: 100px;
      font-size: 12px; font-weight: 600; letter-spacing: 1px; text-transform: uppercase;
      margin-bottom: 24px;
    }

    .hero-title {
      font-family: var(--font-display);
      font-size: clamp(36px, 5vw, 64px);
      font-weight: 900; line-height: 1.1;
      margin-bottom: 20px;
    }
    .hero-title .highlight { color: var(--gold); }

    .hero-arabic {
      font-family: var(--font-arabic);
      font-size: 22px; color: rgba(255,255,255,0.7);
      margin-bottom: 24px; letter-spacing: 1px;
    }

    .hero-desc {
      font-size: 16px; line-height: 1.8;
      color: rgba(255,255,255,0.85);
      margin-bottom: 36px;
    }

    .hero-btns { display: flex; gap: 12px; flex-wrap: wrap; }

    .btn-hero-primary {
      background: var(--gold); color: var(--gray-900);
      padding: 14px 32px; border-radius: 100px;
      font-weight: 700; font-size: 15px;
      text-decoration: none; transition: all 0.3s;
      display: inline-flex; align-items: center; gap: 8px;
    }
    .btn-hero-primary:hover { background: var(--gold-dark); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(249,200,0,0.4); }

    .btn-hero-secondary {
      background: rgba(255,255,255,0.15); color: white;
      padding: 14px 32px; border-radius: 100px;
      font-weight: 600; font-size: 15px;
      text-decoration: none; border: 1px solid rgba(255,255,255,0.3);
      transition: all 0.3s;
    }
    .btn-hero-secondary:hover { background: rgba(255,255,255,0.25); color: white; }

    .hero-stats {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 48px;
    }
    .stat-item { text-align: center; }
    .stat-number {
      font-family: var(--font-display); font-size: 36px; font-weight: 900;
      color: var(--gold); line-height: 1;
    }
    .stat-label { font-size: 12px; color: rgba(255,255,255,0.7); text-transform: uppercase; letter-spacing: 1px; margin-top: 4px; }

    .hero-right {
      display: flex; justify-content: center; align-items: center;
    }

    .hero-logo-card {
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 24px; padding: 48px;
      text-align: center;
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-16px); }
    }

    .hero-logo-card img {
      width: 160px; height: 160px; border-radius: 50%;
      border: 4px solid var(--gold);
      object-fit: cover; margin-bottom: 20px;
    }

    .hero-logo-card .card-title {
      font-family: var(--font-display); font-size: 28px; font-weight: 700; color: white;
    }
    .hero-logo-card .card-sub {
      font-size: 13px; color: rgba(255,255,255,0.7); margin-top: 6px;
      letter-spacing: 2px; text-transform: uppercase;
    }
    .hero-logo-card .card-arabic {
      font-family: var(--font-arabic); font-size: 20px;
      color: var(--gold); margin-top: 12px;
    }

    /* ══════════════════════════════════════
       SECTIONS GÉNÉRALES
    ══════════════════════════════════════ */
    section { padding: 80px 0; }

    .container-main {
      max-width: 1200px; margin: 0 auto; padding: 0 24px;
    }

    .section-header { text-align: center; margin-bottom: 56px; }
    .section-tag {
      display: inline-block;
      background: var(--green-light); color: var(--green);
      padding: 6px 16px; border-radius: 100px;
      font-size: 12px; font-weight: 600; letter-spacing: 1px; text-transform: uppercase;
      margin-bottom: 16px;
    }
    .section-title {
      font-family: var(--font-display); font-size: clamp(28px, 4vw, 44px);
      font-weight: 700; color: var(--gray-900); line-height: 1.2;
      margin-bottom: 16px;
    }
    .section-subtitle { font-size: 16px; color: var(--gray-600); max-width: 560px; margin: 0 auto; line-height: 1.7; }

    /* ══════════════════════════════════════
       À PROPOS
    ══════════════════════════════════════ */
    #about { background: var(--gray-50); }

    .about-grid {
      display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;
    }

    .about-text p {
      font-size: 16px; line-height: 1.9; color: var(--gray-600); margin-bottom: 20px;
    }

    .about-list { list-style: none; display: flex; flex-direction: column; gap: 14px; }
    .about-list li {
      display: flex; align-items: flex-start; gap: 12px;
      font-size: 15px; color: var(--gray-600); line-height: 1.6;
    }
    .about-list li .icon {
      width: 22px; height: 22px; border-radius: 50%;
      background: var(--green); color: white;
      display: flex; align-items: center; justify-content: center;
      font-size: 12px; flex-shrink: 0; margin-top: 2px;
    }

    .about-card {
      background: white; border-radius: 24px;
      padding: 40px; box-shadow: 0 4px 40px rgba(0,0,0,0.06);
      border: 1px solid var(--gray-100);
    }

    .about-card-header {
      display: flex; align-items: center; gap: 16px; margin-bottom: 28px;
    }
    .about-card-icon {
      width: 56px; height: 56px; border-radius: 16px;
      background: var(--green); color: white;
      display: flex; align-items: center; justify-content: center;
      font-size: 24px; flex-shrink: 0;
    }
    .about-card-title { font-family: var(--font-display); font-size: 20px; font-weight: 700; }
    .about-card-sub { font-size: 13px; color: var(--gray-600); margin-top: 2px; }

    /* ══════════════════════════════════════
       CONDITIONS (SERVICES)
    ══════════════════════════════════════ */
    #conditions { background: white; }

    .conditions-grid {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;
    }

    .condition-card {
      background: var(--gray-50); border: 1px solid var(--gray-100);
      border-radius: 20px; padding: 32px 28px;
      transition: all 0.3s; position: relative; overflow: hidden;
    }
    .condition-card::before {
      content: '';
      position: absolute; top: 0; left: 0; right: 0; height: 3px;
      background: linear-gradient(90deg, var(--green), var(--gold));
      transform: scaleX(0); transform-origin: left;
      transition: transform 0.3s;
    }
    .condition-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(0,0,0,0.08); }
    .condition-card:hover::before { transform: scaleX(1); }

    .condition-card.condition-full { grid-column: 1 / -1; }

    .condition-num {
      font-family: var(--font-display); font-size: 48px; font-weight: 900;
      color: var(--green-light); line-height: 1; margin-bottom: 16px;
    }
    .condition-title {
      font-size: 17px; font-weight: 700; color: var(--gray-900); margin-bottom: 10px;
    }
    .condition-desc { font-size: 14px; color: var(--gray-600); line-height: 1.7; }

    .filiere-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 16px; }
    .filiere-tag {
      background: var(--green-light); color: var(--green-dark);
      font-size: 13px; font-weight: 600; padding: 7px 14px; border-radius: 100px;
      border: 1px solid rgba(0,166,81,0.15); white-space: nowrap;
    }

    /* ══════════════════════════════════════
       DOCUMENTS À FOURNIR
    ══════════════════════════════════════ */
    #documents { background: var(--gray-50); }

    /* ══════════════════════════════════════
       PROCESSUS
    ══════════════════════════════════════ */
    #processus { background: white; }

    .steps-grid {
      display: grid; grid-template-columns: repeat(5, 1fr); gap: 0;
      position: relative;
    }
    .steps-grid::before {
      content: '';
      position: absolute; top: 40px; left: 10%; right: 10%; height: 2px;
      background: linear-gradient(90deg, var(--green), var(--gold));
      z-index: 0;
    }

    .step-item { text-align: center; padding: 0 12px; position: relative; z-index: 1; }

    .step-circle {
      width: 80px; height: 80px; border-radius: 50%;
      background: white; border: 3px solid var(--green);
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 20px;
      font-size: 28px;
      box-shadow: 0 4px 20px rgba(0,166,81,0.2);
      transition: all 0.3s;
    }
    .step-item:hover .step-circle {
      background: var(--green); transform: scale(1.05);
    }

    .step-title { font-size: 14px; font-weight: 700; color: var(--gray-900); margin-bottom: 8px; }
    .step-desc { font-size: 12px; color: var(--gray-600); line-height: 1.6; }

    /* ══════════════════════════════════════
       TÉMOIGNAGES
    ══════════════════════════════════════ */
    #testimonials { background: white; }

    .swiper-testimonials .swiper-slide { padding: 8px; }

    .testimonial-card {
      background: var(--gray-50); border-radius: 20px;
      padding: 32px; border: 1px solid var(--gray-100);
      height: 100%;
    }
    .testimonial-stars { color: var(--gold); font-size: 14px; margin-bottom: 16px; }
    .testimonial-text {
      font-size: 15px; line-height: 1.8; color: var(--gray-600);
      font-style: italic; margin-bottom: 24px;
    }
    .testimonial-author { display: flex; align-items: center; gap: 12px; }
    .testimonial-avatar {
      width: 48px; height: 48px; border-radius: 50%;
      border: 2px solid var(--green);
      object-fit: cover;
    }
    .testimonial-name { font-weight: 700; font-size: 15px; }
    .testimonial-role { font-size: 12px; color: var(--gray-600); }

    /* ══════════════════════════════════════
       PROGRAMMES
    ══════════════════════════════════════ */
    #programmes { background: var(--gray-50); }

    .programme-tabs { display: flex; gap: 8px; margin-bottom: 40px; flex-wrap: wrap; }
    .programme-tab {
      padding: 10px 24px; border-radius: 100px;
      font-size: 14px; font-weight: 600; cursor: pointer;
      border: 2px solid var(--gray-100); background: white;
      color: var(--gray-600); transition: all 0.25s;
    }
    .programme-tab.active {
      background: var(--green); border-color: var(--green); color: white;
    }

    .programme-content { display: none; }
    .programme-content.active { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }

    .programme-text h3 {
      font-family: var(--font-display); font-size: 28px; font-weight: 700;
      margin-bottom: 16px;
    }
    .programme-text p { font-size: 15px; color: var(--gray-600); line-height: 1.8; margin-bottom: 20px; }
    .programme-list { list-style: none; display: flex; flex-direction: column; gap: 12px; }
    .programme-list li {
      display: flex; gap: 10px; font-size: 14px; color: var(--gray-600); line-height: 1.6;
    }
    .programme-list li::before { content: '✓'; color: var(--green); font-weight: 700; flex-shrink: 0; }

    .programme-img {
      border-radius: 20px; overflow: hidden;
      box-shadow: 0 8px 40px rgba(0,0,0,0.1);
    }
    .programme-img img { width: 100%; height: 300px; object-fit: cover; }

    /* ══════════════════════════════════════
       ADMINISTRATION
    ══════════════════════════════════════ */
    #administration { background: white; }

    .team-grid {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; justify-items: center;
    }

    .team-card {
      background: var(--gray-50); border-radius: 24px;
      overflow: hidden; width: 100%; max-width: 320px;
      border: 1px solid var(--gray-100);
      transition: all 0.3s;
    }
    .team-card:hover { transform: translateY(-6px); box-shadow: 0 20px 60px rgba(0,0,0,0.1); }

    .team-img-wrap { position: relative; overflow: hidden; }
    .team-img-wrap img {
      width: 100%; height: 260px; object-fit: cover;
      transition: transform 0.4s;
    }
    .team-card:hover .team-img-wrap img { transform: scale(1.05); }

    .team-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(to top, rgba(0,107,53,0.9), transparent);
      opacity: 0; transition: opacity 0.3s;
      display: flex; align-items: flex-end; padding: 20px;
    }
    .team-card:hover .team-overlay { opacity: 1; }

    .team-socials { display: flex; gap: 8px; }
    .team-socials a {
      width: 36px; height: 36px; border-radius: 50%;
      background: rgba(255,255,255,0.2); color: white;
      display: flex; align-items: center; justify-content: center;
      text-decoration: none; font-size: 16px;
      transition: background 0.2s;
    }
    .team-socials a:hover { background: var(--gold); color: var(--gray-900); }

    .team-info { padding: 24px; text-align: center; }
    .team-name { font-family: var(--font-display); font-size: 18px; font-weight: 700; margin-bottom: 4px; }
    .team-role {
      font-size: 13px; color: var(--green); font-weight: 600;
      letter-spacing: 0.5px;
    }

    /* ══════════════════════════════════════
       FAQ
    ══════════════════════════════════════ */
    #faq { background: var(--gray-50); }

    .faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

    .faq-item {
      background: white; border-radius: 16px;
      border: 1px solid var(--gray-100); overflow: hidden;
    }

    .faq-question {
      width: 100%; text-align: left;
      padding: 20px 24px; background: none; border: none; cursor: pointer;
      display: flex; align-items: center; justify-content: space-between; gap: 12px;
      font-size: 15px; font-weight: 600; color: var(--gray-900);
      transition: color 0.2s;
    }
    .faq-question:hover { color: var(--green); }
    .faq-question .icon {
      width: 28px; height: 28px; border-radius: 50%;
      background: var(--green-light); color: var(--green);
      display: flex; align-items: center; justify-content: center;
      font-size: 16px; flex-shrink: 0; transition: all 0.3s;
    }
    .faq-item.open .faq-question .icon { background: var(--green); color: white; transform: rotate(45deg); }

    .faq-answer {
      max-height: 0; overflow: hidden; transition: max-height 0.3s ease;
    }
    .faq-item.open .faq-answer { max-height: 300px; }
    .faq-answer-inner {
      padding: 0 24px 20px;
      font-size: 14px; color: var(--gray-600); line-height: 1.8;
    }

    /* ══════════════════════════════════════
       CTA
    ══════════════════════════════════════ */
    #cta {
      background: linear-gradient(135deg, var(--green-dark), var(--green));
      position: relative; overflow: hidden;
    }
    #cta::before {
      content: '';
      position: absolute; inset: 0;
      background: radial-gradient(circle at 70% 50%, rgba(249,200,0,0.15), transparent 60%);
    }

    .cta-inner {
      display: flex; align-items: center; justify-content: space-between; gap: 32px;
      flex-wrap: wrap; position: relative; z-index: 1;
    }
    .cta-text h2 {
      font-family: var(--font-display); font-size: 32px; font-weight: 700;
      color: white; margin-bottom: 10px;
    }
    .cta-text p { font-size: 16px; color: rgba(255,255,255,0.8); }

    .cta-btns { display: flex; gap: 12px; flex-wrap: wrap; }
    .btn-cta-gold {
      background: var(--gold); color: var(--gray-900);
      padding: 14px 32px; border-radius: 100px;
      font-weight: 700; font-size: 15px; text-decoration: none;
      transition: all 0.3s; white-space: nowrap;
    }
    .btn-cta-gold:hover { background: var(--gold-dark); transform: translateY(-2px); }

    .btn-cta-outline {
      background: transparent; color: white;
      padding: 14px 32px; border-radius: 100px;
      font-weight: 600; font-size: 15px; text-decoration: none;
      border: 2px solid rgba(255,255,255,0.4);
      transition: all 0.3s; white-space: nowrap;
    }
    .btn-cta-outline:hover { background: rgba(255,255,255,0.1); color: white; }

    /* ══════════════════════════════════════
       FOOTER
    ══════════════════════════════════════ */
    #footer {
      background: var(--gray-900); color: white; padding: 60px 0 32px;
    }

    .footer-grid {
      display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px;
      margin-bottom: 48px;
    }

    .footer-brand .logo-wrap { margin-bottom: 16px; }
    .footer-brand .logo-wrap .name { color: white; }
    .footer-brand .logo-wrap .tagline { color: rgba(255,255,255,0.5); }
    .footer-brand p {
      font-size: 14px; color: rgba(255,255,255,0.6); line-height: 1.8;
      margin-bottom: 20px;
    }

    .footer-socials { display: flex; gap: 8px; }
    .footer-socials a {
      width: 38px; height: 38px; border-radius: 50%;
      background: rgba(255,255,255,0.08); color: rgba(255,255,255,0.7);
      display: flex; align-items: center; justify-content: center;
      text-decoration: none; font-size: 16px; transition: all 0.2s;
    }
    .footer-socials a:hover { background: var(--gold); color: var(--gray-900); }

    .footer-col h4 {
      font-size: 13px; font-weight: 700; text-transform: uppercase;
      letter-spacing: 1px; color: rgba(255,255,255,0.5); margin-bottom: 20px;
    }
    .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
    .footer-col ul li a {
      font-size: 14px; color: rgba(255,255,255,0.7); text-decoration: none;
      transition: color 0.2s;
    }
    .footer-col ul li a:hover { color: var(--gold); }

    .footer-contact li {
      display: flex; gap: 10px;
      font-size: 14px; color: rgba(255,255,255,0.7); line-height: 1.6;
    }
    .footer-contact li i { color: var(--gold); flex-shrink: 0; margin-top: 2px; }

    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.08); padding-top: 24px;
      display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;
    }
    .footer-bottom p { font-size: 13px; color: rgba(255,255,255,0.4); }
    .footer-bottom a { color: var(--gold); text-decoration: none; }

    /* ══════════════════════════════════════
       SCROLL TOP
    ══════════════════════════════════════ */
    #scroll-top {
      position: fixed; bottom: 24px; right: 24px; z-index: 999;
      width: 44px; height: 44px; border-radius: 50%;
      background: var(--green); color: white;
      display: flex; align-items: center; justify-content: center;
      text-decoration: none; font-size: 20px;
      box-shadow: 0 4px 16px rgba(0,166,81,0.4);
      opacity: 0; pointer-events: none; transition: all 0.3s;
    }
    #scroll-top.show { opacity: 1; pointer-events: all; }
    #scroll-top:hover { background: var(--green-dark); transform: translateY(-2px); }

    /* ══════════════════════════════════════
       RESPONSIVE
    ══════════════════════════════════════ */
    @media (max-width: 991px) {
      .hero-content { grid-template-columns: 1fr; text-align: center; }
      .hero-right { display: none; }
      .hero-btns { justify-content: center; }
      .hero-stats { grid-template-columns: repeat(3, 1fr); }
      .about-grid { grid-template-columns: 1fr; }
      .conditions-grid { grid-template-columns: 1fr 1fr; }
      .condition-card.condition-full { grid-column: 1 / -1; }
      .steps-grid { grid-template-columns: 1fr 1fr; gap: 24px; }
      .steps-grid::before { display: none; }
      .programme-content.active { grid-template-columns: 1fr; }
      .team-grid { grid-template-columns: 1fr 1fr; }
      .faq-grid { grid-template-columns: 1fr; }
      .footer-grid { grid-template-columns: 1fr 1fr; }
    }

    @media (max-width: 767px) {
      .navmenu { display: none; }
      .navmenu.show {
        display: flex; flex-direction: column;
        position: fixed; inset: 0; background: white; z-index: 999;
        padding: 80px 24px 40px;
      }
      .navmenu.show ul { flex-direction: column; gap: 4px; }
      .navmenu.show ul li a { color: var(--gray-900) !important; font-size: 18px; padding: 14px 16px; }
      .mobile-nav-toggle { display: block; }
      .conditions-grid { grid-template-columns: 1fr; }
      .team-grid { grid-template-columns: 1fr; }
      .footer-grid { grid-template-columns: 1fr; }
      .cta-inner { flex-direction: column; text-align: center; }
      .steps-grid { grid-template-columns: 1fr; }
    }

    @media (max-width: 575px) {
      section { padding: 56px 0; }
      #hero { min-height: auto; }
      .hero-content { padding: 110px 20px 60px; gap: 32px; }
      .hero-badge { font-size: 11px; padding: 5px 12px; }
      .hero-desc { font-size: 15px; }
      .hero-btns { flex-direction: column; align-items: stretch; }
      .hero-btns a { justify-content: center; }
      .hero-stats { gap: 10px; margin-top: 32px; }
      .stat-number { font-size: 26px; }
      .stat-label { font-size: 10px; }
      .about-card { padding: 28px 20px; }
      .conditions-grid { gap: 16px; }
      .condition-card { padding: 24px 20px; }
      .steps-grid { gap: 20px; }
      .cta-text h2 { font-size: 24px; }
      .cta-btns { width: 100%; }
      .cta-btns a { width: 100%; text-align: center; }
      .footer-grid { grid-template-columns: 1fr; gap: 32px; }
      .footer-bottom { flex-direction: column; text-align: center; }
      .logo-text .tagline { display: none; }
      .container-nav { padding: 0 16px; }
    }

    /* ── AOS override ── */
    [data-aos] { transition-duration: 0.7s !important; }
  </style>
</head>

<body>

  <!-- ── Header ── -->
  <header id="header">
    <div class="container-nav">
      <a href="#hero" class="logo-wrap">
        <img src="assets/img/iskanelogo.png" alt="Iskane" class="logo-img">
        <div class="logo-text">
          <div class="name">Iskane</div>
          <div class="tagline">A2S · Bénin</div>
        </div>
      </a>
      <nav class="navmenu" id="navmenu">
        <ul>
          <li><a href="#hero">Accueil</a></li>
          <li><a href="#about">À propos</a></li>
          <li><a href="#conditions">Bourses</a></li>
          <li><a href="#documents">Documents</a></li>
          <li><a href="#administration">Administration</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="btn-cta"><a href="https://iskanebenin.vercel.app/register">S'inscrire</a></li>
        </ul>
      </nav>
      <div class="lang-switch" id="langSwitch">
        <button class="lang-btn" id="langToggle" type="button">
          <i class="bi bi-globe2"></i>
          <span class="lang-label">FR</span>
          <i class="bi bi-chevron-down"></i>
        </button>
        <div class="lang-dropdown" id="langDropdown">
          <a href="index.php" class="lang-option active"><span class="flag">🇫🇷</span> Français</a>
          <a href="index-ar.php" class="lang-option"><span class="flag">🇸🇦</span> العربية</a>
        </div>
      </div>
      <i class="bi bi-list mobile-nav-toggle" id="mobileToggle"></i>
    </div>
  </header>

  <main>

    <!-- ── Hero ── -->
    <section id="hero">
      <div class="hero-content">
        <div class="hero-left" data-aos="fade-right">
          <div class="hero-badge">
            <i class="bi bi-star-fill"></i>
            Depuis 2006 · Bénin
          </div>
          <h1 class="hero-title">
            Bienvenue à<br>
            <span class="highlight">Iskane</span><br>
            du Bénin
          </h1>
          <p class="hero-arabic">أهلا و سهلا بكم</p>
          <p class="hero-desc">
            Le foyer universitaire de l'Association Pour La Solidarité Sociale. Un programme de bourses d'études supérieures prenant en compte tout ce dont les étudiants ont besoin.
          </p>
          <div class="hero-btns">
            <a href="https://iskanebenin.vercel.app/register" class="btn-hero-primary">
              <i class="bi bi-pencil-square"></i> Postuler maintenant
            </a>
            <a href="#about" class="btn-hero-secondary">En savoir plus</a>
          </div>
          <div class="hero-stats">
            <div class="stat-item">
              <div class="stat-number">2006</div>
              <div class="stat-label">Fondé en</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">🇧🇯</div>
              <div class="stat-label">Bénin</div>
            </div>
          </div>
        </div>
        <div class="hero-right" data-aos="fade-left" data-aos-delay="200">
          <div class="hero-logo-card">
            <img src="assets/img/iskanelogo.png" alt="Iskane Logo">
            <div class="card-title">Iskane A2S</div>
            <div class="card-sub">Foyer Universitaire Islamique</div>
            <div class="card-arabic">اسكان</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── À propos ── -->
    <section id="about">
      <div class="container-main">
        <div class="section-header" data-aos="fade-up">
          <span class="section-tag">À propos</span>
          <h2 class="section-title">Qui sommes-nous ?</h2>
          <p class="section-subtitle">Un programme de bourses unique au Bénin</p>
        </div>
        <div class="about-grid">
          <div class="about-text" data-aos="fade-right">
            <p>
              Depuis de nombreuses années, le Foyer Universitaire A2S <strong>Iskane</strong> offre des opportunités de bourses aux étudiants nationaux comme internationaux. Les programmes ont été lancés en <strong>2006</strong> sous la coordination du gouvernement béninois.
            </p>
            <p>
              Les bourses d'études à Iskane sont réalisées en coopération avec l'Association A2S et ses partenaires et sont considérées comme les plus complètes au Bénin avec plusieurs avantages.
            </p>
            <p>
              L'objectif principal est de former des cadres intellectuellement compétents et moralement conscients.
            </p>
          </div>
          <div data-aos="fade-left">
            <div class="about-card">
              <div class="about-card-header">
                <div class="about-card-icon"><i class="bi bi-award"></i></div>
                <div>
                  <div class="about-card-title">Ce que le Foyer offre</div>
                  <div class="about-card-sub">Avantages du programme</div>
                </div>
              </div>
              <ul class="about-list">
                <li><span class="icon"><i class="bi bi-check"></i></span> Prise en charge de la scolarité dans les universités publiques et privées situés entre Cotonou et Abomey Calavi</li>
                <li><span class="icon"><i class="bi bi-check"></i></span> Cours de renforcement en langue arabe</li>
                <li><span class="icon"><i class="bi bi-check"></i></span> Notions élémentaires sur l'islam</li>
                <li><span class="icon"><i class="bi bi-check"></i></span> Formation Professionnelle interne</li>
                <li><span class="icon"><i class="bi bi-check"></i></span> Logement fourni (nationaux & internationaux)</li>
                <li><span class="icon"><i class="bi bi-check"></i></span> Accompagnement des étudiants internationaux</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── Conditions / Bourses ── -->
    <section id="conditions">
      <div class="container-main">
        <div class="section-header" data-aos="fade-up">
          <span class="section-tag">Bourses</span>
          <h2 class="section-title">Conditions d'admission</h2>
          <p class="section-subtitle">Pour bénéficier d'une bourse Iskane, voici les critères à remplir</p>
        </div>
        <div class="conditions-grid">
          <div class="condition-card" data-aos="fade-up" data-aos-delay="0">
            <div class="condition-num">01</div>
            <div class="condition-title">Avoir le Baccalauréat</div>
            <div class="condition-desc">Toutes séries confondues, obtenu cette année ou l'année précédente, sont valables pour l'obtention de bourses à Iskane.</div>
          </div>
          <div class="condition-card" data-aos="fade-up" data-aos-delay="100">
            <div class="condition-num">02</div>
            <div class="condition-title">Mention Assez Bien minimum</div>
            <div class="condition-desc">L'étudiant doit avoir obtenu au moins la mention Assez Bien au BAC (moyenne supérieure ou égale à 12).</div>
          </div>
          <div class="condition-card" data-aos="fade-up" data-aos-delay="200">
            <div class="condition-num">03</div>
            <div class="condition-title">Maximum 23 ans</div>
            <div class="condition-desc">L'âge limite d'entrée à Iskane est de 23 ans révolus.</div>
          </div>
          <div class="condition-card" data-aos="fade-up" data-aos-delay="300">
            <div class="condition-num">04</div>
            <div class="condition-title">Niveau en arabe requis</div>
            <div class="condition-desc">L'entrée à Iskane exige un certain niveau en langue arabe, évalué lors du test.</div>
          </div>
          <div class="condition-card" data-aos="fade-up" data-aos-delay="400">
            <div class="condition-num">05</div>
            <div class="condition-title">Inscription en ligne</div>
            <div class="condition-desc">L'inscription se fait en ligne chaque 2 ans suivant des promotions. <a href="https://iskanebenin.vercel.app/register" style="color:var(--green);font-weight:600;">Inscrivez-vous</a> dès maintenant !</div>
          </div>
          <div class="condition-card" data-aos="fade-up" data-aos-delay="500">
            <div class="condition-num">06</div>
            <div class="condition-title">Test écrit et oral</div>
            <div class="condition-desc">Une fois sélectionné après étude du dossier, vous passerez un test écrit (QCM) et un entretien oral.</div>
          </div>
          <div class="condition-card condition-full" data-aos="fade-up" data-aos-delay="600">
            <div class="condition-num">07</div>
            <div class="condition-title">Être inscrit dans une filière éligible</div>
            <div class="condition-desc">La bourse Iskane est réservée aux étudiants inscrits (ou en cours d'inscription) dans l'une des filières suivantes :</div>
            <div class="filiere-tags">
              <span class="filiere-tag">Droit</span>
              <span class="filiere-tag">Diplomatie et Relations Internationales</span>
              <span class="filiere-tag">Sciences Bancaires, Finance et Assurance</span>
              <span class="filiere-tag">Journalisme</span>
              <span class="filiere-tag">Sociologie et Anthropologie</span>
              <span class="filiere-tag">Sciences Politiques</span>
              <span class="filiere-tag">Sciences Économiques</span>
              <span class="filiere-tag">Administration des Hôpitaux, des Universités et Agences Financières</span>
              <span class="filiere-tag">Planification et Développement Local</span>
              <span class="filiere-tag">Administration Régionale et Locale</span>
              <span class="filiere-tag">Administration Fiscale</span>
              <span class="filiere-tag">Administration Financière et Trésorerie</span>
              <span class="filiere-tag">Psychologie</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── Documents à fournir ── -->
    <section id="documents">
      <div class="container-main">
        <div class="section-header" data-aos="fade-up">
          <span class="section-tag">Documents</span>
          <h2 class="section-title">Documents à fournir pour l'inscription</h2>
          <p class="section-subtitle">Préparez ces pièces avant de soumettre votre dossier en ligne. La liste sera complétée prochainement.</p>
        </div>
        <div style="max-width:520px; margin:0 auto;" data-aos="fade-up">
          <div class="about-card">
            <div class="about-card-header">
              <div class="about-card-icon"><i class="bi bi-file-earmark-text"></i></div>
              <div>
                <div class="about-card-title">Pièces à préparer</div>
                <div class="about-card-sub">Liste des documents (à compléter)</div>
              </div>
            </div>
            <ul class="about-list">
              <li><span class="icon"><i class="bi bi-check"></i></span> Attestation du baccalauréat</li>
              <li><span class="icon"><i class="bi bi-check"></i></span> Carte d'Identité Personnelle (CIP)</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ── Processus de sélection ── -->
    <section id="processus">
      <div class="container-main">
        <div class="section-header" data-aos="fade-up">
          <span class="section-tag">Processus</span>
          <h2 class="section-title">Comment ça marche ?</h2>
          <p class="section-subtitle">5 étapes simples pour rejoindre la famille Iskane</p>
        </div>
        <div class="steps-grid" data-aos="fade-up" data-aos-delay="100">
          <div class="step-item">
            <div class="step-circle">📝</div>
            <div class="step-title">Inscription</div>
            <div class="step-desc">Créez votre compte sur la plateforme</div>
          </div>
          <div class="step-item">
            <div class="step-circle">📋</div>
            <div class="step-title">Dossier</div>
            <div class="step-desc">Remplissez votre dossier en 6 étapes</div>
          </div>
          <div class="step-item">
            <div class="step-circle">🔍</div>
            <div class="step-title">Examen</div>
            <div class="step-desc">Votre dossier est étudié par l'équipe</div>
          </div>
          <div class="step-item">
            <div class="step-circle">✍️</div>
            <div class="step-title">Test QCM</div>
            <div class="step-desc">Test en ligne si dossier retenu</div>
          </div>
          <div class="step-item">
            <div class="step-circle">🎙️</div>
            <div class="step-title">Entretien oral</div>
            <div class="step-desc">Entretien WhatsApp avec l'équipe</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── Programmes ── -->
    <section id="programmes">
      <div class="container-main">
        <div class="section-header" data-aos="fade-up">
          <span class="section-tag">Programmes</span>
          <h2 class="section-title">Nos activités</h2>
        </div>
        <div class="programme-tabs" data-aos="fade-up">
          <div class="programme-tab active" onclick="switchTab('cours')">Programme de cours</div>
          <div class="programme-tab" onclick="switchTab('visites')">Visites de personnalités</div>
        </div>
        <div class="programme-content active" id="tab-cours" data-aos="fade-up">
          <div class="programme-text">
            <h3>Cours et séminaires à Iskane</h3>
            <p>Dans le cadre de notre déroulement, nous proposons des cours et séminaires internes visant à améliorer la maîtrise de la langue arabe ainsi qu'à l'acquisition de notions élémentaires sur l'islam.</p>
            <ul class="programme-list">
              <li>Cours de langue arabe — approche interactive et pratique</li>
              <li>Apprentissage du grammaire, vocabulaire et prononciation arabe</li>
              <li>Modules de formation sur les hadiths, le tawhid, la grammaire islamique</li>
              <li>Séminaires culturels animés par des experts</li>
              <li>Échanges et partage d'idées avec des spécialistes</li>
            </ul>
          </div>
          <div class="programme-img">
            <img src="assets/img/cours3.jpg" alt="Cours à Iskane">
          </div>
        </div>
        <div class="programme-content" id="tab-visites">
          <div class="programme-text">
            <h3>Visites aux grandes personnalités</h3>
            <p>Iskane organise régulièrement des visites aux grandes personnalités du monde académique, culturel et professionnel, offrant aux étudiants l'opportunité unique de rencontrer des figures influentes.</p>
            <ul class="programme-list">
              <li>Rencontres avec des leaders inspirants de divers secteurs</li>
              <li>Discussions ouvertes sur les enjeux contemporains</li>
              <li>Récits de parcours motivants pour les étudiants</li>
              <li>Perspectives diversifiées sur le monde académique</li>
              <li>Création de liens professionnels précieux</li>
            </ul>
          </div>
          <div class="programme-img">
            <img src="assets/img/sortie1.jpg" alt="Visites personnalités">
          </div>
        </div>
      </div>
    </section>

    <!-- ── Témoignages ── -->
    <section id="testimonials">
      <div class="container-main">
        <div class="section-header" data-aos="fade-up">
          <span class="section-tag">Témoignages</span>
          <h2 class="section-title">Ce qu'ils disent de nous</h2>
        </div>
        <div class="swiper swiper-testimonials" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Iskane a transformé ma vision de l'apprentissage. Les cours d'arabe sont dynamiques et engageants !"</p>
                <div class="testimonial-author">
                  <img src="assets/img/image6.jpeg" alt="Amir" class="testimonial-avatar">
                  <div>
                    <div class="testimonial-name">MOUSSA Amir</div>
                    <div class="testimonial-role">Développeur d'Applications</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Les séminaires culturels offrent une perspective inédite sur la culture arabe. Une expérience enrichissante !"</p>
                <div class="testimonial-author">
                  <img src="assets/img/image6.jpeg" alt="Nouhoum" class="testimonial-avatar">
                  <div>
                    <div class="testimonial-name">Nouhoum T.</div>
                    <div class="testimonial-role">Manager des ressources humaines</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Les visites aux personnalités ont été incroyables. J'ai pu discuter avec des leaders inspirants !"</p>
                <div class="testimonial-author">
                  <img src="assets/img/image6.jpeg" alt="Lawan" class="testimonial-avatar">
                  <div>
                    <div class="testimonial-name">Lawan K.</div>
                    <div class="testimonial-role">Informaticien</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"La qualité des formateurs est exceptionnelle. Ils sont passionnés et s'adaptent à nos besoins."</p>
                <div class="testimonial-author">
                  <img src="assets/img/image6.jpeg" alt="Mouhsine" class="testimonial-avatar">
                  <div>
                    <div class="testimonial-name">Mouhsine M.</div>
                    <div class="testimonial-role">Freelancer</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Les bourses d'études offertes par Iskane ont changé ma vie. Je peux poursuivre mes rêves académiques."</p>
                <div class="testimonial-author">
                  <img src="assets/img/image6.jpeg" alt="Abdoul-aziz" class="testimonial-avatar">
                  <div>
                    <div class="testimonial-name">Abdoul-aziz T.</div>
                    <div class="testimonial-role">Entrepreneur</div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <!-- ── Administration ── -->
    <section id="administration">
      <div class="container-main">
        <div class="section-header" data-aos="fade-up">
          <span class="section-tag">Administration</span>
          <h2 class="section-title">Notre équipe administrative</h2>
        </div>
        <div class="team-grid">
          <div class="team-card" data-aos="fade-up" data-aos-delay="0">
            <div class="team-img-wrap">
              <img src="assets/img/moudir.jpg" alt="CHITOU Chouaib">
              <div class="team-overlay">
                <div class="team-socials">
                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-telegram"></i></a>
                </div>
              </div>
            </div>
            <div class="team-info">
              <div class="team-name">CHITOU Chouaib</div>
              <div class="team-role">Directeur Exécutif</div>
            </div>
          </div>
          <div class="team-card" data-aos="fade-up" data-aos-delay="100">
            <div class="team-img-wrap">
              <img src="assets/img/houdou.jpg" alt="IMOROU MAMA HOUDOU">
              <div class="team-overlay">
                <div class="team-socials">
                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-telegram"></i></a>
                </div>
              </div>
            </div>
            <div class="team-info">
              <div class="team-name">IMOROU MAMA HOUDOU</div>
              <div class="team-role">Superviseur Éducatif</div>
            </div>
          </div>
          <div class="team-card" data-aos="fade-up" data-aos-delay="200">
            <div class="team-img-wrap">
              <img src="assets/img/sirouz.jpg" alt="MOHAMED SORI Sirouz Manne">
              <div class="team-overlay">
                <div class="team-socials">
                  <a href="https://wa.me/qr/U7QZLHCO3VHWK1"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://www.facebook.com/sirouzmanne.mohamedsori.3"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/mannesirouz?igsh=OG9jZTY1NGhyMXpq"><i class="bi bi-instagram"></i></a>
                  <a href="https://t.me/ManneSirouz"><i class="bi bi-telegram"></i></a>
                </div>
              </div>
            </div>
            <div class="team-info">
              <div class="team-name">MOHAMED SORI Sirouz Manne</div>
              <div class="team-role">Superviseur Académique</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── FAQ ── -->
    <section id="faq">
      <div class="container-main">
        <div class="section-header" data-aos="fade-up">
          <span class="section-tag">FAQ</span>
          <h2 class="section-title">Questions fréquentes</h2>
          <p class="section-subtitle">Tout ce que vous devez savoir sur Iskane et ses bourses</p>
        </div>
        <div class="faq-grid" data-aos="fade-up">

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              Qui peut postuler à Iskane ?
              <span class="icon"><i class="bi bi-plus"></i></span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">Tout étudiant ayant le Baccalauréat (toutes séries) de l'année en cours ou de l'année précédente, avec au moins la mention Assez Bien, un âge maximum de 23 ans, un niveau minimal en langue arabe et inscrit dans une filière éligible peut postuler.</div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              La bourse couvre-t-elle tous les frais ?
              <span class="icon"><i class="bi bi-plus"></i></span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">Oui. Iskane prend en charge les frais de scolarité, le logement, une allocation mensuelle et accompagne les étudiants internationaux lors de leur voyage.</div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              Comment se déroule le processus de sélection ?
              <span class="icon"><i class="bi bi-plus"></i></span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">Inscription en ligne → soumission du dossier → étude par l'équipe → test QCM en ligne → entretien oral via WhatsApp → décision finale.</div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              Quelle est la durée de la bourse ?
              <span class="icon"><i class="bi bi-plus"></i></span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">La durée est liée à celle de votre formation universitaire. Iskane vous accompagne tout au long de votre parcours académique.</div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              Faut-il être de nationalité béninoise ?
              <span class="icon"><i class="bi bi-plus"></i></span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">Non. Iskane accueille des étudiants nationaux et internationaux. Le programme est ouvert à tous les profils méritants.</div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              Quand sont ouvertes les candidatures ?
              <span class="icon"><i class="bi bi-plus"></i></span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">Les campagnes de recrutement sont ouvertes tous les 2 ans. Inscrivez-vous sur la plateforme pour être notifié dès l'ouverture des candidatures.</div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              Le test QCM se passe-t-il en ligne ?
              <span class="icon"><i class="bi bi-plus"></i></span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">Oui. Le test QCM est entièrement en ligne sur notre plateforme sécurisée. Vous recevrez un code de vérification par email pour y accéder.</div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              Comment se déroule l'entretien oral ?
              <span class="icon"><i class="bi bi-plus"></i></span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">L'entretien oral se déroule via WhatsApp avec un examinateur de l'équipe Iskane. Vous recevrez un lien et les détails par email.</div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ── CTA ── -->
    <section id="cta">
      <div class="container-main">
        <div class="cta-inner">
          <div class="cta-text" data-aos="fade-right">
            <h2>Prêt(e) à rejoindre Iskane ?</h2>
            <p>Créez votre compte et soumettez votre dossier dès aujourd'hui.</p>
          </div>
          <div class="cta-btns" data-aos="fade-left">
            <a href="https://iskanebenin.vercel.app/register" class="btn-cta-gold">
              <i class="bi bi-pencil-square"></i> S'inscrire maintenant
            </a>
            <a href="contact.php" class="btn-cta-outline">Nous contacter</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ── Footer ── -->
  <footer id="footer">
    <div class="container-main">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="#hero" class="logo-wrap">
            <img src="assets/img/iskanelogo.png" alt="Iskane" class="logo-img">
            <div class="logo-text">
              <div class="name">Iskane A2S</div>
              <div class="tagline">Foyer Universitaire Islamique</div>
            </div>
          </a>
          <p>Rejoindre Iskane, c'est s'engager dans un parcours d'apprentissage enrichissant et passionnant. Barakallahu Fikum.</p>
          <div class="footer-socials">
            <a href=""><i class="bi bi-telegram"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="#hero">Accueil</a></li>
            <li><a href="#about">À propos</a></li>
            <li><a href="#conditions">Bourses</a></li>
            <li><a href="#documents">Documents</a></li>
            <li><a href="#programmes">Programmes</a></li>
            <li><a href="#administration">Administration</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Plateforme</h4>
          <ul>
            <li><a href="https://iskanebenin.vercel.app/register">S'inscrire</a></li>
            <li><a href="https://iskanebenin.vercel.app/login">Se connecter</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul class="footer-contact">
            <li><i class="bi bi-geo-alt"></i> Zogbadjè, Calavi, Von Mandela City</li>
            <li><i class="bi bi-telephone"></i> +229 01 66 54 87 62</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2026 <strong>Iskane A2S</strong> — Tous droits réservés</p>
        <p>Designé par <a href="https://amirmoussa01.github.io/moussaamir-cv/" target="_blank">Amir</a></p>
      </div>
    </div>
  </footer>

  <a href="#hero" id="scroll-top"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script>
    // ── AOS ──
    AOS.init({ duration: 700, once: true, offset: 60 });

    // ── Navbar scroll ──
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
      header.classList.toggle('scrolled', window.scrollY > 50);
      document.getElementById('scroll-top').classList.toggle('show', window.scrollY > 300);
    });

    // ── Mobile nav ──
    const mobileToggle = document.getElementById('mobileToggle');
    mobileToggle.addEventListener('click', () => {
      const nav = document.getElementById('navmenu');
      const isOpen = nav.classList.toggle('show');
      mobileToggle.classList.toggle('bi-list', !isOpen);
      mobileToggle.classList.toggle('bi-x-lg', isOpen);
    });

    // ── Sélecteur de langue ──
    const langSwitch = document.getElementById('langSwitch');
    const langToggle = document.getElementById('langToggle');
    langToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      langSwitch.classList.toggle('open');
    });
    document.addEventListener('click', () => langSwitch.classList.remove('open'));

    // ── Swiper témoignages ──
    new Swiper('.swiper-testimonials', {
      loop: true,
      speed: 600,
      autoplay: { delay: 5000, disableOnInteraction: false },
      pagination: { el: '.swiper-pagination', clickable: true },
      breakpoints: {
        320: { slidesPerView: 1, spaceBetween: 20 },
        768: { slidesPerView: 2, spaceBetween: 20 },
        1200: { slidesPerView: 3, spaceBetween: 24 },
      }
    });

    // ── FAQ ──
    function toggleFaq(btn) {
      const item = btn.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    }

    // ── Programme tabs ──
    function switchTab(tab) {
      document.querySelectorAll('.programme-tab').forEach(t => t.classList.remove('active'));
      document.querySelectorAll('.programme-content').forEach(c => c.classList.remove('active'));
      event.target.classList.add('active');
      document.getElementById('tab-' + tab).classList.add('active');
    }
  </script>

</body>
</html>
