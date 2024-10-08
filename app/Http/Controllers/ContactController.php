<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    // public function submit(Request $req){
    //     $validation = $req->validate([
    //         'name' => 'required|min:5|max:40',  
    //         'mail' => 'required|min:5|max:80|email',  
    //         'subject' => 'required|min:5|max:50',
    //         'message' => 'required|min:10|max:500'
    //     ]);
    // }
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();

        return redirect()->route('contact')->with('success', 'Ваше сообщение отправлено');
    }

    public function allData(){
        // dd(Contact::all());
        // dd($contact -> all());

        $contact = new Contact;
        return view('messages', ['data' => $contact -> orderBy('id', 'asc') -> take(5) -> get()]);
    }

    public function showOneMessage($id){
        $contact = new Contact;
        return view('one-message', ['data' => $contact -> find($id)]);
    }

    public function updateMessage($id){
        $contact = new Contact;
        return view('update-message', ['data' => $contact -> find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req){
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Ваше сообщение обновлено');
    }

    public function deleteMessage($id){
        Contact::find($id) -> delete();
        return redirect()->route('contact-data')->with('success', 'Ваше сообщение удалено');
    }
}
