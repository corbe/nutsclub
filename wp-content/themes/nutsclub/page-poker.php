<?php
/**
 * Template Name: Poker Landing Page
 * Description: High-conversion landing page for iGaming poker funnel.
 */

// --- Translation system ---
$langs = ['pt', 'en', 'es'];
$lang  = isset($_COOKIE['lp_lang']) && in_array($_COOKIE['lp_lang'], $langs) ? $_COOKIE['lp_lang'] : 'pt';

$t = [];
$t['pt']['bonus']         = '100% Bonus Instant';
$t['en']['bonus']         = '100% Instant Bonus';
$t['es']['bonus']         = '100% Bono Instantáneo';

$t['pt']['tagline']       = 'As mesas mais <span class="text-gold">soft</span> do Brasil. Saque em 5 minutos.';
$t['en']['tagline']       = 'The <span class="text-gold">softest</span> tables in Brazil. Withdraw in 5 minutes.';
$t['es']['tagline']       = 'Las mesas más <span class="text-gold">soft</span> de Brasil. Retiro en 5 minutos.';

$t['pt']['hero_sub']      = 'Deposite e jogue em torneios com premiações garantidas. Ambiente seguro, pagamento rápido.';
$t['en']['hero_sub']      = 'Deposit and play in tournaments with guaranteed prizes. Secure environment, fast payments.';
$t['es']['hero_sub']      = 'Deposita y juega en torneos con premios garantizados. Entorno seguro, pagos rápidos.';

$t['pt']['cta']           = 'Jogar Agora';
$t['en']['cta']           = 'Play Now';
$t['es']['cta']           = 'Juega Ahora';



$t['pt']['urgency_label'] = 'AO VIVO';
$t['en']['urgency_label'] = 'LIVE NOW';
$t['es']['urgency_label'] = 'EN VIVO';

$t['pt']['urgency_prize'] = 'em premiações';
$t['en']['urgency_prize'] = 'in prizes';
$t['es']['urgency_prize'] = 'en premios';

$t['pt']['urgency_players'] = 'jogadores online';
$t['en']['urgency_players'] = 'players online';
$t['es']['urgency_players'] = 'jugadores online';

$t['pt']['urgency_tables']  = 'mesas ativas';
$t['en']['urgency_tables']  = 'active tables';
$t['es']['urgency_tables']  = 'mesas activas';

$t['pt']['benefits_title']  = 'Por que jogar no Nuts Poker';
$t['en']['benefits_title']  = 'Why Play at Nuts Poker';
$t['es']['benefits_title']  = 'Por qué jugar en Nuts Poker';

$t['pt']['card1_title']     = 'Fair Play Garantido';
$t['en']['card1_title']     = 'Fair Play Guaranteed';
$t['es']['card1_title']     = 'Juego Justo Garantizado';

$t['pt']['card1_text']      = 'RNG certificado internacionalmente. Nada de suspeitas — só sorte e estratégia.';
$t['en']['card1_text']      = 'Internationally certified RNG. No suspicions — just luck and strategy.';
$t['es']['card1_text']      = 'RNG certificado internacionalmente. Sin sospechas — solo suerte y estrategia.';

$t['pt']['card2_title']     = 'Saque Relâmpago';
$t['en']['card2_title']     = 'Lightning Withdrawals';
$t['es']['card2_title']     = 'Retiro Relámpago';

$t['pt']['card2_text']      = 'Seu dinheiro na conta em até 5 minutos via Pix. Sem burocracia.';
$t['en']['card2_text']      = 'Your money in your account in up to 5 minutes. No hassle.';
$t['es']['card2_text']      = 'Tu dinero en la cuenta en hasta 5 minutos. Sin burocracia.';

$t['pt']['card3_title']     = 'Torneios Diários';
$t['en']['card3_title']     = 'Daily Tournaments';
$t['es']['card3_title']     = 'Torneos Diarios';

$t['pt']['card3_text']      = 'Mais de R$ 1 milhão em garantias por mês. Mesas soft para você crescer.';
$t['en']['card3_text']      = 'Over R$ 1 million in guarantees monthly. Soft tables to grow.';
$t['es']['card3_text']      = 'Más de R$ 1 millón en garantías al mes. Mesas soft para crecer.';

