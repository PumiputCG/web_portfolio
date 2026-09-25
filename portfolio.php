<?php
require_once __DIR__ . '/includes/lang.php';

header('Location: projects.php?lang=' . rawurlencode(getCurrentLang()), true, 301);
exit;
