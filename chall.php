<?php
require './function.php';
$chall_id = (int) $_GET['id'];
if (isset($chall_id) && is_integer($chall_id) && $chall_id >= 1 && $chall_id <= 7) {
    $results = get_chall_by_id($chall_id);
} else {
    $results = get_chall_by_id(1);
}
?>

<?php
session_start();
if (!isset($_SESSION['id'])) {
    echo '<script type="text/javascript">window.location = "./login.php"</script>';
}

$user_id = (int) $_SESSION['id'];

update_score($user_id);
?>

<?php

if (isset($_POST['submit_flag'])) {
    $flag = $results['Flag'];

    $check_flag = hash('sha256',isset($_POST['flag']) ? ($_POST['flag']) : "");

    $regex = preg_match('/[\'"^£$%&*()@#~?<>,|=+¬-]/', $flag);

    if (!$regex) {
        if ($flag === $check_flag  && $chall_id >= 1 && $chall_id <= 7) {
            if (check_submit($user_id, $chall_id) === 0) {
                change_status_submition_by_id($user_id, $chall_id);
                $message = "Correct2";
                echo "<script type='text/javascript'>alert('$message');</script>";
            } else {
                $message = "Correct3";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            header('location: challenges');
        }
        else {
            $message = "Incorrect2";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }                                                      
    } else {
        $message = "Incorrect3";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge - EHC Workshop</title>
    <link href="http://fonts.cdnfonts.com/css/audiowide" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#02bacd',
                    }
                }
            }
        }
    </script>
</head>

<body>
    <div id="main" class="bg-black relative">
        <div class="flex flex-col items-center py-10 min-h-[100vh]">
            <a href="/" class="flex flex-col items-center">
                <h1 class="text-black text-[2rem]">Ethical Hackers Club</h1>
                <img src="./assets/logo.png" alt="logo" class="h-[60px]">
            </a>
            <div class="md:w-[40%] absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                <div class="flex flex-col text-white">
                    <span class="text-xl py-5"><?php echo $results['Chall_name'] ?></span>
                    <span style="font-family: 'Segoe UI', Arial, sans-serif;">
                        <?php echo $results['Description'] ?>
                    </span>
                    <span class="py-5" style="font-family: 'Segoe UI', Arial, sans-serif;">
                        <?php echo $results['Hint'] ?>
                    </span>
                </div>
                    <form action="" method="POST">
                    <div class="flex flex-row items-center gap-3 pt-5">
                        <label class="relative block w-[100%]">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="15px" height="15px" viewBox="0 0 30 30" version="1.1"
                                class="pointer-events-none w-6 h-6 absolute top-1/2 transform -translate-y-1/2 left-3">
                                <g id="surface1">
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(255, 255, 255);fill-opacity:1;"
                                        d="M 28.894531 2.832031 C 28.21875 2.496094 27.410156 2.566406 26.804688 3.023438 C 24.46875 4.773438 22.207031 4.058594 18.714844 2.75 C 15.289062 1.464844 11.027344 -0.132812 6.824219 3.023438 C 6.320312 3.398438 6.023438 3.992188 6.023438 4.621094 L 6.023438 16.515625 C 6.023438 17.273438 6.453125 17.964844 7.128906 18.304688 C 7.804688 18.644531 8.613281 18.570312 9.21875 18.113281 C 11.554688 16.363281 13.816406 17.078125 17.308594 18.386719 C 19.257812 19.117188 21.480469 19.953125 23.804688 19.953125 C 25.566406 19.953125 27.390625 19.472656 29.203125 18.113281 C 29.703125 17.738281 30 17.144531 30 16.515625 L 30 4.621094 C 30 3.863281 29.574219 3.171875 28.894531 2.832031 Z M 28.894531 2.832031 " />
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(255, 255, 255);fill-opacity:1;"
                                        d="M 1.996094 0.78125 C 0.894531 0.78125 0 1.675781 0 2.777344 L 0 27.222656 C 0 28.324219 0.894531 29.21875 1.996094 29.21875 C 3.101562 29.21875 3.996094 28.324219 3.996094 27.222656 L 3.996094 2.777344 C 3.996094 1.675781 3.101562 0.78125 1.996094 0.78125 Z M 1.996094 0.78125 " />
                                </g>
                            </svg>
                            <input style="font-family: 'Segoe UI', Arial, sans-serif;" type="text" name="flag" id="flag" placeholder=" Enter flag"
                                class="bg-transparent text-white font-medium border border-white border-[2px] rounded-2xl px-[50px] py-3 w-[100%]">                     
                            </label>
                        <button type="submit" name="submit_flag"
                            class="text-white bg-transparent border border-white border-[2px] font-medium text-sm text-center inline-flex items-center mr-2 px-5 rounded-2xl h-[50px]">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    </form>

            </div>
            <div class="mt-auto">
                <a href="challenges.php"
                    class="flex flex-col justify-center items-center underline-none bg-transparent text-xl text-white min-w-[200px] hover:text-gray-100 ">
                    Challenges
                    <div class="mt-2" style="width: 0; height: 0; border-style: solid; border-width: 10px 60px 0 60px; border-color: #ffffff transparent transparent transparent;">
                    </div>
                    
                </a>
                
            </div>
        </div>
    </div>
</body>

</html>
