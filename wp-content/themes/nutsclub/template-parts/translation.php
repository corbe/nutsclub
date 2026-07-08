<?php
// Translation system — cookie-based, no URL prefixes
$langs = ['pt', 'en', 'es'];

// Detect language from cookie
$lang = isset($_COOKIE['lp_lang']) && in_array($_COOKIE['lp_lang'], $langs) ? $_COOKIE['lp_lang'] : 'pt';

// Detect from browser if no cookie
if (!isset($_COOKIE['lp_lang']) && !empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    if (preg_match('/\bes\b/i', $accept) && !preg_match('/\bpt\b/i', $accept)) {
        $lang = 'es';
    } elseif (preg_match('/\ben\b/i', $accept) && !preg_match('/\bpt\b/i', $accept)) {
        $lang = 'en';
    }
}

// Handle language switch via cookie
if (isset($_GET['lang']) && in_array($_GET['lang'], $langs)) {
    $lang = $_GET['lang'];
    setcookie('lp_lang', $lang, time() + 365*86400, '/');
    $_COOKIE['lp_lang'] = $lang;
    // Redirect to same page without query string to keep URL clean
    $clean_url = strtok($_SERVER['REQUEST_URI'], '?');
    header('Location: ' . $clean_url);
    exit;
}

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

// Helper: returns URL with lang switch query param
function lang_switch_url($target_lang) {
    return '?lang=' . $target_lang;
}
