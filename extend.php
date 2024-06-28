<?php

/*
 * This file is part of maimmm/flarum-ext-starrating.
 *
 * Copyright (c) 2024 maimmm.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace maimmm\starRating;

use Flarum\Extend;
use Illuminate\Contracts\Events\Dispatcher;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),
    new Extend\Locales(__DIR__.'/locale'),

    // (new Extend\Routes('api'))
    //     ->post('', 'f', Api\Controller\starrating::class),

];
  