<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $user =  DB::table('profile')->get();
        // foreach($user as $u)
        // {
        // echo $u->name;
        // }
        // dd($user);

        // dd(env('APP_URL'));
        // $posts = new Post;
        // $data = $posts->data();

        // Select, Insert, Update, Delete and Statement
        // $profile = DB::select('SELECT * from profile where id= :id', ['id'=>1]);
        $profile = DB::insert('INSERT INTO profile(`name`, `phone`, `city`, `country`, `role`) VALUES (:name, :phone, :city, :country, :role)',
        //   $profile = DB::update('update profile set phone = "585876" where id = :id', ['id' => 2]);
        // $profile = DB::delete('DELETE from profile where id = :id', ['id' => 3]);
        // $profile = DB::statement('DROP TABLE pk');
        ['name'=> 'zahid',
          'phone'=>'6686969',
          'city'=> 'Italy',
          'country'=>'pakistan',
          'role'=> 'admin'
    ]);
        dd($profile);
        return view('posts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        // if($request->hasFile('photo'))
        // // $filename = sprintf('text_%s.jpg',random_int(1,1000));
        // // $request->file('photo')->storeAs('image', $filename, 'public');
        // $data = ['name'=>'zahid', 'age=>24'];
        // return 'hello world';
        dd($request->all());
        return back()->with('message', 'your form has been sumitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =
        [
            'name' => 'zahid',
            'age' => 40
        ];

        return view('posts.show', compact('data'));
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
    public function update(StoreBlogPost $request, $id)
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
