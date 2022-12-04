<?php
  // Define the updateStatus() function
  function updateStatus($newStatus) {
    // Open the update.txt file for writing
    $file = fopen('update.txt', 'w');

    // Write the new status to the file
    fwrite($file, $newStatus);

    // Close the file
    fclose($file);
  }

  // Check if the form has been submitted
  if (isset($_POST['status'])) {
    // Call the updateStatus() function to update the status
    updateStatus($_POST['status']);

    // Redirect the user back to the homepage
    header('Location: index.php');
    exit;
  }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin panel</title>
    <link rel="stylesheet" type="text/css" href="../unclejim.css">
</head>

<body>
    <h1>How is Tennessee doing?</h1>
    <form action="../update.php" method="post">
      <input type="text" name="status" placeholder="Enter new status">
      <input type="submit" value="Submit">
    </form>
</body>
<!-- TNStatus -->
</html>