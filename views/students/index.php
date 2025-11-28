<?php include 'views/partials/head.php' ?>

<?php global $title ?>
<main class="page-main">
    <h1><?php echo $title ?></h1>
    <ol>
        <?php foreach (getAllStudents() as $student): ?>
            <li>
                <?php echo $student['first_name'] ?>
                &nbsp;<?php echo $student['last_name'] ?>
            </li>
        <?php endforeach; ?>
    </ol>

</main>


<?php include 'views/partials/nav.php' ?>


<?php include 'views/partials/footer.php' ?>
