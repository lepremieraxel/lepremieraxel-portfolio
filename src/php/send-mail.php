<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['reason'])) {

  header('Location: /?send=true#contact');

  $name = $_POST['name'];
  $reason = $_POST['reason'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'hello@axelmarcial.com';
  $object = "[" . $reason . "] - " . $name . ".";
  $content = "
  <html>
    <head>
        <style type='text/css'>
            body{
                background-color: transparent;
                display: flex;
                flex-flow: column wrap;
                align-items: center;
            }
            p{
                color: dark-grey;
                text-align: center;
                font-size: 2em;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <p>\" " . $message . " \"</p>
    </body>
  </html>";

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  mail($to, $object, $content, $headers);
} else header('Location: /?send=false#contact');
