<?php
require_once __DIR__ . '/includes/lang.php';

$isTH      = getCurrentLang() === 'th';
$active    = 'home';
$pageTitle = $isTH ? 'บันทึกการเดินทาง' : 'Personal Journal';

require_once __DIR__ . '/includes/header.php';
?>

<section class="journal-hero" id="home" aria-labelledby="home-title">
  <img
    class="journal-hero-image"
    src="assets/images/journal/pumiput-mountain-hero.png"
    alt="<?= $isTH
      ? 'ภูมิพัฒน์ยืนมองวิวภูเขาในแสงเช้า'
      : 'Pumiput overlooking layered mountains in the morning light' ?>"
    width="1983"
    height="793"
    fetchpriority="high"
  >
  <div class="journal-hero-shade" aria-hidden="true"></div>

  <div class="journal-hero-content">
    
    <p class="journal-location entrance"><?= $isTH ? 'เรื่องราวและบันทึกส่วนตัว' : 'Stories & Personal Journal' ?></p>
    <h1 id="home-title" class="rotating-headline entrance entrance-delay">
      <span class="sr-only">A story of learning, creating, exploring, and growing</span>
      <span class="rotating-headline-visual" aria-hidden="true">
        <span class="rotating-headline-fixed">A Story Of</span>
        <span
          class="rotating-word-slot"
          data-rotating-words="LEARNING,CREATING,EXPLORING,GROWING"
        >
          <span class="rotating-word-clip is-visible">
            <span class="rotating-word">Learning</span>
            <span class="rotating-word-cursor"></span>
          </span>
        </span>
      </span>
    </h1>
    <p class="journal-hero-copy entrance entrance-delay-2">
      <?= $isTH
        ? 'ทุกประสบการณ์ในชีวิต ล้วนสอนเราเสมอ'
        : 'Every experience in life teaches us something.' ?>
    </p>
  </div>

  <a class="scroll-cue entrance entrance-delay-3" href="#journal">
    <span>Loading</span>
    <span class="scroll-line" aria-hidden="true"></span>
  </a>
</section>

<section class="about-story" id="journal" aria-labelledby="about-story-title">
  <div class="about-story-layout">
    <figure class="about-story-primary reveal">
      <img
        src="assets/images/journal/pumiput-fuji-composite.png"
        alt="<?= $isTH
          ? 'ภูเขาไฟฟูจิ ประเทศญี่ปุ่น'
          : 'Fuji in Japan' ?>"
        width="1025"
        height="1534"
        loading="lazy"
      >
    </figure>

    <div class="about-story-content">
      <h2 id="about-story-title" class="sr-only">The Journey of Becoming</h2>

      <div class="about-story-copy">
      <?php if ($isTH): ?>
          <p class="reveal">ผมเป็น Software Engineer ที่ชอบเขียนโค้ดและพัฒนาระบบใหม่ ๆ โดยเฉพาะการได้เปลี่ยนไอเดียให้กลายเป็นโปรแกรมที่ใช้งานได้จริง แต่ละโปรเจกต์ที่ทำก็มีทั้งเรื่องง่าย เรื่องยาก และปัญหาที่ไม่เคยเจอมาก่อน ซึ่งทำให้ผมได้เรียนรู้อะไรใหม่ ๆ อยู่ตลอด</p>
          <p class="reveal">แต่ถ้าว่างจากงาน ผมก็ชอบออกไปเที่ยว หาสถานที่ใหม่ ๆ ไปถ่ายรูป หรือบางวันก็แค่หาร้านกาแฟนั่งชิล ๆ นอกจากนี้ผมยังชอบออกกำลังกาย เพราะนอกจากจะได้ดูแลตัวเองแล้ว ยังเป็นอีกหนึ่งกิจกรรมที่ผมสนุกและอยากพัฒนาตัวเองให้ดีขึ้นเรื่อย ๆ</p>
          <p class="reveal">ผมเลยอยากใช้พื้นที่ตรงนี้เก็บเรื่องราวต่าง ๆ ของตัวเองไว้ ทั้งโปรเจกต์ที่เคยทำ สถานที่ที่เคยไป และประสบการณ์เล็ก ๆ น้อย ๆ ระหว่างทาง เผื่อวันหนึ่งได้กลับมาเปิดดูว่า ที่ผ่านมาเราได้ทำอะไร ได้เจออะไร และเดินทางมาไกลแค่ไหนแล้ว</p>
      <?php else: ?>
          <p class="reveal">I'm a Software Engineer who loves writing code and building new systems, especially turning ideas into software people can actually use. Every project brings a mix of easy wins, hard parts, and problems I've never faced before, so I'm always learning something new.</p>
          <p class="reveal">When I'm not working, I like to travel, find new places to photograph, or on some days just settle into a café and take it easy. I also enjoy working out. It's a way to look after myself, and something I have fun with and want to keep getting better at.</p>
          <p class="reveal">That's why I wanted a space to keep my own stories: the projects I've built, the places I've been, and the small experiences along the way. One day I can look back and see what I've done, what I've come across, and how far I've come.</p>
      <?php endif; ?>
      </div>

      <figure class="about-story-secondary reveal">
        <img
          src="assets/images/journal/pumiput-sakura-landscape.png"
          alt="<?= $isTH
            ? 'ภูมิพัฒน์ยืนอยู่ใต้ต้นซากุระในประเทศญี่ปุ่น'
            : 'Pumiput standing beneath cherry blossom trees in Japan' ?>"
          width="1536"
          height="1024"
          loading="lazy"
        >
        <blockquote class="about-story-quote">
          <p lang="<?= $isTH ? 'th' : 'en' ?>">
            <?= $isTH
              ? 'ความมุ่งมั่นและความตั้งใจ จะพาเราเข้าใกล้ความฝัน'
              : 'Determination and dedication bring us closer to our dreams.' ?>
          </p>
        </blockquote>
      </figure>
    </div>
  </div>
