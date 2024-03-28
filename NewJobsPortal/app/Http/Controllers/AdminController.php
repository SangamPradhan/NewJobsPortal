<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Job;
use App\Models\Application;

class AdminController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/admin.home')->with('success', 'Login successful!');
        }

        return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
    }

    public function widgets()
    {
        return view('admin.widgets');
    }

    public function admin_jobs()
    {
        return view('admin.admin_jobs');
    }

    public function adminlogin()
    {
        return view('admin.adminlogin');
    }

    public function view_category()
    {
        $data = category::all();
        return view('admin.category', compact( "data"));
    }

    public function add_category(Request $request)
    {
        $data=new category;
        $data->title=$request->input('category');
        $data->abbr=$request->input('abbr');
        $data->save();

        return redirect()->back()->with('message','Category added successfully');
    }

    public function delete_category($id){
        $data=category::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function applications()
    {
        $user = Auth::user();
        // Get the authenticated admin's ID
        $adminId = Auth::id();

        // Fetch applications related to jobs added by the authenticated admin
        $applications = Application::whereHas('job', function ($query) use ($adminId) {
            $query->where('user_id', $adminId);
        })->get();

        return view('admin.applications', compact('applications'));


    }


}
