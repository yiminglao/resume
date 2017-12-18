<?php
$path = new \Resume\Views\View();
$eduList = new \Resume\Controllers\EduController();
$list = $eduList->getAllEdu();
?>

<?php include_once 'Header.php'; ?>
<main role="main">

    <table class="table table-striped">
        <thead>
        <tr>

            <th scope="col">School</th>
            <th scope="col">Major</th>

            <th scope="col">Year of Graduate</th>
            <th scope="col">description</th>
        </tr>

        </thead>
        <tbody>
        <?php foreach ($list as $key => $value) { ?>
        <tr>
            <td><?php echo $value['school'] ?></td>
            <td><?php echo $value['major'] ?></td>

            <td><?php echo $value['graduation'] ?></td>
            <td><?php echo $value['description'] ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</main>

<?php include_once 'Footer.php' ?>