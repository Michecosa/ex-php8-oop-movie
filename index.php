<?php
require_once __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EX - PHP Classe Movie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-5">I Miei Film</h1>

        <div class="row g-4">
            <?php foreach ($movies as $movie): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->director; ?> (<?php echo $movie->releaseYear; ?>)</h6>
                            
                            <p class="card-text">
                                <strong>Generi:</strong><br>
                                <?php foreach ($movie->genre as $g): ?>
                                    <span class="badge bg-info text-dark me-1" title="<?php echo $g->description; ?>">
                                        <?php echo $g->name; ?>
                                    </span>
                                <?php endforeach; ?>
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span><?php echo $movie->getRating() ?? 'ND'; ?>/5</span>
                            <span class="fw-bold text-success">€ <?php echo number_format($movie->getPrice(), 2); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>