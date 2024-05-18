<?php 
include '../config.php'; 
require BASE_PATH . 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?php echo $base_path; ?>index.php">Accueil</a></li>
            <li><a href="<?php echo $base_path; ?>about.php">À propos</a></li>
            <li><a href="<?php echo $base_path; ?>contact.php">Contact</a></li>
            <li><a href="<?php echo $base_path; ?>blog/index.php">Blog</a></li>
        </ul>
    </nav>
    <h1>Bienvenue sur le blog</h1>
    <?php require BASE_PATH . 'includes/footer.php'; ?>
</body>
</html>
