<?php
require_once __DIR__ . '/includes/lang.php';

$isTH = getCurrentLang() === 'th';
$active = 'about';
$pageTitle = $isTH ? 'เกี่ยวกับฉัน' : 'About';
$hideFooter = true;
$showFooterBar = true;

require_once __DIR__ . '/includes/header.php';
?>

<section class="page-band page-band-dark page-band-opening" id="about" aria-labelledby="about-page-title">
  <div class="page-band-inner about-intro">
    <figure class="about-intro-media reveal">
      <img
        src="assets/images/pumiput-about-sakura.jpg"
        alt="<?= $isTH
          ? 'ภูมิพัฒน์ยืนใต้ต้นซากุระที่กำลังบานในวันฟ้าใส'
          : 'Pumiput standing beneath cherry blossoms on a clear day' ?>"
        width="1108"
        height="1477"
      >
    </figure>

    <div class="about-intro-content">
      <p class="page-band-label reveal"><?= $isTH ? 'เกี่ยวกับฉัน' : 'About Me' ?></p>
      <h1 class="sr-only" id="about-page-title">
        <?= $isTH ? 'ภูมิพัฒน์ ไชยชาติ, Software Engineer' : 'Pumiput Chaichat, Software Engineer' ?>
      </h1>

      <div class="about-prose">
        <?php if ($isTH): ?>
          <p class="reveal">สวัสดีครับ ผมชื่อ ภูมิพัฒน์ หรือเรียกว่า เกม ก็ได้ครับ ผมจบการศึกษาจากมหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต ปัจจุบันทำงานในตำแหน่ง Software Engineer ให้กับบริษัทผลิตชิ้นส่วนรถยนต์แห่งหนึ่งในภาคตะวันออก</p>
          <p class="reveal">งานที่ผมรับผิดชอบค่อนข้างครอบคลุมตั้งแต่ต้นจนจบ ตั้งแต่การพูดคุยกับผู้ใช้งานและหัวหน้าแต่ละแผนกเพื่อเก็บ Requirement วิเคราะห์ปัญหา ออกแบบฐานข้อมูล วางโครงสร้างระบบ พัฒนา Frontend และ Backend ไปจนถึงการ Deploy ระบบขึ้น Server ของบริษัท รวมถึงดูแลและปรับปรุงระบบหลังจากนำไปใช้งานจริง</p>
          <p class="reveal">เวลาพัฒนาระบบ ผมจะคิดอยู่เสมอว่า ระบบที่สร้างขึ้นจะช่วยลดงาน ลดเวลา หรือลดการใช้ทรัพยากรขององค์กรได้อย่างไร และที่สำคัญคือผู้ใช้งานต้องสามารถใช้งานได้ง่าย เพราะหลายระบบเป็นการเปลี่ยนจากกระบวนการทำงานแบบเดิมที่พนักงานคุ้นเคย เช่น การเปลี่ยนจากการเดินเอกสารเพื่อขอลายเซ็นอนุมัติ มาเป็น Electronic Approval หรือการเปลี่ยนจากการประเมินผลงานประจำปีด้วยเอกสารและการคำนวณแบบเดิม มาเป็นระบบออนไลน์ที่สามารถคำนวณและติดตามผลได้จากระบบเดียว</p>
          <p class="reveal">สิ่งที่ผมได้เรียนรู้จากการทำงานจริงจึงไม่ได้มีเพียงเรื่องการเขียนโปรแกรม แต่ยังรวมถึง การสื่อสารกับผู้ใช้งาน การเข้าใจกระบวนการทำงานของแต่ละแผนก การเข้าใจสภาพแวดล้อมขององค์กร และการออกแบบ Software ให้เหมาะกับคนที่ต้องใช้งานจริง ซึ่งผมมองว่าสิ่งเหล่านี้เป็นส่วนสำคัญของการเป็น Software Engineer</p>
        <?php else: ?>
          <p class="reveal">Hello, my name is Phumiphat, but you can call me Game. I graduated from Thammasat University, Rangsit Campus. I am currently working as a Software Engineer at an automotive parts manufacturing company in Eastern Thailand.</p>
          <p class="reveal">My responsibilities cover almost the entire software development process. I work directly with users and department managers to gather requirements, analyze problems, design databases and system architecture, develop both Frontend and Backend, deploy applications to the company server, and continue maintaining and improving them after they go live.</p>
          <p class="reveal">Whenever I develop a system, I always ask myself how it can reduce workload, save time, or reduce the company’s use of resources. At the same time, the system has to be easy for employees to use. Many of the projects I work on involve transforming processes that people have been familiar with for years. For example, replacing physical document approval with Electronic Approval, or transforming an annual employee evaluation process from paper-based forms and manual calculations into an online system where scores can be calculated and tracked in one place.</p>
          <p class="reveal">Working as a Software Engineer has taught me much more than just programming. I have learned how to communicate with users, understand the workflows of different departments, understand the company environment, and design software around the people who actually use it. I believe these skills are an important part of being a Software Engineer.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
  require_once __DIR__ . '/includes/about-data.php';
  require_once __DIR__ . '/includes/photo-slider.php';
  $hobbies = getHobbies();
