<?php
/**
 * Template Name: Torneios
 */
get_template_part('template-parts/translation');
$is_torneios = true;
$poker_url   = get_field('poker_url') ?: '#';

// Mock JSON
$highlights = [
  ['title'=>'#AS OmaX HR','prize'=>'80K','game'=>'PLO5','time'=>'08:00 PM','buyin'=>'R$ 100','stack'=>'25.000','late'=>'30 min','blinds'=>'200/400'],
  ['title'=>'#MS NLH Turbo','prize'=>'200K','game'=>'NLH','time'=>'09:00 PM','buyin'=>'R$ 250','stack'=>'50.000','late'=>'45 min','blinds'=>'500/1K'],
  ['title'=>'#PKO Bounty','prize'=>'120K','game'=>'PKO','time'=>'10:00 PM','buyin'=>'R$ 80','stack'=>'15.000','late'=>'20 min','blinds'=>'150/300'],
  ['title'=>'#Sun Milionario','prize'=>'500K','game'=>'NLH','time'=>'11:00 PM','buyin'=>'R$ 500','stack'=>'100.000','late'=>'60 min','blinds'=>'1K/2K'],
  ['title'=>'#Omaha Hi-Lo','prize'=>'60K','game'=>'PLO','time'=>'12:00 AM','buyin'=>'R$ 60','stack'=>'12.000','late'=>'15 min','blinds'=>'120/240'],
  ['title'=>'#Turbo KO','prize'=>'40K','game'=>'PKO','time'=>'01:00 AM','buyin'=>'R$ 40','stack'=>'8.000','late'=>'10 min','blinds'=>'80/160']
];

$all_tournaments = [
  ['nome'=>'Daily Millions','tipo'=>'Texas Holdem','inicio'=>'10:00','buyin'=>'R$ 50','gtd'=>'R$ 50.000','stack'=>'10.000','blinds'=>'100/200','late'=>'15 min'],
  ['nome'=>'Deep Stack Turbo','tipo'=>'Texas Holdem','inicio'=>'12:00','buyin'=>'R$ 100','gtd'=>'R$ 100.000','stack'=>'25.000','blinds'=>'200/400','late'=>'30 min'],
  ['nome'=>'Omaha Hi/Lo','tipo'=>'Omaha','inicio'=>'14:00','buyin'=>'R$ 30','gtd'=>'R$ 20.000','stack'=>'8.000','blinds'=>'50/100','late'=>'10 min'],
  ['nome'=>'Milionario GTD','tipo'=>'Texas Holdem','inicio'=>'16:00','buyin'=>'R$ 250','gtd'=>'R$ 1.000.000','stack'=>'50.000','blinds'=>'500/1.000','late'=>'60 min'],
  ['nome'=>'Nightly KO','tipo'=>'Texas Holdem','inicio'=>'19:00','buyin'=>'R$ 80','gtd'=>'R$ 75.000','stack'=>'15.000','blinds'=>'150/300','late'=>'20 min'],
  ['nome'=>'Sunday Special','tipo'=>'Texas Holdem','inicio'=>'20:00','buyin'=>'R$ 200','gtd'=>'R$ 500.000','stack'=>'30.000','blinds'=>'300/600','late'=>'45 min']
];

get_header('blank');
?>
<?php get_template_part('template-parts/header-poker'); ?>
<section class="trn-hero">
  <div class="trn-hero__bg-text">Torneios</div>

  <div class="trn-hero__carousel" id="hero-carousel">
    <?php foreach ($highlights as $i => $h): ?>
    <div class="trn-hero__card <?php echo $i === 1 ? 'trn-hero__card--center' : 'trn-hero__card--side'; ?>" data-index="<?php echo $i; ?>">
      <div class="trn-hero__card-inner">
        <div class="trn-hero__card-top"><?php echo esc_html($h['title']); ?></div>
        <div class="trn-hero__card-prize"><?php echo esc_html($h['prize']); ?></div>
        <div class="trn-hero__card-game"><?php echo esc_html($h['game']); ?></div>
      </div>
      <div class="trn-hero__bar">
        <div class="trn-hero__bar-col"><span class="trn-hero__bar-label">BUY-IN</span><span class="trn-hero__bar-value"><?php echo esc_html($h['buyin']); ?></span></div>
        <div class="trn-hero__bar-col"><span class="trn-hero__bar-label">STACK</span><span class="trn-hero__bar-value"><?php echo esc_html($h['stack']); ?></span></div>
        <div class="trn-hero__bar-col"><span class="trn-hero__bar-label">LATE</span><span class="trn-hero__bar-value"><?php echo esc_html($h['late']); ?></span></div>
        <div class="trn-hero__bar-col"><span class="trn-hero__bar-label">BLINDS</span><span class="trn-hero__bar-value"><?php echo esc_html($h['blinds']); ?></span></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="trn-hero__dots">
    <?php $dot_count = count($highlights); $center_dot = floor(($dot_count - 1) / 2); ?>
    <?php for ($i = 0; $i < $dot_count; $i++): ?>
    <button class="trn-hero__dot <?php echo $i === $center_dot ? 'trn-hero__dot--active' : ''; ?>" data-slide="<?php echo $i; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
    <?php endfor; ?>
  </div>
</section>

<section class="trn-section">
  <div class="trn-container">
    <div class="trn-filters">
      <div class="trn-filters__left">
        <label class="trn-filters__label" for="filter-buyin">Buy-in</label>
        <select class="trn-filters__select" id="filter-buyin" name="buyin"><option value="all">Todos</option><option value="free">Grátis</option><option value="low">Até R$ 50</option><option value="mid">R$ 50 - R$ 200</option><option value="high">R$ 200+</option></select>
      </div>
      <div class="trn-filters__right">
        <label class="trn-filters__label" for="filter-perpage">Itens por página</label>
        <select class="trn-filters__select" id="filter-perpage" name="perpage"><option value="10">10</option><option value="15" selected>15</option><option value="25">25</option><option value="50">50</option></select>
      </div>
    </div>

    <div class="trn-table-wrap">
      <table class="trn-table">
        <thead><tr><th>Nome</th><th>Tipo</th><th>Início</th><th>Buy-in</th><th>GTD</th><th>Stack</th><th>Blinds</th><th>Late</th></tr></thead>
        <tbody>
          <?php foreach ($all_tournaments as $t): ?>
          <tr><td class="trn-table__name"><?php echo esc_html($t['nome']); ?></td><td><?php echo esc_html($t['tipo']); ?></td><td><?php echo esc_html($t['inicio']); ?></td><td class="trn-table__buyin"><?php echo esc_html($t['buyin']); ?></td><td class="trn-table__gtd"><?php echo esc_html($t['gtd']); ?></td><td><?php echo esc_html($t['stack']); ?></td><td><?php echo esc_html($t['blinds']); ?></td><td><?php echo esc_html($t['late']); ?></td></tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="trn-pagination">
      <button class="trn-pagination__btn trn-pagination__btn--nav">&lsaquo;</button>
      <button class="trn-pagination__btn trn-pagination__btn--active">1</button>
      <button class="trn-pagination__btn">2</button>
      <button class="trn-pagination__btn">3</button>
      <button class="trn-pagination__btn trn-pagination__btn--nav">&rsaquo;</button>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/footer-poker'); ?>
<?php get_footer('blank'); ?>
