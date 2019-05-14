<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() //litmus 
    {
        return $this
            ->subject("Artículo creado exitosamente")
            ->from('hack.academy.test@gmail.com', 'Hack Academy Blog')
            ->view('emails.postCreated')->with([
                'post' => $this->post
            ]);
    }
}
