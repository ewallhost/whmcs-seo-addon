<?php
function hook_ewallhostseo() {
    $return = array();
    $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $vars = parse_url($actual_link, PHP_URL_PATH);
    if ($vars == "/" || $vars == "/home" || $vars == "") {
        $vars = "index.php";
    } else {
        $vars = substr($vars, 1, strlen($vars));
    }
    $sql = "SELECT * FROM mod_ewallhostseoaddon where pageurl='$vars'";
    $result = mysql_query($sql);
    while ($data = mysql_fetch_array($result)) {
        $return['seotitle'] = $data['pageheader'];
        $return['seokeyword'] = $data['keyword'];
        $return['seodecription'] = $data['description'];
        $return['fburl'] = $data['ogurl'];
        $return['fbtype'] = $data['ogtype'];
        $return['fbtitle'] = $data['ogtitle'];
        $return['fbimage'] = $data['ogimage'];
        $return['fbdesc'] = $data['ogdesc'];
    }
    return $return;
}

add_hook('ClientAreaPage', 1, 'hook_ewallhostseo');