?>
<section class="page-band page-band-light" id="hobbies" aria-labelledby="about-hobbies-title">
  <div class="page-band-inner page-band-inner-wide">
    <p class="page-band-label reveal"><?= $isTH ? 'งานอดิเรก' : 'Free Time' ?></p>
    <h2 class="sr-only" id="about-hobbies-title"><?= $isTH ? 'งานอดิเรก' : 'Free Time' ?></h2>

    <div class="hobby-grid">
      <?php foreach ($hobbies as $n => $h):
        $title  = $isTH ? $h['title_th'] : $h['title_en'];
        $count  = count($h['images']);
      ?>
        <article class="hobby-card reveal" data-slider-card style="--hobby-order: <?= $n % 4 ?>; --slide-interval: <?= 3.8 + ($n % 4) * 0.4 ?>s">
          <div class="photo-frame<?= $count === 0 ? ' is-empty' : '' ?>"<?= $count > 1 ? ' data-photo-slider' : '' ?>>
            <?php if ($count === 0): ?>
              <span><?= $isTH ? 'รูปภาพเร็ว ๆ นี้' : 'Photo coming soon' ?></span>
            <?php else: ?>
              <div class="photo-track">
                <?php foreach ($h['images'] as $i => $img): ?>
                  <figure class="photo-slide<?= $i === 0 ? ' is-active' : '' ?>"<?= $i === 0 ? '' : ' aria-hidden="true"' ?>>
                    <img
                      src="<?= htmlspecialchars($img['src']) ?>"
                      alt="<?= htmlspecialchars($isTH ? $img['alt_th'] : $img['alt_en']) ?>"
                      width="<?= $img['w'] ?>"
                      height="<?= $img['h'] ?>"
                      loading="lazy"
                      <?= isset($img['pos']) ? 'style="object-position: ' . htmlspecialchars($img['pos']) . '"' : '' ?>
                    >
                  </figure>
                <?php endforeach; ?>
              </div>
              <?= $count > 1 ? photoNavButtons($isTH) : '' ?>
            <?php endif; ?>
          </div>

          <?php if ($count > 1): ?>
            <div class="photo-bars" role="group" aria-label="<?= htmlspecialchars(($isTH ? 'ภาพ ' : 'Photos: ') . $title) ?>">
              <?php for ($i = 0; $i < $count; $i++): ?>
                <button type="button" class="<?= $i === 0 ? 'is-active' : '' ?>"
                        aria-label="<?= htmlspecialchars($isTH ? 'ภาพที่ ' . ($i + 1) . ' จาก ' . $count : 'Photo ' . ($i + 1) . ' of ' . $count) ?>"
                        <?= $i === 0 ? 'aria-current="true"' : '' ?>>
                  <span class="photo-bar-fill"></span>
                </button>
              <?php endfor; ?>
            </div>
          <?php endif; ?>

          <div class="item-head">
            <span class="hobby-index"><?= sprintf('%02d', $n + 1) ?></span>
            <h3 class="hobby-title"><?= htmlspecialchars($title) ?></h3>
          </div>
          <p class="hobby-desc"><?= htmlspecialchars($isTH ? $h['desc_th'] : $h['desc_en']) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
  require_once __DIR__ . '/includes/path-data.php';
  $lifePath = getLifePath();
?>
<section class="page-band page-band-dark" id="path" aria-labelledby="about-path-title">
  <div class="page-band-inner">
    <p class="page-band-label reveal"><?= $isTH ? 'เส้นทางการเติบโต' : 'The Path' ?></p>
    <h2 class="sr-only" id="about-path-title"><?= $isTH ? 'เส้นทางการเติบโต' : 'The Path' ?></h2>

    <ol class="path-list" id="lifePath">
      <div class="path-line" aria-hidden="true"><span class="path-line-fill"></span></div>

      <?php foreach ($lifePath as $n => $stage):
        $title = $isTH ? $stage['title_th'] : $stage['title_en'];
        $count = count($stage['images']);
      ?>
        <li class="path-item" data-slider-card style="--slide-interval: <?= 3.8 + ($n % 3) * 0.4 ?>s">
          <span class="path-dot" aria-hidden="true"></span>

          <div class="path-copy">
            <div class="item-head">
              <span class="path-step"><?= sprintf('%02d', $n + 1) ?></span>
              <h3 class="path-title"><?= htmlspecialchars($title) ?></h3>
            </div>
            <p class="path-desc"><?= htmlspecialchars($isTH ? $stage['desc_th'] : $stage['desc_en']) ?></p>
          </div>

          <div class="path-media">
            <div class="photo-frame photo-frame-wide"<?= $count > 1 ? ' data-photo-slider' : '' ?>>
              <div class="photo-track">
                <?php foreach ($stage['images'] as $i => $img): ?>
                  <figure class="photo-slide<?= $i === 0 ? ' is-active' : '' ?>"<?= $i === 0 ? '' : ' aria-hidden="true"' ?>>
                    <img
                      src="<?= htmlspecialchars($img['src']) ?>"
                      alt="<?= htmlspecialchars($isTH ? $img['alt_th'] : $img['alt_en']) ?>"
                      width="<?= $img['w'] ?>"
                      height="<?= $img['h'] ?>"
                      loading="lazy"
                      <?= isset($img['pos']) ? 'style="object-position: ' . htmlspecialchars($img['pos']) . '"' : '' ?>
                    >
                  </figure>
                <?php endforeach; ?>
              </div>
              <?= $count > 1 ? photoNavButtons($isTH) : '' ?>
            </div>

            <?php if ($count > 1): ?>
              <div class="photo-bars" role="group" aria-label="<?= htmlspecialchars(($isTH ? 'ภาพ ' : 'Photos: ') . $title) ?>">
                <?php for ($i = 0; $i < $count; $i++): ?>
                  <button type="button" class="<?= $i === 0 ? 'is-active' : '' ?>"
                          aria-label="<?= htmlspecialchars($isTH ? 'ภาพที่ ' . ($i + 1) . ' จาก ' . $count : 'Photo ' . ($i + 1) . ' of ' . $count) ?>"
                          <?= $i === 0 ? 'aria-current="true"' : '' ?>>
                    <span class="photo-bar-fill"></span>
                  </button>
                <?php endfor; ?>
              </div>
            <?php endif; ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
