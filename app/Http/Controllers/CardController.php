<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Datalist;
use Validator;
use Auth;

class CardController extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function addform($datalist_id){
        return view('card.add' ,['datalist_id' => $datalist_id]);
    }
    
    public function add(Request $request){
        $validate_rule = Validator::make($request->all(),[ 'cards_title' => 'required|max:100', 'memo' => 'required|max:140']);
            
        if( $validate_rule->fails() ){
                 return redirect()->back()->withErrors($validate_rule)->withInput();
        } 
        $cards = new Card;
        $cards->cards_title = $request->cards_title;
        $cards->memo = $request->memo;
        $cards->datalist_id = $request->datalist_id;
        $cards->save();
        return redirect('/');
   }
           public function show($datalist_id, $card_id){
             $cardlists = Card::find($card_id);  
             $datalists = Datalist::find($datalist_id);  
            return view('card.show' , ['cardlists' => $cardlists , 'datalists' => $datalists]);
    }
               public function edit($card_id){
             $cardlists = Card::find($card_id); 
            return view('card.edit' , ['cardlists' => $cardlists]);
    }  
            public function updata(Request $request){
                $validate_rule = Validator::make($request->all(),[
                    'cards_title' => 'required|max:100',
                    'memo' => 'required|max:100',
                    ]);
                    if( $validate_rule->fails() ){
                        return redirect()->back()->withErrors($validate_rule)->withInput();
                    }
                 $ups =  Card::find($request->id);
                 $ups->cards_title = $request->cards_title;
                 $ups->memo = $request->memo;
                 $ups->datalist_id = $request->datalist_id;
                 $ups->save();
            return redirect('/');
    } 
    public function destory($card_id){
        Card::find($card_id)->delete();
        return redirect('/');
    }
}
