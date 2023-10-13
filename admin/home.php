<h1>Welcome to <?php echo $_settings->info('name') ?></h1>

<?php
$query = "SELECT * FROM form"; 
$result = mysqli_query($conn, $query); // Pass the database connection variable $conn

if (!$result) {
    die("Query failed: " . mysqli_error($conn)); // Handle query errors
}

if (isset($_POST['delete'])) {
    $deleteId = $_POST['delete_id'];
    $deleteQuery = "DELETE FROM form WHERE id = $deleteId";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Fetch Data From Database</title> 
	</head> 
    <style>
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        font-family: Arial, sans-serif;
    }

    th, td {
        border: 1px solid #ddd;
        text-align: left;
        padding: 8px;
        max-width: 10vw;
        word-wrap: break-word;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
        background-color: #ffffff;
    }

    h2 {
        text-align: center;
    }
</style>
<script>
        // Function to clear the form fields
        function clearForm() {
            document.getElementById("contact-form").reset();
        }
   </script>
	<body> 
	<table align="center" border="1" style="width:600px; line-height:40px;"> 
		<tr> 
			<th colspan="4"><h2>Messages Recieved</h2></th> 
		</tr> 
		<tr>
			<th>ID</th> 
			<th>Name</th> 
			<th>Email</th> 
			<th>Message</th> 
			<th>Delete</th> 
		</tr> 
		
		<?php while ($row = mysqli_fetch_assoc($result)) // Use mysqli_fetch_assoc
		{ 
		?> 
		<tr> 
			<td style="padding: 10px;"><?php echo $row['id']; ?></td> 
			<td style="padding: 10px;"><?php echo $row['name']; ?></td> 
			<td style="padding: 10px;"><?php echo $row['email']; ?></td> 
			<td style="padding: 10px;"><?php echo $row['msg']; ?></td> 
            <td>
                <form action="" method="post" onsubmit="return confirm('Are you sure you want to delete this record?');">
                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="delete">DELETE</button>
                </form>
            </td>
		</tr> 
	<?php 
		} 
		?>

	</table> 
	</body> 
    <script>
       if (window.history.replaceState) {
           window.history.replaceState(null, null, window.location.href);
       }
   </script>
</html>
