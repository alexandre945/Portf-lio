<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Models\PortifolioModel;

class PortfolioController extends Controller
{
 
//    private $data;

//    public function __construct()
//    {
//        $this->data=new PortifolioModel();
//    }



    public function index()
    {
        return view('Portfolios.index');
    }
    public function user()
     {
         return view('Portfolios.user');
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
        return view('user.message');
    }

 
    public function store(Request $request)
    {
        
      PortifolioModel::create([
          'name' => $request->name,
          'subject'=> $request->subject,
          'assessment'=> $request->assessment,
        
      ]);
      dd('aqui');
    //    dd(PortifolioModel());
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

    public function destroy($id)
    {
        //
    }
}
