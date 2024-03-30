<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    public function get_full_name_author() {
        return $this->author_first_name ." ". $this->author_last_name;
    }
}
