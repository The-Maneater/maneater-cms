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
    private $count;

    public function __construct($items, $count)
    {
        if(!$items instanceof Collection){
            $this->items =  collect($items);
        }else{
            $this->items = $items;
        }
        $this->count = $count;
    }

    public function paginate($perPage = 20, $page = 0, $column='publish_date')
    {
//        $paginatedItems = collect(array_slice($this->items->toArray(), $perPage * $page, $perPage, true))
//            ->groupBy('publish_date');
        $paginatedItems = $this->items->groupBy($column);
        return new LengthAwarePaginator($paginatedItems, $this->count, $perPage, $page + 1);
    }
}