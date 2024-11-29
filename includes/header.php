<?php
// Determine the correct path to the CSS file
$cssPath = (strpos($_SERVER['SCRIPT_NAME'], '/games/') !== false) ? '../css/styles.css' : 'css/styles.css';
?>
<header>
    <h1>Fusion Play</h1>
    <nav>
        <a href="/fusion-play/index.php">Home</a>
        <a href="/fusion-play/about.php">About</a>
        <a href="/fusion-play/contact.php">Contact</a>
    </nav>
    <!-- Link the CSS file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $cssPath; ?>">
    <script src="/fusion-play/scripts.js" defer></script>

</header>




