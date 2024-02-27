<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use TorMorten\Eventy\Facades\Eventy;

class PageController extends Controller
{
    public function index()
    {
        $page = Page::where('slug','home')->first();
// dd($page);
        return view('pages.page',compact('page'));
    }
    public function pages()
    {
        $html = view('welcome')->render();
        return view('index', compact('html'));
    }

    public function allPages()
    {
        $pages = Page::all();
        // dd($pages);
        return view('pages.index', compact('pages'));
    }

    public function editPage(Page $page)
    {



        $pageHtml = view('pages.page',compact('page'))->render();
           return view('pages.edit', compact('page','pageHtml'));

    }
    public function updatePage(Request $request)
    {
        $page = Page::find($request->pageId);
        if (!$page) {
            return response()->json(['error' => 'Page not found'], 404);
        }

        // Update the html field
        $page->update(['html' => $request->html]);

        // file_put_contents($request->file, $request->html);

        return response()->json(['message' => 'Data saved successfully'], 200);
    }
    public function createPage(Request $request)
    {
        $data = [
            'page_title' => $request['page_title'],
            'slug' => $request['slug'],
            'order' => $request['order'],
        ];

        $data['html'] = config('theme.blank_template');




        $page = Page::create($data);


        return redirect()->back();
    }

    public function deletePage(Page $page)
    {

        $fileLocation =  config('theme.base_path').$page['theme_name'] . '/' . $page['file_name'];
        File::delete($fileLocation);

        $page->delete();

        return redirect()->back();
    }

    public function getPgae(Page $page)
    {



        return view('pages.page',compact('page'))->render();

    }


    public function webRoute(Page $page)
    {

        return view('pages.page',compact('page'))->render();

    }

}
