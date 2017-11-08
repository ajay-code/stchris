<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    public $timestamps = false;

     /* 
        Relationships
    */

    public function links()
    {
      return $this->hasMany(SidebarLink::class);
    }
}
