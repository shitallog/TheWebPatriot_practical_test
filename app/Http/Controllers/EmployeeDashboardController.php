<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\pagination\paginator;
class EmployeeDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        $employees = Employee::all();
       // $employees = Employee::paginate(2);
        $employees = Employee::query()
        //->when($request->name, fn($q, $name) => $q->where('name', 'like', "%{$name}%"))
        ->paginate(10)
        ->withQueryString();

        return view('dashboard.index', compact('employees'));
    }
        
    
    /**
     * Show the form for creating a new resource.
     */
    public function generateCsv(request $request)
    {
            $data  = Employee::latest()->get();
            $filename = "application.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array(
                'name',
                'date_of_birth',
                'date_of_joining',
                'gender',
                'designation',
                'manager',
                'employee_picture',
                'password',
                'email',
                           ));

            foreach($data as $row) {
                fputcsv($handle, array( $row['name'],
                                        $row['date_of_birth'],
                                        $row['date_of_joining'],
                                        $row['gender'],
                                        $row['designation'],
                                        $row['manager'],
                                        $row['employee_picture'],
                                        $row['password'],
                                        $row['email'],
                                        ));
            }
            fclose($handle);
            $headers = array('Content-Type' => 'text/csv');
            return response()->download($filename, 'application.csv', $headers);
    }








    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'date_of_birth' => 'required|date',
            'date_of_joining' => 'required|date',
            'gender' => 'required|string',
            'designation' => 'required|string',
            'manager' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|email|unique:employees',
        ]);

        // Create a new employee record
	//	$employee = new Employee($request->all());
       $employee = Employee::create($request->all());
       // $employee->save();
      return  redirect()->route('dashboard.index')->with('success', 'Employee added successfully');
		
		
		
		
		// Validation logic here

   //    $employee = new Employee($request->all());
      //  $employee->save();

       //return redirect()->route('dashboard.index')->with('success', 'Employee created successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('dashboard.show', compact('employee'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('dashboard.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation logic here

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Employee updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('dashboard.index')->with('success', 'Employee deleted successfully!');
    }
}
