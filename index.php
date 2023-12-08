<?php

echo "Hey World!";
echo "<form action='submit.php' method='post'>";
echo "<label for='name'>名前:</label><br>";
echo "<input type='text' id='name' name='name'><br>";
echo "<label for='email'>メール:</label><br>";
echo "<input type='text' id='email' name='email'><br>";
echo "<input type='submit' value='送信'>";
echo "</form>";
