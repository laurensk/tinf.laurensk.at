<?php
if (isset($_POST["email"]) && isset($_POST["message"])) {
    mail("l.kropf@icloud.com", $_POST["email"], $_POST["message"]);
    echo "Message sent!!";
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laurens K.</title>
  </head>
  <body>
    <h1>Welcome to Laurens K.</h1>
    <form action="" method="post">
      <input type="text" placeholder="Your Name" name="email" />
      <input type="text" placeholder="Message" name="message" />
      <button type="submit">Send message</button>
    </form>
    <a href="index.html">Go back!</a>
  </body>
</html>
