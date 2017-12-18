<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/7/2017
 * Time: 4:40 PM
 */



include_once 'Header.php';
?>

<main role="main">
    <h3>Add Work Experience</h3>
    <hr>
    <div class="row justify-content-md-center">
        <form class="col-md-6" method="post" action="">
            <div class="form-group">
                <label for="inputAddress">Company</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="Google" name="company">
            </div>
            <div class="form-group">
                <label for="inputAddress">Job Title</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="software developer" name="title">
            </div>
            <div class="form-group">
                <label for="inputAddress">City</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Ogden" name="city">
            </div>

            <div class="form-group">
                <label for="inputEmail4">State</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Utah" name="state">
            </div>
            <div class="form-group">
                <label for="inputEmail4">Zipcode</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="84403" name="zipcode">
            </div>
            <div class="form-group">
                <label for="inputEmail4">Start Date</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="2/2016" name="startdate">
            </div>
            <div class="form-group">
                <label for="inputEmail4">End Date</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="5/2017" name="enddate">
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
