<?php

function getSkillGroups(): array {
  return [
    [
      'title_th' => 'Frontend Development',
      'title_en' => 'Frontend Development',
      'desc_th'  => 'พัฒนาส่วนติดต่อผู้ใช้งาน โดยเน้นความสะดวกในการใช้งานและรองรับอุปกรณ์หลายขนาด',
      'desc_en'  => 'Developing responsive, accessible, and user-friendly web interfaces.',
      'wide'     => true,
      'items'    => [
        ['name' => 'HTML', 'img' => 'assets/images/skills/html.svg', 'note_th' => 'โครงสร้างเว็บไซต์', 'note_en' => 'Semantic HTML'],
        ['name' => 'CSS', 'img' => 'assets/images/skills/css.svg', 'note_th' => 'ออกแบบเว็บไซต์ให้รองรับทุกหน้าจอ',                'note_en' => 'Responsive Web Design'],
        ['name' => 'JavaScript', 'img' => 'assets/images/skills/javascript.svg', 'note_th' => 'พัฒนาการโต้ตอบของเว็บไซต์',                 'note_en' => 'Interactive Web Development & ES6+'],
        ['name' => 'TypeScript', 'img' => 'assets/images/skills/typescript.svg', 'note_th' => 'เขียน JavaScript แบบกำหนดชนิดข้อมูล', 'note_en' => 'Type-Safe JavaScript Development'],
        ['name' => 'React', 'img' => 'assets/images/skills/react.svg', 'note_th' => 'สร้าง UI แบบ Component', 'note_en' => 'Component-Based UI Development'],
        ['name' => 'Next.js', 'img' => 'assets/images/skills/nextjs.svg', 'note_th' => 'พัฒนาเว็บแอปพลิเคชันด้วย React', 'note_en' => 'React Framework & Server-Side Rendering'],
      ],
    ],
    [
      'title_th' => 'Backend Development',
      'title_en' => 'Backend Development',
      'desc_th'  => 'พัฒนาระบบฝั่ง Server ออกแบบ Business Logic และเชื่อมต่อข้อมูลผ่าน API เพื่อรองรับการทำงานขององค์กร',
      'desc_en'  => 'Developing server-side applications, business logic, and APIs for enterprise systems.',
      'wide'     => true,
      'items'    => [
        ['name' => 'PHP', 'img' => 'assets/images/skills/php.svg', 'note_th' => 'พัฒนาระบบ Backend', 'note_en' => 'Backend Development'],
        ['name' => 'Laravel', 'img' => 'assets/images/skills/laravel.svg', 'note_th' => 'พัฒนาเว็บแอปพลิเคชัน',   'note_en' => 'Web Application Development'],
        ['name' => 'REST API', 'mono' => 'API', 'bg' => '#2f3a34', 'fg' => '#fff',    'note_th' => 'ออกแบบและเชื่อมต่อ API',       'note_en' => 'API Design & Integration'],
        ['name' => 'Node.js', 'img' => 'assets/images/skills/nodejs.svg', 'note_th' => 'พัฒนาระบบ Backend ด้วย JavaScript', 'note_en' => 'Server-Side JavaScript Runtime'],
        ['name' => 'Python', 'img' => 'assets/images/skills/python.svg', 'note_th' => 'เขียนสคริปต์และประมวลผลข้อมูล',          'note_en' => 'Scripting & Data Processing'],
        ['name' => 'Java', 'img' => 'assets/images/skills/java.svg', 'note_th' => 'การเขียนโปรแกรมเชิงวัตถุ',                  'note_en' => 'Object-Oriented Programming'],
        ['name' => 'C', 'img' => 'assets/images/skills/c.svg', 'note_th' => 'พื้นฐานการเขียนโปรแกรม',       'note_en' => 'Programming Fundamentals'],
      ],
    ],
    [
      'title_th' => 'Database',
      'title_en' => 'Database',
      'desc_th'  => 'ออกแบบและจัดการฐานข้อมูล รวมถึงวิเคราะห์และนำเสนอข้อมูลเพื่อสนับสนุนการตัดสินใจ',
      'desc_en'  => 'Designing databases, managing data, and developing reports to support business decisions.',
      'wide'     => true,
      'items'    => [
        ['name' => 'MySQL', 'img' => 'assets/images/skills/mysql.svg', 'note_th' => 'ออกแบบและจัดการฐานข้อมูล',     'note_en' => 'Database Design & SQL Queries'],
        ['name' => 'PostgreSQL', 'img' => 'assets/images/skills/postgresql.svg', 'note_th' => 'ออกแบบฐานข้อมูลเชิงสัมพันธ์', 'note_en' => 'Relational Database Design'],
        ['name' => 'SQL Server', 'img' => 'assets/images/skills/sqlserver.svg', 'note_th' => 'จัดการฐานข้อมูลระดับองค์กร', 'note_en' => 'Enterprise Database Management'],
        ['name' => 'MongoDB', 'img' => 'assets/images/skills/mongodb.svg', 'note_th' => 'จัดการฐานข้อมูลแบบ NoSQL', 'note_en' => 'NoSQL Document Database'],
      ],
    ],
    [
      'title_th' => 'Office & Presentation',
      'title_en' => 'Office & Presentation',
      'desc_th'  => 'จัดการข้อมูล จัดทำเอกสารทางเทคนิค และออกแบบสื่อนำเสนอสำหรับการทำงานภายในองค์กร',
      'desc_en'  => 'Preparing technical documentation, managing business data, and creating professional presentations.',
      'items'    => [
        ['name' => 'Excel', 'img' => 'assets/images/skills/excel.svg', 'note_th' => 'วิเคราะห์ข้อมูลและจัดทำรายงาน',      'note_en' => 'Data Analysis & Reporting'],
        ['name' => 'Word',       'img' => 'assets/images/skills/word.svg',       'note_th' => 'จัดทำเอกสารและคู่มือระบบ',  'note_en' => 'Documentation & User Manuals'],
        ['name' => 'PowerPoint', 'img' => 'assets/images/skills/powerpoint.svg', 'note_th' => 'สร้างงานนำเสนอและสื่ออบรม', 'note_en' => 'Presentations & Training Materials'],
        ['name' => 'Canva',      'img' => 'assets/images/skills/canva.svg',      'note_th' => 'ออกแบบกราฟิกและสื่อนำเสนอ', 'note_en' => 'Graphic & Presentation Design'],
      ],
    ],
    [
      'title_th' => 'AI Tools',
      'title_en' => 'AI Tools',
      'desc_th'  => 'ประยุกต์ใช้ AI เพื่อสนับสนุนการเขียนโปรแกรม วิเคราะห์ปัญหา ออกแบบระบบ และเพิ่มประสิทธิภาพในการทำงาน',
      'desc_en'  => 'Leveraging AI tools for software development, problem-solving, system design, and productivity.',
      'items'    => [
        ['name' => 'Claude',          'img' => 'assets/images/skills/claude.svg',  'note_th' => 'พัฒนาโค้ดและออกแบบระบบ', 'note_en' => 'Coding & System Design'],
        ['name' => 'ChatGPT & Codex', 'img' => 'assets/images/skills/chatgpt.svg', 'note_th' => 'พัฒนาโค้ดและวิเคราะห์ปัญหา', 'note_en' => 'Coding & Problem Solving'],
        ['name' => 'Gemini',          'img' => 'assets/images/skills/gemini.svg',  'note_th' => 'ค้นคว้าและวิเคราะห์ข้อมูล',     'note_en' => 'Research & Data Analysis'],
        ['name' => 'Copilot',         'img' => 'assets/images/skills/copilot.svg', 'note_th' => 'ช่วยเขียนและปรับปรุงโค้ด',         'note_en' => 'Code Completion & Assistance'],
      ],
    ],
    [
      'title_th' => 'Development Tools',
      'title_en' => 'Development Tools',
      'desc_th'  => 'ใช้เครื่องมือสำหรับการพัฒนา ออกแบบ ทดสอบ และจัดการซอฟต์แวร์ตลอดกระบวนการพัฒนา',
      'desc_en'  => 'Utilizing development, design, and collaboration tools throughout the software development lifecycle.',
      'wide'     => true,
      'items'    => [
        ['name' => 'Git', 'img' => 'assets/images/skills/git.svg', 'note_th' => 'จัดการเวอร์ชันของซอร์สโค้ด',   'note_en' => 'Version Control'],
        ['name' => 'GitHub', 'img' => 'assets/images/skills/github.svg', 'note_th' => 'จัดการ Repository และทำงานร่วมกัน', 'note_en' => 'Code Management & Collaboration'],
        ['name' => 'AWS', 'img' => 'assets/images/skills/aws.svg', 'note_th' => 'พื้นฐานบริการ Cloud',            'note_en' => 'Cloud Computing Fundamentals'],
        ['name' => 'XAMPP', 'img' => 'assets/images/skills/xampp.svg', 'note_th' => 'จำลองสภาพแวดล้อมสำหรับพัฒนาระบบ',   'note_en' => 'Local Development Environment'],
        ['name' => 'Figma', 'img' => 'assets/images/skills/figma.svg', 'note_th' => 'ออกแบบ UI และ Prototype',  'note_en' => 'UI Design & Prototyping'],
        ['name' => 'draw.io', 'img' => 'assets/images/skills/drawio.svg', 'note_th' => 'ออกแบบโครงสร้างและกระบวนการทำงาน',     'note_en' => 'System Architecture & Workflow Diagrams'],
        ['name' => 'Power BI', 'img' => 'assets/images/skills/powerbi.svg', 'note_th' => 'วิเคราะห์ข้อมูลและสร้าง Dashboard', 'note_en' => 'Data Visualization & Reporting'],
        ['name' => 'Microsoft Teams', 'img' => 'assets/images/skills/teams.svg', 'note_th' => 'สื่อสารและประสานงานกับทีม', 'note_en' => 'Team Communication & Collaboration'],
      ],
    ],
  ];
}

