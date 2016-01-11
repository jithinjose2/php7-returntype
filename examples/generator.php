<?php

declare(strict_types=1);

function gen_one_to_three() : Generator {
    for ($i = 1; $i <= 3; $i++) {
        yield $i;
    }
}

foreach (gen_one_to_three() as $value) {
    echo "$value \n";
}