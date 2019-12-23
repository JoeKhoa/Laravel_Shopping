<?php

namespace App\Observers;

use App\customer;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param    User  $user
     * @return  void
     */
    public function created(Post $post)
    {
        echo "Bài viết :". $customer->name . "đã được tạo";
    }
}