</section>

<?php
  require_once __DIR__ . '/includes/journal-data.php';
  $travelLang = rawurlencode(getCurrentLang());
  $countries  = getJournalCountries();
  $firstKey   = array_key_first($countries);

  $stageData = [];
  foreach ($countries as $key => $c) {
    $stageData[$key] = [
      'label'  => $isTH ? $c['label_th'] : $c['label_en'],
      'page'   => $c['page'] . '?lang=' . $travelLang,
      'places' => array_map(static function ($p) use ($isTH) {
        return [
          'id'     => $p['id'],
          'date'   => $p['date'],
          'title'  => $isTH ? $p['title_th'] : $p['title_en'],
          'desc'   => $isTH ? $p['desc_th'] : $p['desc_en'],
          'alt'    => $isTH ? $p['alt_th'] : $p['alt_en'],
          'images' => $p['images'],
        ];
      }, $c['places']),
    ];
  }

  $d0    = $countries[$firstKey];
  $p0    = $d0['places'][0];
?>
<section class="travel-journal" id="moments" aria-labelledby="travel-title">
  <h2 id="travel-title" class="sr-only"><?= $isTH ? 'บันทึกการเดินทาง' : 'Travel Journal' ?></h2>

  <div class="travel-stage reveal" id="travelStage" data-mode="auto">
    <div class="travel-stage-media">
      <div class="travel-stage-frame">
        <img class="travel-stage-image" id="stageImage"
             src="<?= htmlspecialchars($p0['images'][0]) ?>"
             alt="<?= htmlspecialchars($isTH ? $p0['alt_th'] : $p0['alt_en']) ?>"
             width="1448" height="1086">
        <span class="travel-stage-date" id="stageDate" aria-hidden="true"><?= $p0['date'][0] . ' ' . $p0['date'][1] ?></span>
        <button class="travel-stage-nav travel-stage-prev" id="stagePrev" type="button" aria-label="<?= $isTH ? 'ภาพก่อนหน้า' : 'Previous photo' ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 6-6 6 6 6"/></svg>
        </button>
        <button class="travel-stage-nav travel-stage-next" id="stageNext" type="button" aria-label="<?= $isTH ? 'ภาพถัดไป' : 'Next photo' ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
        </button>
      </div>
      <div class="travel-stage-thumbs" id="stageThumbs" aria-label="<?= $isTH ? 'ภาพในสถานที่นี้' : 'Photos at this place' ?>" hidden></div>
    </div>
    <div class="travel-stage-info">
      <p class="travel-stage-place"><?= $isTH ? 'บันทึกการเดินทาง' : 'Travel Journal' ?></p>
      <h3 class="travel-stage-title">
        <span id="stageTitle"><?= htmlspecialchars($isTH ? $p0['title_th'] : $p0['title_en']) ?></span>&#8288;<span class="travel-stage-country" id="stagePlace"><?= htmlspecialchars($isTH ? $d0['label_th'] : $d0['label_en']) ?></span>
      </h3>
      <p class="travel-stage-desc" id="stageDesc"><?= htmlspecialchars($isTH ? $p0['desc_th'] : $p0['desc_en']) ?></p>
    </div>
  </div>

  <div class="travel-explore">
  <div class="travel-tabs reveal" role="tablist" aria-label="<?= $isTH ? 'ประเทศที่ไป' : 'Countries visited' ?>">
    <?php foreach ($countries as $key => $c): $on = $key === $firstKey; ?>
      <button class="travel-tab<?= $on ? ' is-active' : '' ?>" type="button" role="tab"
              id="tab-<?= $key ?>" aria-selected="<?= $on ? 'true' : 'false' ?>"
              aria-controls="panel-<?= $key ?>" data-country="<?= $key ?>"<?= $on ? '' : ' tabindex="-1"' ?>>
        <?= htmlspecialchars($isTH ? $c['label_th'] : $c['label_en']) ?>
      </button>
    <?php endforeach; ?>
  </div>

  <div class="travel-panels">
    <?php foreach ($countries as $key => $c): $on = $key === $firstKey; ?>
      <?php $placePages = array_chunk($c['places'], 9); ?>
      <article class="travel-panel<?= $on ? ' is-active' : '' ?>" id="panel-<?= $key ?>"
               role="tabpanel" aria-labelledby="tab-<?= $key ?>" data-country="<?= $key ?>"<?= $on ? '' : ' hidden' ?>>
        <div class="travel-grid-pages">
          <div class="travel-grid-track">
            <?php foreach ($placePages as $pageIndex => $pagePlaces): $onPage = $pageIndex === 0; ?>
              <div class="travel-grid-page<?= $onPage ? ' is-active' : '' ?>" data-page="<?= $pageIndex ?>"<?= $onPage ? '' : ' inert aria-hidden="true"' ?>>
                <div class="travel-grid">
                  <?php foreach ($pagePlaces as $p): ?>
                    <a class="travel-card" href="#moments" data-country="<?= $key ?>" data-place="<?= htmlspecialchars($p['id']) ?>"
                       aria-label="<?= htmlspecialchars($isTH ? $p['title_th'] : $p['title_en']) ?>">
                      <figure class="travel-card-media">
                        <img src="<?= htmlspecialchars($p['images'][0]) ?>"
                             alt="<?= htmlspecialchars($isTH ? $p['alt_th'] : $p['alt_en']) ?>"
                             width="800" height="600" loading="lazy">
                        <span class="travel-card-date"><span class="travel-card-month"><?= htmlspecialchars($p['date'][0]) ?></span><span class="travel-card-day"><?= htmlspecialchars($p['date'][1]) ?></span></span>
                      </figure>
                      <h3 class="travel-card-title"><?= htmlspecialchars($isTH ? $p['title_th'] : $p['title_en']) ?></h3>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <?php if (count($placePages) > 1): ?>
          <div class="travel-pager" data-country="<?= $key ?>">
            <button class="travel-pager-btn travel-pager-prev" type="button" disabled aria-label="<?= $isTH ? 'หน้าก่อนหน้า' : 'Previous page' ?>">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 6-6 6 6 6"/></svg>
            </button>
            <div class="travel-pager-dots">
              <?php foreach ($placePages as $pageIndex => $pagePlaces): ?>
                <button class="travel-pager-dot<?= $pageIndex === 0 ? ' is-active' : '' ?>" type="button" data-page="<?= $pageIndex ?>"
                        aria-label="<?= htmlspecialchars(($isTH ? 'หน้า ' : 'Page ') . ($pageIndex + 1)) ?>"></button>
              <?php endforeach; ?>
            </div>
            <button class="travel-pager-btn travel-pager-next" type="button" aria-label="<?= $isTH ? 'หน้าถัดไป' : 'Next page' ?>">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
            </button>
          </div>
        <?php endif; ?>
      </article>
    <?php endforeach; ?>
  </div>

  </div>

  <script type="application/json" id="travelStageData"><?= json_encode($stageData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
