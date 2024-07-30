<?php
  if ( $_POST['username'] =='blal' and $_POST['password'] =='a2245852' ) 
      {
          header('location: index.html');
      }
  else
          header('location: error.html');
?>