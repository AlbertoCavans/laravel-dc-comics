<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        "title", "author_first_name", "author_last_name", "cover", 
        "origin_country", "publication_date", "sold_copies", 
        "publication_status", "description"];

    public function get_full_name_author() {
        return $this->author_first_name ." ". $this->author_last_name;
    }
}
