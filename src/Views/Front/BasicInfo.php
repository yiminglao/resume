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
$ret = $userInfo->getUserId('yilao@mail.weber.edu');

$result = $userInfo->getUser($ret['userId']);

$imagePath = $path->imagePath().$ret['photo'];

?>

<?php include_once 'Header.php'; ?>

<main role="main">
    <h3>Basic Info</h3>
    <hr>

    <div class="row">
        <div class="col-md-4 col-xs-12">
            <img src="<?php echo $imagePath; ?>" class="img-thumbnail " alt="..." >
        </div>

        <div class="col-md-6 col-md-offset-1 col-xs-offset-1" >

            <div class="form-group">
                <label for="inputAddress"><?php echo $result['firstName']; ?> </label> <label for="inputAddress"><?php echo $result['lastName']; ?></label>
            </div>

            <div class="form-group">
                <label for="inputEmail4"><?php echo $result['email']; ?></label>
            </div>
            <div class="form-group">
                <label for="inputEmail4"><?php echo $result['phone']; ?></label>
            </div>

            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputAddress"><?php echo $result['address']; ?></label> <br>
                    <label for="inputCity"><?php echo $result['city']; ?></label><label for="inputState"><?php echo $result['state']; ?></label>
                    <label for="inputZip"><?php echo $result['zipcode']; ?></label>
                </div>

            </div>

        </div>
    </div>
</main>

<?php include_once 'Footer.php' ?>