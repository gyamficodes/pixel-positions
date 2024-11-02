<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $fillable = ['title','salary','type','url','featured' ,'location','employer_id'];
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
