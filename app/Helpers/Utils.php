<?php
namespace App\Helpers;

use App\Models\Contact;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class Utils {
    public static function primary_address(){
        $primary_contact = Contact::where('status', 'inactive')->first();
        return $primary_contact->name;
    }

    public static function save_compress_image($image, $folder){
        $img = Image::make($image);
            $img->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $name_image = $folder."_".Str::random(8).time().".jpg";
            Storage::put("public/image/$folder/$name_image", $img->encode());
            
            $txt = "storage/image/" . $folder . "/" . $name_image;
            return($txt);
    }
}