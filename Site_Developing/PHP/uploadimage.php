
<?php
		if(isset($_POST['submit']))
		{
			if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
			{
				echo "Please select an image.";
			}
			else
			{
				$image=addslashes($_FILES['image']['tmp_name']);
				$name=addslashes($_FILES['image']['name']);
				$image=file_get_contents($image);
				$image=base64_encode($image);
				saveimage($name,$image);
			}

		}
		function saveimage($name,$image)
		{
			$con=mysqli_connect("localhost","root","","test_image");
			$qry="insert into test_image (name,image) values ('$name','$image')";
			$result=mysqli_query($con,$qry);
			if($result)
			{
				echo "<br/> Image uploaded";
			}
			else{
				echo "<br/> Image not uploaded";
			}
		}
		displayimage();
		function displayimage()
		{
			$con=mysqli_connect("localhost","root","","test_image");
			$sql="select * from test_image";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);
			for ($i=0; $i < $num; $i++) { 
				$result=mysqli_fetch_array($query);
				$img=$result['image'];
				echo '<img height="120px" width="100px" src="data:image;base64,'.$img.'">';

			}
			mysqli_close($con);
		}
?>