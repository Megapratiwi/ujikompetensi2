<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak';
    protected $primaryKey = 'id';

    public function handleUploadFotoKontak()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/Kontak";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }
}
