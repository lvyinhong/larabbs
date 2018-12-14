<?php
/**
 * Created by PhpStorm.
 * User: lyh
 * Date: 2018/12/15
 * Time: 2:28 AM
 */

namespace App\Observers;


use App\Models\Link;
use Cache;

class LinkObserver
{
    // 在保存时清空 cache_key 对应的缓存
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}