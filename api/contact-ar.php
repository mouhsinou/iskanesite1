<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>اتصل بنا — إسكان بنين</title>
  <meta name="description" content="تواصل مع فريق إسكان A2S بنين لأي استفسار حول منحنا الجامعية الإسلامية.">
  <link href="/assets/img/iskanelogo.png" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&family=Amiri:wght@400;700&display=swap" rel="stylesheet">

  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

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
      --font-display: 'Cairo', 'Amiri', serif;
      --font-body:    'Cairo', sans-serif;
      --font-arabic:  'Amiri', serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: var(--font-body); color: var(--gray-900); background: var(--white); overflow-x: hidden; }

    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: var(--gray-50); }
    ::-webkit-scrollbar-thumb { background: var(--green); border-radius: 3px; }

    /* ── NAVBAR ── */
    #header {
      position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
      background: rgba(255,255,255,0.97);
      backdrop-filter: blur(12px);
      padding: 12px 0;
      box-shadow: 0 2px 30px rgba(0,0,0,0.08);
    }

    #header .container-nav {
      max-width: 1200px; margin: 0 auto; padding: 0 24px;
      display: flex; align-items: center; justify-content: space-between;
    }

    .logo-wrap { display: flex; align-items: center; gap: 12px; text-decoration: none; }
    .logo-img { width: 44px; height: 44px; border-radius: 50%; border: 2px solid var(--gold); object-fit: cover; }
    .logo-text .name { font-family: var(--font-display); font-size: 22px; font-weight: 700; color: var(--green-dark); }
    .logo-text .tagline { font-size: 10px; color: var(--green); letter-spacing: 2px; text-transform: uppercase; font-weight: 500; }

    .navmenu ul { display: flex; align-items: center; gap: 8px; list-style: none; }
    .navmenu ul li a {
      font-size: 14px; font-weight: 500; color: var(--gray-600);
      padding: 8px 16px; border-radius: 100px;
      text-decoration: none; transition: all 0.25s;
    }
    .navmenu ul li a:hover { background: var(--green-light); color: var(--green); }
    .navmenu ul li.btn-cta a { background: var(--gold); color: var(--gray-900) !important; font-weight: 600; }
    .navmenu ul li.btn-cta a:hover { background: var(--gold-dark); }

    .mobile-nav-toggle { display: none; font-size: 24px; cursor: pointer; color: var(--gray-900); position: relative; z-index: 1001; }

    /* ── Sélecteur de langue ── */
    .lang-switch { position: relative; z-index: 1001; margin-right: 6px; }
    .lang-btn {
      display: flex; align-items: center; gap: 6px;
      background: var(--gray-50); color: var(--gray-600);
      border: 1px solid var(--gray-100);
      padding: 8px 14px; border-radius: 100px;
      font-size: 13px; font-weight: 600; cursor: pointer;
      transition: all 0.25s; white-space: nowrap;
    }
    .lang-btn:hover { background: var(--green-light); color: var(--green); }
    .lang-btn .bi-chevron-down { font-size: 10px; transition: transform 0.25s; }
    .lang-switch.open .lang-btn .bi-chevron-down { transform: rotate(180deg); }

    .lang-dropdown {
      position: absolute; top: calc(100% + 10px); left: 0;
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

    /* ── PAGE HERO ── */
    .page-hero {
      background: linear-gradient(135deg, var(--green-dark), var(--green));
      padding: 120px 0 60px; position: relative; overflow: hidden;
    }
    .page-hero::before {
      content: '';
      position: absolute; inset: 0;
      background: radial-gradient(circle at 80% 50%, rgba(249,200,0,0.15), transparent 60%);
    }
    .page-hero::after {
      content: '';
      position: absolute; bottom: -2px; left: 0; right: 0; height: 60px;
      background: white; clip-path: ellipse(55% 100% at 50% 100%);
    }
    .page-hero-content { max-width: 1200px; margin: 0 auto; padding: 0 24px; position: relative; z-index: 1; }
    .page-hero-tag {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(249,200,0,0.2); border: 1px solid rgba(249,200,0,0.4);
      color: var(--gold); padding: 6px 16px; border-radius: 100px;
      font-size: 12px; font-weight: 600; letter-spacing: 1px; text-transform: uppercase;
      margin-bottom: 16px;
    }
    .page-hero h1 {
      font-family: var(--font-display); font-size: clamp(36px, 5vw, 56px);
      font-weight: 900; color: white; margin-bottom: 12px;
    }
    .page-hero p { font-size: 16px; color: rgba(255,255,255,0.8); max-width: 480px; }

    /* ── CONTACT SECTION ── */
    .contact-section { padding: 80px 0; background: var(--gray-50); }
    .container-main { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

    .contact-grid { display: grid; grid-template-columns: 1fr 1.6fr; gap: 48px; align-items: start; }

    /* ── Info cards ── */
    .info-cards { display: flex; flex-direction: column; gap: 16px; }

    .info-card {
      background: white; border-radius: 20px; padding: 24px;
      border: 1px solid var(--gray-100);
      display: flex; align-items: flex-start; gap: 16px;
      transition: all 0.3s;
    }
    .info-card:hover { transform: translateY(-2px); box-shadow: 0 8px 32px rgba(0,0,0,0.06); }

    .info-icon {
      width: 48px; height: 48px; border-radius: 14px;
      background: var(--green-light); color: var(--green);
      display: flex; align-items: center; justify-content: center;
      font-size: 20px; flex-shrink: 0;
    }
    .info-title { font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: var(--gray-600); margin-bottom: 6px; }
    .info-value { font-size: 15px; font-weight: 600; color: var(--gray-900); line-height: 1.5; }

    /* Réseaux sociaux */
    .social-card {
      background: white; border-radius: 20px; padding: 24px;
      border: 1px solid var(--gray-100);
    }
    .social-card h4 { font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: var(--gray-600); margin-bottom: 16px; }
    .social-links { display: flex; gap: 10px; flex-wrap: wrap; }
    .social-link {
      display: flex; align-items: center; gap: 8px;
      padding: 10px 16px; border-radius: 100px;
      font-size: 14px; font-weight: 500; text-decoration: none;
      transition: all 0.25s; border: 1px solid var(--gray-100);
      color: var(--gray-700);
    }
    .social-link:hover { background: var(--green); color: white; border-color: var(--green); transform: translateY(-1px); }
    .social-link i { font-size: 16px; }

    /* ── Formulaire ── */
    .form-card {
      background: white; border-radius: 24px; padding: 40px;
      border: 1px solid var(--gray-100);
      box-shadow: 0 4px 40px rgba(0,0,0,0.05);
    }
    .form-card h2 {
      font-family: var(--font-display); font-size: 26px; font-weight: 700;
      margin-bottom: 8px;
    }
    .form-card .form-subtitle { font-size: 14px; color: var(--gray-600); margin-bottom: 32px; }

    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

    .form-group { margin-bottom: 20px; }
    .form-label {
      display: block; font-size: 13px; font-weight: 600;
      color: var(--gray-900); margin-bottom: 8px;
    }
    .form-control {
      width: 100%; padding: 13px 16px;
      border: 1.5px solid var(--gray-100); border-radius: 12px;
      font-size: 14px; font-family: var(--font-body);
      color: var(--gray-900); background: var(--gray-50);
      outline: none; transition: all 0.25s;
    }
    .form-control:focus { border-color: var(--green); background: white; box-shadow: 0 0 0 3px rgba(0,166,81,0.1); }
    .form-control::placeholder { color: #9BB5A8; }

    textarea.form-control { resize: vertical; min-height: 140px; }

    .alert-box {
      padding: 14px 18px; border-radius: 12px; font-size: 14px;
      margin-bottom: 20px; display: flex; align-items: flex-start; gap: 10px;
    }
    .alert-error { background: #FFF0F0; border: 1px solid #FFD0D0; color: #C0392B; }
    .alert-success { background: var(--green-light); border: 1px solid rgba(0,166,81,0.3); color: var(--green-dark); }
    .alert-box i { flex-shrink: 0; margin-top: 1px; }

    .btn-submit {
      width: 100%; padding: 15px; border-radius: 12px;
      background: var(--green); color: white;
      font-size: 15px; font-weight: 700; font-family: var(--font-body);
      border: none; cursor: pointer; transition: all 0.3s;
      display: flex; align-items: center; justify-content: center; gap: 10px;
    }
    .btn-submit:hover { background: var(--green-dark); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,166,81,0.35); }

    /* ── Map placeholder ── */
    .map-section { padding: 0 0 80px; background: var(--gray-50); }
    .map-card {
      background: white; border-radius: 24px; overflow: hidden;
      border: 1px solid var(--gray-100); height: 300px;
      display: flex; align-items: center; justify-content: center;
      flex-direction: column; gap: 16px; color: var(--gray-600);
    }
    .map-card i { font-size: 48px; color: var(--green-light); }
    .map-card p { font-size: 15px; }
    .map-card strong { color: var(--green); }

    /* ── Footer ── */
    #footer { background: var(--gray-900); color: white; padding: 48px 0 32px; }
    .footer-bottom {
      display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;
    }
    .footer-bottom p { font-size: 13px; color: rgba(255,255,255,0.4); }
    .footer-bottom a { color: var(--gold); text-decoration: none; }
    .footer-socials { display: flex; gap: 8px; }
    .footer-socials a {
      width: 38px; height: 38px; border-radius: 50%;
      background: rgba(255,255,255,0.08); color: rgba(255,255,255,0.7);
      display: flex; align-items: center; justify-content: center;
      text-decoration: none; font-size: 16px; transition: all 0.2s;
    }
    .footer-socials a:hover { background: var(--gold); color: var(--gray-900); }

    /* ── Scroll top ── */
    #scroll-top {
      position: fixed; bottom: 24px; left: 24px; z-index: 999;
      width: 44px; height: 44px; border-radius: 50%;
      background: var(--green); color: white;
      display: flex; align-items: center; justify-content: center;
      text-decoration: none; font-size: 20px;
      box-shadow: 0 4px 16px rgba(0,166,81,0.4);
      opacity: 0; pointer-events: none; transition: all 0.3s;
    }
    #scroll-top.show { opacity: 1; pointer-events: all; }
    #scroll-top:hover { background: var(--green-dark); transform: translateY(-2px); }

    /* ── Responsive ── */
    @media (max-width: 991px) {
      .contact-grid { grid-template-columns: 1fr; }
      .form-card { padding: 28px; }
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
      .form-row { grid-template-columns: 1fr; }
    }

    @media (max-width: 575px) {
      .page-hero { padding: 100px 0 48px; }
      .page-hero-content { padding: 0 16px; }
      .contact-section { padding: 48px 0; }
      .container-main { padding: 0 16px; }
      .form-card { padding: 22px; }
      .info-card { padding: 18px; }
      .map-card { height: 220px; }
      .footer-bottom { flex-direction: column; text-align: center; }
      .container-nav { padding: 0 16px; }
    }
  </style>
</head>

<body>

  <!-- ── Header ── -->
  <header id="header">
    <div class="container-nav">
      <a href="index-ar.php" class="logo-wrap">
        <img src="/assets/img/iskanelogo.png" alt="Iskane" class="logo-img">
        <div class="logo-text">
          <div class="name">إسكان</div>
          <div class="tagline">A2S · بنين</div>
        </div>
      </a>
      <nav class="navmenu" id="navmenu">
        <ul>
          <li><a href="index-ar.php">الرئيسية</a></li>
          <li><a href="index-ar.php#about">من نحن</a></li>
          <li><a href="index-ar.php#conditions">المنح الدراسية</a></li>
          <li><a href="index-ar.php#documents">الوثائق</a></li>
          <li><a href="index-ar.php#administration">الإدارة</a></li>
          <li><a href="index-ar.php#faq">الأسئلة الشائعة</a></li>
          <li><a href="contact-ar.php" style="color: var(--green); font-weight:600;">اتصل بنا</a></li>
          <li class="btn-cta"><a href="https://iskane.vercel.app/register">سجّل الآن</a></li>
        </ul>
      </nav>
      <div class="lang-switch" id="langSwitch">
        <button class="lang-btn" id="langToggle" type="button">
          <i class="bi bi-globe2"></i>
          <span class="lang-label">AR</span>
          <i class="bi bi-chevron-down"></i>
        </button>
        <div class="lang-dropdown" id="langDropdown">
          <a href="contact.php" class="lang-option"><span class="flag">🇫🇷</span> Français</a>
          <a href="contact-ar.php" class="lang-option active"><span class="flag">🇸🇦</span> العربية</a>
        </div>
      </div>
      <i class="bi bi-list mobile-nav-toggle" id="mobileToggle"></i>
    </div>
  </header>

  <main>
    <!-- ── Page Hero ── -->
    <div class="page-hero">
      <div class="page-hero-content" data-aos="fade-up">
        <div class="page-hero-tag"><i class="bi bi-envelope"></i> اتصل بنا</div>
        <h1>تواصل معنا</h1>
        <p>لديك سؤال حول منحنا أو مسار القبول؟ فريقنا هنا لمساعدتك.</p>
      </div>
    </div>

    <!-- ── Contact ── -->
    <section class="contact-section">
      <div class="container-main">
        <div class="contact-grid">

          <!-- Infos -->
          <div data-aos="fade-right">
            <div class="info-cards">
              <div class="info-card">
                <div class="info-icon"><i class="bi bi-geo-alt"></i></div>
                <div>
                  <div class="info-title">العنوان</div>
                  <div class="info-value">زوغبادجي، كالافي<br>فون مانديلا سيتي، بنين</div>
                </div>
              </div>
              <div class="info-card">
                <div class="info-icon"><i class="bi bi-telephone"></i></div>
                <div>
                  <div class="info-title">الهاتف</div>
                  <div class="info-value">+229 01 66 54 87 62</div>
                </div>
              </div>
              <div class="info-card">
                <div class="info-icon"><i class="bi bi-clock"></i></div>
                <div>
                  <div class="info-title">أوقات العمل</div>
                  <div class="info-value">الإثنين – الجمعة<br>8:00 – 17:00</div>
                </div>
              </div>
              <div class="social-card">
                <h4>تابعنا</h4>
                <div class="social-links">
                  <a href="" class="social-link"><i class="bi bi-telegram"></i> تيليغرام</a>
                  <a href="" class="social-link"><i class="bi bi-facebook"></i> فيسبوك</a>
                  <a href="" class="social-link"><i class="bi bi-instagram"></i> إنستغرام</a>
                  <a href="" class="social-link"><i class="bi bi-whatsapp"></i> واتساب</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Formulaire -->
          <div data-aos="fade-left">
            <div class="form-card">
              <h2>أرسل لنا رسالة</h2>
              <p class="form-subtitle">سنرد عليك في أقرب وقت ممكن. بارك الله فيكم</p>

              <?php
                $nom = @$_POST["nom"];
                $email = @$_POST["email"];
                $sujet = @$_POST["sujet"];
                $mesage = @$_POST["message"];
                $ajouter = @$_POST["ajouter"];
                $erreurs = [];
                $succes = false;

                if (isset($ajouter)) {
                  if (empty($nom)) $erreurs[] = "الاسم مطلوب.";
                  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $erreurs[] = "البريد الإلكتروني غير صالح.";
                  if (empty($mesage)) $erreurs[] = "الرسالة مطلوبة.";

                  if (empty($erreurs)) {
                    try {
                      $pdo = new PDO("mysql:host=sql303.infinityfree.com;dbname=if0_37361913_iskanedb;charset=utf8;", "if0_37361913", "suLPNVxaSvOSQu");
                      $req = $pdo->prepare("INSERT INTO contact(nom,email,sujet,message) values(?,?,?,?)");
                      $req->execute(array($nom, $email, $sujet, $mesage));
                      $succes = true;
                      $nom = $email = $sujet = $mesage = "";
                    } catch (PDOException $e) {
                      $erreurs[] = "خطأ في الاتصال. يرجى المحاولة مرة أخرى.";
                    }
                  }
                }
              ?>

              <?php if (!empty($erreurs)): ?>
                <div class="alert-box alert-error">
                  <i class="bi bi-exclamation-circle"></i>
                  <ul style="margin:0;padding-right:16px;">
                    <?php foreach ($erreurs as $e): ?>
                      <li><?= htmlspecialchars($e) ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>

              <?php if ($succes): ?>
                <div class="alert-box alert-success">
                  <i class="bi bi-check-circle"></i>
                  <span>تم إرسال رسالتك بنجاح! سنرد عليك قريبًا. بارك الله فيكم.</span>
                </div>
              <?php endif; ?>

              <form method="post">
                <div class="form-row">
                  <div class="form-group">
                    <label class="form-label">اسمك *</label>
                    <input type="text" name="nom" class="form-control" placeholder="مثال: موسى أمير" value="<?= htmlspecialchars($nom ?? '') ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">بريدك الإلكتروني *</label>
                    <input type="email" name="email" class="form-control" placeholder="vous@email.com" value="<?= htmlspecialchars($email ?? '') ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">الموضوع</label>
                  <input type="text" name="sujet" class="form-control" placeholder="مثال: سؤال حول المنح الدراسية" value="<?= htmlspecialchars($sujet ?? '') ?>">
                </div>
                <div class="form-group">
                  <label class="form-label">الرسالة *</label>
                  <textarea name="message" class="form-control" placeholder="اشرح طلبك بالتفصيل..."><?= htmlspecialchars($mesage ?? '') ?></textarea>
                </div>
                <button type="submit" name="ajouter" value="ajouter" class="btn-submit">
                  <i class="bi bi-send"></i> إرسال الرسالة
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ── Localisation ── -->
    <section class="map-section">
      <div class="container-main">
        <div class="map-card" data-aos="fade-up">
          <i class="bi bi-pin-map"></i>
          <p>سكن الطلبة الجامعي إسكان A2S</p>
          <p><strong>زوغبادجي، كالافي — فون مانديلا سيتي، بنين</strong></p>
        </div>
      </div>
    </section>
  </main>

  <!-- ── Footer ── -->
  <footer id="footer">
    <div class="container-main">
      <div style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:20px; margin-bottom:24px;">
        <a href="index-ar.php" class="logo-wrap">
          <img src="/assets/img/iskanelogo.png" alt="Iskane" class="logo-img">
          <div class="logo-text">
            <div class="name" style="color:white;">إسكان A2S</div>
            <div class="tagline" style="color:rgba(255,255,255,0.5);">سكن الطلبة الجامعي الإسلامي</div>
          </div>
        </a>
        <div class="footer-socials">
          <a href=""><i class="bi bi-telegram"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2026 <strong style="color:rgba(255,255,255,0.7);">إسكان A2S</strong> — جميع الحقوق محفوظة</p>
        <p>صمّمه <a href="https://amirmoussa01.github.io/moussaamir-cv/" target="_blank">Amir</a></p>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top"><i class="bi bi-arrow-up-short"></i></a>

  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script>
    AOS.init({ duration: 700, once: true, offset: 60 });

    const mobileToggle = document.getElementById('mobileToggle');
    mobileToggle.addEventListener('click', () => {
      const nav = document.getElementById('navmenu');
      const isOpen = nav.classList.toggle('show');
      mobileToggle.classList.toggle('bi-list', !isOpen);
      mobileToggle.classList.toggle('bi-x-lg', isOpen);
    });

    const langSwitch = document.getElementById('langSwitch');
    const langToggle = document.getElementById('langToggle');
    langToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      langSwitch.classList.toggle('open');
    });
    document.addEventListener('click', () => langSwitch.classList.remove('open'));

    window.addEventListener('scroll', () => {
      document.getElementById('scroll-top').classList.toggle('show', window.scrollY > 300);
    });
  </script>

</body>
</html>