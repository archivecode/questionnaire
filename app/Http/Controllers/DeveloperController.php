<?php

namespace App\Http\Controllers;

use App\Http\Requests\Feedback\FeedbackDeveloperRequest;
use App\Models\Customer;
use App\Models\Developer;
use App\Models\Question;
use Carbon\Carbon;

class DeveloperController extends Controller
{
    //

    public function index()
    {
        //
    }

    public function create()
    {
        $developers = Developer::all()->toArray();
        $customers = Customer::all()->toArray();
        $questions = Question::query()->where('type', 'developer')->get()->toArray();

        return view('feedback.developer.add', [
            'developers' => $developers,
            'customers' => $customers,
            'questions' => $questions,
            'counter' => 1,
            'default_date' => Carbon::now(),
        ]);
    }

    public function store(FeedbackDeveloperRequest $feedbackRequest)
    {

        $feedbackRequest->handle($feedbackRequest->request->all());

        return redirect()->route('feedback.developer.add')->with('status', 'Feedback submitted successfully');
    }
}
