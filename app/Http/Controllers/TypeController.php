<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Task;

class TypeController extends Controller
{
    public function catcreate(Request $request){
        $incomingFields = $request->validate([
            'Type' => 'required'
        ]);

        $incomingFields['UserID'] = auth()->id();
        Type::create($incomingFields);
        return redirect('/categories');
    }
    
    public function show(Type $type) {
        $type=Type::where('id',$type->id)->first();
        $Titles = Task::where('Category', $type['Type'])->get();
        return view('catshow', ['type' => $type], ['Titles' => $Titles->pluck('Title')]);

    }
    public function deletetype(Type $type) {
            $type->delete();
        return(redirect('/categories'));
    }
    public function catsearch(Request $request){
        $insearch=$request->validate([
            'Type' => 'required'
        ]);
        $types = Type::where(function ($query) use ($insearch) {
            foreach ($insearch as $search) {
                $query->orWhere('Type', 'LIKE', '%' . $search . '%');
            }
        })
        ->where('UserID', auth()->id())
        ->get();
        return view('catsearch', ['types' => $types]);

    }
    public function catshowall(){
        $types=Type::where('UserID',auth()->id())->get();
    return view('catsearch', ['types' => $types]);
    }
 
}
