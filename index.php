
<!DOCTYPE html>
<html>
<head>

	<title>Translation</title>
	<style >



.part1
{
width:10%;
height:5%;
background-color:white;
position:absolute;
border-radius:0px;
right:45%;
top:25%;
}
		

		      .part2
{
width:45%;
height:320px;
background-color:#d5f0dc;
position:absolute;
border-radius:20px;
right:30%;
top:40%;
}
		
		



	</style>
	<link rel="shortcut icon"  href="icon.jfif">
</head>
<body bgcolor="">
	<div class="part1"> <a href="new.php" style="text-decoration: none;color: black;font-size: 20px;color:blue;border:blue;"><b>Insert a Word <b> </a></div>
	<center>
<table width="10%" cellspacing="20" border="0">
<tr>
    
      <td> </td>
  </tr>
  </table>
  <div class="header"  ><center> <h3 > Word Translation into different languages </h3></center>
	 
		<form method="post" class="part2">
			
       
 
		<table bgcolor="white" width="20%" cellspacing="10" border="0" style=" top:30%;>
				<tr ><td colspan=""><h1 style=" font-family:Times new roman;color: black; text-align: center;size:20px:"> Word Translation Form</h1></tr>
	<tr>			
	<td>Translating :</td>
	<td><!-- <select name="status" id="status" onchange="sayIt()">
				<option name="gura">V_Gura</option>
				<option name="tuma">V_Rangura</option>
				<option name="rangura">V_Gurisha</option>
				<option name="Gurisha">V_Tuma</option>
				
			</select> -->
			 <select name="word" id="val">
    <option value="0">-- Select word --</option>
    <?php
        include "conn.php";  // Using database connection file here
        $records = mysqli_query($db, "SELECT * From indimi");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['variable'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
			</td>
			<td>To :</td>
			<td>
				<select name="status">
			    <option value="0">-- Select language --</option>
				<option value="1">Kinyarwanda</option>
				<option value="2">French</option>
				<option value="3">English</option>
				<option value="4">Swahili</option>
				
			</select></td>
			<td>
                  <button name="translate" style="color: black;border-color: white;border-style:cicle;padding: 12px;background-color: #d5f0dc;">Translate</button>
                   </td>
     </tr>
     <tr>
		 <?php 
		 $result=[];
		 if(isset($_POST['translate']))
		 {	
			$result[0] = " ";
			 $language = $_POST['status'];
			 $word = $_POST['word'];
			 if(($language == 0) || ($word == 0))
			 {
				 $result[0] = "choose valid data";

			 }
			 else {
				 
				$query_select_indimi= mysqli_query($db, "SELECT * FROM indimi where id='$word'");
				if(mysqli_num_rows($query_select_indimi) > 0)
				{
					$result[0] = "one element found";

					$data_re = $query_select_indimi->fetch_array();

			if($language == 1)
			{
				$result[0] = $data_re['kinyarwanda'];
			}
			else if ($language == 2)
			{
				$result[0] = $data_re['french'];
			}	else if ($language == 3)
			{
				$result[0] = $data_re['english'];
			}	else if ($language == 4)
			{
				$result[0] = $data_re['swahili'];
			}
			else{
				$result[0]="couldn't find";
			}
				}
				else{
					$result[0] = "no element found";
				}

			 }

			
	
				
			

		
?> 
  <td> word Mean:</td><td><label></label><?php echo $result[0];?></td><?php
		 }

		 
		 ?>
   
    
     </tr>

          
                   
</table>
<!-- <label name="selected" id="selected">hjjfj</label>
 <script>
 function sayIt(){
	const variable=document.getElementById("status").value;
	document.getElementsByName("selected").value=variable;
	return variable;
}

// </script>-->
</center>
</body>
</html>			


