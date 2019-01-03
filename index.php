<?php
//index.php
include 'connect.php';
include 'header.php';
 
$sql = "SELECT
            cat_id,
            cat_name,
            cat_description,
        FROM
            categories";
 
$conn = mysqli_connect("localhost","root","root","secure_login");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($conn, $sql);
 
if(!$result)
{
    echo '<span id="signout"> vous pouvez ingioer a notre page vous  pouvez trouvr toutes les catogry</span> .' . include 'signin.ph' ;
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo 'recommencer.';
    }
    else
    {
        //prepare the table
        echo '<table border="1">
              <tr>
                <th>Category</th>
                <th>Last topic</th>
              </tr>'; 
             
        while($row = mysql_fetch_assoc($result))
        {               
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<h3><a href="category.php?id">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
                echo '</td>';
                echo '<td class="rightpart">';
                // la on rajeter la page de commentair la !!! <a herf ...
                            echo '<a href="topic.php?id=">votre commentaire</a> at 10-10';
                echo '</td>';
            echo '</tr>';
        }
    }
}
 
?>