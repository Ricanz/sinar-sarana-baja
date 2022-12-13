<?php
namespace App\Helpers;

use App\Models\Contact;

class Utils {
    public static function primary_address(){
        $primary_contact = Contact::where('status', 'inactive')->first();
        return $primary_contact->name;
    }
}