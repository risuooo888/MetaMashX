<?php
$name = $_GET['name'];
$country = $_GET['country'];
$mobile = $_GET['mobile'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Start Chat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      background-color: #121212;
      color: white;
      text-align: center;
      padding-top: 100px;
      font-family: Arial;
    }
    button {
      padding: 12px 24px;
      background-color: orange;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      font-size: 18px;
    }
  </style>
</head>
<body>
  <h2>Hello <?php echo htmlspecialchars($name); ?>!</h2>
  <p>You're from <?php echo htmlspecialchars($country); ?> | Mobile: <?php echo htmlspecialchars($mobile); ?></p>
  <form action="chat.html">
    <button type="submit">Start Video Chat</button>
  </form>
</body>
</html>
