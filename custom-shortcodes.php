<?php

function button_att($atts, $content = null) {
  $default = array(
      'link' => '#',
  );
  $a = shortcode_atts($default, $atts);
  $content = do_shortcode($content);
  return '<a href="'.($a['link']).'" class="button">'.$content.'</a>';
}
add_shortcode('button', 'button_att');

?>