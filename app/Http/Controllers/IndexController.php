<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datalist;
use App\Card;
use Validator;
use Auth;

class IndexController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $lists = Datalist::where('user_id', Auth::user()->id)->get();
        return view('index.index' , ['lists' => $lists]);
    }
    
        public function addform(){
        return view('index.add');
    }
    
        public function add(Request $request){
            $validate_rule = Validator::make($request->all(),[ 'title' => 'required|max:100',]);
            
             if( $validate_rule->fails() ){
                 return redirect()->back()->withErrors($validate_rule)->withInput();
             }  
             $adds = new Datalist;
             $adds->title = $request->title;
             $adds->user_id = Auth::user()->id;
             $adds->save();
             return redirect('/');
            }
            
        public function edit($datalist_id){
            $lists = Datalist::find($datalist_id);
            return view('index.edit' , ['lists' => $lists]);
    }      
    
            public function updata(Request $request){
            $validate_rule = Validator::make($request->all(),[ 'title' => 'required|max:100',]);
            
             if( $validate_rule->fails() ){
                 return redirect()->back()->withErrors($validate_rule)->withInput();
             }  
             $updata = Datalist::find($request->id);
             $updata->title = $request->title;
             $updata->id = $request->id;
             $updata->save();
             return redirect('/');
            }
            
            public function destroy($data_id){
            Datalist::find($data_id)->delete();
             return redirect('/');
    }   
    public function logout(Request $request){
        Auth::logout();
        return redirect('login');
        
    }
    
}
