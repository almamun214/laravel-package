<?php
namespace Mamun\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mamun\Contact\Models\Contact;
use function view;

class  ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }
    public function create(){
        return view('contact::contact');
    }
    public function store(Request $request){

        Contact::create($request->all());



    }
}
