<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddJobRequest;
use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //
    public function addjob_form()
    {
        return view('home.addjob');
    }
    public function admin()
    {
        return view('admin.home');
    }


    public function add_job(Request $request)
    {
        $user = Auth()->user();
        $data=new Job;
        $data->category_id=$request->input('category');
        $data->user_id = $user->id;
        $data->title=$request->input('title');
        $data->type=$request->input('type');
        $data->description=$request->input('description');
        $data->location=$request->input('region');
        $data->benefits=$request->input('benefits');
        $data->qualification=$request->input('qualification');
        $data->vacancy=$request->input('vacancy');
        $data->keyword=$request->input('keyword');
        $data->salary=$request->input('salary');
        $data->deadline=$request->input('deadline');

        $photo=$request->photo;
        if ($photo) {
            $photoname=time().'.'.$photo->getClientOriginalExtension();
            $photo->move("product",$photoname);
            $data->photo=$photoname;
        } else {
            $data->photo = 'default.jpg'; // replace with your default image filename
        }

        $data->save();

        // return redirect()->back()->with('message','Job uploaded successfully');
        // Flash a success message to the session
        session()->flash('success', 'Job added Successfully');

        // Redirect back or wherever appropriate
        return redirect()->back();
    }

    public function view_jobs()
    {

        $data = Job::all();
        return view('jobs', compact( "data"));
    }

    public function job_details($id)
    {
        $job = Job::find($id);
        return view('home.job_details', compact('job'));
    }

    public function show($id)
    {
        $user = Auth::user();
        $job = Job::where('user_id', $user->id)->get();
        return view('job_details', compact('job'));
    }

    public function admin_jobs()
    {
        $user = Auth::user();
        $jobs = Job::where('user_id', $user->id)->get();
        return view('admin.admin_jobs', compact('jobs'));
    }

    public function addjob()
    {
        $categories = Category::all();
        return view('admin.addjob', ['categories' => $categories]);
    }

    public function delete_job($id) {
        // Find the job by ID
        $job = Job::find($id);

        if ($job) {
            // Find and delete applications related to this job
            Application::where('job_id', $job->id)->delete();

            // Then delete the job
            $job->delete();

            session()->flash('update', 'Job REMOVED Successfully! Thank You.');

            // Redirect back or wherever appropriate
            return redirect('/admin_jobs');
        }

        return redirect()->back()->with('error', 'Job not found.');
    }

    public function editjob(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $categories = Category::all();


        return view('admin.editjob', compact( 'job', 'categories')) ;
    }

//     public function update_job(Request $request, $id){
//         $job=job::find($id);

//         $job->title=$request->title;
//         $job->category_id=$request->input('category');
//         $job->type=$request->type;
//         $job->description=$request->description;
//         $job->location=$request->region;
//         $job->benefits=$request->benefits;
//         $job->qualification=$request->qualification;
//         $job->vacancy=$request->vacancy;
//         $job->keyword=$request->keyword;
//         $job->salary=$request->salary;
//         $job->deadline=$request->deadline;

//         $photo = $request->photo;
//         if ($photo) {
//             $photoname = time() . '.' . $photo->getClientOriginalExtension();
//             $photo->move("product", $photoname);
//             $job->photo = $photoname;
//         }


//         $job->save();

//         return redirect()->back()->with('message', 'Job updated successfully');

    public function update_job(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'category' => 'required',
            'type' => 'required',
            'region' => 'required',
            'title' => 'required',
            'description' => 'required',
            'qualification' => 'required',
            'vacancy' => 'required|numeric',
            'salary' => 'required',
            'benefits' => 'required',
            'keyword' => 'required',
            'deadline' => 'required|date',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $fileName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('product'), $fileName);
            $validatedData['photo'] = $fileName;
        }

        // Update the job record
        $job = Job::findOrFail($id);
        $job->update($validatedData);

        // Flash a success message to the session

        session()->flash('update', 'Job UPDATED successfully! Thank You.');

        // Redirect back or wherever appropriate
        return redirect('/admin_jobs');
    }

}
