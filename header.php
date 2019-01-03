  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP-MySQL dogpale</title>
    <link rel="stylesheet" href="style.css" type="text/css">
<style>body {
    background-color: #00e6e6;
    text-align: center;         /* make sure IE centers the page too */
}
 
#wrapper {
    width: 70%;
    margin: 0 auto; 
    height:20px; 
    
    display :inline-block;
     
            /* center the page */
}
 
#content {
    background-color: #fff;
    border: 1px solid rgb(76, 240, 240);
    float: left;
    font-family: Arial;
    padding: 20px 30px;
    text-align: left;
    width: 100%;                /* fill up the entire div */
}
 
#menu {
    float: left;
    border: 1px solid black;
    border-bottom: none;        /* avoid a double border */
    clear: both;                /* clear:both makes sure the content div doesn't float next to this one but stays under it */
    width:100%;
    height:20px;
    padding: 0 30px;
    background-color: #FFF;
    text-align: left;
    font-size: 85%;
}
 
#menu a:hover {
    background-color: #009FC1;
}
 
#userbar {
    background-color: #fff;
    float: right;
    width: 250px;
}
 
#footer {
    clear: both;
}
 
/* begin table styles */
table {
    border-collapse: collapse;
    width: 100%;
}
 
table a {
    color: white;
}
 
table a:hover {
    color: #00728B;
    text-decoration: none;
}
 
th {
    background-color: #B40E1F;
    color: #F0F0F0;
}
 
td {
    padding: 5px;
}
 
/* Begin font styles */
h1, #footer {
    font-family: Arial;
    color: #F1F3F1;
}
 
h3 {margin: 0; padding: 0;}
 
/* Menu styles */
.item {
    background-color: #00728B;
    border: 1px solid #032472;
    color: #FFF;
    font-family: Arial;
    padding: 3px;
    text-decoration: none;
}
 
.leftpart {
    width: 70%;
}
 
.rightpart {
    width: 30%;
}
 
.small {
    font-size: 75%;
    color: #373737;
}
#footer {
    font-size: 65%;
    padding: 3px 0 0 0;
}
 
.topic-post {
    height: 100px;
    overflow: auto;
}
 
.post-content {
    padding: 30px;
}
 
textarea {
    width: 500px;
    height: 200px;
}
#signout{
    color:white;
}
</style>

</head>
<body>
    

<h1>dogpal.com</h1>
    <div id="wrapper">
    <div id="menu">
        <a class="item" href="index.php">Accueil</a> -
        <a class="item" href="create_topic.php">Create  commentaire</a> -

        <!-- la ou on peux mttre notre pahe c -->
        <a class="item" href="create_cat.php">category</a>  
        
         
        <div id="userbar">
      <div id="userbar">
<?php
    session_start();
    if(isset($_SESSION['signed_in']))
    {
        echo 'Hello' . $_SESSION['user_name'] . '. Not you? <a href="signout.php">Sign out</a>';
    }
    else
    {
        echo '<a href="signin.php">Sign in</a> or <a href="signup.php">create an account</a>.';
    }
?>
</div>
    </div>
        <div id="content">
              
<div id="wrapper">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum asperiores aut hic explicabo libero cumque molestiae, neque saepe et quasi deleniti laboriosam perferendis aperiam atque architecto voluptate nihil sit quaerat.
      </div><!-- content -->
</div><!-- wrapper -->
<form method="post" action="reply.php?id=5">
<textarea name="reply-content"></textarea >
<input type="submit" value="Submit reply "id ="subm" />
</form>
<script>
    var sub = document.getElementById('subm').value;
    sub.onclick =function(){
        document.getElementById('subm').this = innerHTML;
    }
</script>
</body>

<div id="footer">Created for Nettuts+</div>




</html>