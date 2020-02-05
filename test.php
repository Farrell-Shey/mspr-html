<?php
$users = "
[
    {\"prenom\": \"Ronan\", \"nom\": \"HELLO\"},
    {\"prenom\": \"Didier\", \"nom\": \"PATOCHE\"},
    {\"prenom\": \"Michel\", \"nom\": \"DELARUE\", \"age\": 23}
]
";
?>

<?php require_once 'includes/header.php'; ?>

<section class="text-light">
    <div class="container">

        <div class="card-deck">
            <?php foreach (json_decode($users) as $user): ?>
                <div class="card">
                    <div class="card-body">
                        <?php echo $user->prenom . ' ' . $user->nom; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
