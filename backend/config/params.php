<?php
return [
    'adminEmail' => 'admin@example.com',
    'movie_types' => ['movie' => 'Movie', 'cartoon' => 'Cartoon', 'series' => 'Series', 'episode' => 'Episode', 'ted' => 'TED'],

    // params for movie's mediafiles
    'poster_small_width' => 200,
    'poster_small_height' => 300,
    'poster_small_anchor' => 'center', /*  'center', 'top', 'bottom', 'left', 'right', 'top left', 'top right', 'bottom left', 'bottom right' (default 'center') */

    'poster_big_width' => 980,
    'poster_big_height' => 350,
    'poster_big_anchor' => 'top', /*  'center', 'top', 'bottom', 'left', 'right', 'top left', 'top right', 'bottom left', 'bottom right' (default 'center') */
    'poster_big_blur_filter' => 'gaussian', /* 'selective', 'gaussian' (default 'gaussian'). */
    'poster_big_blur_filter_passes' => 35, /* The number of time to apply the filter, enhancing the effect (default 1). */
    'poster_big_blur_filter_darken' => 10,

    'series_episode_shot_width' => 240,
    'series_episode_shot_height' => 85,
    'series_episode_shot_anchor' => 'center', /*  'center', 'top', 'bottom', 'left', 'right', 'top left', 'top right', 'bottom left', 'bottom right' (default 'center') */

    'poster_ted_width' => 200,
    'poster_ted_height' => 110,
    'poster_ted_anchor' => 'center', /*  'center', 'top', 'bottom', 'left', 'right', 'top left', 'top right', 'bottom left', 'bottom right' (default 'center') */

    'gal_thumb_width' => 200,
    'gal_thumb_height' => 100,
    'gal_thumb_anchor' => 'center', /*  'center', 'top', 'bottom', 'left', 'right', 'top left', 'top right', 'bottom left', 'bottom right' (default 'center') */

    'gal_big_width' => 200,
    'gal_big_height' => 100,
    'gal_big_anchor' => 'center', /*  'center', 'top', 'bottom', 'left', 'right', 'top left', 'top right', 'bottom left', 'bottom right' (default 'center') */
];
