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
            <th scope="row">ID</th>
            <th scope="col">School</th>
            <th scope="col">Major</th>
            <th scope="col">GPA</th>
            <th scope="col">Year of Graduate</th>

            <th scope="col"><a class="btn btn-success" href="<?php echo $path->path->adminUrl().'edu/add' ; ?>" role="button">Add New</a></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($list as $key => $value) { ?>
        <tr>
            <th scope="row"> <?php echo $value['eduId'] ?></th>
            <td><?php echo $value['school'] ?></td>
            <td><?php echo $value['major'] ?></td>
            <td><?php echo $value['gpa'] ?></td>
            <td><?php echo $value['graduation'] ?></td>

            <td>
<!--                <a class="btn btn-warning" href="#" role="button">Detail</a>-->
                <a class="btn btn-primary" href="<?php  echo $path->path->adminUrl().'edu/edit/'.$value['eduId'] ;?>" role="button">Detail / Edit</a>
                <a class="btn btn-danger" href="<?php  echo $path->path->adminUrl().'edu/del/'.$value['eduId'] ;?>" role="button">Delete</a>
            </td>

        </tr>
        <?php } ?>
        </tbody>
    </table>
</main>

<?php include_once 'Footer.php' ?>