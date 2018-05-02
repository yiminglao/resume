<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/3/2017
 * Time: 6:53 PM
 */

require_once 'config.php';
require_once 'vendor/autoload.php';
use Resume\Controllers\AdminController as admin;
use Resume\Controllers\UserInfoController as user;
use Resume\Controllers\LoginController as login;




session_start();


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) use ($baseURI){

    $index = function ($agrs)
    {
        $index = new \Resume\Controllers\FrontController();
        $index->loadView('BasicInfo.php');

    };
    $eduFront = function ($agrs)
    {
        $edu = new \Resume\Controllers\FrontController();
        $edu->loadView('EduList.php');

    };
    $expFront = function ($agrs)
    {
        $exp = new \Resume\Controllers\FrontController();
        $exp->loadView('ExpList.php');

    };





    $getInfo = function($agrs)
    {
        $basicPage = new user();
        $basicPage->loadView('BasicInfo.php');
    };

    $updateInfo = function($agrs)
    {
        $user = new user();
        $user->saveInfo();

    };

    /***
     * @param login / logout
     */
    $logout = function($agrs)
    {
        $signOut = new admin();
        $signOut->logout();
    };

    $loginPage = function ($agrs)
    {
        $login = new login();
        $login->loadView('LoginView.php');
    };

    $loginPost = function ($agrs)
    {
        $logIn = new login();
        $logIn->login();
    };

    /***
     * @param Education
     */
    $eduList = function($args)
    {
        $edu = new \Resume\Controllers\EduController();
        $edu->loadView('EduList.php');
    };

    $addEdu = function($args)
    {
        $edu = new \Resume\Controllers\EduController();
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $edu = new \Resume\Controllers\EduController();
            $edu->insertEdu();

        }else
        {
            $edu->loadView('EduAdd.php');
        }

    };
    $editEdu = function($args)
    {
        $edu = new \Resume\Controllers\EduController();
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $edu->updateEdu($args['id']);


        }else
        {
            $edu->loadView('EduForm.php',$args['id']);
        }

    };
    $delEdu = function($args)
    {
        $edu = new \Resume\Controllers\EduController();
        $edu->delEduById($args['id']);
    };

    /***
     * Work Experience
     */
    $ListXp = function($args)
    {
        $edu = new \Resume\Controllers\ExperienceController();
        $edu->loadView('ExpList.php');
    };

    $addXp = function($args)
    {
        $edu = new \Resume\Controllers\ExperienceController();
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $edu = new \Resume\Controllers\ExperienceController();
            $edu->insertExp();

        }else
        {
            $edu->loadView('ExpAdd.php');
        }

    };
    $editXp = function($args)
    {
        $exp = new \Resume\Controllers\ExperienceController();
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $exp->updateExp($args['id']);

        }else
        {
            $exp->loadView('ExpEdit.php');
        }

    };
    $delXp = function($args)
    {
        $edu = new \Resume\Controllers\ExperienceController();
        $edu->delExpById($args['id']);
    };
    /**
     *  Contact
     */
    $contact = function($args)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $body = htmlspecialchars($_POST['message']);
            // Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'tls'))
                ->setUsername('email')
                ->setPassword('123456');

            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

            // Create a message
            $message = (new Swift_Message($subject))
                ->setFrom([$email => $name])
                ->setTo(['ming@gmail.com', 'ming@gmail.com' => 'Ming'])
                ->setBody($body);

            // Send the message
            $result = $mailer->send($message);
            if($result == 1)
            {
                header('location: http://icarus.cs.weber.edu/~yl26236/mingresume/thankyou');
            }
            else{
                echo 'oh,sorry!!! Something Happen';
            }
        }
        else{

            $contact = new \Resume\Controllers\ContactController();
            $contact->loadView('Contact.php');
        }

    };

    $thankyou = function ($args)
    {
        $edu = new \Resume\Controllers\ContactController();
        $edu->loadView('ThankNote.php');

    };


    //Index
    $r->addRoute('GET', $baseURI, $index);
    $r->addRoute('GET', $baseURI.'/index', $index);
    $r->addRoute('GET', $baseURI.'/index.php', $index);
    // front end edu
    $r->addRoute('GET', $baseURI.'/edu', $eduFront);
    //front end exp
    $r->addRoute('GET', $baseURI.'/exp', $expFront);

    // front end Contact
    $r->addRoute('GET', $baseURI.'/contact', $contact);
    $r->addRoute('POST', $baseURI.'/contact', $contact);


    //Login/logout
    $r->addRoute('GET', $baseURI.'/login', $loginPage);
    $r->addRoute('POST', $baseURI.'/login', $loginPost);

    //basic info page
    $r->addRoute('GET', $baseURI.'/admin/basicinfo', $getInfo);
    $r->addRoute('POST', $baseURI.'/admin/basicinfo', $updateInfo);


    //logout
    $r->addRoute('GET', $baseURI.'/admin/logout', $logout);

    //Education
    $r->addRoute('GET', $baseURI.'/admin/edu', $eduList);
    $r->addRoute('GET', $baseURI.'/admin/edu/add', $addEdu);
    $r->addRoute('POST', $baseURI.'/admin/edu/add', $addEdu);
    $r->addRoute('GET', $baseURI.'/admin/edu/edit/{id:\d+}', $editEdu);
    $r->addRoute('POST', $baseURI.'/admin/edu/edit/{id:\d+}', $editEdu);
    $r->addRoute('GET', $baseURI.'/admin/edu/del/{id:\d+}', $delEdu);

    //Work
    $r->addRoute('GET', $baseURI.'/admin/exp', $ListXp);
    $r->addRoute('GET', $baseURI.'/admin/exp/add', $addXp);
    $r->addRoute('POST', $baseURI.'/admin/exp/add', $addXp);
    $r->addRoute('GET', $baseURI.'/admin/exp/edit/{id:\d+}', $editXp);
    $r->addRoute('POST', $baseURI.'/admin/exp/edit/{id:\d+}', $editXp);
    $r->addRoute('GET', $baseURI.'/admin/exp/del/{id:\d+}', $delXp);



    $r->addRoute('GET', $baseURI.'/thankyou', $thankyou);


});


$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$pos = strpos($uri, '?');
if ($pos !== false) {
    $uri = substr($uri, 0, $pos);
}
$uri = rtrim($uri, "/");

$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($method, $uri);

switch($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(Resume\Http\StatusCodes::NOT_FOUND);
        //Handle 404
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(Resume\Http\StatusCodes::METHOD_NOT_ALLOWED);
        //Handle 403
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler  = $routeInfo[1];
        $vars = $routeInfo[2];

        $response = $handler($vars);
        //echo json_encode($response);
        break;
}
