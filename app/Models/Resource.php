<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Themes;

// class Resource extends Model
// {
//     use HasFactory;
// }

class Resource extends Model
{
    public function theme()
    {
        return $this->belongsTo(Themes::class, 'id_themes');
    }

    public function extraResource()
    {
        return $this->belongsTo(ExtraResource::class, 'id_extraresources');
    }
}
