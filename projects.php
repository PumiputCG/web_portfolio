<?php
require_once __DIR__ . '/includes/lang.php';
require_once __DIR__ . '/includes/portfolio-data.php';
require_once __DIR__ . '/includes/photo-slider.php';

$isTH = getCurrentLang() === 'th';
$active = 'portfolio';
$pageTitle = $isTH ? 'แฟ้มผลงาน' : 'Portfolio';
$hideFooter = true;
$showFooterBar = true;

$pdfMark = '<img src="assets/images/icons/pdf.webp" alt="" width="16" height="20">';
$githubMark = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>';
$projectMark = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>';

$slot = static function (string $th, string $en) use ($isTH): string {
  return '<p class="pf-slot">' . htmlspecialchars($isTH ? $th : $en) . '</p>';
};

require_once __DIR__ . '/includes/header.php';
?>
<?php
  $workTopics = $isTH ? [
    ['title' => 'เข้าใจงานก่อนเริ่มพัฒนา', 'text' => 'การทำงานในฐานะ Software Engineer (Full-Stack Developer) ผมเริ่มต้นจากการพูดคุยกับผู้ใช้งานและผู้ที่เกี่ยวข้อง เพื่อรับทราบปัญหา ศึกษากระบวนการทำงานเดิม และรวบรวมความต้องการ (Requirement Gathering) ก่อนนำข้อมูลมาวิเคราะห์ ออกแบบ Workflow และวางแผนการพัฒนาระบบให้สอดคล้องกับการดำเนินงานขององค์กร'],
    ['title' => 'มาตรฐานอุตสาหกรรม', 'text' => 'เนื่องจากผมทำงานในอุตสาหกรรมผลิตชิ้นส่วนยานยนต์ การพัฒนาระบบจึงต้องคำนึงถึงข้อกำหนดและมาตรฐานที่เกี่ยวข้อง เช่น ISO 9001, IATF 16949, ISO/IEC 27001 และ TISAX โดยให้ความสำคัญกับการควบคุมเอกสาร ความถูกต้องของข้อมูล การรักษาความปลอดภัยสารสนเทศ การกำหนดสิทธิ์การเข้าถึง และความสามารถในการตรวจสอบย้อนหลัง (Traceability) เพื่อให้ระบบสนับสนุนกระบวนการทำงานและแนวทางการบริหารจัดการขององค์กร', 'tags' => ['ISO 9001', 'IATF 16949', 'ISO/IEC 27001', 'TISAX']],
    ['title' => 'ขอบเขตการพัฒนา', 'text' => 'ในด้านการพัฒนา ผมรับผิดชอบตั้งแต่การออกแบบฐานข้อมูล (Database Design) การพัฒนา Frontend และ Backend ด้วย PHP, Laravel, JavaScript และ MySQL ไปจนถึงการออกแบบ Business Logic การกำหนดสิทธิ์ผู้ใช้งาน (Role-Based Access Control) การจัดการกระบวนการอนุมัติ และการเชื่อมต่อข้อมูลระหว่างระบบ รวมถึงการทดสอบร่วมกับผู้ใช้งาน (User Acceptance Testing) การ Deploy และการบำรุงรักษาระบบหลังนำไปใช้งานจริง'],
    ['title' => 'ความปลอดภัยทางไซเบอร์', 'text' => 'ผมให้ความสำคัญกับความปลอดภัยตั้งแต่ขั้นตอนการออกแบบ ไม่ใช่เพิ่มเข้ามาภายหลัง ทั้งการกำหนดสิทธิ์ตามบทบาทและหลักการให้สิทธิ์เท่าที่จำเป็น (Least Privilege) การตรวจสอบข้อมูลที่รับเข้าระบบ การใช้ Prepared Statements ป้องกัน SQL Injection การป้องกัน XSS และ CSRF การเข้ารหัสรหัสผ่าน รวมถึงการบันทึก Audit Log เพื่อให้ตรวจสอบย้อนหลังได้ โดยอ้างอิงแนวทางอย่าง OWASP Top 10 เพื่อให้ระบบภายในองค์กรปลอดภัยและพร้อมรองรับข้อกำหนดด้านความปลอดภัยสารสนเทศ', 'tags' => ['OWASP Top 10', 'Secure Coding', 'Least Privilege', 'Audit Log']],
    ['title' => 'ผลงานที่ผ่านมา', 'text' => 'ตลอดหนึ่งปีที่ผ่านมา ผมได้พัฒนาระบบภายในองค์กรกว่า 10 ระบบ ซึ่งแต่ละโปรเจกต์มีความท้าทายแตกต่างกัน ทั้งการจัดการข้อมูลจำนวนมาก กระบวนการอนุมัติหลายระดับ และการเชื่อมต่อกับระบบเดิมขององค์กร ประสบการณ์เหล่านี้ช่วยพัฒนาทักษะด้าน Software Engineering และทำให้ผมเข้าใจการออกแบบซอฟต์แวร์ที่สามารถตอบโจทย์การทำงานจริงได้ดียิ่งขึ้น'],
    ['title' => 'ปรับตัวในยุค AI', 'text' => 'การมาของ AI ทำให้วิธีทำงานของนักพัฒนาเปลี่ยนไปอย่างรวดเร็ว ผมจึงนำเครื่องมืออย่าง Claude, ChatGPT, Codex, Gemini และ Copilot มาใช้ในงานประจำวัน ทั้งช่วยเขียนและตรวจสอบโค้ด ค้นหาสาเหตุของปัญหา และร่างเอกสาร เพื่อให้ส่งมอบงานได้เร็วขึ้น แต่ผมยังคงตรวจสอบผลลัพธ์ทุกครั้ง และยึดความเข้าใจในงานและความต้องการของผู้ใช้งานเป็นหลัก เพราะ AI เป็นเครื่องมือที่ช่วยให้ทำงานได้ดีขึ้น ไม่ใช่สิ่งที่มาแทนการคิดและการตัดสินใจ การเปลี่ยนแปลงนี้ทำให้ผมต้องเรียนรู้อยู่ตลอด และมองหาวิธีใหม่ ๆ ที่จะนำเทคโนโลยีมาสร้างประโยชน์ให้กับองค์กร'],
  ] : [
    ['title' => 'Understanding the Work', 'text' => "As a Software Engineer (Full-Stack Developer), my work begins with understanding the challenges faced by users and stakeholders. I study existing business processes, gather requirements, and analyze operational needs before designing workflows and planning software solutions that align with the organization's objectives."],
    ['title' => 'Industry Standards', 'text' => "Working in the automotive manufacturing industry requires an understanding of relevant quality management and information security frameworks, including ISO 9001, IATF 16949, ISO/IEC 27001, and TISAX. I consider their relevant principles when designing internal systems, particularly in document control, data integrity, information security, access management, and traceability. These considerations help ensure that the software supports the organization's operational and compliance requirements.", 'tags' => ['ISO 9001', 'IATF 16949', 'ISO/IEC 27001', 'TISAX']],
    ['title' => 'Development Scope', 'text' => 'As a Full-Stack Developer, I manage the development lifecycle, from database design and frontend and backend development using PHP, Laravel, JavaScript, and MySQL to implementing business logic, Role-Based Access Control (RBAC), multi-level approval workflows, and system integration. My responsibilities also include User Acceptance Testing (UAT), deployment, troubleshooting, and ongoing system maintenance to support reliable daily operations.'],
    ['title' => 'Cybersecurity', 'text' => 'I treat security as part of the design, not something added later. That means role-based permissions built on least privilege, validating every input, using prepared statements against SQL injection, protecting against XSS and CSRF, hashing passwords, and keeping audit logs so every action can be traced. I follow guidance such as the OWASP Top 10 so that internal systems stay secure and ready for information security requirements.', 'tags' => ['OWASP Top 10', 'Secure Coding', 'Least Privilege', 'Audit Log']],
    ['title' => 'Track Record', 'text' => 'Over the past year, I have developed more than 10 internal enterprise systems, each presenting different challenges, from managing large datasets and complex approval workflows to integrating with existing enterprise software. These experiences have strengthened my software engineering skills and deepened my understanding of how to design practical, scalable solutions that address real business needs.'],
    ['title' => 'Adapting to AI', 'text' => "The arrival of AI has changed how developers work, and quickly. I use tools like Claude, ChatGPT, Codex, Gemini, and Copilot in my daily work to help write and review code, track down the causes of issues, and draft documentation, so I can deliver faster. I still review every result and keep my understanding of the work and the users' needs at the center, because AI is a tool that helps me work better, not a replacement for thinking and judgment. This shift keeps me learning all the time and looking for new ways to turn technology into real value for the organization."],
  ];
  $workBelief = $isTH
    ? 'สำหรับผม การเขียนโค้ดเป็นเพียงส่วนหนึ่งของงาน สิ่งสำคัญคือการเข้าใจปัญหาของผู้ใช้งาน และเปลี่ยนปัญหาเหล่านั้นให้กลายเป็นซอฟต์แวร์ที่ช่วยให้การทำงานง่ายขึ้น ปลอดภัยขึ้น และมีประสิทธิภาพมากขึ้น'
    : "For me, writing code is only one part of the job. What matters most is understanding users' problems and turning them into software solutions that make their work easier, more secure, and more efficient.";
  $education = [
    ["Bachelor's Degree", 'Thammasat University', 'Bangkok, Thailand', 'assets/images/education/thammasat.svg', 'TU'],
    ['High School', 'Udonpittayanukoon School', 'Udon Thani, Thailand', 'assets/images/education/udonpittayanukoon.png', 'UP'],
    ['Primary School', 'Don Bosco Wittaya School', 'Udon Thani, Thailand', 'assets/images/education/don-bosco-wittaya.png', 'DB'],
  ];
