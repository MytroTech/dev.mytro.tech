<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Contact;
use App\Models\Feedback;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ContactsController extends Controller
{
    /**
     * Show contacts page.
     *
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('frontend.contacts')->with('contacts', $contacts);
    }

    /**
     * Stores and sends feedback from user
     *
     * @param StoreFeedbackRequest $request
     * @return Response
     */
    public function feedback(StoreFeedbackRequest $request): Response
    {
        $feedback = new Feedback($request->only('name', 'phone', 'message'));
        $feedback->send();
        $feedback->save();

        return json_encode($feedback);//redirect()->route('contacts');
    }
}
