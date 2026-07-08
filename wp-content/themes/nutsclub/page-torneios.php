<?php
/**
 * Template Name: Torneios
 */
get_template_part('template-parts/translation');
$is_torneios = true;
$poker_url   = get_field('poker_url') ?: '#';

// Mock JSON API — simula resposta de API REST
$highlights_json = '[
  {"title":"Daily Millions","prize":"50K","game":"NLH","buyin":"R$ 50","stack":"10.000","late":"15 min","blinds":"100/200"},
  {"title":"Milionário GTD","prize":"1M","game":"PLO5","buyin":"R$ 250","stack":"50.000","late":"60 min","blinds":"500/1.000"},
  {"title":"Deep Stack","prize":"80K","game":"NLH","buyin":"R$ 100","stack":"25.000","late":"30 min","blinds":"200/400"},
  {"title":"Nightly KO","prize":"75K","game":"NLH","buyin":"R$ 80","stack":"15.000","late":"20 min","blinds":"150/300"}
]';
$highlights = json_decode($highlights_json, true);

$all_tournaments = [
  ['nome'=>'Daily Millions','tipo'=>'Texas Hold\'em','inicio'=>'10:00','buyin'=>'R$ 50','gtd'=>'R$ 50.000','stack'=>'10.000','blinds'=>'100/200','late'=>'15 min'],
  ['nome'=>'Deep Stack Turbo','tipo'=>'Texas Hold\'em','inicio'=>'12:00','buyin'=>'R$ 100','gtd'=>'R$ 100.000','stack'=>'25.000','blinds'=>'200/400','late'=>'30 min'],
  ['nome'=>'Omaha Hi/Lo','tipo'=>'Omaha','inicio'=>'14:00','buyin'=>'R$ 30','gtd'=>'R$ 20.000','stack'=>'8.000','blinds'=>'50/100','late'=>'10 min'],
  ['nome'=>'Milionário Garantido','tipo'=>'Texas Hold\'em','inicio'=>'16:00','buyin'=>'R$ 250','gtd'=>'R$ 1.000.000','stack'=>'50.000','blinds'=>'500/1.000','late'=>'60 min'],
  ['nome'=>'Nightly Knockout','tipo'=>'Texas Hold\'em','inicio'=>'19:00','buyin'=>'R$ 80','gtd'=>'R$ 75.000','stack'=>'15.000','blinds'=>'150/300','late'=>'20 min'],
  ['nome'=>'Sunday Special','tipo'=>'Texas Hold\'em','inicio'=>'20:00','buyin'=>'R$ 200','gtd'=>'R$ 500.000','stack'=>'30.000','blinds'=>'300/600','late'=>'45 min'],
  ['nome'=>'PKO Bounty','tipo'=>'Texas Hold\'em','inicio'=>'21:30','buyin'=>'R$ 60','gtd'=>'R$ 40.000','stack'=>'12.000','blinds'=>'120/240','late'=>'15 min'],
  ['nome'=>'Freeroll Diário','tipo'=>'Texas Hold\'em','inicio'=>'22:00','buyin'=>'Grátis','gtd'=>'R$ 5.000','stack'=>'5.000','blinds'=>'50/100','late'=>'10 min'],
];
?>

<?php get_template_part('template-parts/header-poker'); ?>

<main class="trn">
  <!-- ===== BANNER HERO ===== -->
  <section class="trn-hero-new">
    <div class="trn-hero-new__bg-text">Torneios</div>

    <div class="trn-hero-new__carousel" id="hero-carousel">
      <?php foreach ($highlights as $i => $h): ?>
      <div class="trn-hero-new__card" data-index="<?php echo $i; ?>" style="transform: scale(<?php echo $i === 1 ? '1' : '0.82'; ?>); opacity: <?php echo $i === 1 ? '1' : '0.5'; ?>;">
        <div class="trn-hero-new__card-inner">
          <div class="trn-hero-new__card-title"><?php echo esc_html($h['title']); ?></div>
          <div class="trn-hero-new__card-prize"><?php echo esc_html($h['prize']); ?></div>
          <div class="trn-hero-new__card-game"><?php echo esc_html($h['game']); ?></div>
          <div class="trn-hero-new__card-info">
            <div class="trn-hero-new__info-col"><span class="trn-hero-new__info-label">BUY-IN</span><span class="trn-hero-new__info-value"><?php echo esc_html($h['buyin']); ?></span></div>
            <div class="trn-hero-new__info-col"><span class="trn-hero-new__info-label">STACK</span><span class="trn-hero-new__info-value"><?php echo esc_html($h['stack']); ?></span></div>
            <div class="trn-hero-new__info-col"><span class="trn-hero-new__info-label">LATE</span><span class="trn-hero-new__info-value"><?php echo esc_html($h['late']); ?></span></div>
            <div class="trn-hero-new__info-col"><span class="trn-hero-new__info-label">BLINDS</span><span class="trn-hero-new__info-value"><?php echo esc_html($h['blinds']); ?></span></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="trn-hero-new__dots">
      <?php foreach ($highlights as $i => $h): ?>
      <button class="trn-hero-new__dot <?php echo $i === 1 ? 'trn-hero-new__dot--active' : ''; ?>" data-slide="<?php echo $i; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ===== TABLE ===== -->
  <section class="trn-section">
    <div class="trn-container">
      <div class="trn-filters">
        <div class="trn-filters__left">
          <label class="trn-filters__label">Buy-in</label>
          <select class="trn-filters__select">
            <option value="all">Todos</option>
            <option value="free">Grátis</option>
            <option value="low">Até R$ 50</option>
            <option value="mid">R$ 50 - R$ 200</option>
            <option value="high">R$ 200+</option>
          </select>
        </div>
        <div class="trn-filters__right">
          <label class="trn-filters__label">Itens por página</label>
          <select class="trn-filters__select">
            <option value="10">10</option>
            <option value="15" selected>15</option>
            <option value="25">25</option>
            <option value="50">50</option>
          </select>
        </div>
      </div>

      <div class="trn-table-wrap">
        <table class="trn-table">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Tipo</th>
              <th>Início</th>
              <th>Buy-in</th>
              <th>GTD</th>
              <th>Stack</th>
              <th>Blinds (MIN.)</th>
              <th>Late</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($all_tournaments as $t): ?>
            <tr>
              <td class="trn-table__name"><?php echo esc_html($t['nome']); ?></td>
              <td><?php echo esc_html($t['tipo']); ?></td>
              <td><?php echo esc_html($t['inicio']); ?></td>
              <td class="trn-table__buyin"><?php echo esc_html($t['buyin']); ?></td>
              <td class="trn-table__gtd"><?php echo esc_html($t['gtd']); ?></td>
              <td><?php echo esc_html($t['stack']); ?></td>
              <td><?php echo esc_html($t['blinds']); ?></td>
              <td><?php echo esc_html($t['late']); ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="trn-pagination">
        <button class="trn-pagination__btn trn-pagination__btn--nav" aria-label="Anterior">&lsaquo;</button>
        <button class="trn-pagination__btn trn-pagination__btn--active">1</button>
        <button class="trn-pagination__btn">2</button>
        <button class="trn-pagination__btn">3</button>
        <button class="trn-pagination__btn trn-pagination__btn--nav" aria-label="Próximo">&rsaquo;</button>
      </div>
    </div>
  </section>
</main>

<?php get_template_part('template-parts/footer-poker'); ?>
<?php get_footer('blank'); ?>
