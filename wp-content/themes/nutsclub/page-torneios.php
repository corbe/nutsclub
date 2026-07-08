<?php
/**
 * Template Name: Torneios
 */
get_header('blank');

// Mock API — simula resposta de uma API REST
$tournaments = [
    [
        'nome' => 'Daily Millions',
        'tipo' => 'Texas Hold\'em',
        'inicio' => '10:00',
        'buyin' => 'R$ 50',
        'gtd' => 'R$ 50.000',
        'stack' => '10.000',
        'blinds' => '100/200',
        'late' => '15 min',
    ],
    [
        'nome' => 'Deep Stack Turbo',
        'tipo' => 'Texas Hold\'em',
        'inicio' => '12:00',
        'buyin' => 'R$ 100',
        'gtd' => 'R$ 100.000',
        'stack' => '25.000',
        'blinds' => '200/400',
        'late' => '30 min',
    ],
    [
        'nome' => 'Omaha Hi/Lo',
        'tipo' => 'Omaha',
        'inicio' => '14:00',
        'buyin' => 'R$ 30',
        'gtd' => 'R$ 20.000',
        'stack' => '8.000',
        'blinds' => '50/100',
        'late' => '10 min',
    ],
    [
        'nome' => 'Milionário Garantido',
        'tipo' => 'Texas Hold\'em',
        'inicio' => '16:00',
        'buyin' => 'R$ 250',
        'gtd' => 'R$ 1.000.000',
        'stack' => '50.000',
        'blinds' => '500/1.000',
        'late' => '60 min',
    ],
    [
        'nome' => 'Nightly Knockout',
        'tipo' => 'Texas Hold\'em',
        'inicio' => '19:00',
        'buyin' => 'R$ 80',
        'gtd' => 'R$ 75.000',
        'stack' => '15.000',
        'blinds' => '150/300',
        'late' => '20 min',
    ],
    [
        'nome' => 'Sunday Special',
        'tipo' => 'Texas Hold\'em',
        'inicio' => '20:00',
        'buyin' => 'R$ 200',
        'gtd' => 'R$ 500.000',
        'stack' => '30.000',
        'blinds' => '300/600',
        'late' => '45 min',
    ],
    [
        'nome' => 'PKO Bounty',
        'tipo' => 'Texas Hold\'em',
        'inicio' => '21:30',
        'buyin' => 'R$ 60',
        'gtd' => 'R$ 40.000',
        'stack' => '12.000',
        'blinds' => '120/240',
        'late' => '15 min',
    ],
    [
        'nome' => 'Freeroll Diário',
        'tipo' => 'Texas Hold\'em',
        'inicio' => '22:00',
        'buyin' => 'Grátis',
        'gtd' => 'R$ 5.000',
        'stack' => '5.000',
        'blinds' => '50/100',
        'late' => '10 min',
    ],
];
?>

<main class="trn">
  <header class="trn-header">
    <div class="trn-header__bg"></div>
    <div class="trn-header__overlay"></div>
    <div class="trn-header__content">
      <h1 class="trn-header__title">Torneios</h1>
      <p class="trn-header__sub">Grade do dia &mdash; <strong><?php echo date('d/m/Y'); ?></strong></p>
    </div>
  </header>

  <section class="trn-section">
    <div class="trn-container">
      <div class="trn-filters">
        <div class="trn-filters__left">
          <label class="trn-filters__label">Buy-in</label>
          <select class="trn-filters__select" id="filter-buyin">
            <option value="all">Todos</option>
            <option value="free">Grátis</option>
            <option value="low">Até R$ 50</option>
            <option value="mid">R$ 50 - R$ 200</option>
            <option value="high">R$ 200+</option>
          </select>
        </div>
        <div class="trn-filters__right">
          <label class="trn-filters__label">Itens por página</label>
          <select class="trn-filters__select" id="filter-perpage">
            <option value="10">10</option>
            <option value="15" selected>15</option>
            <option value="25">25</option>
            <option value="50">50</option>
          </select>
        </div>
      </div>

      <div class="trn-table-wrap">
        <table class="trn-table" id="tournaments-table">
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
            <?php foreach ($tournaments as $t): ?>
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
    </div>
  </section>
</main>

<?php get_footer('blank'); ?>
