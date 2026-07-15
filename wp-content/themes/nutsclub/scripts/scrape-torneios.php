<?php
/**
 * Scrapes Suprema Poker tournament data and caches locally.
 * Run via cron every 3 hours:
 *   0 */3 * * * docker exec nutsclub-wordpress php /var/www/html/wp-content/themes/nutsclub/scripts/scrape-torneios.php
 */

$api_url  = 'https://api.pokerbyte.com.br/mtt/list/106/all/' . date('Y-m-d') . '/guaranteed/desc';
$cache_dir = __DIR__ . '/../data';

if (!is_dir($cache_dir)) {
    mkdir($cache_dir, 0755, true);
}

$response = @file_get_contents($api_url);
if ($response === false) {
    echo '[ERROR] Failed to fetch API at ' . $api_url . PHP_EOL;
    exit(1);
}

$decoded = json_decode($response, true);
if (!$decoded || !isset($decoded['data']) || !is_array($decoded['data'])) {
    echo '[ERROR] Invalid API response' . PHP_EOL;
    exit(1);
}

$highlights = [];
$all_tournaments = [];

$types_map = [
    'NLH' => 'Texas Holdem',
    'PLO' => 'Omaha',
    'PLO5' => 'Omaha',
    'PKO' => 'Texas Holdem',
];

foreach ($decoded['data'] as $item) {
    $buyin = $item['buyin'] ?? 0;
    $gtd   = $item['guaranteed'] ?? 0;
    $date  = $item['date'] ?? '';
    $late  = $item['late'] ?? '';

    $buyin_label = $buyin == 0 ? 'Grátis' : 'R$ ' . number_format($buyin, 0, ',', '.');
    $gtd_label   = 'R$ ' . number_format($gtd, 0, ',', '.');

    $time = '';
    if ($date) {
        $dt = new DateTime($date);
        $time = $dt->format('H:i');
    }

    $late_minutes = '';
    if ($date && $late) {
        $dt_start = new DateTime($date);
        $dt_late  = new DateTime($late);
        $diff     = $dt_start->diff($dt_late);
        $late_minutes = (int)($diff->h * 60 + $diff->i) . ' min';
    }

    $stack = number_format(($item['stack'] ?? 50000), 0, ',', '.');
    $blinds = '100/200';

    $entry = [
        'date'   => $date ? substr($date, 0, 10) : '',
        'nome'   => $item['name'] ?? 'Torneio',
        'tipo'   => $types_map[$item['type'] ?? ''] ?? $item['type'] ?? 'Texas Holdem',
        'inicio' => $time,
        'buyin'  => $buyin_label,
        'gtd'    => $gtd_label,
        'stack'  => $stack,
        'blinds' => $blinds,
        'late'   => $late_minutes,
    ];

    $all_tournaments[] = $entry;

    if (count($highlights) < 6) {
        $game = $item['type'] ?? 'NLH';
        $highlights[] = [
            'date'   => $date ? substr($date, 0, 10) : '',
            'title'  => $item['name'] ?? 'Torneio',
            'prize'  => number_format($gtd, 0, ',', '.'),
            'game'   => $game,
            'time'   => $time,
            'buyin'  => $buyin_label,
            'stack'  => $stack,
            'late'   => $late_minutes,
            'blinds' => $blinds,
        ];
    }
}

$cache = [
    'fetched_at'    => date('Y-m-d H:i:s'),
    'highlights'    => $highlights,
    'tournaments'   => $all_tournaments,
];

$written = file_put_contents(
    $cache_dir . '/torneios.json',
    json_encode($cache, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
);

if ($written === false) {
    echo '[ERROR] Failed to write cache file' . PHP_EOL;
    exit(1);
}

echo '[OK] ' . count($all_tournaments) . ' torneios salvos em ' . date('Y-m-d H:i:s') . PHP_EOL;
