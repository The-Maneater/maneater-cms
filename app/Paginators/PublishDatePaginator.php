<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 8/27/17
 * Time: 3:27 PM
 */

namespace App\Paginators;


use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class PublishDatePaginator
{
    private $items;

    public function __construct($items)
    {
        if(!$items instanceof Collection){
            $this->items =  collect($items);
        }else{
            $this->items = $items;
        }
    }

    public function paginate($perPage = 20, $page = 0)
    {
        $paginatedItems = collect(array_slice($this->items->toArray(), $perPage * $page, $perPage, true))
            ->groupBy('publish_date');
        return new LengthAwarePaginator($paginatedItems, count($this->items), $perPage, $page + 1);
    }
}