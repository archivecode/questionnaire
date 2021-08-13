<x-app-layout>
    <form method="POST" action="{{ route('feedback.developer.store') }}">
        @csrf
        <h1 class="mt-2 mb-10 font-weight-bolder pb-2 border-b-2"><strong>Add Developer Feedback</strong></h1>
            <label for="customer">Select Developer</label>
            <div class="relative inline-flex">
                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                <select
                    name="developer"
                    id="developer"
                    class="w-150 border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
                >
                    <option></option>
                    @foreach($developers as $developer)
                        <option value="{{ $developer['id'] }}" {{ old('developer') == $developer['id'] ? 'selected="selected"': '' }}> {{ $developer['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <label for="developer" class="ml-5">Select Customer</label>

            <div class="relative inline-flex">
                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                <select
                    name="customer"
                    id="customer"
                    class="w-150 border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
                >
                    <option></option>
                    @foreach($customers as $customer)
                        <option value="{{ $customer['id'] }}" {{ old('customer') == $customer['id'] ? 'selected="selected"': '' }}> {{ $customer['name'] }}</option>
                    @endforeach
                </select>
            </div>
        <label for="date" class="ml-5">Date</label>

        <div class="relative inline-flex">
            {{--                TODO: set today as default is not working--}}
            <input type="date" name="date" id="date" value="{{ old('date') }}" class="rounded-full text-gray-600 h-10 pl-5 pr-10">
        </div>

        <div class="mt-15">
            @foreach ($questions as $question)
                <div class="">
                    <div class="relative inline-flex">
                        <p class="mt-5 py-5 px-2 bg-gray-300 border-gray-900 hover:bg-gray-200 rounded-2xl">Q-{{$counter}}: {{ $question['question'] }}</p>
                    </div>
                    <div class="relative inline-flex">
                        <span class="rating">
                            <input type="radio" id="star{{$question['id']}}_1" name="questions[{{$question['id']}}]" value="5" /><label class = "full" for="star{{$question['id']}}_1"></label>
                            <input type="radio" id="star{{$question['id']}}_2" name="questions[{{$question['id']}}]" value="4" /><label class = "full" for="star{{$question['id']}}_2"></label>
                            <input type="radio" id="star{{$question['id']}}_3" name="questions[{{$question['id']}}]" value="3" /><label class = "full" for="star{{$question['id']}}_3"></label>
                            <input type="radio" id="star{{$question['id']}}_4" name="questions[{{$question['id']}}]" value="2" /><label class = "full" for="star{{$question['id']}}_4"></label>
                            <input type="radio" id="star{{$question['id']}}_5" name="questions[{{$question['id']}}]" value="1" /><label class = "full" for="star{{$question['id']}}_5"></label>
                        </span>
                    </div>
                </div>
                @php $counter++ @endphp
            @endforeach
        </div>
        <div class="mt-5">
            <button type="submit"
                    class="px-8 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Submit
            </button>
        </div>
    </form>
</x-app-layout>
{{--TODO: move to separate files--}}
<style>
    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating > input { display: none; }
    .rating > label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating > .half:before {
        content: "\f089";
        position: absolute;
    }

    .rating > label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }

</style>

