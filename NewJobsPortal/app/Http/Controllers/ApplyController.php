<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;


class ApplyController extends Controller
{
    public function apply_job(Request $request,$id)
    {
        $user=Auth::user();
        $job=Job::find($id);
        // $application = new application();

        // $application->user_id = $user->id;



        $user_id = auth()->user()->id;
        $applicant_name = auth()->user() ? auth()->user()->name : '';
        $job_id = $request->input('job_id');
        $job_title = $job->title;
        $status = 'pending';

        $data = [
            'user_id' => $user_id,
            'applicant_name'=>$applicant_name,
            'job_id' => $job_id,
            'job_title' => $job_title,
            'status' => $status,
        ];

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/attachments', $filename);
            $data['attachment'] = '/storage/attachments/' . $filename;
        } else {
            $data['attachment'] = null;
        }

        $data['cover_letter'] = $request->input('cover_letter');

        Application::create($data);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function accept($id)
    {
        $application = Application::findOrFail($id);
        $application->status = 'Accepted';
        $application->save();

        return redirect()->back()->with('success', 'Application accepted successfully.');
    }

    public function reject($id)
    {
        $application = Application::findOrFail($id);
        $application->status = 'Rejected';
        $application->save();

        return redirect()->back()->with('success', 'Application rejected successfully.');
    }
}
