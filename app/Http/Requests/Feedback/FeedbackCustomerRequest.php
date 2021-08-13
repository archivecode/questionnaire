<?php

namespace App\Http\Requests\Feedback;

use App\Models\Feedback;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class FeedbackCustomerRequest extends FormRequest
{
    private $type = 'customer';

    public function rules(): array
    {

        return [
                'customer' => [
                    'required',
                ],
                'developer' => [
                    'required',
                ],
                'questions' => [
                    'required',
                ],
            ];
    }

    public function handle(array $request)
    {
        $feedbackId = Feedback::query()->insertGetId(
            [
                'customer_id' => $request['customer'],
                'developer_id' => $request['developer'],
                'type' => $this->type,
                'created_at' => $request['date'] ? $request['date'] : Carbon::now(),
            ]
        );

        foreach ($request['questions'] as $questionId => $rating) {
            Rating::query()->insert(
                [
                    'feedback_id' => $feedbackId,
                    'question_id' => $questionId,
                    'rating' => $rating,
                    'created_at' => $request['date'] ? $request['date'] : Carbon::now(),
                ]
            );
        }
    }
}