$t['pt']['card4_title']     = 'Jogue de Qualquer Lugar';
$t['en']['card4_title']     = 'Play Anywhere';
$t['es']['card4_title']     = 'Juega Desde Cualquier Lugar';

$t['pt']['card4_text']      = 'Cliente desktop e mobile nativos. Sua mesa no bolso.';
$t['en']['card4_text']      = 'Native desktop and mobile client. Your table in your pocket.';
$t['es']['card4_text']      = 'Cliente nativo de escritorio y móvil. Tu mesa en el bolsillo.';

$t['pt']['showcase_title']  = 'Veja a Mesa';
$t['en']['showcase_title']  = 'See the Table';
$t['es']['showcase_title']  = 'Ve la Mesa';

$t['pt']['showcase_1']      = 'Texas Hold\'em — Cash Game';
$t['en']['showcase_1']      = 'Texas Hold\'em — Cash Game';
$t['es']['showcase_1']      = 'Texas Hold\'em — Cash Game';

$t['pt']['showcase_2']      = 'Torneio — Milionário Garantido';
$t['en']['showcase_2']      = 'Tournament — Million GTD';
$t['es']['showcase_2']      = 'Torneo — Millonario Garantizado';

$t['pt']['showcase_cta']    = 'Abrir Conta Gratuita';
$t['en']['showcase_cta']    = 'Open Free Account';
$t['es']['showcase_cta']    = 'Abrir Cuenta Gratis';

$t['pt']['trust_title']     = 'Confiança que Você Pode Ver';
$t['en']['trust_title']     = 'Trust You Can See';
$t['es']['trust_title']     = 'Confianza que Puedes Ver';

$t['pt']['trust_score']     = 'Excelente — 4.8/5';
$t['en']['trust_score']     = 'Excellent — 4.8/5';
$t['es']['trust_score']     = 'Excelente — 4.8/5';

$t['pt']['trust_count']     = 'Baseado em 2.347 avaliações';
$t['en']['trust_count']     = 'Based on 2,347 reviews';
$t['es']['trust_count']     = 'Basado en 2.347 opiniones';

$t['pt']['final_title']     = 'Entre para o Jogo';
$t['en']['final_title']     = 'Join the Game';
$t['es']['final_title']     = 'Entra al Juego';

$t['pt']['final_text']      = 'Ganhe 100% de bônus no primeiro depósito e comece com o pé direito nas mesas mais soft do Brasil.';
$t['en']['final_text']      = 'Get a 100% bonus on your first deposit and start on the right foot at the softest tables in Brazil.';
$t['es']['final_text']      = 'Obtén un 100% de bono en tu primer depósito y empieza con el pie derecho en las mesas más soft de Brasil.';

$t['pt']['final_cta']       = 'Criar Conta Grátis';
$t['en']['final_cta']       = 'Create Free Account';
$t['es']['final_cta']       = 'Crear Cuenta Gratis';

$t['pt']['final_disclaimer'] = 'Depósito mínimo de R$ 20. Termos e condições se aplicam. 18+';
$t['en']['final_disclaimer'] = 'Minimum deposit R$ 20. Terms and conditions apply. 18+';
$t['es']['final_disclaimer'] = 'Depósito mínimo R$ 20. Términos y condiciones aplican. 18+';

$t['pt']['footer_brand']    = 'NUTS POKER';
$t['en']['footer_brand']    = 'NUTS POKER';
$t['es']['footer_brand']    = 'NUTS POKER';

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

$t['pt']['sticky_cta']      = 'Jogar Agora';
$t['en']['sticky_cta']      = 'Play Now';
$t['es']['sticky_cta']      = 'Juega Ahora';

