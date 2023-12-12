<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
   // app/Message.php

/**
 * A message belong to a user
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */

class Message extends Model
{
    use HasFactory;



 
public function user()
{
  return $this->belongsTo(User::class);
}

}
