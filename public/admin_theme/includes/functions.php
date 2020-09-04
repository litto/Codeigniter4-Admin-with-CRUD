<?php
/**
 * Generate full url
 * example:
 * echo site_url('news.list');
 *
 * output:
 * http://yoursite.com/index.php?act=news.list
 *
 * @param string $url
 * @return string
 */
function site_url($url = '') {
	if (!empty($url)) {
		return _BASE_URL . 'index.php?act=' . $url;
	}
	return _BASE_URL;
}

/**
 * Easy redirect
 * example:
 * redirect('news.list');
 *
 * @param string $url
 */
function redirect($url) {
	$url = site_url($url);
	header("Location: $url");
	die;
}

/**
 * Generate dropdown list from an array data
 * example:
 * selectList('Group', $data, '1');
 *
 * @param string $name
 * @param array $data
 * @param string $selected
 */
function selectList($name, $data, $selected = '') {
	$html = "\n<select name=\"$name\" id=\"select_$name\">";

	foreach ((array)$data as $k => $v) {
		$attr = '';
		if ($k == $selected) {
			$attr = ' selected="selected"';
		}
		$html.="\n\t<option value=\"$k\"$attr>$v</option>";
	}
	$html .= "\n</select>\n";
	return $html;
}

/* End of functions.php */