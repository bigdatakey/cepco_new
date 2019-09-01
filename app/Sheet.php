<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Sheet extends Model implements Searchable
{
    public function getSearchResult(): SearchResult
    {
       $url = "/pages/" . $this->slug;
         
       return new SearchResult($this, $this->title, $url);
    }
}
