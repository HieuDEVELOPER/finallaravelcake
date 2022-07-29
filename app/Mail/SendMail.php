<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $sentData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sentData)
    {
        $this->sentData = $sentData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //view ở đây là trang chứa các thông tin mình muốn hiển thị

        return $this->subject('yêu cầu cấp lại mật khẩu từ shop bánh')->replyTo('hieunguyentx0010@gmail.com', 'Hieu Nguyen')->view('emails.interFaceEmail', [

            'sentData' => $this->sentData

        ]);
    }
}
