<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SidebarLink extends Model
{
    public $timestamps = false;

    /* 
        Relationships
    */

    public function sidebar()
    {
      return $this->belongsTo(Sidebar::class);
    }
     
}
