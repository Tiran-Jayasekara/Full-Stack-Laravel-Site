<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\train;
use App\Models\bus;
//use App\Models\transfort;

class WelcomeController extends Controller
{
    public function gallery(){
        return view('gallery');
    }
    public function services(){
        return view('services');
    }
    public function index(){
        return view('index');
    }
    public function train(){
        return view('Train');
    }
    public function bus(){
        return view('bus');
    }
    public function contact(){
        return view('contact');
    }
    public function addData(Request $req){
        $user = new Contact;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->number = $req->number;
        $user->message = $req->message;

        $user->save();
        return redirect('contact');
    }
    public function addData2(Request $req){
        $user = new Contact;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->number = $req->number;
        $user->message = $req->message;

        $user->save();
        return redirect('index');
    }
   // public function feathData(){
     //   $data = train::where('to','kandy')->get();
    //    return view('kandy',['data' => $data]);
   // }
    public function trainn(Request $req){
       // $user = new train;

        //$user->to = $req->to;
        //$user->from = $req->from;
        //$user->starttime = '10AM';
        //$user->endtime = '4PM';
        //$user->salary = '200';

        //$user->save();


        $check = $req->to; 
        $check2 = $req->from;
        if ($check =='kandy' && $check2 =='matale' || $check =='KANDY' && $check2 =='MATALE' || $check =='Kandy' && $check2 =='Matale')  {
            //return redirect('kandy');
            $data = train::where('no',1)->get();
            return view('kandy',['data' => $data]);
         
            
        }
        else if ($check =='kandy' && $check2 =='nuwaraeliya' || $check =='KANDY' && $check2 =='NUWARAELIYA' || $check2 =='NUWARA ELIYA' || $check =='Kandy' && $check2 =='Nuwaraeliya' ) {
            //return redirect('kandy');
            $data = train::where('no',2)->get();
            return view('kandy',['data' => $data]);
         
            
        }
        else if ($check =='matale' && $check2 =='kandy' || $check =='MATALE' && $check2 =='KANDY' || $check =='Matale' && $check2 =='Kandy' ) {
            //return redirect('kandy');
            $data = train::where('no',3)->get();
            return view('kandy',['data' => $data]);
         
            
        }
        else if ($check =='matale' && $check2 =='nuwaraeliya' || $check =='MATALE' && $check2 =='NUWARAELIYA' || $check =='Matale' && $check2 =='Nuwaraeliya' ) {
            //return redirect('kandy');
            $data = train::where('no',4)->get();
            return view('kandy',['data' => $data]);
         
            
        }
        else if ($check =='nuwaraeliya' && $check2 =='kandy' || $check =='NUWARAELIYA' && $check2 =='KANDY' ) {
            //return redirect('kandy');
            $data = train::where('no',5)->get();
            return view('kandy',['data' => $data]);
         
            
        }
        else if ($check =='nuwaraeliya' && $check2 =='matale' || $check =='NUWARAELIYA' && $check2 =='MATALE' ) {
            //return redirect('kandy');
            $data = train::where('no',6)->get();
            return view('kandy',['data' => $data]);
         
            
        }
        
        
    }


    public function route(Request $req){
        
 
         $check = $req->to; 
         $check2 = $req->from;
         if ($check =='kandy' && $check2 =='matale' || $check =='KANDY' && $check2 =='MATALE' || $check =='Kandy' && $check2 =='Matale')  {
             //return redirect('kandy');
             $data = bus::where('no',1)->get();
             return view('busroute',['data' => $data]);
         }
         else if ($check =='kandy' && $check2 =='nuwaraeliya' || $check =='KANDY' && $check2 =='NUWARAELIYA' || $check2 =='NUWARA ELIYA' || $check =='Kandy' && $check2 =='Nuwaraeliya' ) {
            //return redirect('kandy');
            $data = bus::where('no',2)->get();
            return view('busroute',['data' => $data]);
         
            
        }
        else if ($check =='matale' && $check2 =='kandy' || $check =='MATALE' && $check2 =='KANDY' || $check =='Matale' && $check2 =='Kandy' ) {
            //return redirect('kandy');
            $data = bus::where('no',3)->get();
            return view('busroute',['data' => $data]);
         
            
        }
        else if ($check =='matale' && $check2 =='nuwaraeliya' || $check =='MATALE' && $check2 =='NUWARAELIYA' || $check =='Matale' && $check2 =='Nuwaraeliya' ) {
            //return redirect('kandy');
            $data = bus::where('no',4)->get();
            return view('busroute',['data' => $data]);
         
            
        }
        else if ($check =='nuwaraeliya' && $check2 =='kandy' || $check =='NUWARAELIYA' && $check2 =='KANDY' ) {
            //return redirect('kandy');
            $data = bus::where('no',5)->get();
            return view('busroute',['data' => $data]);
         
            
        }
        else if ($check =='nuwaraeliya' && $check2 =='matale' || $check =='NUWARAELIYA' && $check2 =='MATALE' ) {
            //return redirect('kandy');
            $data = bus::where('no',6)->get();
            return view('busroute',['data' => $data]);
         
            
        }
        
         
     }
    
}
