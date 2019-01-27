<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth\RegisterController;

use App\Blog;


 use App\User;


class BlogController extends Controller
{

	public function __construct()

	{

		$this->middleware('auth');

	}

	public function index()

	{
	    $blogs = Blog::orderBy('created_at', 'desc')->get();

     

   		return view('blogs.index', compact('blogs'));


	}


    public function show(Blog $blog)

    {

    	return view('blogs.show', compact('blog'));


    }

    public function create()


    {

    	return view('blogs.create');


    }

    public function store()

    {

    	 $this->validate(request(), [


            'title' => 'required', 

            'body' => 'required'

         ]);

         Blog::create([

            'title' => request('title'),

            'body' => request('body'),

            'owner_id' => auth()->id()
         ]);

         flash('Your post has been successfully posted.');

         return redirect('/blog');
    	
    }

    public function validateProject()

    {
    	return request()->validate([

    		'title' => ['required', 'min:3'],

    		'body' => ['required', 'min:3']

    	]);




    }

   


}