$t['pt']['trust_badge_18']  = '18+';
$t['pt']['trust_badge_lic'] = 'Licenciado';
$t['pt']['trust_badge_rng'] = 'RNG';
$t['pt']['trust_badge_resp']= 'Jogo Resp.';
$t['en']['trust_badge_18']  = '18+';
$t['en']['trust_badge_lic'] = 'Licensed';
$t['en']['trust_badge_rng'] = 'RNG';
$t['en']['trust_badge_resp']= 'Responsible';
$t['es']['trust_badge_18']  = '18+';
$t['es']['trust_badge_lic'] = 'Licenciado';
$t['es']['trust_badge_rng'] = 'RNG';
$t['es']['trust_badge_resp']= 'Juego Resp.';

$t['pt']['trust_badge_lic2']  = 'Licenciado SPA';
$t['en']['trust_badge_lic2']  = 'SPA Licensed';
$t['es']['trust_badge_lic2']  = 'Licenciado SPA';

$t['pt']['trust_badge_rng2']  = 'RNG Testado';
$t['en']['trust_badge_rng2']  = 'RNG Tested';
$t['es']['trust_badge_rng2']  = 'RNG Probado';

$t['pt']['trust_badge_resp2'] = 'Jogo Responsável';
$t['en']['trust_badge_resp2'] = 'Responsible Gaming';
$t['es']['trust_badge_resp2'] = 'Juego Responsable';

$t['pt']['modal_termos']    = 'Termos de Uso';
$t['en']['modal_termos']    = 'Terms of Use';
$t['es']['modal_termos']    = 'Términos de Uso';

$t['pt']['modal_priv']      = 'Privacidade';
$t['en']['modal_priv']      = 'Privacy';
$t['es']['modal_priv']      = 'Privacidad';

$t['pt']['modal_jogo']      = 'Jogo Responsável';
$t['en']['modal_jogo']      = 'Responsible Gaming';
$t['es']['modal_jogo']      = 'Juego Responsable';

$t['pt']['modal_contato']   = 'Contato';
$t['en']['modal_contato']   = 'Contact';
$t['es']['modal_contato']   = 'Contacto';

$t['pt']['insta_link']      = 'Siga no Instagram';
$t['en']['insta_link']      = 'Follow on Instagram';
$t['es']['insta_link']      = 'Síguenos en Instagram';

