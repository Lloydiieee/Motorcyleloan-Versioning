<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postModel;
use App\Models\categoryModel;

use Illuminate\Support\Facades\Storage;

class postController extends Controller
{

    public static function index(Request $request)
    {
        $filter = $request->input('filter');

        if ($filter) {
            $pages = postModel::where('post_isDeleted', null)
                ->where('post_category', 'LIKE', '%"' . $filter . '"%')
                ->get();
        } else {
            $pages = postModel::where('post_isDeleted', null)
                ->get();
        }

        $categories = categoryModel::get();

        return view('pages.lender.products')->with(['pages' => $pages, 'categories' => $categories]);
    }

    public static function trash(Request $request)
    {
        $filter = $request->input('filter');

        if ($filter) {
            $pages = postModel::where('post_isDeleted', 0)
                ->where('post_category', 'LIKE', '%"' . $filter . '"%')
                ->get();
        } else {
            $pages = postModel::where('post_isDeleted', 0)
                ->get();
        }

        $categories = categoryModel::get();

        return view('cms.post.trash')->with(['pages' => $pages, 'categories' => $categories]);
    }

    public static function create()
    {
        $categories = categoryModel::get();
        return view('pages.lender.products-new')->with(['categories' => $categories]);
    }

    public static function content($id)
    {
        $info = postModel::find($id);
        $categories = categoryModel::get();
        return view('cms.post.content')->with(['info' => $info, 'categories' => $categories]);
    }


    public static function save(Request $request)
    {
        date_default_timezone_set('Asia/Manila');
    
        // Validate the request
        $request->validate([
            'inp_title' => 'required|string',
            'inp_category' => 'required|array',
            'inp_content' => 'required|string',
            'inp_comments' => 'nullable|string',
            'inp_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate file input
        ]);
    
        // Handle the file upload using Laravel Storage
        if ($request->hasFile('inp_thumbnail')) {
            $file = $request->file('inp_thumbnail');
            $path = $file->store('motorcycles', 'public'); // Save the file in 'public/motorcycles'
    
            postModel::create([
                'post_title' => $request->input('inp_title'),
                'post_category' => json_encode($request->input('inp_category', [])),
                'post_content' => $request->input('inp_content'),
                'post_comment' => $request->input('inp_comments'),
                'post_isActive' => 'on',
                'post_thumbnail' => $path, // Store the path to the file
                'post_by' => 1
            ]);
            return redirect('/post/list');
        } else {
            return redirect('/404')->with('error', 'File upload failed');
        }
    }
    

    public static function update(Request $request)
    {
        date_default_timezone_set('Asia/Manila');

        if ($request->has('move_to_trash')) {           
            postModel::where('post_id', $request->input('inp_id'))->update([
                'post_isDeleted' => 0,
            ]);
            return redirect('/post/list')->with(['trash' => $request->input('inp_title')]);
        } else {
            if (isset($_FILES['inp_thumbnail']) && $_FILES['inp_thumbnail']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/';
                $uploadFile = $uploadDir . basename($_FILES['inp_thumbnail']['name']);


                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                if (move_uploaded_file($_FILES['inp_thumbnail']['tmp_name'], $uploadFile)) {
                    postModel::where('post_id', $request->input('inp_id'))->update([
                        'post_title' => $request->input('inp_title'),
                        'post_category' => $request->input('inp_category'),
                        'post_content' => $request->input('inp_content'),
                        'post_isActive' => $request->input('inp_status'),
                        'post_thumbnail' => $uploadFile,
                        'post_by' => 1
                    ]);
                    return redirect('/post/list')->with(['status' => 'success']);
                } else {
                    return redirect('/404');
                }
            } else {
                postModel::where('post_id', $request->input('inp_id'))->update([
                    'post_title' => $request->input('inp_title'),
                    'post_category' => $request->input('inp_category'),
                    'post_content' => $request->input('inp_content'),
                    'post_isActive' => $request->input('inp_status'),
                    'post_by' => 1
                ]);
                return redirect()->back()->with(['status' => 'success']);
            }
        }
    }

    public static function trash_bin(Request $request)
    {
        if ($request->has('restore_post')) {
            postModel::where('post_id', $request->input('inp_id'))->update([
                'post_isDeleted' => null,
            ]);
            return redirect('/post/content/' . $request->input('inp_id'))->with(['restore' => 'success']);
        } else {
            postModel::where('post_id', $request->input('inp_id'))->delete();
            return redirect('/post/trash')->with(['status' => $request->input('inp_title')]);
        }
    }
}
