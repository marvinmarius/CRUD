<?php

namespace App\Http\Controllers;

use App\Http\Requests\Requesto;
use App\Repositories\StudentRepository;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{

    /**
     * @var StudentRepository
     */
    private $StudentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->StudentRepository = $studentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $students = $this->StudentRepository->all();
        return view('student.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requesto $request
     * @return Response
     */
    public function store(Requesto $request)
    {
   $student = array(

           'firstname' => $request->firstname,
           'lastname' => $request->lastname,
           'gender' => $request->gender,
           'country' => $request->country,
           'city' => $request->city,
           'address' => $request->address,
   );
        Student::create($student);
        return redirect()->route('index')->with('status' , 'student created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param Student $id
     * @return void
     */
    public function show($id)
    {
    $student = Student::where('id', $id)->first();
    return view('student.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        return view('student.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Student $student
     * @param $id
     * @return Response
     */
    public function update(Request $request, Student $student, $id)
    {
        $student = Student::where('id', $id)->first();
        $student->update($request->all());
        return redirect()->route('index')->with('status','etudiant mis a jour successivement.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Student $student
     * @param $id
     * @return void
     */
    public function destroy(Student $student, $id)
    {
        $student = Student::where('id', $id)->first();
        $student->delete();
        return redirect()->route('index')->with('status', 'contact supprimer avec succes ');

    }

}