// Modal content translations
$t['pt']['modal_termos_content'] = '<h2>Termos de Uso — Nuts Poker</h2><p>Ao acessar e utilizar a plataforma Nuts Poker, você concorda com os seguintes termos e condições. Se não concordar com qualquer parte destes termos, não utilize nossos serviços.</p><h3>1. Elegibilidade</h3><p>Você deve ter 18 anos ou mais para utilizar a plataforma. É proibido o uso por menores de idade. Reservamo-nos o direito de solicitar documentação para verificação de idade a qualquer momento.</p><h3>2. Conta de Usuário</h3><p>Você é responsável por manter a confidencialidade de sua conta e senha. Qualquer atividade realizada sob sua conta é de sua inteira responsabilidade.</p><h3>3. Depósitos e Saques</h3><p>Depósitos são processados instantaneamente. Saques são processados em até 5 minutos via Pix. Valores mínimos de depósito: R$ 20.</p><h3>4. Jogo Responsável</h3><p>Incentivamos o jogo responsável. Disponibilizamos ferramentas de autoexclusão e limites de depósito.</p><h3>5. Limitação de Responsabilidade</h3><p>A Nuts Poker não se responsabiliza por perdas decorrentes de uso indevido da plataforma ou decisões de jogo tomadas pelo usuário.</p><h3>6. Alterações</h3><p>Estes termos podem ser alterados a qualquer momento. Notificaremos usuários sobre mudanças significativas.</p>';
$t['en']['modal_termos_content'] = '<h2>Terms of Use — Nuts Poker</h2><p>By accessing and using the Nuts Poker platform, you agree to the following terms and conditions. If you do not agree with any part of these terms, do not use our services.</p><h3>1. Eligibility</h3><p>You must be 18 years or older to use the platform. Use by minors is prohibited. We reserve the right to request age verification documentation at any time.</p><h3>2. User Account</h3><p>You are responsible for maintaining the confidentiality of your account and password. Any activity under your account is your sole responsibility.</p><h3>3. Deposits and Withdrawals</h3><p>Deposits are processed instantly. Withdrawals are processed within 5 minutes via bank transfer. Minimum deposit: R$ 20.</p><h3>4. Responsible Gaming</h3><p>We encourage responsible gaming. We provide self-exclusion tools and deposit limits.</p><h3>5. Liability Limitation</h3><p>Nuts Poker is not liable for losses resulting from misuse of the platform or player decisions.</p><h3>6. Changes</h3><p>These terms may be changed at any time. We will notify users of significant changes.</p>';
$t['es']['modal_termos_content'] = '<h2>Términos de Uso — Nuts Poker</h2><p>Al acceder y utilizar la plataforma Nuts Poker, aceptas los siguientes términos y condiciones. Si no estás de acuerdo con alguna parte de estos términos, no utilices nuestros servicios.</p><h3>1. Elegibilidad</h3><p>Debes tener 18 años o más para utilizar la plataforma. Está prohibido el uso por menores de edad. Nos reservamos el derecho de solicitar documentación de verificación de edad en cualquier momento.</p><h3>2. Cuenta de Usuario</h3><p>Eres responsable de mantener la confidencialidad de tu cuenta y contraseña. Cualquier actividad bajo tu cuenta es de tu exclusiva responsabilidad.</p><h3>3. Depósitos y Retiros</h3><p>Los depósitos se procesan instantáneamente. Los retiros se procesan en hasta 5 minutos. Depósito mínimo: R$ 20.</p><h3>4. Juego Responsable</h3><p>Fomentamos el juego responsable. Ofrecemos herramientas de autoexclusión y límites de depósito.</p><h3>5. Limitación de Responsabilidad</h3><p>Nuts Poker no se responsabiliza por pérdidas derivadas del uso indebido de la plataforma o decisiones del jugador.</p><h3>6. Cambios</h3><p>Estos términos pueden modificarse en cualquier momento. Notificaremos a los usuarios sobre cambios significativos.</p>';

$t['pt']['modal_priv_content'] = '<h2>Política de Privacidade — Nuts Poker</h2><p>Sua privacidade é importante para nós. Esta política descreve como coletamos, usamos e protegemos suas informações pessoais.</p><h3>1. Dados Coletados</h3><p>Coletamos: nome, e-mail, CPF, data de nascimento, dados de pagamento, endereço IP e tipo de navegador.</p><h3>2. Uso dos Dados</h3><p>Utilizamos para: processar transações, verificar identidade, cumprir obrigações legais e melhorar nossos serviços.</p><h3>3. Compartilhamento</h3><p>Não vendemos seus dados. Compartilhamos apenas com processadores de pagamento e autoridades regulatórias quando exigido por lei.</p><h3>4. Armazenamento</h3><p>Seus dados são armazenados em servidores seguros com criptografia SSL/TLS.</p><h3>5. Seus Direitos</h3><p>Você pode solicitar acesso, correção ou exclusão de seus dados pelo e-mail de suporte.</p>';
$t['en']['modal_priv_content'] = '<h2>Privacy Policy — Nuts Poker</h2><p>Your privacy is important to us. This policy describes how we collect, use, and protect your personal information.</p><h3>1. Data Collected</h3><p>We collect: name, email, tax ID, date of birth, payment data, IP address, and browser type.</p><h3>2. Use of Data</h3><p>We use your data to: process transactions, verify identity, comply with legal obligations, and improve our services.</p><h3>3. Sharing</h3><p>We do not sell your data. We only share with payment processors and regulatory authorities when required by law.</p><h3>4. Storage</h3><p>Your data is stored on secure servers with SSL/TLS encryption.</p><h3>5. Your Rights</h3><p>You can request access, correction, or deletion of your data via our support email.</p>';
$t['es']['modal_priv_content'] = '<h2>Política de Privacidad — Nuts Poker</h2><p>Tu privacidad es importante para nosotros. Esta política describe cómo recopilamos, usamos y protegemos tu información personal.</p><h3>1. Datos Recopilados</h3><p>Recopilamos: nombre, correo electrónico, CPF, fecha de nacimiento, datos de pago, dirección IP y tipo de navegador.</p><h3>2. Uso de Datos</h3><p>Utilizamos tus datos para: procesar transacciones, verificar identidad, cumplir obligaciones legales y mejorar nuestros servicios.</p><h3>3. Compartición</h3><p>No vendemos tus datos. Solo compartimos con procesadores de pago y autoridades regulatorias cuando lo exige la ley.</p><h3>4. Almacenamiento</h3><p>Tus datos se almacenan en servidores seguros con cifrado SSL/TLS.</p><h3>5. Tus Derechos</h3><p>Puedes solicitar acceso, corrección o eliminación de tus datos a través de nuestro correo de soporte.</p>';

