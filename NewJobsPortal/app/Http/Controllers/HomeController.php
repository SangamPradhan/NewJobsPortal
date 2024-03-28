<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\Category;
use App\Models\Application;
class HomeController extends Controller
{
    public function index()
    {
        $user = User::all();
        $data = Job::all();
        return view('home.userpage', compact('user', 'data'));
    }

    public function redirect()
    {

        $type = Auth::user()->role;
        if ($type == "2") {
            return view('admin.home');
        } else {
            $user = User::all();
            $data = Job::all();
            return view('home.userpage', compact('data'));
        }

    }
    public function logout()
{
    Auth::logout();

    // Redirect to the desired page after logout
    return redirect('/'); // You can change this to redirect wherever you want
}

public function jobs()
    {
        $data=Job::paginate(3);
        $categories = Category::all();

        // Pass data to the view
        return view('home.jobs', compact('data', 'categories'));
    }

    public function slider()
    {
        $data=Job::paginate(3);
        return view('/', compact( 'data'));
    }

    public function details()
    {
        return view('home.details');
    }

    public function about()
    {
        return view('home.about');
    }

    public function blogs()
    {
        return view('home.blogs');
    }

    public function contactus()
    {
        return view('home.contactus');
    }

    public function teams()
    {
        return view('home.teams');
    }

    public function moretestimonials()
    {
        return view('home.moretestimonials');
    }
    public function moreterms()
    {
        return view('home.moreterms');
    }

    public function profile($id){
        $user = User::find($id);
        return view('home.profile');
    }


    public function admin()
    {
        return view('admin.home');
    }

    public function paginate()
    {
        $jobs = Job::all();
        $jobs = Job::orderBy('created_at', 'desc')->paginate(3);
    }

    public function applied_jobs()
    {
        $user = Auth::user();
        $jobs = Job::all();

        // Retrieve applications only for the logged-in user
        $applications = Application::byUser($user->id)->get();

        $applications->load('job');
        return view('home.applied_jobs', compact('applications', 'user', 'jobs'));
    }

    public function searchByCategory(Request $request)
    {
        $categoryId = $request->input('category');
        if ($categoryId == 0) {
            // If no category is selected, redirect back to the jobs page
            return redirect()->route('jobs');
        }

        $category = Category::findOrFail($categoryId);
        $jobs = $category->jobs()->paginate(3); // Assuming you have defined a relationship between Category and Job models
        return view('home.jobs', compact('jobs'));
    }



}
