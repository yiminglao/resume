<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/7/2017
 * Time: 5:19 PM
 */

$path = new \Resume\Views\View();
$expList = new \Resume\Controllers\ExperienceController();
$list = $expList->getAllExp();
?>

<?php include_once 'Header.php'; ?>
    <main role="main">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="row">Company</th>
                <th scope="col">Job Title</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Duty</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $key => $value) { ?>
                <tr>
                    <th scope="row"> <?php echo $value['company'] ?></th>
                    <td><?php echo $value['jobTitle'] ?></td>
                    <td><?php echo $value['city'] ?></td>
                    <td><?php echo $value['state'] ?></td>
                    <td><?php echo $value['startDate'] ?></td>
                    <td ><?php echo $value['endDate'] ?></td>
                    <td ><?php echo $value['description'] ?></td>


                </tr>
            <?php } ?>
            </tbody>
        </table>
    </main>

<?php include_once 'Footer.php' ?>