$t['pt']['modal_jogo_content'] = '<h2>Jogo Responsável — Nuts Poker</h2><p>O Nuts Poker está comprometido com a prática do jogo responsável. Queremos que você se divirta com segurança e consciência.</p><h3>Dicas para Jogar com Responsabilidade</h3><ul><li><strong>Defina limites:</strong> Estabeleça um orçamento e nunca ultrapasse esse valor.</li><li><strong>Controle o tempo:</strong> Faça pausas regulares e não deixe o jogo interferir em suas obrigações.</li><li><strong>Não persiga perdas:</strong> Aceite que perder faz parte do jogo. Nunca tente recuperar perdas com apostas maiores.</li><li><strong>Jogue por diversão:</strong> O poker deve ser uma forma de entretenimento, não uma fonte de renda.</li></ul><h3>Ferramentas de Proteção</h3><p>Disponibilizamos limites de depósito, autoexclusão, limites de tempo de jogo e histórico completo de transações.</p><h3>Ajuda Profissional</h3><p>Se você ou alguém que conhece precisa de ajuda, procure o PRO-AMJE ou auxílio psicológico profissional.</p>';
$t['en']['modal_jogo_content'] = '<h2>Responsible Gaming — Nuts Poker</h2><p>Nuts Poker is committed to responsible gaming. We want you to have fun safely and consciously.</p><h3>Tips for Playing Responsibly</h3><ul><li><strong>Set limits:</strong> Establish a budget and never exceed it.</li><li><strong>Control your time:</strong> Take regular breaks and do not let gaming interfere with your obligations.</li><li><strong>Do not chase losses:</strong> Accept that losing is part of the game. Never try to recover losses with larger bets.</li><li><strong>Play for fun:</strong> Poker should be entertainment, not a source of income.</li></ul><h3>Protection Tools</h3><p>We offer deposit limits, self-exclusion, time limits, and full transaction history.</p><h3>Professional Help</h3><p>If you or someone you know needs help, seek professional psychological assistance or contact responsible gaming organizations.</p>';
$t['es']['modal_jogo_content'] = '<h2>Juego Responsable — Nuts Poker</h2><p>Nuts Poker está comprometido con el juego responsable. Queremos que te diviertas con seguridad y conciencia.</p><h3>Consejos para Jugar Responsablemente</h3><ul><li><strong>Establece límites:</strong> Define un presupuesto y nunca lo superes.</li><li><strong>Controla el tiempo:</strong> Toma descansos regulares y no dejes que el juego interfiera con tus obligaciones.</li><li><strong>No persigas pérdidas:</strong> Acepta que perder es parte del juego. Nunca intentes recuperar pérdidas con apuestas mayores.</li><li><strong>Juega por diversión:</strong> El póker debe ser entretenimiento, no una fuente de ingresos.</li></ul><h3>Herramientas de Protección</h3><p>Ofrecemos límites de depósito, autoexclusión, límites de tiempo e historial completo de transacciones.</p><h3>Ayuda Profesional</h3><p>Si tú o alguien que conoces necesita ayuda, busca asistencia psicológica profesional u organizaciones de juego responsable.</p>';

