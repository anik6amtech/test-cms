<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function index()
    {
        $view = 'themes.'.config('theme.active').'.index';
        return view($view);
        // $location = config('theme.base_path');
        // $activetheme = config('theme.active');
        // return redirect($location . '/' . $activetheme . '/');
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
        $block = $page->html;

    //   return view('pages.page',compact('block'));

        $pageHtml = view('pages.page',compact('block'))->render();

        $html = view('welcome')->render();
           return view('pages.edit', compact('page','html','pageHtml'));

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
            'theme_name' => config('theme.active'),
            'file_name' => $request['file_name'] . '.blade.php',
            'page_title' => $request['page_title'],
            'folder_name' => config('theme.active') . $request['folder_name'],
        ];

        $data['html'] = file_get_contents(config('theme.blank_template'));

        $folderLocation =  config('theme.base_path').$data['theme_name'];
        $fileLocation =  config('theme.base_path').$data['theme_name'] . '/' . $data['file_name'];
        // Check if the directory exists, if not, create it
        if (!File::exists($folderLocation)) {
            File::makeDirectory($folderLocation, 0755, true);
        }



        $page = Page::create($data);

        if ($page) {
            file_put_contents($fileLocation, $data['html']);
        }

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

        $block = $page->html;

    //   return view('pages.page',compact('block'));

        return view('pages.page',compact('block'))->render();

    }


}
