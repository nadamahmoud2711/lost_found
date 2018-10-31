<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Post;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        $post->lost = $request->lost;
        $post->gender = $request->gender;
        $post->description = $request->notes;
        $post->city = $request->city;
        $post->area = $request->area;
        $post->location_description = $request->place_sign;
        $post->age_to = $request->age;
        $post->name = $request->name;

        $date = $request->lost_date;
        $month = substr($date,0,2);
        $day = substr($date,3,2);
        $year = substr($date,6,4);
        $post->lost_or_found = $year.'-'.$month.'-'.$day;

        $post->user_id =auth()->user()->id;

        if($post->save()){

            if(isset($request->attachment) && !empty($request->attachment)){
                $files = $request->attachment ;
                foreach ($files as $file){
                    $name = $file->getClientOriginalName();
                    $file_name = pathinfo($name, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $name = $file_name .'_'. time() . '.'.$extension;
                    $file->storeAs('public/files', $name);

                    $photo = new Photo;
                    $photo->post_id = $post->id;
                    $photo->additional = 0;

                    $photo->path = $name;

                    $photo->save();

                }
            }


            return 'done';
        }else{

            return 'error';
        }


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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
