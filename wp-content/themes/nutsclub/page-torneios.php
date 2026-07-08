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

$tournament_names = ['Daily Millions','Deep Stack Turbo','Omaha Hi/Lo','Milionario GTD','Nightly KO','Sunday Special','PKO Bounty','Freeroll','High Roller','Speed Poker','Bounty Builder','Marathon','Turbo KO','Twilight Series','Saturday Special','Heads Up','6-Max Turbo','Deep Run','Progressive KO','Lucky 7s','The Warm Up','The Eliminator','Mega Stack','Mini Millions','Grand Prix','Last Chance','Early Bird','Night Owl','The Rebuy','The Freezeout','Big Stack','Short Deck','All-In or Fold','Zoom Poker','Hyper Turbo','Satellite','Double Chance','Triple Threat','Final Table','The Grind','Morning Session','Afternoon Delight','Late Night','Weekend Warrior','Monster Stack','King of the Hill','The Challenge','The Final','The Main Event','The Wrap Up'];
$tipos = ['Texas Holdem','Texas Holdem','Omaha','Texas Holdem','Texas Holdem','Texas Holdem','Texas Holdem','Texas Holdem','Texas Holdem','Omaha'];
$buyins = [50,100,30,250,80,200,60,0,500,150,40,120,70,90,300,25,175,55,35,45,65,85,110,130,220,15,180,95,75,140,160,20,10,5,1000,25,50,75,150,200,40,60,80,100,250,30,45,55,70,90];
$gtds = ['50.000','100.000','20.000','1.000.000','75.000','500.000','40.000','5.000','2.000.000','150.000','30.000','200.000','60.000','80.000','350.000','15.000','120.000','45.000','25.000','35.000','55.000','70.000','90.000','110.000','180.000','10.000','140.000','85.000','65.000','250.000','130.000','12.000','8.000','4.000','3.000.000','20.000','40.000','60.000','250.000','100.000','35.000','50.000','70.000','90.000','200.000','25.000','38.000','42.000','55.000','2.500'];

$all_tournaments = [];
for ($i = 0; $i < 50; $i++) {
  $h = sprintf('%02d', rand(8, 23)) . ':' . sprintf('%02d', rand(0, 3) * 15);
  $all_tournaments[] = [
    'nome' => $tournament_names[$i],
    'tipo' => $tipos[$i % count($tipos)],
    'inicio' => $h,
    'buyin' => $buyins[$i] == 0 ? 'Grátis' : 'R$ ' . number_format($buyins[$i], 0, ',', '.'),
    'gtd' => 'R$ ' . $gtds[$i],
    'stack' => number_format(($buyins[$i] ?: 50) * rand(80, 200), 0, ',', '.'),
    'blinds' => '100/200',
    'late' => rand(5, 60) . ' min'
  ];
}

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

    <div class="trn-pagination" id="table-pagination">
      <button class="trn-pagination__btn trn-pagination__btn--nav" onclick="changePage(-1)">&lsaquo;</button>
      <span id="page-info" style="font-size:13px;color:#808080;padding:0 8px">Página 1</span>
      <button class="trn-pagination__btn trn-pagination__btn--nav" onclick="changePage(1)">&rsaquo;</button>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/footer-poker'); ?>
<?php get_footer('blank'); ?>
