<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Http\Request;
use App;
use App\Http\Requests;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $research = New App\Classes\Research();

        $data = array(
            'menu' => array('blog', 'blog.list'),
            'researches' => $research->getResearch(50, NULL)
        );

        return view('backend.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'title' => '新增',
            'menu' => array('blog', 'blog.create'),
            'research' => array(
                'title' => old('title'),
                'author' => old('author'),
                'short_desc' => old('short_desc'),
                'description' => old('description'),
                'publish_date' => old('publish_date'),
                'publish_time' => old('publish_time'),
                'status' => old('status'),
                'file_path' => ''
            ),
            'action' => 'bjsgadmin/blog'
        );

        return view('backend.blog.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate user input
        $this->validate($request, [
            'title' => 'required|max:20',
            'author' => 'required|max:10',
            'short_desc' => 'required|max:255',
            'description' => 'required',
            'publish_date' => 'required',
            'publish_time' => 'required',
            'status' => 'required|max:1'
        ]);

        //validate user file
        $uploaded_file = NULL;
        $isValidFile = FALSE;

        if ($request->hasFile('uploaded_file')) {

            $uploaded_file = $request->file('uploaded_file');

            $mimeType = $uploaded_file->getMimeType();

            $validFileType = array('png', 'pdf', 'jpeg');

            foreach($validFileType AS $fileType) {

                if(strpos($mimeType, $fileType)) {
                    $isValidFile = TRUE;
                }

            }

            if($isValidFile) {

                $alternative_path = 'document/research/';
                $destination_path = public_path().'/'.$alternative_path;
                $filename = $uploaded_file->getClientOriginalName();
                $fileExtension = $uploaded_file->getClientOriginalExtension();

                $filename = $this->checkFileName($destination_path, $filename, $fileExtension, 0);

                $uploaded_file->move($destination_path, $filename);

            } else {

                return redirect('bjsgadmin/blog/create')->with('errors', 'File upload failed!');

            }

        }

        $research = new App\Research;
        $research->title = $request->title;
        $research->author = $request->author;
        $research->short_desc = $request->short_desc;
        $research->description = $request->description;
        $research->publish_date = $request->publish_date;
        $research->publish_datetime = $request->publish_date.' '.$request->publish_time;
        $research->status = $request->status;

        if($isValidFile) {
            $research->file_path = $alternative_path.$filename;
        }

        $research->save();

        return redirect('bjsgadmin/blog')->with('alert-success', 'Research was successful added!');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$research = App\Research::find($id);

        $data = array(
          'research' => $research,
        );

        return view('backend.blog.post', $data)*/;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $research = App\Research::find($id);

        if(old('title') === NULL) {
            $publish_time = substr($research->publish_time, 11, -1);

            $research = array(
                'title' => $research->title,
                'author' => $research->author,
                'short_desc' => $research->short_desc,
                'description' => $research->description,
                'publish_date' => $research->publish_date,
                'publish_time' => $publish_time,
                'status' => $research->status,
                'file_path' => $research->file_path
            );
        } else {
            $research = array(
                'title' => old('title'),
                'author' => old('author'),
                'short_desc' => old('short_desc'),
                'description' => old('description'),
                'publish_date' => old('publish_date'),
                'publish_time' => old('publish_time'),
                'status' => old('status'),
                'file_path' => $research->file_path
            );
        }

        $data = array(
            'title' => '修改',
            'menu' => array('blog', 'blog.list'),
            'research' => $research,
            'formMethod' => 'PUT',
            'action' => 'bjsgadmin/blog/'.$id
        );

        return view('backend.blog.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:20',
            'author' => 'required|max:10',
            'short_desc' => 'required|max:255',
            'description' => 'required',
            'publish_date' => 'required',
            'publish_time' => 'required',
            'status' => 'required|max:1'
        ]);

        //validate user file
        $uploaded_file = NULL;
        $isValidFile = FALSE;

        if ($request->hasFile('uploaded_file')) {

            $uploaded_file = $request->file('uploaded_file');

            $mimeType = $uploaded_file->getMimeType();

            $validFileType = array('png', 'pdf', 'jpeg');

            foreach($validFileType AS $fileType) {

                if(strpos($mimeType, $fileType)) {
                    $isValidFile = TRUE;
                }

            }

            if($isValidFile) {

                $alternative_path = 'document/research/';
                $destination_path = public_path().'/'.$alternative_path;
                $filename = $uploaded_file->getClientOriginalName();
                $fileExtension = $uploaded_file->getClientOriginalExtension();

                $filename = $this->checkFileName($destination_path, $filename, $fileExtension, 0);

                $uploaded_file->move($destination_path, $filename);

            } else {

                return redirect('bjsgadmin/blog/create')->with('errors', 'File upload failed!');

            }

        }

        $research = App\Research::find($id);
        $research->title = $request->title;
        $research->author = $request->author;
        $research->short_desc = $request->short_desc;
        $research->description = $request->description;
        $research->publish_date = $request->publish_date;
        $research->publish_datetime = $request->publish_date.' '.$request->publish_time;
        $research->status = $request->status;

        if($isValidFile) {
            $research->file_path = $alternative_path.$filename;
        }

        $research->save();

        return redirect('bjsgadmin/blog')->with('alert-success', 'Research was successful updated!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $research = App\Research::findOrFail($id);
        $title = $research->title;
        $research->status = 4;
        $research->save();

        return redirect('bjsgadmin/blog')->with('alert-warning', '"<b>'.$title.'<b>" 已被成功刪除');;
    }

    public function message() {
        return [
          'title.required' => 'Title failed',
          'author.required' => 'Author failed',
          'description.required' => 'Description failed',
        ];
    }

    public function rules() {
        return [
            'title' => 'required|max:10',
            'author' => 'required|max:20',
            'description' => 'required|max:50'
        ];
    }

    public function checkFileName($destination_path, $filename, $fileExtension, $count = 0) {

        $file_path = $destination_path.$filename;

        if(file_exists($file_path)) {

            $count ++;
            $pos = strpos($filename, $fileExtension);

            if($count == 1) {
                $filename = substr($filename, 0, $pos-1).'_'.$count.'.'.$fileExtension;
            } else {
                $filename = substr($filename, 0, $pos - 2).$count.'.'.$fileExtension;
            }

            return $this->checkFileName($destination_path, $filename, $fileExtension, $count);

        }

         return $filename;

    }
}
