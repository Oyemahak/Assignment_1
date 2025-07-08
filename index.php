<?php
// connect to MySQL database
require('connect.php');

// run SELECT query to fetch participants
$query = "SELECT * FROM vibe_coding ORDER BY registered_at DESC";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vibe Coding Challenge – Humber</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Page heading -->
  <header>
    <h1>Humber Vibe Coding Challenge</h1>
    <p>Registered Participants</p>
  </header>

  <!-- Cards container -->
  <main class="card-container">
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <div class="card">
        <!-- Profile image -->
        <img 
          src="images/<?php echo $row['photo_url'] ? htmlspecialchars($row['photo_url']) : 'placeholder.jpg'; ?>" 
          alt="Profile image of <?php echo htmlspecialchars($row['full_name']); ?>" 
          class="profile-img">

        <!-- Name -->
        <h2><?php echo htmlspecialchars($row['full_name']); ?></h2>

        <!-- Program -->
        <p><strong>Program:</strong> <?php echo htmlspecialchars($row['program']); ?></p>

        <!-- GitHub username -->
        <p><strong>GitHub:</strong> 
          <a href="https://github.com/<?php echo htmlspecialchars($row['github_username']); ?>" target="_blank">
            @<?php echo htmlspecialchars($row['github_username']); ?>
          </a>
        </p>

        <!-- Date -->
        <p class="date">Registered on <?php echo date("F j, Y", strtotime($row['registered_at'])); ?></p>
      </div>
    <?php endwhile; ?>
  </main>

  <!-- Footer -->
  <footer>
    <p>© <?php echo date("Y"); ?> Mahak Patel</p>
  </footer>

</body>
</html>