$t['pt']['modal_contato_content'] = '<h2>Contato — Nuts Poker</h2><p>Estamos aqui para ajudar. Entre em contato conosco através dos canais abaixo.</p><p><strong>E-mail:</strong> suporte@nutspoker.com.br</p><p><strong>WhatsApp:</strong> (11) 99999-8888</p><p><strong>Instagram:</strong> @nutsclub_</p><p>Responderemos o mais breve possível.</p>';
$t['en']['modal_contato_content'] = '<h2>Contact — Nuts Poker</h2><p>We are here to help. Contact us through the channels below.</p><p><strong>Email:</strong> suporte@nutspoker.com.br</p><p><strong>WhatsApp:</strong> (11) 99999-8888</p><p><strong>Instagram:</strong> @nutsclub_</p><p>We will respond as soon as possible.</p>';
$t['es']['modal_contato_content'] = '<h2>Contacto — Nuts Poker</h2><p>Estamos aquí para ayudarte. Contáctanos a través de los siguientes canales.</p><p><strong>Email:</strong> suporte@nutspoker.com.br</p><p><strong>WhatsApp:</strong> (11) 99999-8888</p><p><strong>Instagram:</strong> @nutsclub_</p><p>Te responderemos lo antes posible.</p>';

function __t($key) {
    global $t, $lang;
    return $t[$lang][$key] ?? $t['pt'][$key] ?? $key;
}

// Switch language via query param
if (isset($_GET['lang']) && in_array($_GET['lang'], ['pt','en','es'])) {
    $lang = $_GET['lang'];
    setcookie('lp_lang', $lang, time() + 365*86400, '/');
    $_COOKIE['lp_lang'] = $lang;
}

$poker_url  = get_field('poker_url') ?: '#';

get_header('blank');
?>

