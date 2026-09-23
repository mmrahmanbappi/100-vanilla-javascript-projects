<?php
/**
 * Saves preview.png (1280x800) for every demo.html using headless Chrome.
 * The demos use fetch and modules, so they are served over a local PHP server, not file://.
 * Run from the repo root:  php scripts/screenshot.php
 * Set CHROME=/path/to/chrome if Chrome is not on your PATH.
 */
$root = dirname(__DIR__);
$chrome = getenv('CHROME') ?: trim(shell_exec('command -v google-chrome || command -v chromium || command -v chromium-browser'));
if (!$chrome) { fwrite(STDERR, "Chrome not found. Install Chrome or set CHROME.\n"); exit(1); }

$port = 8099;
$server = proc_open(['php', '-S', "127.0.0.1:$port", '-t', $root], [['pipe', 'r'], ['file', '/dev/null', 'w'], ['file', '/dev/null', 'w']], $pipes);
usleep(500000);

foreach (glob("$root/*/*/demo.html") as $demo) {
    $rel = str_replace("$root/", '', $demo);
    $png = dirname($demo) . '/preview.png';
    $t0 = microtime(true);
    $cmd = sprintf('timeout 45 %s --headless=new --no-sandbox --disable-gpu --hide-scrollbars --window-size=1280,800 --virtual-time-budget=5000 --screenshot=%s %s 2>/dev/null',
        escapeshellarg($chrome), escapeshellarg($png), escapeshellarg("http://127.0.0.1:$port/$rel"));
    exec($cmd, $o, $rc);
    echo ($rc === 0 ? 'saved ' : 'FAILED (' . $rc . ') ') . str_replace("$root/", '', $png) . ' in ' . round(microtime(true) - $t0, 1) . "s\n";
}
proc_terminate($server);
