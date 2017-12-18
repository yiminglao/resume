<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/5/2017
 * Time: 9:02 PM
 */

use Resume\Http\Path as path;
$path = new path();

$userInfo = new \Resume\Controllers\UserInfoController();

$ret = $userInfo->getUserId($_SESSION['email']);

$result = $userInfo->getUser($ret['userId']);

$imagePath = $path->imagePath().$ret['photo'];


?>

<?php include_once 'Header.php'; ?>

<main role="main">
    <h3>Basic Info</h3>
    <hr>
    <img src="<?php echo $imagePath; ?>" class="img-thumbnail float-left col-3" alt="...">
    <div class="row">
        <form class="col-md-6" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputAddress">Username</label>
                <input type="text" class="form-control" id="inputUsername" value="<?php echo $result['userName']; ?>" placeholder="Username" name="username" >
            </div>
            <div class="form-group">
                <label for="inputAddress">First Name</label>
                <input type="text" class="form-control" id="inputAddress" value="<?php echo $result['firstName']; ?>" placeholder="First Name" name="fname">
            </div>
            <div class="form-group">
                <label for="inputAddress">Last name</label>
                <input type="text" class="form-control" id="inputAddress"value="<?php echo $result['lastName']; ?>" placeholder="Last name" name="lname">
            </div>

            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4"value="<?php echo $result['email']; ?>" placeholder="Email" name="email" disabled>
                <small id="emailHelp" class="form-text text-muted">You can't change your email address</small>
            </div>
            <div class="form-group">
                <label for="inputEmail4">Phone</label>
                <input type="test" class="form-control" value="<?php echo $result['phone']; ?>" placeholder="801-123-456" name="phone">
            </div>
            <div class="form-group">
                <label for="inputPassword4">Old Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Old Password" name="opass">
            </div>
            <div class="form-group">
                <label for="inputPassword4">New Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="New Password" name="npass">
            </div>
            <div class="form-group">
                <label for="inputPassword4">Confirm Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" name="cpass">
            </div>


            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" value="<?php echo $result['address']; ?>"placeholder="1234 Main St" name="address">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity"value="<?php echo $result['city']; ?>" name="city" placeholder="Centerville">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" id="inputState"value="<?php echo $result['state']; ?>" name="state" placeholder="Utah">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip"value="<?php echo $result['zipcode']; ?>" name="zip" placeholder="84014">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fileToUpload">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</main>

<?php include_once 'Footer.php' ?>