function getGeneralSkillGroups(): array {
  return [
    [
      'title_th' => 'Analytical Thinking & Learning',
      'title_en' => 'Analytical Thinking & Learning',
      'desc_th'  => 'วิเคราะห์ปัญหาอย่างเป็นระบบ พร้อมเรียนรู้เทคโนโลยีใหม่เพื่อพัฒนาความสามารถอย่างต่อเนื่อง',
      'desc_en'  => 'Applying analytical thinking and continuous learning to solve problems and adapt to emerging technologies.',
      'items'    => [
        [
          'name_th' => 'Problem Solving',
          'name_en' => 'Problem Solving',
          'note_th' => 'วิเคราะห์ปัญหาและพัฒนาแนวทางแก้ไข',
          'note_en' => 'Analytical Problem Solving',
          'glyph'   => 'M9 18h6M10 21h4M12 3a6 6 0 0 0-3.6 10.8c.7.5 1.1 1.3 1.1 2.2h5c0-.9.4-1.7 1.1-2.2A6 6 0 0 0 12 3Z',
        ],
        [
          'name_th' => 'Self-Learning',
          'name_en' => 'Self-Learning',
          'note_th' => 'เรียนรู้และประยุกต์ใช้เทคโนโลยีใหม่',
          'note_en' => 'Continuous Learning & Adaptability',
          'glyph'   => 'M3 6c3-1.3 6-1.3 9 .5 3-1.8 6-1.8 9-.5v13c-3-1.3-6-1.3-9 .5-3-1.8-6-1.8-9-.5zM12 6.5v13',
        ],
      ],
    ],
    [
      'title_th' => 'Software Development',
      'title_en' => 'Software Development',
      'desc_th'  => 'ออกแบบและพัฒนาซอฟต์แวร์ครบวงจร โดยคำนึงถึงประสิทธิภาพ ความปลอดภัย และการขยายระบบในอนาคต',
      'desc_en'  => 'Designing and developing end-to-end software solutions with a focus on performance, security, and scalability.',
      'items'    => [
        [
          'name_th' => 'Full-Stack Development',
          'name_en' => 'Full-Stack Development',
          'note_th' => 'พัฒนาระบบทั้ง Frontend และ Backend',
          'note_en' => 'End-to-End Application Development',
          'glyph'   => 'M8 8l-4 4 4 4M16 8l4 4-4 4M13.5 5l-3 14',
        ],
        [
          'name_th' => 'Database Design',
          'name_en' => 'Database Design',
          'note_th' => 'ออกแบบโครงสร้างและความสัมพันธ์ของข้อมูล',
          'note_en' => 'Database Architecture & Design',
          'glyph'   => 'M4 6c0-1.7 3.6-3 8-3s8 1.3 8 3-3.6 3-8 3-8-1.3-8-3ZM4 6v12c0 1.7 3.6 3 8 3s8-1.3 8-3V6M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3',
        ],
        [
          'name_th' => 'Security-Aware Development',
          'name_en' => 'Security-Aware Development',
          'note_th' => 'ออกแบบระบบโดยคำนึงถึงความปลอดภัย',
          'note_en' => 'Access Control & Data Security',
          'glyph'   => 'M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6zM9 12l2 2 4-4',
        ],
      ],
    ],
    [
      'title_th' => 'User-Centered Development',
      'title_en' => 'User-Centered Development',
      'desc_th'  => 'วิเคราะห์ความต้องการและทำงานร่วมกับผู้ใช้งาน เพื่อพัฒนาซอฟต์แวร์ที่ตอบโจทย์กระบวนการทำงานจริง',
      'desc_en'  => 'Collaborating with users and stakeholders to deliver software solutions aligned with real business requirements.',
      'items'    => [
        [
          'name_th' => 'Requirement Gathering',
          'name_en' => 'Requirement Gathering',
          'note_th' => 'รวบรวมและวิเคราะห์ความต้องการจากผู้ใช้งาน',
          'note_en' => 'Requirements Elicitation & Analysis',
          'glyph'   => 'M4 5h16v10H9l-5 4zM8 9h8M8 12h5',
        ],
        [
          'name_th' => 'UX/UI & User Analysis',
          'name_en' => 'UX/UI & User Analysis',
          'note_th' => 'วิเคราะห์พฤติกรรมและออกแบบประสบการณ์ผู้ใช้งาน',
          'note_en' => 'User Experience & Interface Design',
          'glyph'   => 'M3 5h18v11H3zM8 20h8M12 16v4M7 9h5M7 12h8',
        ],
      ],
    ],
  ];
}

