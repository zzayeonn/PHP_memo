<?php
//if you are logged in go to list
session_start();
if (isset($_SESSION['member_id'])){
    header("Location: /list.php");
    exit();
}

//service introduction
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            h2 {
              color: blue;
              padding: 0rem 0rem 0rem 2.5rem;
              font-size: 2em;
            }

            #topMenu {
              width: 1400px;
              margin: 50px auto;
            }

            #topMenu ul li {
              list-style: none;
              color: white;
              float: left;
              background-color: #2d2d2d;
              line-height: 40px;
              vertical-align: middle;
              text-align: center;
           }

           #topMenu .menuLink {
              text-decoration:none;
              color: white;
              display: block;
              width: 265px;
              font-size: 15px;
              font-weight: bold;
           }

           #topMenu .menuLink:hover {
              color: red;
              background-color: #4d4d4d;
           }
        </style>
        <title>Sea</title>
    </head>
    <body>
        <?php require_once("inc/header.php"); ?>
        <h2>Sea</h2>
        <nav id="topMenu">
            <ul>
                   <li><a class="menuLink" href="#">Hello, Sea</a></li>
                   <li><a class="menuLink" href="#">Notice</a></li>
                   <li><a class="menuLink" href="#">New of Sea</a></li>
                   <li><a class="menuLink" href="#">Sea of Mine</a></li>
                   <li><a class="menuLink" href="#">Memo</a></li>
            </ul>
       </nav> 
    </body>
</html>
