<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
            redirect('/')->with('success', 'Cadastro na newsletter realizado');
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email cound not be added to our newsletter list.'
            ]);
        }

        
    }
}
