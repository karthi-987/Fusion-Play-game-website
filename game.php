<!-- game.php -->
<?php include 'includes/header.php'; ?>
<?php
$game = isset($_GET['game']) ? $_GET['game'] : 'Unknown Game';
?>
<h2>Details for <?php echo htmlspecialchars($game); ?></h2>
<p>Enjoy playing <?php echo htmlspecialchars($game); ?>. Stay tuned for more updates!</p>
<?php include 'includes/footer.php'; ?>
