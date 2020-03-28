<?php
$currDate = strtotime("now");
$switchDate = strtotime("2019-10-04");

if ($currDate < $switchDate) {
    header('location: https://start.bizon365.ru/room/18087/victim_transformation');
}
else {
    header('location: https://roleva-yurina.mastervision.su/transformation-of-victim/');
}
?>