<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mamun
 * Date: 10/12/2019
 * Time: 10:41 PM
 */

namespace Alfaj\Contactform\Http\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alfaj\Contactform\Models\ContactForm;


class ContactFormController extends Controller
{
    public function index()
    {
        return view('contactform::contactform.contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }
}