<main class="lp" id="top">
  <header class="lp-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/bg_header.png'); ?>'); background-size: auto 100%; background-repeat: repeat-x;">
    <div class="lp-header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-header__logo" aria-label="Nuts Poker">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="Nuts Poker" style="height: 40px; width: auto;">
      </a>
      <div class="lp-header__right">
        <div class="lp-lang">
          <a href="?lang=pt" class="lp-lang__flag <?php echo $lang === 'pt' ? 'lp-lang__flag--active' : ''; ?>" aria-label="Português" title="Português">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><rect width="22" height="16" fill="#009739"/><polygon points="11,2 20,8 11,14 2,8" fill="#FEDD00"/><circle cx="11" cy="8" r="3.5" fill="#002776"/></svg>
          </a>
          <a href="?lang=en" class="lp-lang__flag <?php echo $lang === 'en' ? 'lp-lang__flag--active' : ''; ?>" aria-label="English" title="English">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><rect width="22" height="16" fill="#012169"/><path d="M0 0v1.6L19.8 16H22v-1.6L2.2 0H0zm22 0v1.6L2.2 16H0v-1.6L19.8 0H22z" fill="#FFF"/><path d="M0 7.2V8.8h22V7.2H0zM10 0h2v16h-2V0z" fill="#FFF"/><path d="M0 4v1.6l4.4 2.9v1.5L0 13v1.6L8.8 8H22V4H0z" fill="#C8102E"/><path d="M22 4v1.6l-4.4 2.9v1.5L22 13v1.6L13.2 8H0V4h22z" fill="#C8102E"/></svg>
          </a>
          <a href="?lang=es" class="lp-lang__flag <?php echo $lang === 'es' ? 'lp-lang__flag--active' : ''; ?>" aria-label="Español" title="Español">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><rect width="22" height="16" fill="#C60B1E"/><rect y="3" width="22" height="10" fill="#FFC400"/></svg>
          </a>
        </div>
      </div>
    </div>
  </header>

  <section class="lp-hero" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/banner_nuts.jpg'); ?>'); background-size: cover; background-position: center;">
    <div class="lp-hero__overlay"></div>
    <div class="lp-hero__content">
      <div class="lp-hero__badge"><?php echo esc_html(__t('bonus')); ?></div>
      <h1 class="lp-hero__title"><?php echo __t('tagline'); ?></h1>
      <p class="lp-hero__sub"><?php echo __t('hero_sub'); ?></p>
      <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta lp-hero__cta" rel="nofollow">
        <?php echo __t('cta'); ?>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7 4l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <div class="lp-hero__trust">
        <span class="lp-trust__badge" title="18+"><?php echo __t('trust_badge_18'); ?></span>
        <span class="lp-trust__badge">&#9670; <?php echo __t('trust_badge_lic'); ?></span>
        <span class="lp-trust__badge"><?php echo __t('trust_badge_rng'); ?></span>
        <span class="lp-trust__badge">&#9829; <?php echo __t('trust_badge_resp'); ?></span>
      </div>
    </div>
  </section>

  <section class="lp-urgency">
    <div class="lp-urgency__inner">
      <div class="lp-urgency__pulse"></div>
      <span class="lp-urgency__label">&#9670; <?php echo __t('urgency_label'); ?></span>
      <span class="lp-urgency__stat"><strong>R$ 247.500</strong> <?php echo __t('urgency_prize'); ?></span>
      <span class="lp-urgency__sep" aria-hidden="true"></span>
      <span class="lp-urgency__stat"><strong>1.284</strong> <?php echo __t('urgency_players'); ?></span>
      <span class="lp-urgency__sep" aria-hidden="true"></span>
      <span class="lp-urgency__stat"><strong>47</strong> <?php echo __t('urgency_tables'); ?></span>
    </div>
  </section>

  <section class="lp-section" id="benefits">
    <div class="lp-container">
      <h2 class="lp-section__title reveal"><?php echo __t('benefits_title'); ?></h2>
      <div class="lp-benefits">
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9824;</div>
          <h3 class="lp-card__title"><?php echo __t('card1_title'); ?></h3>
          <p class="lp-card__text"><?php echo __t('card1_text'); ?></p>
        </article>
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9830;</div>
          <h3 class="lp-card__title"><?php echo __t('card2_title'); ?></h3>
          <p class="lp-card__text"><?php echo __t('card2_text'); ?></p>
        </article>
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9829;</div>
          <h3 class="lp-card__title"><?php echo __t('card3_title'); ?></h3>
          <p class="lp-card__text"><?php echo __t('card3_text'); ?></p>
        </article>
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9827;</div>
          <h3 class="lp-card__title"><?php echo __t('card4_title'); ?></h3>
          <p class="lp-card__text"><?php echo __t('card4_text'); ?></p>
        </article>
      </div>
    </div>
  </section>

  <section class="lp-section lp-section--dark" id="showcase">
    <div class="lp-container">
      <h2 class="lp-section__title reveal"><?php echo __t('showcase_title'); ?></h2>
      <div class="lp-showcase">
        <figure class="lp-showcase__item reveal">
          <div class="lp-showcase__frame">
            <div class="lp-showcase__placeholder" style="aspect-ratio: 16/9; background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);">
              <span class="lp-showcase__suit">&#9824;</span>
            </div>
          </div>
          <figcaption><?php echo __t('showcase_1'); ?></figcaption>
        </figure>
        <figure class="lp-showcase__item reveal" data-delay="100">
          <div class="lp-showcase__frame">
            <div class="lp-showcase__placeholder" style="aspect-ratio: 16/9; background: linear-gradient(135deg, #1a1a2e 0%, #0f3460 100%);">
              <span class="lp-showcase__suit">&#9829;</span>
            </div>
          </div>
          <figcaption><?php echo __t('showcase_2'); ?></figcaption>
        </figure>
      </div>
      <div class="lp-showcase__cta reveal">
        <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta" rel="nofollow"><?php echo __t('showcase_cta'); ?></a>
      </div>
    </div>
  </section>

  <section class="lp-section" id="trust">
    <div class="lp-container">
      <h2 class="lp-section__title reveal"><?php echo __t('trust_title'); ?></h2>
      <div class="lp-trust">
        <div class="lp-trust__rating reveal">
          <div class="lp-trust__stars">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
          </div>
          <span class="lp-trust__score"><?php echo __t('trust_score'); ?></span>
          <span class="lp-trust__count"><?php echo __t('trust_count'); ?></span>
        </div>
        <div class="lp-trust__badges reveal" data-delay="100">
          <span class="lp-trust__badge"><?php echo __t('trust_badge_18'); ?></span>
          <span class="lp-trust__badge">&#9670; <?php echo __t('trust_badge_lic2'); ?></span>
          <span class="lp-trust__badge"><?php echo __t('trust_badge_rng2'); ?></span>
          <span class="lp-trust__badge">&#9829; <?php echo __t('trust_badge_resp2'); ?></span>
        </div>
      </div>
    </div>
  </section>

  <section class="lp-section lp-final" id="cta">
    <div class="lp-container">
      <div class="lp-final__card reveal">
        <h2 class="lp-final__title"><?php echo __t('final_title'); ?></h2>
        <p class="lp-final__text"><?php echo __t('final_text'); ?></p>
        <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta lp-cta--xl" rel="nofollow">
          <?php echo __t('final_cta'); ?>
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7 4l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <p class="lp-final__disclaimer"><?php echo __t('final_disclaimer'); ?></p>
      </div>
    </div>
  </section>

  <footer class="lp-footer">
    <div class="lp-container">
      <div class="lp-footer__inner">
        <div class="lp-footer__brand">
          <span class="lp-footer__logo">&#9824; <?php echo __t('footer_brand'); ?></span>
          <p class="lp-footer__tagline"><?php echo __t('footer_tag'); ?></p>
        </div>
        <div class="lp-footer__social">
          <a href="https://www.instagram.com/nutsclub_" target="_blank" rel="noopener" class="lp-footer__social-link" aria-label="Instagram">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
        </div>
        <nav class="lp-footer__nav" aria-label="Links de compliance">
          <a href="#" class="lp-footer__link" data-modal="termos-de-uso"><?php echo __t('footer_termos'); ?></a>
          <a href="#" class="lp-footer__link" data-modal="privacidade"><?php echo __t('footer_priv'); ?></a>
          <a href="#" class="lp-footer__link" data-modal="jogo-responsavel"><?php echo __t('footer_jogo'); ?></a>
          <a href="#" class="lp-footer__link" data-modal="contato"><?php echo __t('footer_contato'); ?></a>
        </nav>
        <p class="lp-footer__copy">&copy; <?php echo date('Y'); ?> Nuts Poker. <?php echo __t('footer_copy'); ?></p>
        <p class="lp-footer__warning"><?php echo __t('footer_warn'); ?></p>
      </div>
    </div>
  </footer>

  <div class="lp-sticky">
    <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta lp-sticky__btn" rel="nofollow"><?php echo __t('sticky_cta'); ?></a>
  </div>
