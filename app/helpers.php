<?php

if (!function_exists('asset')) {
    function asset($path, $secure = null)
    {
        return app('url')->assetFrom(config('app.asset_url'), $path, $secure);
    }
}