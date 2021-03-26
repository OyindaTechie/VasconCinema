<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AlertUsers extends Notification
{
    use Queueable;
    public $ticket;
    public $email;
    public $destination;
    public $source;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($ticket_id, $email, $destination, $source)
    {
        $this->ticket = $ticket_id;
        // $this->url = $url;
        $this->email = $email;
        $this->destination = $destination;
        // $this->url = $url;
        $this->source = $source;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->greeting('Hello! '.$this->email) 
        ->line('Your ticket has been generated, your ticket id is '.$this->ticket)
        ->line('Your source is '. $this->destination)
        ->line('Your destination is '.$this->source)
        ->action('Check it out', url('/'))
        ->line('Best regards!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
