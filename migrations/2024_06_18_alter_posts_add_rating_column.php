<?php

use Flarum\Database\Migration;

return Migration::addColumns('posts', [
    'maimmm_rating' => ['tinyinteger', 'nullable' => true],
]);