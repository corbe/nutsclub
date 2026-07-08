<?php
// Translation system
$langs = ['pt', 'en', 'es'];

// Detect language from URL prefix
$uri   = $_SERVER['REQUEST_URI'] ?? '/';
$parts = explode('/', trim(parse_url($uri, PHP_URL_PATH), '/'));
$url_lang = in_array($parts[0] ?? '', $langs) ? $parts[0] : null;

// Detect language from cookie
$cookie_lang = isset($_COOKIE['lp_lang']) && in_array($_COOKIE['lp_lang'], $langs) ? $_COOKIE['lp_lang'] : null;

// Detect language from browser
$browser_lang = 'pt';
if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    // Check for English
    if (preg_match('/\ben\b/i', $accept) && !preg_match('/\bpt\b/i', $accept)) {
        $browser_lang = 'en';
    }
    // Check for Spanish
    if (preg_match('/\bes\b/i', $accept) && !preg_match('/\bpt\b/i', $accept)) {
        $browser_lang = 'es';
    }
}

// Priority: URL > cookie > browser > default (pt)
$lang = $url_lang ?? $cookie_lang ?? $browser_lang;

// Save to cookie
setcookie('lp_lang', $lang, time() + 365*86400, '/');

// Build the main translation array into GLOBALS
$GLOBALS['nuts_t'] = [];

function _tr($key) {
    global $lang;
    $t = $GLOBALS['nuts_t'] ?? [];
    return $t[$lang][$key] ?? $t['pt'][$key] ?? $key;
}

// Shared translations (header, footer, common components)
$t = &$GLOBALS['nuts_t'];
$t['pt']['menu_torneios']   = 'Torneios';
$t['en']['menu_torneios']   = 'Tournaments';
$t['es']['menu_torneios']   = 'Torneos';

$t['pt']['footer_tag']      = 'Sua mesa de poker online';
$t['en']['footer_tag']      = 'Your online poker table';
$t['es']['footer_tag']      = 'Tu mesa de poker online';

$t['pt']['footer_termos']   = 'Termos de Uso';
$t['en']['footer_termos']   = 'Terms of Use';
$t['es']['footer_termos']   = 'Términos de Uso';

$t['pt']['footer_priv']     = 'Privacidade';
$t['en']['footer_priv']     = 'Privacy';
$t['es']['footer_priv']     = 'Privacidad';

$t['pt']['footer_jogo']     = 'Jogo Responsável';
$t['en']['footer_jogo']     = 'Responsible Gaming';
$t['es']['footer_jogo']     = 'Juego Responsable';

$t['pt']['footer_contato']  = 'Contato';
$t['en']['footer_contato']  = 'Contact';
$t['es']['footer_contato']  = 'Contacto';

$t['pt']['footer_copy']     = 'Todos os direitos reservados. 18+';
$t['en']['footer_copy']     = 'All rights reserved. 18+';
$t['es']['footer_copy']     = 'Todos los derechos reservados. 18+';

$t['pt']['footer_warn']     = 'Jogue com responsabilidade. Se o jogo deixar de ser diversão, procure ajuda.';
$t['en']['footer_warn']     = 'Play responsibly. If gambling stops being fun, seek help.';
$t['es']['footer_warn']     = 'Juega con responsabilidad. Si el juego deja de ser diversión, busca ayuda.';

$t['pt']['insta_link']      = 'Siga no Instagram';
$t['en']['insta_link']      = 'Follow on Instagram';
$t['es']['insta_link']      = 'Síguenos en Instagram';
unset($t);

// Backward compat
if (!function_exists('__t')) {
    function __t($key) { return _tr($key); }
}

// Helper: returns URL with current language prefix
function lang_home_url($path = '/') {
    global $lang;
    if ($lang === 'pt') {
        return home_url($path);
    }
    $path = ltrim($path, '/');
    return home_url('/' . $lang . '/' . $path);
}

// Helper: get current page URL with language prefix
function lang_url($target_lang) {
    global $lang;
    $uri  = $_SERVER['REQUEST_URI'] ?? '/';
    $path = parse_url($uri, PHP_URL_PATH);
    $qs   = parse_url($uri, PHP_URL_QUERY);
    $parts = explode('/', trim($path, '/'));
    if (in_array($parts[0] ?? '', ['pt','en','es'])) {
        array_shift($parts);
    }
    $new_path = '/' . $target_lang . '/' . implode('/', $parts);
    $new_path = rtrim($new_path, '/') . '/';
    return $new_path . ($qs ? '?' . $qs : '');
}
