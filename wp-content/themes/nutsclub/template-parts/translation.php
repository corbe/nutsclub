<?php
// Translation system
global $t, $lang;
$langs = ['pt', 'en', 'es'];
$lang  = isset($_COOKIE['lp_lang']) && in_array($_COOKIE['lp_lang'], $langs) ? $_COOKIE['lp_lang'] : 'pt';

$t = [];

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

function __t($key) {
    global $t, $lang;
    return $t[$lang][$key] ?? $t['pt'][$key] ?? $key;
}

if (isset($_GET['lang']) && in_array($_GET['lang'], ['pt','en','es'])) {
    $lang = $_GET['lang'];
    setcookie('lp_lang', $lang, time() + 365*86400, '/');
    $_COOKIE['lp_lang'] = $lang;
}
