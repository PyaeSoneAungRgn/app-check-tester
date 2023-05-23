<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Kreait\Firebase\Factory;

class RunCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run-code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $jsonString = '{"type":"service_account","project_id":"openalbion-weaponry","private_key_id":"25d79a4d0f5c210b24bcfad3c41555d82eb403e7","private_key":"-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDADV74pBONm0Sp\n/bixM2yG36Zp5H9Jn/6cFgTtT/msPm5k6Jv+uGrhuZjoI3ruGqz57sGfF5QkTpit\nIu4IRwLBPceXAzfNUrgQ5pKzwlQR4O/WrPt/hD9nbynF2C8hJfGrGgDABDv7GK4s\nHdyXiYRJMn/SilvaojO32spKD0vsfYTZcknd6d069eI+eRReIsfkhjEBaNTLzXPJ\nNCSUrraW/OhoF1zzzfvzuLon6lhOEi0ltSTamLg6I6kknAQNdTKZMFBxk04zV9FZ\n9tzfUmq0xCkbsGiRamPB0OwCrE7B3d+1NUQT/rU/NoHI8S9zy5innUxf2EyHTvjk\nemePaB1hAgMBAAECggEABnJsdbxMS7yimXJC+O/Y/M4VMAjTnQ0Z5vN2RuEgaH/Q\nBOMqGWrna5xnXaOTRNrwY5N4PHb2KiHZTjaV9wErPoFsac1Z2jKkqyySUCZ92/vJ\nEVPNPYKa/kXlCRcwvdQgQLYmwEtkGBHEBwcZmJytLCfd0puCadx4D/vwPnw0+ENP\nfr4I5U/fVokskZRfE9OD0k6v1DjSJtkZjkLPLTP80R7nNBadz9ZoAp0qimEXbvka\nQCAW0J0NRrzlNd2MPs3q+vuQe3JLsGF7ALgwE5qDBpnzE3uzxXMBhgF5fotYyhyc\nF8/aX3wTSzrdimQoiTttk2G449IbTCV7QuEacDfiYQKBgQDtIToFvufZ3tsgfjFm\n1lrwQw0v2nFPV209brZB0Xv0J2Y/3y2FXVrFnbwMRZehA93LZZSyUStOQXc4paxC\ncQ/Ri7RAl7oTAKupmfe1RJNlMWSkZ/7q1IVoDIXwEOsW2yVj3xqDjtx7XIIi66Ez\nfggAGAbtLHWNmJiMfRsn6G7ShwKBgQDPVdSzcNamdD+hx54tCry2XxYUXOJMtSk9\n4AjjsSSPkoe5373eSLGZ0w6yl22AW9RbF1wmHtqTa9qGhDN3kArfjTBBTeOSZFcM\nf2SH+lQgYUgM6dQFhEBU9S1A1FVPeD6+WOdMO8W+J85Yqth8uqfOsS6LPUbr0cOG\nbWFsLp3C1wKBgDUn5JzTHaAOP+q5vxNBa+M99J/MhOf3PiquPbblYbbqehZJTif+\nNFHmOPg7RXE3r6lfnQSYA3AoZrRRFxtRwu0DNyXfnTuTQ+fh9tAwjiX5+4iLM26q\nszkOzZtx/3EBMRGBOq1RAgW5SAbR8THcx6hVun/CHpveIBwmE0dP6D/TAoGBAI0v\n0YvwBvuKpdow6NGbQi6eSZbMOX4qz07HRMZoVpE+Ixa7+btonSg2xQdwfqyt28m7\n+pAq6oUBKOn5FGMSv5TDvFx8AcAqe+ySw46lNKxoEnxYrnyjNnukCZDgBsf7Bh7w\nw3DyMxHuYWGX1Zv6L1Nc7Gj87VKgoRjlWzYj+GI5AoGBANA2DuFVCfQsv6DuPDfc\nsCm/KUG1RjWOijPEn/XLF/DU1qImTizqqkEasgTh5tcgv5zTRAwec/60EIB/ueWr\n3ziK49wXBvAiyZueeoMceAHJUQu0+qpdw+SiOz8ElSXuLe/Bh1UyOJ8ynEQbvx8x\nJpu3K45m4awOIgWerzjgmJXW\n-----END PRIVATE KEY-----\n","client_email":"firebase-adminsdk-yf19r@openalbion-weaponry.iam.gserviceaccount.com","client_id":"114904404867870228712","auth_uri":"https://accounts.google.com/o/oauth2/auth","token_uri":"https://oauth2.googleapis.com/token","auth_provider_x509_cert_url":"https://www.googleapis.com/oauth2/v1/certs","client_x509_cert_url":"https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-yf19r%40openalbion-weaponry.iam.gserviceaccount.com","universe_domain":"googleapis.com"}';
        $factory = (new Factory())->withServiceAccount($jsonString);
        dd($factory);
    }
}
