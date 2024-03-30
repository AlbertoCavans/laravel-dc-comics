<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        "title", "first_name_author", "last_name_author", "cover", 
        "origin_country", "publication_date", "sold_copies", 
        "publication_status", "description"];

    public function get_full_name_author() {
        return $this->author_first_name ." ". $this->author_last_name;
    }
}
