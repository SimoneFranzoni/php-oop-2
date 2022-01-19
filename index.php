<?php 


//importo la classe
require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/creditcard.php';
require_once __DIR__ . '/classes/userPremium.php';


// User
$user1 = new User('Tom', 'Bino');
var_dump($user1);

// userPremium
$userpremium1 = new UserPremium('Dario', 'Lampa');
var_dump($userpremium1);



//CreditCard
$card1 = new CreditCard('45984254894');

$user1->insertCreditCard($card1);
var_dump($user1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

      <h2>User</h2>
      <ul>
        <h4>Firstname</h4>
        <li>
          <?php echo $user1->getFirstname(); ?>
        </li>
        <h4>Lastname</h4>
        <li>
          <?php echo $user1->getLastname(); ?>
        </li>
      </ul> 

</body>
</html>