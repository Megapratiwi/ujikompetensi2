<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Klien extends Model
{
    use HasFactory;

    protected $table = 'klien';
    protected $primaryKey = 'id';

    public function handleUploadFotoKlien()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/Klien";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }
}
