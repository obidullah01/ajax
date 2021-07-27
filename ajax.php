<!DOCTYPE html>
<html >
  <head>
    
    <meta charset="utf-8">
    <script type="text/javascript" src="ajax.js"></script>
    <h1 align = "center"><u>User List</u></h1>
 </head>





<body style="background-color:lightblue">



  <br>
  <br>
    <form action="ajax.php" method="post"  onsubmit="return isValid()" name="mForm" id="nForm">
  
     
   <p>
    
   <input type="text" name ="Search" placeholder="search by userame">
         <!--<button type="search" class ="btn" id="Search">Search</button>-->
         <button onclick="fetchData()">Click</button>
  
          <span style="color:red" id="searchError"> </span>
        <script>

function fetchData() {
  var xhttp=new XMLHttpRequest();;
  xhttp.onload = function() {
    
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax.php?q="+str, true);
  xhttp.send();
}
 </script>
 </p>
    </div>
    <table id="table" border=".5" width = "30%" height = "50%">

      <tr>
<th align="center" style="width:120px;">Id</th>
<th align="center" style="width:350px;">User Name</th>

</tr>


<?php

    $conn=  mysqli_connect("localhost", "root", "", "wtk");
        if(!$conn)
       {
           die('not connected');
       }


else{

if($_SERVER['REQUEST_METHOD']==="POST")
{
    if(empty($_POST['Search'])){
        echo"<h4 stlye='colour:red'>Search Field Empty</h4>";
    }
  }
if(isset($_POST['Search']))
{
 $searchkey = $_POST['Search'];
    $sql2 = "SELECT * FROM user WHERE username LIKE '%$searchkey%'";
 }

 else
 {
     $sql2 = "SELECT * FROM user";

}
}

    $result2 = mysqli_query($conn , $sql2);

  while( $row = mysqli_fetch_assoc($result2) ):
  ?>
   
  <tr>
              <td align="center"><?php echo $row['id'] ?></td>
              <td align="center"><?php echo $row['username'] ?></td>
              <td align="center"><?php echo $row['password'] ?></td>
          </tr>
<?php endwhile; ?>

    </table>
      </div>
      </div>


      </form>

  </body>
</html>
