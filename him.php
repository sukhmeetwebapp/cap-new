 global $base_path;

  list($css_path, $js_path) = advagg_get_root_files_dir();
    $ip = variable_get('advagg_server_addr', FALSE);
    if ($ip == -1) {
      $ip = $_SERVER['HTTP_HOST'];
    }
    elseif (empty($ip)) {
      $ip = empty($_SERVER['SERVER_ADDR']) ? '127.0.0.1' : $_SERVER['SERVER_ADDR'];
    }
  $filepath = $css_path . '/css_missing' . mt_rand() . time() . '_0.css';
  $url = 'http://' . $ip . $base_path . $filepath;
  $headers = array(
    'Host' => $_SERVER['HTTP_HOST'],
  );

  $data = drupal_http_request($url, $headers);
  echo $url . "<br>\n" . str_replace('    ', '&nbsp;&nbsp;&nbsp;&nbsp;', nl2br(htmlentities(print_r($data, TRUE))));
