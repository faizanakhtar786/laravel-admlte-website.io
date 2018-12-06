<?php 

namespace App\Models;

use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use Auth;

class MenuFilter implements FilterInterface
{
    public function transform($item, Builder $builder)
    {
        if (isset($item['admin']) ) {
            if($item['admin']!=Auth::user()->email)
            {
            	return false;
            }
        }
        return $item;
    }
}
