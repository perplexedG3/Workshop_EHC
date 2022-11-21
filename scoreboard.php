<?php
require './function.php';
$results = get_score();

session_start();
if (!isset($_SESSION['id'])) {
    echo '<script type="text/javascript">window.location = "./login.php"</script>';
}

$user_id = (int)$_SESSION['id'];

update_score($user_id);

disconnect_db();
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scoreboard - EHC Workshop</title>
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
        <div id="main" class="bg-black">
            <div class="flex flex-col items-center py-10 w-[100%] min-h-[100vh]">
                <a href="/" class="flex flex-col items-center">
                    <h1 class="text-black text-[2rem]">Ethical Hackers Club</h1>
                    <img src="./assets/logo.png" alt="logo" class="h-[60px]">
                </a>
                <div class="bg-black bg-opacity-80 w-[100%] mt-10">
                    <div class="grid grid-cols-5 text-white text-xl mx-auto w-[70%] pb-5 border-b-2 border-white">
                        <div class="col-span-1 text-center">
                            <span>#</span>
                        </div>
                        <div class="col-span-3 text-center">
                            <span>Name</span>
                        </div>
                        <div class="col-span-1 text-center">
                            <span>Score</span>
                        </div>
                    </div>
                    <?php foreach ($results as $value): ?>
                        <div class="grid grid-cols-5 text-white text-xl mx-auto w-[70%] py-5">
                            <div class="col-span-1 text-center">
                                <span><?php echo $value[0] ?></span>
                            </div>
                            <div class="col-span-3 text-center">
                                <span><?php echo $value[1] ?></span>
                            </div>
                            <div class="col-span-1 text-center">
                                <span><?php echo $value[3] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="mt-auto">
                    <a href="challenges.php"
                       class="flex flex-col justify-center items-center underline-none bg-transparent text-xl text-white min-w-[200px] hover:text-gray-100 ">
                        Challenges
                        <div class="mt-2"
                             style="width: 0; height: 0; border-style: solid; border-width: 10px 60px 0 60px; border-color: #ffffff transparent transparent transparent;">
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </body>

</html>
