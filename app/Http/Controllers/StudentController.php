<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Students;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use PDF;

class StudentController extends Controller
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

        $data = array("students" => DB::table('students')->orderBy 
        ('created_at', 'desc')->simplePaginate(10));
        return view('students.index', $data);
    }

        // public function show($id){
        //      $data = Students::findOrFail($id);
        //      //dd($data);
        //     return view ('students.edit', ['students' => $data]);
        //     }
        
        public function show($id){
           if ($student = Students::findOrFail($id)){ 
            return view('students.edit', ['student' => $student]);
           }
        }
        
        
        public function create(){
            return view ('students.create');
        }

        public function store(Request $request){    
            //
            //    return $user;

            $validated = $request->validate([ 
                "first_name" => ['required', 'min:4'],
                "last_name" => ['required', 'min:4'],
                "gender" => ['required'],
                "age" => ['required'],
                "email" => ['required', 'email', Rule::unique('students', 'email')],
            ]);
    
            //if(auth()-> attempt($validated)){
            //$request->session()->regenerate();
            //}    
             Students::create($validated);

             return redirect('/')->with('message', 'New Students');
        }

        public function update(Request $request, Students $student){
            //dd($request);

            $validated = $request->validate([ 
                "first_name" => ['required', 'min:4'],
                "last_name" => ['required', 'min:4'],
                "gender" => ['required'],
                "age" => ['required'],
                "email" => ['required', 'email',],
            ]);

            // if($request->hasFile('medicine_image')){

            //     $request->validate([
            //         "medicine_image" => 'mimes:jpg,png,bmp,tiff | max:4096'
            //     ]);

            //     $filenameWithExtension = $request->file("medicine_image");

            //     $filename = pathinfo ($filenameWithExtension, PATHINFO_FILENAME);

            //     $extension = $request->file("medicine_image")
            //     ->getClientOriginalExtension();

            //     $filenameToStore = $filename .'_'.time().'.'.$extension;

            //     $smallThumbnail = $filename .'_'.time().'.'.$extension;

            //     $request->file('medicine_image')->storeAs('public/student', 
            //     $filenameToStore);

            //     $request->file("medicine_image")->storeAs('public/student/thumbnail',
            //     $smallThumbnail);

            //     $thumbNail = 'storage/student/thumbnail/' .
            //     $smallThumbnail;

            //     $this->createThumbnail($thumbNail, 150, 93);

            //     $validated ['medicine_image'] = $filenameToStore;
            // }

             $student->update($validated);

            return redirect('/')->with('message', "Data edit");
        }
        
        public function destroy(Students $student){
            $student->delete();
            return redirect('/')->with('message', 'Terminate');
        }

        public function createThumbnail($path, $width, $height)
        {
            
            $img = Image::make($path)->resize($width, $height, function
            ($constraint){
                $constraint->aspectRatio();

            });
            $img->save($path);
        }

        public function search()
        {
            $search_text = $_GET['query'];
            $student = Students::where('first_name', 'LIKE', '%'.$search_text.'%')->with('first_name')->get();

            // return view ('students.search', compact('student'));

            dd($search_text, $student);    
        }

        public function pdf_generator_get (Request $request)
        {
            // echo "PDF";die();
    
            $student = Students::get();
    
            $data = [
                'name' => 'welcome',
                'email' => 'welcome@gmail',
            ];
    
            $pdf = PDF::loadview('students/myPDF');
    
            return $pdf->download('errorsolutioncode.pdf');
        }

    }