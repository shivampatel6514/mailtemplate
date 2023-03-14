<?php

namespace App\Http\Controllers;
use App\Models\Template;
use App\Jobs\SendEmailJob;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email(Request $req){
        $template = Template::find($req->template_id);
        
        $details['email'] = $req->email;
        $details['data'] = $template->content;
        dispatch(new SendEmailJob($details));
        
        // dd($template->content);
        dd('done');
    }
}
