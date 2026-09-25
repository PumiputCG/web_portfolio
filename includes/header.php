<?php
require_once __DIR__ . '/lang.php';

$lang         = getCurrentLang();
$isTH         = $lang === 'th';
$active       = $active ?? 'home';
$pageTitle    = $pageTitle ?? ($isTH ? 'บันทึกส่วนตัว' : 'Personal Journal');
$cssVersion   = filemtime(__DIR__ . '/../assets/css/style.css');
$faviconVersion = filemtime(__DIR__ . '/../assets/favicon.svg');

$homeSections = [
  'home' => $isTH ? 'หน้าแรก' : 'Home',
  'journal' => $isTH ? 'บทนำ' : 'Introduction',
  'moments' => $isTH ? 'บันทึกการเดินทาง' : 'Travel Journal',
  'contact' => $isTH ? 'ข้อมูลติดต่อ' : 'Contact Information',
];

$homeSectionUrl = static function (string $section) use ($active, $lang): string {
  return $active === 'home'
    ? '#' . $section
    : 'index.php?lang=' . rawurlencode($lang) . '#' . $section;
};

$aboutSections = [
  'about' => $isTH ? 'แนะนำตัว' : 'Introduction',
  'hobbies' => $isTH ? 'งานอดิเรก' : 'Free Time',
  'path' => $isTH ? 'เส้นทางการเติบโต' : 'The Path',
];

$aboutSectionUrl = static function (string $section) use ($active, $lang): string {
  return $active === 'about'
    ? '#' . $section
    : 'about.php?lang=' . rawurlencode($lang) . '#' . $section;
};

$portfolioSections = [
  'intro' => $isTH ? 'แนวทางการทำงาน' : 'How I Work',
  'skills' => $isTH ? 'การศึกษาและทักษะ' : 'Education & Skills',
  'experience' => $isTH ? 'ประสบการณ์และผลงาน' : 'Experience & Work',
];

$portfolioSectionUrl = static function (string $section) use ($active, $lang): string {
  return $active === 'portfolio'
    ? '#' . $section
    : 'projects.php?lang=' . rawurlencode($lang) . '#' . $section;
};

$homeUrl = $homeSectionUrl('home');
$aboutUrl = $aboutSectionUrl('about');
$portfolioUrl = $portfolioSectionUrl('intro');
$contactUrl = $homeSectionUrl('contact');
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#090a09">
  <title><?= htmlspecialchars($pageTitle) ?> | Pumiput Chaichat</title>
  <meta name="description" content="<?= $isTH
    ? 'บันทึกภาพการเดินทางและเว็บไซต์ส่วนตัวของภูมิพัฒน์ ไชยชาติ'
    : 'A cinematic personal journal by Pumiput Chaichat.' ?>">

  <script>
    document.documentElement.classList.add('js');
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@400;500;600&family=Italiana&family=Jost:wght@400;500;600&family=La+Belle+Aurore&family=Mali:wght@300&family=Montserrat:wght@700;800&family=Noto+Serif+Thai:wght@400;500&display=swap" rel="stylesheet">

  <link rel="icon" href="assets/favicon.svg?v=<?= $faviconVersion ?>" type="image/svg+xml">
  <link rel="stylesheet" href="assets/css/style.css?v=<?= $cssVersion ?>">
