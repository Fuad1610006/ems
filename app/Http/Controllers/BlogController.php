<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $blog = Blog::all();
        return view('blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $blog=new Blog;
            $blog->name=$request->name;
            $blog->category=$request->category;
            $blog->author=$request->author;
            $blog->date=$request->date;
            $blog->share=$request->share;
            $blog->description=$request->description;
            $blog->comments=$request->comments;
              if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/blogs'), $imageName);
                $blog->image = $imageName;
            }
           if( $blog->save()){
             $this->notice::success('Successfully saved');
            return redirect()->route('blog.index');
           
           }else{
             $this->notice::error('Please try again!');
            return redirect()->back()->withInput();         
        }
    }catch(Exception $e){
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();        
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog=Blog::findOrFail(encryptor('decrypt', $id));
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         try{
            $blog=blog::findOrFail(encryptor('decrypt', $id));

            $blog->name=$request->name;
            $blog->category=$request->category;
            $blog->author=$request->author;
            $blog->date=$request->date;
            $blog->share=$request->share;
            $blog->description=$request->description;
            $blog->comments=$request->comments;
              if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/blogs'), $imageName);
                $blog->image = $imageName;}

            if($blog->save()){
                 $this->notice::success('Successfully updated');
                return redirect()->route('blog.index');
               
             }else{
                $this->notice::error('Please try again!');
                return redirect()->back()->withInput();               
            }
        }catch(Exception $e){
            //dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();           
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $blog= blog::findOrFail(encryptor('decrypt', $id));
        if($blog->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();        
        }
    }
}
