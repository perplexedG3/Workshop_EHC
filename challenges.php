<?php
require './function.php';
?>

<?php

session_start();
if (!isset($_SESSION['id'])) {
    echo '<script type="text/javascript">window.location = "./login"</script>';
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
        <title>Challenges - EHC Workshop</title>
        <link href="http://fonts.cdnfonts.com/css/audiowide" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
              integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="./css/style.css">
        <title>Crescent</title>
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
        <div id="main" class="bg-black h-[100vh] w-[100vw]">
            <div class="flex flex-col items-center py-10 w-[100%] h-[100%]">
                <h1 class="text-black text-[2rem]">Ethical Hackers Club</h1>
                <img src="./assets/logo.png" alt="logo" class="h-[60px]">

                <div class="py-10">
                    <div class="grid grid-cols-3 gap-10 py-5">
                        <div class="grid-span-1">
                            <?php if (check_submit($user_id, 1) === 0): ?>
                                <a href="./chall?id=1"
                                   class="block text-center underline-none bg-transparent border border-[1px] border-white text-white min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(1)['Chall_name']); ?>
                                </a>
                            <?php else: ?>
                                <a href="./chall?id=1"
                                   class="block text-center underline-none bg-green-700 border border-[1px] border-white text-gray-300 min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(1)['Chall_name']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="grid-span-1">
                            <?php if (check_submit($user_id, 2) === 0): ?>
                                <a href="./chall?id=2"
                                   class="block text-center underline-none bg-transparent border border-[1px] border-white text-white min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(2)['Chall_name']); ?>
                                </a>
                            <?php else: ?>
                                <a href="./chall?id=2"
                                   class="block text-center underline-none bg-green-700 border border-[1px] border-white text-gray-300 min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(2)['Chall_name']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-10 py-5">
                        <div class="grid-span-1">
                            <?php if (check_submit($user_id, 3) === 0): ?>
                                <a href="./chall?id=3"
                                   class="block text-center underline-none bg-transparent border border-[1px] border-white text-white min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(3)['Chall_name']); ?>
                                </a>
                            <?php else: ?>
                                <a href="./chall?id=3"
                                   class="block text-center underline-none bg-green-700 border border-[1px] border-white text-gray-300 min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(3)['Chall_name']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="grid-col-1">
                            <?php if (check_submit($user_id, 4) === 0): ?>
                                <a href="./chall?id=4"
                                   class="block text-center underline-none bg-transparent border border-[1px] border-white text-white min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(4)['Chall_name']); ?>
                                </a>
                            <?php else: ?>
                                <a href="./chall?id=4"
                                   class="block text-center underline-none bg-green-700 border border-[1px] border-white text-gray-300 min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(4)['Chall_name']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="grid-col-1">
                            <?php if (check_submit($user_id, 5) === 0): ?>
                                <a href="./chall?id=5"
                                   class="block text-center underline-none bg-transparent border border-[1px] border-white text-white min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(5)['Chall_name']); ?>
                                </a>
                            <?php else: ?>
                                <a href="./chall?id=5"
                                   class="block text-center underline-none bg-green-700 border border-[1px] border-white text-gray-300 min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                    <?php echo (get_chall_by_id(5)['Chall_name']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="grid-col-1">
                            <?php if (check_submit($user_id, 6) === 0): ?>
                                <a href="./chall?id=6"
                                   class="block text-center underline-none bg-transparent border border-[1px] border-white text-white min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(6)['Chall_name']); ?>
                                </a>
                            <?php else: ?>
                                <a href="./chall?id=6"
                                   class="block text-center underline-none bg-green-700 border border-[1px] border-white text-gray-300 min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                    <?php echo (get_chall_by_id(6)['Chall_name']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="grid-col-1">
                            <?php if (check_submit($user_id, 7) === 0): ?>
                                <a href="./chall?id=7"
                                   class="block text-center underline-none bg-transparent border border-[1px] border-white text-white min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                       <?php echo (get_chall_by_id(7)['Chall_name']); ?>
                                </a>
                            <?php else: ?>
                                <a href="./chall?id=7"
                                   class="block text-center underline-none bg-green-700 border border-[1px] border-white text-gray-300 min-w-[200px] py-5 rounded-xl hover:bg-gray-100 hover:bg-opacity-30">
                                    <?php echo (get_chall_by_id(7)['Chall_name']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="mt-auto">
                    <a href="scoreboard"
                       class="flex flex-col justify-center items-center underline-none bg-transparent text-xl text-white min-w-[200px] hover:text-gray-100 ">
                        Scoreboard
                        <div class="mt-2"
                             style="width: 0; height: 0; border-style: solid; border-width: 10px 60px 0 60px; border-color: #ffffff transparent transparent transparent;">
                        </div>
                    </a>
                </div>
                <a href="/" class="fixed bottom-5 right-5 float-right text-white px-5 py-3 border border-white border-[3px] rounded-full hover:bg-gray-500 hover:bg-opacity-80">Logout</a>
            </div>
        </div>
    </body>

</html>