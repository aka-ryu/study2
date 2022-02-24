<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Task extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = ['title', 'content'];

    public function searchTask(){
        return 'tasks';
    }
  
}
