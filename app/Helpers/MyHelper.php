<?php
namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class MyHelper {
    public static function get_avatar($avatar, $empty_if_null = false)
    {
        // check existence of the file and is uploaded
        if($avatar != NULL)
        {
            return url(Storage::url($avatar));
        } else {
            if (!$empty_if_null) {
                return asset('theme-admin/assets/images/avatar.png');
            }
        }
    }

    public static function avatarUser($user)
    {
        if ($user->foto == NULL) {
            return '<span data-letters="'. MyHelper::inisialNama($user->nama ?? $user->name) .'"></span>';
        } else {
            return '<img src="'. MyHelper::get_avatar($user->foto) .'" alt=""
            class="img-thumbnail rounded-circle" style="max-width:90px">';
        }
    }

    public static function inisialNama($str) {
        $acronym = '';
        $word = '';
        $words = preg_split("/(\s|\-|\.)/", $str);
        foreach($words as $w) {
            $acronym .= substr($w,0,1);
        }
        $word = $word . $acronym ;
        return $word;
    }
}
