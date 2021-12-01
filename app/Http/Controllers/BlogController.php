<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::orderBy('created_at','DESC')->first();
        $blogs = Blog::where('id','!=',$blog->id)->get();

        return view('front-end.index', compact('blog','blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.insert');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $data = new Blog();
        if($req->title != null || $req->text != null || $req->description != null || $req->img != null || $req->comment != null)
        {
            $data->title = $req->title;
            $data->text = $req->text;
            $data->description = $req->description;
            if($req->img != null){
                $imageName = "/" . time() . '.jpg';
                $req->img->move(public_path('uploads/'), $imageName);
                $data->img = $imageName;
            }
            $data->comment = $req->comment;
            $data->save();
		    return redirect('profile');
        } else {
            echo "<div class='alert alert-light'>Iltimos ma`lumot qo`shing!</div>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {

    // }

    public function show()
    {
        $DB = Blog::all();
        if (session()->has('admin')) {
            return view('back-end.index', ['blogs'=>$DB]);
        }else{
            return redirect('admin');
        }
    }

    // public function getData(Request $request)
    // {
    //     $data = [
    //         'id',
    //         'img',
    //         'description',
    //         'title',
    //         'text',
    //         'url'
    //     ];
    //     if($request->id){
    //         $blog = Blog::find($request->id);
    //         $data = [
    //             'id' => $blog->id,
    //             'img' => $blog->img,
    //             'title' => $blog->title,
    //             'description' => $blog->description,
    //             'text' => $blog->text,
    //             'url' => $blog->comment
    //         ];
    //     }
    //     return Response()->json($data);
    // }

    public function showBlog($id) {
        $DB = Blog::where('id', $id)->get();
        // $view = Blog::find($id);
        return view('front-end.view',['blogs'=>$DB]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $id)
    {
        $DB = Blog::find($id);

        if (session()->has('admin')) {
            return view('back-end.editblog', ['blogs'=>$DB]);
        }else{
            return redirect('admin');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    function update(Request $updateblog)
    {
		$data = Blog::find($updateblog->id);
		$data->title = $updateblog->title;
        $data->description = $updateblog->description;
		$data->text = $updateblog->text;

		if ($updateblog->img != null) {
            $imageName = "/" . time() . '.jpg';
            $path = $data->img;
		    unlink(storage_path('app/public'.$path));
            $updateblog->img->move(public_path('uploads/'), $imageName);
            $data->img = $imageName;
        } elseif ($updateblog->img == null) {
            echo "<div class='alert alert-light'>Iltimos ma`lumot qo`shing!</div>";
        }
		$data->comment = $updateblog->comment;
		$data->save();
		return redirect('profile');

	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
		$path =$data->img;
        if($data->img != null)
        {
            unlink(storage_path('app/public'.$path));
        }
		$data->delete();
		return redirect('profile');
    }
}
