<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Themes;

class Resource extends Model
{

    use HasFactory;
    protected $fillable = [
        'author',
        'title',
        'id_themes',
        'id_extraresources',
        'id_resourcestype',
    ];
    public function theme()
    {
        return $this->belongsTo(Themes::class, 'id_themes');
    }

    public function resourceType()
    {
        return $this->belongsTo(ResourceType::class, 'id_resourcestype');
    }

    public function extraResource()
    {
        return $this->belongsTo(ExtraResource::class, 'id_extraresources');
    }
}
