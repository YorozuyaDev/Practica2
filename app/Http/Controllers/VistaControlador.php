<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resources = [];
        
        if($request->session()->exists('resources')) {
            $resources = $request->session()->get('resources');
        }
        $data = [];
        $data['resources'] = $resources;
        return view('resource.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resource.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $resources = [];
        if($request->session()->exists('resources')) {
            $resources = $request->session()->get('resources');
        }
        $maxid = 0;
        foreach($resources as $resource ) {
            if($resource['id']>$maxid){
                $maxid= $resource['id'];
            }
        }
        $id = $maxid+1;
        $resource = ['id' => $id, 'name' => $name, 'price' => $price ];
        if(isset($resources[$id])) {
            return back()->withInput();
        } else {
            $resources[$id] = $resource;
        }
        $request->session()->put('resources', $resources);
        return redirect('resource');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
         if($request->session()->exists('resources') && isset($request->session()->get('resources')[$id])) {
            $resource = $request->session()->get('resources')[$id];
            $data = [];
            $data['resource'] = $resource;
            return view('resource.show', $data);
        }
        return redirect('resource');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if($request->session()->exists('resources') && isset($request->session()->get('resources')[$id])) {
            $resource = $request->session()->get('resources')[$id];
            $data = [];
            $data['resource'] = $resource;
             return view('resource.edit', $data);
            
        } else {
            return abort(404);
        }
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
       if($request->session()->exists('resources')) {
            $resources = $request->session()->get('resources');
            $name = $request->input('name');
            $price = $request->input('price');
            if((gettype($name)=="string") and (is_numeric($price))){
              $resource['id'] = $id;
              $resource['name'] = $name;
                $resource['price'] = $price;
                $resources[$id] = $resource;
               $request->session()->put('resources', $resources);
                return redirect('resource');
            }
            else {
                return back();
            }
       } else {
           return back();
           
       }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
       
        if($request->session()->exists('resources')) {
            $resources = $request->session()->get('resources');
            if(isset($resources[$id])) {
                unset($resources[$id]);
                $request->session()->put('resources', $resources);
            }
        }
        return redirect('resource');
    }
    
    
    function flush(Request $request) {
        $request -> session() -> flush();
         return redirect('resource');
    }
}
