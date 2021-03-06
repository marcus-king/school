<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/portal.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/forms.css">
    </head>
    <body>
        <header>
        <h1>Marcus King's IT161 Portal</h1>
        <nav class="topnav" id="myTopnav">
            <a href="http://web-students.net/site116/it161/">Welcome</a>
            <a href="http://web-students.net/site116/it161/elements.html">HTML Elements</a> 
            <a href="http://web-students.net/site116/it161/aia.html">AIA</a>
            <a href="http://web-students.net/site116/it161/big/index.html">BIG</a>
            <a href="https://w3schools.com" target="_blank">W3 Schools</a>
            <a href="https://linkedin.com/learning/login" target="_blank">LinkedIn Learning</a>
            <a href="http://web-students.net/site116/it161/flowchart.html">Flowchart</a>
            <a href="http://web-students.net/site116/it161/fp/index.html">Final Project</a>
            <a href="http://web-students.net/site116/it161/about.html">About Me</a>
            <a href="http://web-students.net/site116/it161/contact.php">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
        </header>
        <div class="wrapper">
            <img class="desktop" src="images/desktop.jpg" alt="Desktop photo" />  
            <img class="tablet" src="images/tablet.jpg" alt="Tablet photo" />  
            <img class="phone" src="images/phone.jpg" alt="Phone photo">
            
            <h2>Contact Me</h2>
    
            <?php
            include 'includes/contact_include.php';
    
            $toAddress = "marcus.king@proton.me";
            $toName = "Marcus King";
            $website = "Portal";

            echo loadContact('simple.php');
	        ?>
      
            <footer>
                <p>
                    <small> 
                        &copy; 2022 by <a href="contact.php">Marcus King</a>, All Rights Reserved.
                    </small>
                </p>
                <p>
                    <small>
                        <a id="html-checker" href="#">Check HTML</a> | <a id ="css-checker" href="#">Check CSS</a>
                    </small>
                </p>
            </footer>
        </div>
        
        <script>
            //https://tinyurl.com/dynamic-html-checker
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator?uri=" + location.href);

            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } 
                else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>