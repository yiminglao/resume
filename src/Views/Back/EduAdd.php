<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/5/2017
 * Time: 11:31 PM
 */
include_once 'Header.php';

?>

<main role="main">
    <h3>Add Education</h3>
    <hr>
    <div class="row justify-content-md-center">
        <form class="col-md-6" method="post" action="">
            <div class="form-group">
                <label for="inputAddress">School</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="Weber State" name="school">
            </div>
            <div class="form-group">
                <label for="inputAddress">Major</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Computer Science" name="Major">
            </div>
            <div class="form-group">
                <label for="inputAddress">GPA</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="4.0" name="gpa">
            </div>

            <div class="form-group">
                <label for="inputEmail4">Graduation Year</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="2018" name="GradYear">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>

<?php include_once 'Footer.php' ?>