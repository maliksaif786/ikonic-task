<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::orderby("id","desc")->get();
        return view("admin.feedback.index", compact("feedbacks"));
    }


    public function edit($id)
    {
        $feedback = Feedback::find($id);
        $categories = Category::all();
        return view("admin.feedback.edit", compact("feedback","categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $feedback = Feedback::find($id);
        $feedback->title = $request->title;
        $feedback->description = $request->description;
        $feedback->category_id = $request->category_id;
        $feedback->save();

        toastr()->success('Feedback Updated successfully');
        return redirect('feedbacks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();

        toastr()->error('Feedback Deleted successfully');
        return redirect('feedbacks');
    }
}
