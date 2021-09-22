<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Idea;

class IdeaStatusUpdatedMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $idea;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(idea $idea)
    {
        $this->idea = $idea;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('An idea you voted for has a new status')
        ->markdown('emails.idea-status-updated');
    }
}
