<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';
    protected $primaryKey = 'id';

    public function handleUploadFotoAboutUs()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/AboutUs";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }
}
