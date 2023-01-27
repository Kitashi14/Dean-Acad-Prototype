<!-- admin page  -->
<?php

// importing header component
include './../inc/header.php';

// redirecting if user is not set or not admin
if (isset($_SESSION['uid']) && isset($_SESSION['isAdmin'])) {
    if (!$_SESSION['isAdmin']) {
        header('Location : ./error.php?error=Page no found');
    }
} else {
    header('Location : ./error.php?error=Page no found');
}


?>
<div>
    <div class="flex justify-center items-center w-full h-10 text-4xl font-medium">Admin Page</div>
    <div class="h-1/3 flex flex-row">

        <!-- Admin details  -->
        <div class="bg-gray-200 mt-4 w-1/2 flex flex-col justify-around px-3 pl-16 ">
            <h2> Name : <?php echo $_SESSION['name'] ?></h2>
            <h2> Email : <?php echo $_SESSION['email'] ?></h2>
            <h2> Category : <?php echo $_SESSION['category'] ?></h2>
        </div>

        <!-- button linked to set status form page  -->
        <div class=" w-1/2 mt-4 bg-gray-200 py-10 px-4 flex flex-row justify-evenly space-x-2 items-center">
            <a class="bg-green-600 h-10 text-center flex items-center text-white py-1 px-3 ml-5" href="<?php echo rootUrl, '/pages/statusForm.php'; ?>">Set Status</a>

        </div>
    </div>
</div>





<?php

// importing footer component
include './../inc/footer.php';
?>