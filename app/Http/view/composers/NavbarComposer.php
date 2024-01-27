<?php
namespace App\Http\view\composers;

use Illuminate\view\view;
use App\Models\Contact;


class NavbarComposer
{
   public function compose(view $view){

    $unreadMessage = Contact::where('unreadMessage', 0)->count();
    $view->with('unreadMessage',$unreadMessage);

   }



}




