<?php

$json_string = '[{"ten_tp":"ha noi","quan":[{"ten_quan":"thanh xuan","phuong":[{"ten_phuong":"1"},{"ten_phuong":"2"},{"ten_phuong":"3"}]},{"ten_quan":"tay ho","phuong":[]},{"ten_quan":"hoan kiem","phuong":[]}]},{"ten_tp":"ho chi minh","quan":[]},{"ten_tp":"da nang","quan":[]},{"ten_tp":"hai phong","quan":[]}]';
$citi = json_decode($json_string);

echo '<br> json';
echo '<pre>';
print_r($json_string);
echo '</pre>';

echo '<br> array';
echo '<pre>';
print_r($citi);
echo '</pre>';