</head>
<body class="page-<?= htmlspecialchars($active) ?>">
  <a href="#main" class="skip-link"><?= $isTH ? 'ข้ามไปยังเนื้อหาหลัก' : 'Skip to content' ?></a>

  <div class="page-loader" aria-hidden="true">
    <span>Pumiput Chaichat</span>
  </div>

  <header class="site-header" id="siteHeader">
    <button class="menu-button" id="menuButton" type="button"
            aria-label="<?= $isTH ? 'เปิดเมนู' : 'Open menu' ?>"
            data-open-label="<?= $isTH ? 'เปิดเมนู' : 'Open menu' ?>"
            data-close-label="<?= $isTH ? 'ปิดเมนู' : 'Close menu' ?>"
            aria-expanded="false" aria-controls="mobileMenu">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <nav class="desktop-nav" aria-label="<?= $isTH ? 'เมนูหลัก' : 'Primary navigation' ?>">
      <div class="nav-item nav-home">
        <a href="<?= htmlspecialchars($homeUrl) ?>" aria-haspopup="true"<?= $active === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
        <div class="nav-submenu" aria-label="<?= $isTH ? 'ส่วนต่าง ๆ ของหน้า Home' : 'Home sections' ?>">
          <a href="<?= htmlspecialchars($homeSectionUrl('home')) ?>"><span>01</span><?= $homeSections['home'] ?></a>
          <a href="<?= htmlspecialchars($homeSectionUrl('journal')) ?>"><span>02</span><?= $homeSections['journal'] ?></a>
          <a href="<?= htmlspecialchars($homeSectionUrl('moments')) ?>"><span>03</span><?= $homeSections['moments'] ?></a>
          <a href="<?= htmlspecialchars($homeSectionUrl('contact')) ?>"><span>04</span><?= $homeSections['contact'] ?></a>
        </div>
      </div>
      <div class="nav-item nav-about">
        <a href="<?= htmlspecialchars($aboutUrl) ?>" aria-haspopup="true"<?= $active === 'about' ? ' aria-current="page"' : '' ?>>About Me</a>
        <div class="nav-submenu" aria-label="<?= $isTH ? 'ส่วนต่าง ๆ ของหน้า About' : 'About sections' ?>">
          <?php $i = 0; foreach ($aboutSections as $key => $label): $i++; ?>
            <a href="<?= htmlspecialchars($aboutSectionUrl($key)) ?>"><span><?= sprintf('%02d', $i) ?></span><?= $label ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nav-item nav-portfolio">
        <a href="<?= htmlspecialchars($portfolioUrl) ?>" aria-haspopup="true"<?= $active === 'portfolio' ? ' aria-current="page"' : '' ?>>Portfolio</a>
        <div class="nav-submenu" aria-label="<?= $isTH ? 'ส่วนต่าง ๆ ของหน้า Portfolio' : 'Portfolio sections' ?>">
          <?php $i = 0; foreach ($portfolioSections as $key => $label): $i++; ?>
            <a href="<?= htmlspecialchars($portfolioSectionUrl($key)) ?>"><span><?= sprintf('%02d', $i) ?></span><?= htmlspecialchars($label) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <a href="<?= htmlspecialchars($contactUrl) ?>">Contact</a>
    </nav>

    <div class="header-actions">
      <a class="language-link" href="<?= htmlspecialchars(getLangSwitchUrl()) ?>"
         aria-label="<?= $isTH ? 'เปลี่ยนเป็นภาษาอังกฤษ' : 'Switch to Thai' ?>">
        <?= $isTH ? 'EN' : 'TH' ?>
      </a>
    </div>
  </header>

  <nav class="mobile-menu" id="mobileMenu" aria-label="<?= $isTH ? 'เมนู' : 'Navigation menu' ?>">
    <div class="mobile-menu-primary">
      <div class="m-group">
        <a class="m-group-trigger" href="<?= htmlspecialchars($homeUrl) ?>" aria-haspopup="true" aria-expanded="false"<?= $active === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
        <div class="mobile-submenu" aria-label="<?= $isTH ? 'ส่วนต่าง ๆ ของหน้า Home' : 'Home sections' ?>">
          <a href="<?= htmlspecialchars($homeSectionUrl('home')) ?>"><span>01</span><?= $homeSections['home'] ?></a>
          <a href="<?= htmlspecialchars($homeSectionUrl('journal')) ?>"><span>02</span><?= $homeSections['journal'] ?></a>
          <a href="<?= htmlspecialchars($homeSectionUrl('moments')) ?>"><span>03</span><?= $homeSections['moments'] ?></a>
          <a href="<?= htmlspecialchars($homeSectionUrl('contact')) ?>"><span>04</span><?= $homeSections['contact'] ?></a>
        </div>
      </div>
      <div class="m-group">
        <a class="m-group-trigger" href="<?= htmlspecialchars($aboutUrl) ?>" aria-haspopup="true" aria-expanded="false"<?= $active === 'about' ? ' aria-current="page"' : '' ?>>About Me</a>
        <div class="mobile-submenu" aria-label="<?= $isTH ? 'ส่วนต่าง ๆ ของหน้า About' : 'About sections' ?>">
          <?php $i = 0; foreach ($aboutSections as $key => $label): $i++; ?>
            <a href="<?= htmlspecialchars($aboutSectionUrl($key)) ?>"><span><?= sprintf('%02d', $i) ?></span><?= $label ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="m-group">
        <a class="m-group-trigger" href="<?= htmlspecialchars($portfolioUrl) ?>" aria-haspopup="true" aria-expanded="false"<?= $active === 'portfolio' ? ' aria-current="page"' : '' ?>>Portfolio</a>
        <div class="mobile-submenu" aria-label="<?= $isTH ? 'ส่วนต่าง ๆ ของหน้า Portfolio' : 'Portfolio sections' ?>">
          <?php $i = 0; foreach ($portfolioSections as $key => $label): $i++; ?>
            <a href="<?= htmlspecialchars($portfolioSectionUrl($key)) ?>"><span><?= sprintf('%02d', $i) ?></span><?= htmlspecialchars($label) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <a href="<?= htmlspecialchars($contactUrl) ?>">Contact</a>
    </div>
  </nav>

  <main id="main">