</main>

<div class="lp-modal" id="modal-termos-de-uso" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="lp-modal__backdrop" data-modal-close></div>
  <div class="lp-modal__content">
    <button class="lp-modal__close" data-modal-close aria-label="Fechar">&times;</button>
    <div class="lp-modal__body"><?php echo __t('modal_termos_content'); ?></div>
  </div>
</div>
<div class="lp-modal" id="modal-privacidade" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="lp-modal__backdrop" data-modal-close></div>
  <div class="lp-modal__content">
    <button class="lp-modal__close" data-modal-close aria-label="Fechar">&times;</button>
    <div class="lp-modal__body"><?php echo __t('modal_priv_content'); ?></div>
  </div>
</div>
<div class="lp-modal" id="modal-jogo-responsavel" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="lp-modal__backdrop" data-modal-close></div>
  <div class="lp-modal__content">
    <button class="lp-modal__close" data-modal-close aria-label="Fechar">&times;</button>
    <div class="lp-modal__body"><?php echo __t('modal_jogo_content'); ?></div>
  </div>
</div>
<div class="lp-modal" id="modal-contato" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="lp-modal__backdrop" data-modal-close></div>
  <div class="lp-modal__content">
    <button class="lp-modal__close" data-modal-close aria-label="Fechar">&times;</button>
    <div class="lp-modal__body"><?php echo __t('modal_contato_content'); ?></div>
  </div>
</div>

<?php get_footer('blank'); ?>