function getWorkExperience(): array {
  return [
    [
      'id'       => 'company',
      'period_th' => 'เรียนจบ – ปัจจุบัน',
      'period_en' => 'After Graduation – Present',
      'title_th' => 'Software Engineer (Full-Stack Developer)',
      'title_en' => 'Software Engineer (Full-Stack Developer)',
      'org_th'   => 'บริษัทผลิตชิ้นส่วนรถยนต์ · ภาคตะวันออก (Supavut Industry, Moldvanto, Sunaru)',
      'org_en'   => 'Automotive Parts Manufacturer · Eastern Thailand (Supavut Industry, Moldvanto, Sunaru)',
      'desc_th'  => 'ผมรับผิดชอบการวิเคราะห์ ออกแบบ และพัฒนาระบบภายในองค์กร ตั้งแต่การพูดคุยกับผู้ใช้งานและหัวหน้าแผนกเพื่อรับทราบปัญหาและรวบรวมความต้องการ (Requirement Gathering) การออกแบบ Workflow และฐานข้อมูล ไปจนถึงการพัฒนา Frontend และ Backend รวมถึงการทดสอบ การ Deploy และการดูแลระบบหลังนำไปใช้งานจริง
งานส่วนใหญ่ของผมมุ่งเน้นการปรับปรุงกระบวนการทำงานภายในองค์กร โดยเปลี่ยนขั้นตอนที่ซับซ้อนและการจัดการเอกสารแบบเดิมให้เป็นระบบดิจิทัล เช่น ระบบประเมินผลพนักงาน ระบบอนุมัติเอกสาร และระบบบริหารจัดการข้อมูล เพื่อช่วยลดระยะเวลาการทำงาน เพิ่มความถูกต้องของข้อมูล และสามารถตรวจสอบสถานะย้อนหลังได้',
      'desc_en'  => 'I am responsible for analyzing, designing, and developing internal enterprise systems throughout the entire software development lifecycle. My work begins with gathering requirements from users and department heads, understanding existing workflows, and designing system architecture and databases. I handle both frontend and backend development, as well as testing, deployment, and ongoing maintenance.
My primary focus is improving internal business processes by transforming complex manual workflows into digital solutions. These include employee performance evaluations, document approval workflows, and data management systems designed to reduce processing time, improve data accuracy, and provide better visibility and traceability.',
      'projects' => [
        ['name' => 'S-Insight',          'repo' => 'https://github.com/PumiputCG/s-insight'],
        ['name' => 'S-Assessment',       'repo' => 'https://github.com/PumiputCG/sassessment'],
        ['name' => 'Penalty-Bonus',      'repo' => 'https://github.com/PumiputCG/penalty-bonus'],
        ['name' => 'OKR-KPI-System',     'repo' => 'https://github.com/PumiputCG/okr-kpi-system'],
        ['name' => 'Quote-Compare',      'repo' => 'https://github.com/PumiputCG/quote-compare'],
        ['name' => 'SI-Menu-Intranet',   'repo' => 'https://github.com/PumiputCG/si-menu-intranet'],
        ['name' => 'S-Portal',           'repo' => 'https://github.com/PumiputCG/s-portal'],
        ['name' => 'S-Insight-Showcase', 'repo' => 'https://github.com/PumiputCG/s-insight-showcase'],
        ['name' => 'SBMS',               'repo' => 'https://github.com/PumiputCG/sbms'],
      ],
      'highlights' => [
        [
          'title_th' => 'รางวัลชนะเลิศ Kaizen ด้านการลดต้นทุน',
          'title_en' => '1st Place Kaizen Award, Cost Reduction',
          'pdf'      => 'https://drive.google.com/file/d/163DtNLmayCmqC5mtN2QFj0xF7UaWtyL_/view?usp=sharing',
        ],
        [
          'title_th' => 'วิทยากรอบรม Power BI',
          'title_en' => 'Power BI Training',
          'pdf'      => 'https://drive.google.com/file/d/15MV_-xfhfcPtoZUVFU1v3uf3psXk3lNE/view?usp=sharing',
        ],
      ],
    ],
    [
      'id'       => 'university',
      'period_th' => 'ระหว่างเรียน',
      'period_en' => 'During University',
      'title_th' => 'โปรเจคระหว่างเรียน',
      'title_en' => 'University Projects',
      'org_th'   => 'มหาวิทยาลัยธรรมศาสตร์',
      'org_en'   => 'Thammasat University',
      'desc_th'  => 'ตลอดระยะเวลาที่ศึกษาอยู่ที่มหาวิทยาลัยธรรมศาสตร์ ผมได้เรียนรู้พื้นฐานด้านวิทยาการคอมพิวเตอร์ ตั้งแต่ Discrete Structures การเขียนโปรแกรมด้วยภาษา C และ Java โครงสร้างข้อมูลและอัลกอริทึม ไปจนถึงระบบฐานข้อมูล ระบบปฏิบัติการ สถาปัตยกรรมคอมพิวเตอร์ วิศวกรรมซอฟต์แวร์ ปัญญาประดิษฐ์ และสถิติสำหรับการวิเคราะห์ข้อมูล
นอกจากความรู้ในห้องเรียนแล้ว ผมยังมีโอกาสทำโปรเจกต์ร่วมกับเพื่อน ๆ ซึ่งช่วยให้ได้นำทฤษฎีมาประยุกต์ใช้จริง ทั้งการวิเคราะห์ปัญหา ออกแบบระบบ แบ่งหน้าที่รับผิดชอบ และพัฒนาซอฟต์แวร์ร่วมกัน ประสบการณ์เหล่านี้เป็นพื้นฐานสำคัญที่ผมนำมาต่อยอดในการทำงานจนถึงปัจจุบัน',
      'desc_en'  => 'During my studies at Thammasat University, I built a strong foundation in computer science, covering Discrete Structures, C and Java programming, data structures and algorithms, database systems, operating systems, computer architecture, software engineering, artificial intelligence, and statistics for data analysis.
Beyond classroom learning, I gained practical experience through collaborative projects, applying theoretical knowledge to real software development. These projects helped me develop problem-solving, system design, teamwork, and programming skills that continue to support my professional career.',
      'projects' => [
        ['name' => 'FraudCheck-Project',                'repo' => 'https://github.com/PumiputCG/FraudCheck_Project'],
        ['name' => 'QuickCV-Project',                   'repo' => 'https://github.com/PumiputCG/QuickCV_Project'],
        ['name' => 'PM2.5 Dust Alert',                  'repo' => 'assets/files/pm25-dust-alert.pdf'],
        ['name' => 'Bracelock Application Design',      'repo' => 'assets/files/bracelock-application-design.pdf'],
        ['name' => 'TU App Integration',                'repo' => 'assets/files/tu-app-integration.pdf'],
        ['name' => 'Term Project Idol Stage',           'repo' => 'assets/files/idol-stage-term-project.pdf'],
        ['name' => 'Vaccine Reservation System Design', 'repo' => 'assets/files/vaccine-reservation-system-design.pdf'],
      ],
    ],
  ];
}

