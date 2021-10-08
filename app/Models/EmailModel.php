<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailModel extends Model
{
     public function emailtemp($data)
    {
        return url("files/".$this->hash."/".$this->name);
    }
}