?>
<section class="page-band page-band-dark page-band-opening" id="intro" aria-labelledby="portfolio-page-title">
  <div class="page-band-inner page-band-inner-wide pf-intro">
    <h1 class="sr-only" id="portfolio-page-title">
      <?= $isTH ? 'แฟ้มผลงาน · ภูมิพัฒน์ ไชยชาติ, Software Engineer' : 'Portfolio · Pumiput Chaichat, Software Engineer' ?>
    </h1>
    <div class="pf-row pf-intro-head" id="introHead">
      <div class="pf-row-head">
        <p class="about-role">Software Engineer</p>
      </div>
      <blockquote class="pf-lead"><p><?= htmlspecialchars($workBelief) ?></p></blockquote>
    </div>

    <ol class="pf-rows">
      <?php foreach ($workTopics as $i => $topic): ?>
        <li class="pf-row reveal">
          <div class="pf-row-head">
            <span class="pf-row-no"><?= sprintf('%02d', $i + 1) ?></span>
            <h2 class="pf-row-title"><?= htmlspecialchars($topic['title']) ?></h2>
          </div>
          <div class="pf-row-body">
            <p><?= htmlspecialchars($topic['text']) ?></p>
            <?php if (!empty($topic['tags'])): ?>
              <ul class="pf-tags" aria-label="<?= htmlspecialchars($topic['title']) ?>">
                <?php foreach ($topic['tags'] as $tag): ?><li><?= htmlspecialchars($tag) ?></li><?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="page-band page-band-light" id="skills" aria-label="<?= $isTH ? 'การศึกษาและทักษะ' : 'Education &amp; Skills' ?>">
  <div class="page-band-inner page-band-inner-wide">
    <div class="pf-block pf-block-first" id="education">
      <h3 class="pf-block-title reveal"><?= $isTH ? 'การศึกษา' : 'Education' ?></h3>
      <div class="skill-panels skill-panels-3 edu-panels">
        <?php foreach ($education as $e => [$level, $school, $place, $logo, $mono]): ?>
          <section class="skill-panel edu-panel reveal" style="--panel-order: <?= $e ?>" lang="en">
            <div class="edu-logo<?= $logo ? ' edu-logo-' . pathinfo($logo, PATHINFO_FILENAME) : ' is-mono' ?>" aria-hidden="true">
              <?php if ($logo): ?>
                <img src="<?= htmlspecialchars($logo . '?v=' . @filemtime(__DIR__ . '/' . $logo)) ?>" alt="" width="64" height="64">
              <?php else: ?>
                <span><?= htmlspecialchars($mono) ?></span>
              <?php endif; ?>
            </div>
            <p class="edu-level"><?= htmlspecialchars($level) ?></p>
            <h4 class="edu-school"><?= htmlspecialchars($school) ?></h4>
            <p class="edu-place"><?= htmlspecialchars($place) ?></p>
          </section>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="pf-block">
      <h3 class="pf-block-title reveal"><?= $isTH ? 'ทักษะด้านเทคนิค' : 'Technical Skills' ?></h3>

      <div class="skill-panels">
        <?php foreach (getSkillGroups() as $g => $group):
          $n = count($group['items']);
          $cols = (4 - $n % 4) % 4 < (3 - $n % 3) % 3 ? 4 : 3;
        ?>
          <section class="skill-panel<?= empty($group['wide']) ? '' : ' skill-panel-wide' ?> reveal" style="--panel-order: <?= $g ?>; --cols: <?= $cols ?>">
            <div class="item-head">
              <span class="skill-panel-index"><?= sprintf('%02d', $g + 1) ?></span>
              <h4 class="skill-panel-title"><?= htmlspecialchars($isTH ? $group['title_th'] : $group['title_en']) ?></h4>
            </div>
            <p class="skill-panel-desc"><?= htmlspecialchars($isTH ? $group['desc_th'] : $group['desc_en']) ?></p>

            <ul class="skill-list">
              <?php foreach ($group['items'] as $i => $skill): ?>
                <li class="skill-item" style="--i: <?= $i ?>">
                  <span class="skill-icon<?= isset($skill['img']) ? ' has-logo' : '' ?>"<?= isset($skill['img']) ? '' : ' style="--app-bg: ' . $skill['bg'] . '; --app-fg: ' . $skill['fg'] . '; --len: ' . strlen($skill['mono']) . '"' ?> aria-hidden="true">
                    <?php if (isset($skill['img'])): ?>
                      <img src="<?= htmlspecialchars($skill['img']) ?>" alt="" width="24" height="24">
                    <?php else: ?>
                      <span class="skill-mono"><?= htmlspecialchars($skill['mono']) ?></span>
                    <?php endif; ?>
                  </span>
                  <span class="skill-text">
                    <span class="skill-name"><?= htmlspecialchars($skill['name']) ?></span>
                    <span class="skill-note"><?= htmlspecialchars($isTH ? $skill['note_th'] : $skill['note_en']) ?></span>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </section>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="pf-block">
      <h3 class="pf-block-title reveal"><?= $isTH ? 'ทักษะทั่วไป' : 'General Skills' ?></h3>

      <div class="skill-panels skill-panels-3">
        <?php foreach (getGeneralSkillGroups() as $g => $group): ?>
          <section class="skill-panel reveal" style="--panel-order: <?= $g ?>">
            <div class="item-head">
              <span class="skill-panel-index"><?= sprintf('%02d', $g + 1) ?></span>
              <h4 class="skill-panel-title"><?= htmlspecialchars($isTH ? $group['title_th'] : $group['title_en']) ?></h4>
            </div>
            <p class="skill-panel-desc"><?= htmlspecialchars($isTH ? $group['desc_th'] : $group['desc_en']) ?></p>

            <ul class="skill-list">
              <?php foreach ($group['items'] as $i => $skill): ?>
                <li class="skill-item" style="--i: <?= $i ?>">
                  <span class="skill-icon skill-icon-line" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="<?= $skill['glyph'] ?>"/></svg>
                  </span>
                  <span class="skill-text">
                    <span class="skill-name"><?= htmlspecialchars($isTH ? $skill['name_th'] : $skill['name_en']) ?></span>
                    <span class="skill-note"><?= htmlspecialchars($isTH ? $skill['note_th'] : $skill['note_en']) ?></span>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </section>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="page-band page-band-dark" id="experience" aria-label="<?= $isTH ? 'ประสบการณ์' : 'Experience' ?>">
  <div class="page-band-inner">
    <ol class="xp-list">
      <?php foreach (getWorkExperience() as $role):
        $period = $isTH ? $role['period_th'] : $role['period_en'];
        $desc = $isTH ? $role['desc_th'] : $role['desc_en'];
      ?>
        <li class="xp-role reveal" id="xp-<?= $role['id'] ?>">
          <p class="xp-period"><?= htmlspecialchars($period) ?></p>

          <div class="xp-body">
            <h3 class="xp-title"><?= htmlspecialchars($isTH ? $role['title_th'] : $role['title_en']) ?></h3>
            <p class="xp-org"><?= htmlspecialchars($isTH ? $role['org_th'] : $role['org_en']) ?></p>

            <?php if ($desc !== null): ?>
              <?php ?>
              <?php foreach (explode("\n", $desc) as $para): ?>
                <p class="xp-desc"><?= htmlspecialchars($para) ?></p>
              <?php endforeach; ?>
            <?php else: ?>
              <?= $slot('รายละเอียดงาน — รอเนื้อหา', 'Role description — content to come') ?>
            <?php endif; ?>

            <?php if ($role['projects']): ?>
              <ul class="xp-repos" aria-label="<?= $isTH ? 'โปรเจค' : 'Projects' ?>">
                <?php foreach ($role['projects'] as $p):
                  $hasRepo = isset($p['repo']);
                  $isGitHub = $hasRepo && str_contains($p['repo'], 'github.com');
                  $isPdf = $hasRepo && str_ends_with(strtolower($p['repo']), '.pdf');
                ?>
                  <li>
                    <?php if ($hasRepo): ?>
                    <a class="xp-repo" href="<?= htmlspecialchars($p['repo']) ?>" target="_blank" rel="noopener">
                    <?php else: ?>
                    <span class="xp-repo is-unlinked">
                    <?php endif; ?>
                      <?= $isGitHub ? $githubMark : ($isPdf ? $pdfMark : $projectMark) ?>
                      <span class="xp-repo-name"><?= htmlspecialchars($p['name']) ?></span>
                    <?= $hasRepo ? '</a>' : '</span>' ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($role['highlights'])): ?>
              <ul class="xp-repos xp-highlights" aria-label="<?= $isTH ? 'รางวัลและการอบรม' : 'Award and training' ?>">
                <?php foreach ($role['highlights'] as $h): ?>
                  <li>
                    <a class="xp-repo" href="<?= htmlspecialchars($h['pdf']) ?>" target="_blank" rel="noopener">
                      <img src="assets/images/icons/pdf.webp" alt="" width="16" height="20">
                      <span class="xp-repo-name"><?= htmlspecialchars($isTH ? $h['title_th'] : $h['title_en']) ?></span>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>

    <div class="pf-block">
      <h3 class="pf-block-title reveal"><?= $isTH ? 'กิจกรรม' : 'Activities' ?></h3>
      <ul class="pf-items">
        <?php foreach (getActivities() as $n => $a):
          $title = $isTH ? $a['title_th'] : $a['title_en'];
          $count = count($a['images']);
        ?>
          <li class="pf-activity reveal" data-slider-card style="--slide-interval: <?= 3.8 + ($n % 3) * 0.4 ?>s">
            <div class="photo-frame photo-frame-wide<?= $count === 0 ? ' is-empty' : '' ?>"<?= $count > 1 ? ' data-photo-slider' : '' ?>>
              <?php if ($count === 0): ?>
                <span><?= $isTH ? 'รูปภาพเร็ว ๆ นี้' : 'Photo coming soon' ?></span>
              <?php else: ?>
                <div class="photo-track">
                  <?php foreach ($a['images'] as $i => $img): ?>
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

            <h4 class="pf-item-title"><?= htmlspecialchars($title) ?></h4>
            <p class="pf-item-desc"><?= htmlspecialchars($isTH ? $a['desc_th'] : $a['desc_en']) ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
