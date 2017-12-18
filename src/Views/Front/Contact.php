<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/7/2017
 * Time: 11:22 PM
 */
include_once 'Header.php';

?>

    <main role="main">
        <h3>Contact Me</h3>
        <hr>
        <div class="row justify-content-center">
            <form class="col-md-6" action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Your Name">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="example@mail.com">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Your Message</label>
                    <textarea class="form-control"  id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </main>

<?php include_once 'Footer.php' ?>