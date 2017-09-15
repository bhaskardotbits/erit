<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var User
     */
    protected $user;

    /**
     * String
     *
     * @var string
     */
    protected $password;

    /**
     * Create a new message instance
     *
     * @param User   $user
     * @param string $password
     */
    public function __construct(User $user, $password)
    {
        $this->user     = $user;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.user-created')->with([
                                                            'name' => $this->user->first_name . ' ' . $this->user->last_name,
                                                            'username' => $this->user->login_name,
                                                            'password' => $this->password,
                                                        ]);
    }
}
