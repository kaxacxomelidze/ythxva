<?php
declare(strict_types=1);

$footerTemplate = __DIR__ . '/footer.html';
if (is_file($footerTemplate)) {
  readfile($footerTemplate);
  return;
}

http_response_code(500);
echo '<!-- footer template missing: /footer.html -->';
