<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(62, 92, 17, 12, 5);
assert(Policy::score($signal_case_1) === 125);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(79, 88, 21, 17, 5);
assert(Policy::score($signal_case_2) === 117);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(70, 94, 25, 11, 5);
assert(Policy::score($signal_case_3) === 133);
assert(Policy::classify($signal_case_3) === "review");
