<?php
session_start();
$name= $_SESSION['secondMessage'] ;
echo $_SESSION['firstMessage'] ;
echo $_SESSION['secondMessage'];

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php

if(isset($_POST["test1"]))
{
  $lname=$_POST['test1'];
$sql = "UPDATE MyGuests SET email='$lname' WHERE lastname='$name'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>


<html>

<head>
    <style>
        /*
Author : Himateja
Editor : Codepen
Permissions : Open Source
*/
        * {
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: transparent;
            -webkit-user-select: none;
            box-sizing: border-box;
        }

        html,
        body {
            overflow: hidden;
            height: 100%;
            zoom: reset;
            background: white;
            font-family: Montserrat;
        }

        h1 {
            text-align: center;
            margin-top: 75px;
        }

        input[type=checkbox] {
            clear: both;
            display: none;
        }

        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"]+label {
            position: absolute;
            z-index: 100;
            overflow: hidden;
            height: 6em;
            width: 6em;
            left: calc(50% - 3em);
            top: calc(50% - 3em);
            display: block;
            text-align: center;
            line-height: 95px;
            cursor: pointer;
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
            border-radius: 50%;
            background-color: #fff;
        }

        input[type="checkbox"]+label:before {
            content: '';
            z-index: -1;
            position: absolute;
            background: rgb(220, 72, 127);
            width: 100%;
            height: 100%;
            border-radius: 50%;
            top: 0;
            left: 0;
            transform: scale(0);
            -webkit-ransform: scale(0);
        }

        input[type="checkbox"]+label:after {
            content: '';
            z-index: -1;
            position: absolute;
            background: white;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            top: 0;
            left: 0;
            transform: scale(0);
            -webkit-transform: scale(0);
        }
        
        input[type="checkbox"]:checked+label svg {
            -webkit-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            fill: rgb(220, 72, 127);
            transform: scale(1.3);
            -webkit-transform: scale(1.3);
        }

        input[type="checkbox"]:checked+label:after {
            -webkit-animation: like-a 0.3s 0.2s forwards;
            -moz-animation: like-a 0.3s 0.2s forwards;
            animation: like-a 0.3s 0.2s forwards;
        }

        input[type="checkbox"]:checked+label:before {
            -webkit-animation: like-a 0.5s 0s forwards;
            -moz-animation: like-a 0.5s 0s forwards;
            animation: like-a 0.5s 0s forwards;
        }

        label svg {
            display: inline-flex;
            vertical-align: middle;
            width: 35px;
            fill: rgb(167, 167, 167);
        }

        .copyright {
            position: fixed;
            width: 100%;
            bottom: 5px;
            text-align: center;
            font-size: 12px;
        }

        a {
            text-decoration: none;
            color: rgb(220, 72, 127);
        }

        a:hover {
            transition: none;
            border-bottom: 1px solid rgb(220, 72, 127);
        }

        @-webkit-keyframes like-a {
            100% {
                -webkit-transform: scale(1.03);
                transform: scale(1.03);
                -moz-transform: scale(1.03);
            }
        }

        @-moz-keyframes like-a {
            100% {
                -webkit-transform: scale(1.03);
                transform: scale(1.03);
                -moz-transform: scale(1.03);
            }
        }

        @keyframes like-a {
            100% {
                -webkit-transform: scale(1.03);
                transform: scale(1.03);
                -moz-transform: scale(1.03);
            }
        }
    </style>
    <script>
        function myFunction() {
          var checkBox = document.getElementById("like");
          var text = document.getElementById("text");
          if (checkBox.checked == true){
            text.style.display = "block";
            $uname=1;
          } else {
             text.style.display = "none";
          }

        }
        </script>
</head>

<body>
  <form method="POST">
 
    <input type="checkbox" name="test" id="like" value="1" onclick="myFunction()"  />
      
    <label for="like">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
                d="M12 21.35l-1.45-1.32c-5.15-4.67-8.55-7.75-8.55-11.53 0-3.08 2.42-5.5 5.5-5.5 1.74 0 3.41.81 4.5 2.09 1.09-1.28 2.76-2.09 4.5-2.09 3.08 0 5.5 2.42 5.5 5.5 0 3.78-3.4 6.86-8.55 11.54l-1.45 1.31z" />
        </svg>
    </label>

    <p class="copyright">
        <span>Pen Developed by <a href="https://codepen.io/Himateja" target="_blank">Himateja</a>| <a
                href="https://twitter.com/Himateja143" target="_blank">@Himateja143</a> | <a href="http://jamesb.in"
                target="_blank">Go to James.bin</a></span>
    </p>
    <p id="text" style="display:none">Checkbox is CHECKED!</p>
    
        <input type="text" placeholder="Enter Username" name="uname"  required>
    <input type=submit name="test1" class="like1" value="Jhon" onclick="myFunction()" >
      </form>
</body>

</html>