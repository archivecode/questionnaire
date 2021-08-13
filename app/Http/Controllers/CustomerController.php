<?php

namespace App\Http\Controllers;

use App\Http\Requests\Feedback\FeedbackCustomerRequest;
use App\Models\Customer;
use App\Models\Developer;
use App\Models\Question;
use Carbon\Carbon;

class CustomerController extends Controller
{
    //

    public function index()
    {
        //
    }

    public function create()
    {
        $customers = Customer::all()->toArray();
        $developers = Developer::all()->toArray();
        $questions = Question::query()->where('type', 'customer')->get()->toArray();
        return view('feedback.customer.add', [
            'customers' => $customers,
            'developers' => $developers,
            'questions' => $questions,
            'counter' => 1,
            'default_date' => Carbon::now(),
        ]);
    }

    public function store(FeedbackCustomerRequest $feedbackRequest)
    {

        $feedbackRequest->handle($feedbackRequest->request->all());

        return redirect()->route('feedback.customer.add')->with('status', 'Feedback submitted successfully');
    }
}
