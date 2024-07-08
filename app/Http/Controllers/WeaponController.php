<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Weapons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class WeaponController extends Controller
{
    public function index()
    {
        //$data = Students::where('first_name','LIKE', '%er%')-> get();

        //$data = DB::table('students')
        //    ->select(DB::raw('count(*) as gender_count, gender
        //    '))-> groupBy('gender')->get();

        //$data = Students::where ('id', 101)->firstOrFail()->get();
        //, ['students' => $data]
        //return view ('students.index', ['students' => $data]);

        $data = array("weapons" => DB::table('weapons')->orderBy 
        ('created_at', 'desc')->simplePaginate(10));
        return view('weapon.indexw', $data);
    }

        // public function show($id){
        //      $data = Students::findOrFail($id);
        //      //dd($data);
        //     return view ('students.edit', ['students' => $data]);
        //     }
        
        public function show($id){
           if ($weapon = Weapons::findOrFail($id)){ 
            return view('weapon.editw', ['weapon' => $weapon]);
           }
        }
        
        
        public function create(){
            return view ('weapon.createw');
        }

        public function store(Request $request){    
            //
            //    return $user;

            $validated = $request->validate([ 
                "weapon_name" => ['required', Rule::unique('weapons', 'weapon_name')],
                "weapon_type" => ['required'],
                "rarity" => ['required'],
                "quantity" => ['required'],
            ]);
    
            //if(auth()-> attempt($validated)){
            //$request->session()->regenerate();
            //}    
             Weapons::create($validated);

             return redirect('/weapon/indexw')->with('message', 'New data has been added');
        }

        public function update(Request $request, Weapons $weapon){
            //dd($request);

            $validated = $request->validate([ 
                "weapon_name" => ['required'],
                "weapon_type" => ['required'],
                "rarity" => ['required'],
                "quantity" => ['required'],
            ]);

            $weapon->update($validated);

            return redirect('/weapon/indexw')->with('message', "Data has been successfully edited");
        }
        
        public function destroy(Weapons $weapon){
            $weapon->delete();
            return redirect('/weapon/indexw')->with('message', 'Data has been deleted');
        }
}
