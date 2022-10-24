<?php
  if (!defined('ABSPATH')) {
    exit;
}
$ew_daev_font_path = get_template_directory_uri() . '/fonts/FranklinGothic/';
?>
@font-face {
  font-family: 'FranklinGothic';
  font-style:  normal;
  font-weight: 400;
  font-display: swap;
  src: url("<?php echo $ew_daev_font_path; ?>FranklinGothicBT-ExtraCondensed.otf") format("opentype");
}