function activityImage(string $file, int $w, int $h, string $altTh, string $altEn, ?string $pos = null): array {
  $image = [
    'src'    => 'assets/images/activities/' . $file . '?v=' . @filemtime(__DIR__ . '/../assets/images/activities/' . $file),
    'w'      => $w,
    'h'      => $h,
    'alt_th' => $altTh,
    'alt_en' => $altEn,
  ];
  if ($pos !== null) {
    $image['pos'] = $pos;
  }
  return $image;
}

function getActivities(): array {
  return [
    [
      'title_th' => 'พี่เลี้ยงนักศึกษาฝึกงาน',
      'title_en' => 'Internship Mentor',
      'desc_th'  => 'ผมมีโอกาสดูแลและให้คำปรึกษานักศึกษาฝึกงานจากมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี (บางมด) ในการพัฒนาโปรเจกต์ DCC Hub ตั้งแต่การวางแผนงาน การออกแบบระบบ ไปจนถึงการพัฒนาซอฟต์แวร์ พร้อมถ่ายทอดประสบการณ์และแนวทางการทำงานจริงในองค์กร',
      'desc_en'  => 'I had the opportunity to mentor an intern from King Mongkut\'s University of Technology Thonburi (KMUTT) on the DCC Hub project, providing guidance on project planning, system design, and software development while sharing practical experience from working in an enterprise environment.',
      'images'   => [
        activityImage('mentor-1.jpg', 900, 1200, 'นักศึกษาฝึกงานนั่งทำงานในห้องประชุมพร้อมจอแสดงแผนงาน', 'The intern working in a meeting room with the project plan on screen'),
        activityImage('mentor-2.jpg', 900, 1200, 'ประชุมออนไลน์เรื่องโปรเจค DCC Hub ผ่านโน้ตบุ๊ก', 'An online DCC Hub project meeting on a laptop'),
        activityImage('mentor-3.jpg', 900, 1200, 'อธิบายขั้นตอนการทำงานของระบบบนไวท์บอร์ด', 'Explaining the system workflow on a whiteboard'),
      ],
    ],
    [
      'title_th' => 'รางวัลชนะเลิศการประกวด Kaizen',
      'title_en' => 'Kaizen Competition Winner',
      'desc_th'  => 'ผมเข้าร่วมการประกวด Kaizen ภายในบริษัท โดยนำเสนอผลงานการพัฒนาระบบเพื่อปรับปรุงกระบวนการทำงาน ลดขั้นตอนที่ไม่จำเป็น และช่วยลดต้นทุนขององค์กร ซึ่งผลงานดังกล่าวได้รับรางวัลชนะเลิศจากการแข่งขัน',
      'desc_en'  => 'I participated in the company\'s Kaizen competition, presenting a software-based process improvement project designed to streamline workflows, eliminate unnecessary steps, and reduce operational costs. The project received first place in the competition.',
      'images'   => [
        activityImage('kaizen-1.jpg', 900, 1200, 'รับมอบเกียรติบัตรรางวัลชนะเลิศ Kaizen หน้าโลโก้บริษัท', 'Receiving the first-place Kaizen certificate in front of the company logo'),
        activityImage('kaizen-2.jpg', 1200, 900, 'เกียรติบัตรรางวัลชนะเลิศ ส่วนสำนักงาน จาก Supavut Industry', 'The first-place certificate, office division, from Supavut Industry'),
        activityImage('kaizen-3.jpg', 689, 828, 'รับมอบเกียรติบัตรรางวัลชนะเลิศ ส่วนสำนักงาน จากผู้บริหาร', 'Receiving the first-place certificate, office division, from a manager', '50% 38%'),
      ],
    ],
    [
      'title_th' => 'วิทยากรอบรมภายในองค์กร',
      'title_en' => 'Corporate Training Instructor',
      'desc_th'  => 'ผมได้รับโอกาสเป็นวิทยากรอบรมพนักงานภายในบริษัท ถ่ายทอดความรู้ด้าน Power BI และการใช้งานเครื่องมือดิจิทัล เพื่อให้ผู้เข้าร่วมสามารถนำความรู้ไปประยุกต์ใช้ในการวิเคราะห์ข้อมูลและเพิ่มประสิทธิภาพการทำงาน',
      'desc_en'  => 'I had the opportunity to serve as an internal trainer, delivering Power BI training and sharing knowledge of digital tools with colleagues. The sessions focused on helping employees apply data analysis techniques and improve efficiency in their daily work.',
      'images'   => [
        activityImage('power-bi-1.jpg', 1200, 675, 'สอนการใช้ Power BI ให้พนักงานในห้องอบรม', 'Teaching Power BI to colleagues in the training room'),
        activityImage('power-bi-2.jpg', 1200, 675, 'พนักงานฝึกสร้าง Dashboard ตามตัวอย่างบนจอ', 'Colleagues building a dashboard from the example on screen'),
        activityImage('power-bi-3.jpg', 1200, 675, 'บรรยากาศการอบรม Power BI', 'The Power BI training session'),
      ],
    ],
    [
      'title_th' => 'ศึกษาดูงานซอฟต์แวร์',
      'title_en' => 'Software Study Visit',
      'desc_th'  => 'ผมได้รับโอกาสจากบริษัทให้เข้าร่วมโครงการ HR Tech ในย่านสยาม ปทุมวัน กรุงเทพฯ เพื่อศึกษาซอฟต์แวร์และเทคโนโลยีด้านการบริหารทรัพยากรบุคคล รวมถึงเรียนรู้แนวทางการนำเทคโนโลยีมาปรับปรุงกระบวนการทำงานของฝ่าย HR',
      'desc_en'  => 'I was selected by my company to attend an HR Tech programme in Siam, Pathum Wan, Bangkok. The programme provided an opportunity to explore HR software solutions and learn how emerging technologies can improve human resource management and organizational workflows.',
      'images'   => [
        activityImage('hr-tech-1.jpg', 1200, 900, 'ผู้เข้าร่วมจำนวนมากในห้องสัมมนาหลักของงาน', 'A packed main hall at the event'),
        activityImage('hr-tech-2.jpg', 900, 1200, 'บัตรผู้เข้าร่วมงาน HR Tech', 'The HR Tech visitor badge', '50% 55%'),
        activityImage('hr-tech-3.jpg', 900, 1200, 'บูธจัดแสดงซอฟต์แวร์ด้านบุคคล', 'HR software booths on the show floor'),
        activityImage('hr-tech-4.jpg', 900, 1200, 'ป้ายรายชื่อบริษัทชั้นนำที่ร่วมงาน', 'The board of leading companies at the show'),
        activityImage('hr-tech-5.jpg', 900, 1200, 'ภาพกระจกในงาน HR Tech พร้อมบัตรผู้เข้าร่วม', 'A mirror photo at the HR Tech event, wearing a visitor badge', '50% 40%'),
      ],
    ],
    [
      'title_th' => 'อบรมพัฒนาทักษะวิชาชีพ',
      'title_en' => 'Professional Development Training',
      'desc_th'  => 'ผมเข้าร่วมการอบรมกับหน่วยงานด้านแรงงานจังหวัดชลบุรีตามที่บริษัทมอบหมาย เพื่อพัฒนาความรู้และทักษะเพิ่มเติม รวมถึงนำแนวคิดและประสบการณ์ที่ได้รับมาประยุกต์ใช้กับการทำงานภายในองค์กร',
      'desc_en'  => 'I attended a professional training programme organized by the Labour Department in Chonburi through my company. The training provided an opportunity to develop additional skills and gain knowledge that could be applied to my professional responsibilities.',
      'images'   => [
        activityImage('labour-training-1.jpg', 900, 1200, 'หน้าอาคารหน่วยงานแรงงาน อำเภอเมืองชลบุรี', 'Outside the labour office in Mueang Chonburi', '50% 72%'),
        activityImage('labour-training-2.jpg', 1200, 675, 'บรรยากาศห้องอบรม', 'Inside the training room'),
      ],
    ],
    [
      'title_th' => 'กิจกรรมบรรเทาสาธารณภัย',
      'title_en' => 'Disaster Relief Volunteer',
      'desc_th'  => 'ผมมีโอกาสเข้าร่วมกิจกรรมอาสาช่วยเหลือผู้ประสบภัยน้ำท่วมในชุมชนรังสิต โดยร่วมกับเพื่อน ๆ ลงพื้นที่ให้ความช่วยเหลือและแก้ไขปัญหาเบื้องต้นให้กับชาวบ้าน เป็นประสบการณ์ที่ทำให้ผมได้เรียนรู้การทำงานร่วมกับผู้อื่นและเห็นความสำคัญของการช่วยเหลือสังคม',
      'desc_en'  => 'I participated in a community service activity supporting flood-affected residents in Rangsit. Working alongside friends, I helped provide assistance and address immediate community needs. The experience strengthened my teamwork skills and deepened my appreciation for community involvement.',
      'images'   => [
        activityImage('community-1.jpg', 1200, 675, 'ถนนย่านร้านค้าที่มีน้ำท่วมขัง', 'A flooded shopping street'),
      ],
    ],
    [
      'title_th' => 'กิจกรรมอาสาพัฒนาเยาวชน',
      'title_en' => 'Youth Development Volunteer',
      'desc_th'  => 'ผมเข้าร่วมกิจกรรมอาสาสมัครที่โรงเรียนทวีวิทย์ โดยใช้กิจกรรมละครเวทีเป็นสื่อในการส่งเสริมทักษะการแก้ปัญหา ความคิดสร้างสรรค์ และความกล้าแสดงออกของเยาวชน พร้อมเปิดโอกาสให้นักเรียนได้เรียนรู้ผ่านการทำกิจกรรมร่วมกัน',
      'desc_en'  => 'I volunteered at Taweewit School, using drama performances and interactive activities to encourage problem-solving, creativity, and self-confidence among students. The programme provided opportunities for young people to learn through teamwork and creative expression.',
      'images'   => [
        activityImage('taweewit-1.jpg', 603, 402, 'นักศึกษาอาสาแสดงละครให้นักเรียนโรงเรียนทวีวิทย์ที่นั่งชมอยู่บนพื้น', 'Student volunteers performing a play for Taweewit School pupils seated on the floor'),
      ],
    ],
    [
      'title_th' => 'โครงการอนุรักษ์สิ่งแวดล้อม',
      'title_en' => 'Environmental Conservation Project',
      'desc_th'  => 'ผมเข้าร่วมโครงการคัดแยกและจัดการขยะของมหาวิทยาลัยธรรมศาสตร์ ภายใต้แนวคิด Green University เพื่อส่งเสริมการจัดการขยะอย่างเหมาะสมและสร้างความตระหนักด้านสิ่งแวดล้อม รวมถึงการมีส่วนร่วมในการพัฒนามหาวิทยาลัยอย่างยั่งยืน',
      'desc_en'  => 'I participated in Thammasat University\'s waste separation and management project under the Green University initiative. The project aimed to promote responsible waste management, environmental awareness, and sustainable practices within the university community.',
      'images'   => [
        activityImage('environment-1.jpg', 639, 371, 'ลานคัดแยกขยะของมหาวิทยาลัยพร้อมกองขยะรอคัดแยกและรถกระบะ', 'The university sorting yard, with waste waiting to be separated and a pickup truck'),
      ],
    ],
  ];
}
