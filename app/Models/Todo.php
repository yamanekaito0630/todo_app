<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    use \Rutorika\Sortable\SortableTrait;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function goal()
    {
        return $this->belongsTo('App\Models\Goal');
    }
}
