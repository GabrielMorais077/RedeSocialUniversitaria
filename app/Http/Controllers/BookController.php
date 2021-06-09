<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Models\ModelPost;
use App\Models\User;
class BookController extends Controller
{
    private $objUser;
    private $objBook;
    private $objPost;
    
    public function __construct()
{
    $this ->objUser=new User();
    $this ->objBook=new ModelBook();
    $this ->objPost=new ModelPost();
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=$this->objPost->all();
        $book=$this->objBook->all();
        return view('index',compact('book','post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
       
        return view('create',compact("users"));
       
        

        
    }
   


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objBook->create([
            'evento'=>$request->evento,
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'link'=>$request->link,
            'texto'=>$request->texto,
            'id_user'=>$request->id_user
            
        ]);
       
        if($cad){
            return redirect('books')->with('msg', 'Evento criado com sucesso!');
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
        $book=$this->objBook->find($id);
       return view('visuali',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=$this->objBook->find($id);
        $users=$this->objUser->all();
        return view('create',compact('book', 'users'));
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
       
        $this->objBook->where(['id'=>$id])->update([
            'evento'=>$request->evento,
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'link'=>$request->link,
            'texto'=>$request->texto,
            'id_user'=>$request->id_user
        ]);
        return redirect("books");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objBook->destroy($id);
        return($del)?"sim":"não";
    }
}
