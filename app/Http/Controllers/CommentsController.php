<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store()
    {
        $attrs = $this->validateComment();

        Comment::create($attrs);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		}

		/**
		 *
		 * Validating form data provided by view.
		 */
		public function validateComment(): array
	 	{ 
				$validatedAttrs = request()->validate([
					'name' => 'required',
					'message' => 'required',
					'id' => 'required',
					'created_at' => '',
					'level' => '',
					'slug' => 'required',
					'posts_id' => 'required'
				]);
 
        return $validatedAttrs;
		}
}
