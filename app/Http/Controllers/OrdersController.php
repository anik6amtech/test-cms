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
    public function index()
    {
        $html = view('welcome')->render();
        return view('index',compact('html'));
    }

    public function updatePage(Request $request)
    {
        $page = Page::where('file',$request->file)->first();
        if (!$page) {
            return response()->json(['error' => 'Page not found'], 404);
        }

        // Update the html field
        $page->update(['html' => $request->html]);

        file_put_contents($page->file, $request->html);

        return response()->json(['message' => 'Data saved successfully'], 200);
    }
    public function createPage(Request $request)
    {
        $data = [
            'startTemplateUrl' => $request['startTemplateUrl'],
            'title' => $request['title'],
            'file' => $request['file'],
            'folder' => $request['folder'],
            'name' => $request['name'],
            'url' => $request['url'],
        ];

        $data['html'] = file_get_contents($request->startTemplateUrl);





        $page = Page::create($data);

        if ($page) {
            file_put_contents($data['file'], $data['html']);
        }

        return response()->json(['message' => 'Data saved successfully'], 200);
    }
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
