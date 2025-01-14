<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
    // The user is using a mobile device
    echo 'Mobile device detected';
} else {
    // The user is using a laptop or desktop
    echo 'Laptop or desktop detected';
}
?>
