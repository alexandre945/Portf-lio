<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\PortifolioModel;

class PortfolioController extends Controller
{
 
   private $data;

   public function  __construct()
   {
       $this->data = new PortifolioModel();
   }



    public function index()
    {
       
        return view('Portfolios.index');
    }
    public function user()
     {
         $data = $this->data->all();
         return view('Portfolios.user', compact('data'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Portfolios.create');

    }

    public function challeng()
    {
        return view('Portfolios.challeng');
    }
    public function message()
    {
        $data = $this->data->all();
        return view('user.message', compact('data'));
    }

 
    public function store(UserRequest $request)
    {
     $data=[
         'name'=>$request->name,
         'subject'=>$request->subject,
         'assessment'=>$request->assessment,
     ];
     PortifolioModel::create($data);

     return redirect()->route('user.create');
   
    
    }

    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
       
        
        $data = $this->data->find($id);
        $data->delete($data);
        return redirect()->route('user.create');
    }
}