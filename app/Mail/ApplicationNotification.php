<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $email,$name,$phone_number,$lga,$volume_sold,$amount_due,$price_per_kg,$bank_id,$account_number,$account_name,$application_id,$status,$authorized,$approved;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name,$phone_number,$lga,$volume_sold,$amount_due,$price_per_kg,$bank_id,$account_number,$account_name,$application_id,$status,$authorized,$approved)
    {
        //
        $this->email = $email;
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->lga = $lga;
        $this->volume_sold = $volume_sold;
        $this->amount_due = $amount_due;
        $this->price_per_kg = $price_per_kg;
        $this->bank_id = $bank_id;
        $this->account_number = $account_number;
        $this->account_name = $account_name;
        $this->application_id = $application_id;
        $this->status =$status;
        $this->authorized = $authorized;
        $this->approved = $approved;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ApplicationNotification')->subject(" New ".config('app.name')."  Application ");
    }
}
