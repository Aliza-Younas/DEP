<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};

if(isset($_POST['send_message'])){
   // Your code to send the message
   // For example, inserting the message into the database
   
   $_SESSION['message_sent'] = true;
   header('location:messages.php');
   exit();
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_message = $conn->prepare("DELETE FROM `messages` WHERE id = ?");
   $delete_message->execute([$delete_id]);
   header('location:messages.php');
   exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="contacts">

<h1 class="heading">messages</h1>

<div class="box-container">

   <?php
      $select_messages = $conn->prepare("SELECT * FROM `messages`");
      $select_messages->execute();
      if($select_messages->rowCount() > 0){
         while($fetch_message = $select_messages->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p> user id : <span><?= $fetch_message['user_id']; ?></span></p>
      <p> name : <span><?= $fetch_message['name']; ?></span></p>
      <p> email : <span><?= $fetch_message['email']; ?></span></p>
      <p> number : <span><?= $fetch_message['number']; ?></span></p>
      <p> message : <span><?= $fetch_message['message']; ?></span></p>
      <a href="messages.php?delete=<?= $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete</a>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">you have no messages</p>';
      }
   ?>

</div>

</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
   <?php if(isset($_SESSION['message_sent']) && $_SESSION['message_sent'] == true): ?>
   alert('Your message has been sent successfully!');
   <?php
      unset($_SESSION['message_sent']); // Clear the session variable
   endif; ?>
});
</script>

<script src="../js/admin_script.js"></script>
   
</body>
</html>
