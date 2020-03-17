<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Menu extends Model
{
    use Translatable;

    protected $fillable = [
        'name',
        'title',
        'status',
        'primary',
    ];
    public $translatedAttributes = ['title', 'status'];
    protected $table = 'menu__menus';

    public function menuitems()
    {
        return $this->hasMany('Modules\Menu\Entities\Menuitem')->orderBy('position', 'asc');
    }
}
