<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function searchResults(Request $request)
    {
        $searchTerm = $request->input('search');
        $startTime = microtime(true);
        //traditional
        // $results = $this->proccess($request);


        //traditional with caching

        // $results = Cache::remember('search_results_' . $searchTerm, 300, function () use ($request) {
        //     return  $this->proccess($request);
        // });

        //scout
           $results = Orders::search($request->input('search'))->get();




        //scout with caching
        //   $results = Cache::remember('search_results_' . $searchTerm, 300, function () use ($searchTerm) {
        //       return  Orders::search($searchTerm)->get();
        //   });



        DB::listen(function ($query) {
            info('Executed query', ['query' => $query->sql, 'bindings' => $query->bindings, 'time' => $query->time]);
        });


        $endTime = microtime(true);

        $executionTime = ($endTime - $startTime) * 1000;

        dd($results, $executionTime);
    }


    public function proccess($request)
    {
        $searchTerm = $request->input('search');
        $query = Orders::query();
        if ($searchTerm) {
            $this->treditional($searchTerm, $query);
        }

        return $query->get();
    }

    public function treditional($searchTerm, $query)
    {
        $searchFields = ['order_number', 'user_name', 'user_email', 'user_phone'];
        return   $query->where(function ($query) use ($searchFields, $searchTerm) {
            foreach ($searchFields as $field) {
                $query->orWhere($field, 'like', "%{$searchTerm}%");
            }
        });
    }
}
