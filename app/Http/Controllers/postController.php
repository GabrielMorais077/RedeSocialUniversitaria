<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelPost;
use App\Models\User;
class postController extends Controller
{
    private $objUser;
    
    private $objPost;
    public function __construct()
{
    $this ->objUser=new User();
    
    $this ->objPost=new ModelPost();
}
    public function index()
    {
        $post=$this->objPost->all();
        return view('postindex',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
       
        return view('postagens',compact("users"));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objPost->create([
            'postagens'=>$request->postagens,
            'tipo'=>$request->tipo,
            'image'=>$request->image,
            'comentarios'=>$request->comentarios,
            'id_user'=>$request->id_user
            ]);
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")) . "." . $extension;
           $requestImage->move(public_path('img'), $imageName);
            $event->image = $imageName;
        }
      
        
        
        
        if($cad){
            
            return redirect('books');
       
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
        $del=$this->objPost->destroy($id);
        return($del)?"sim":"não";
    }
}
