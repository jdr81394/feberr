<?php

namespace Feberr\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
// Jake this must be fixed
class RobertsItems extends Model
{


    protected $connection = "mysql";
    protected $table = "robert_items";
    protected $fillable = [
        "name", "description",
        "price", "geometry", "polygons", "vertices", "textures", "materials",
        "rigged", "animated", "uvs_Mapped", "unwrapped_uvs"
    ];
    

    // Come back to this at a later date - Jake
    // public static function getAllMediaTypes() {
    //     $value = DB::table("media_type")->select("media_type")->get();
    //     return $value;
    // }

    // public static function getAllUnwrappedUvs() {
    //     $value = DB::table("unwrapped_uvs")->select("unwrapped_uvs")->get();
    //     return $value;
    // }

    public static function getAllGeometry() {
        $value = DB::table("geometry")->select("geometry")->get();
        return $value;
    }


}

