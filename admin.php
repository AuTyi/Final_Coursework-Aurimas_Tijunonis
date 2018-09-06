<?php require_once('includes/head_section.php') ?>

<title>Pizzeria Vilnius Best of</title>
	</head>
<body>
	     
    <?php 
            include('includes/config.php');//connect to database
  
            if (!isset($_SESSION['username'])) {
                $_SESSION['msg'] = "You must log in first";
                header('location: login.php');
            }
            if (isset($_GET['logout'])) {
                session_destroy();
                unset($_SESSION['username']);
                header("location: admin_login.php");
            }

            //get user name from db to display;
            $em = $_SESSION['username'];
            $result = $conn->query("SELECT `name` FROM `users` WHERE `email` = '$em' ");
            if($result->num_rows > 0){
                $user = $result->fetch_assoc();
                $_SESSION['us'] = $user['name'];
            }
            
            ?>

                <!-- logged in user information -->
                <?php  if (isset($_SESSION['username'])) : ?>
                    <div class="welcome">
                        <div class="bar b-black" >
                            <p class="n-button" >Welcome <span><?php echo $_SESSION['us']; ?></span></p>
                            <p class="n-button" > <a href="includes/logout.php?logout='1'" style="color: red;">Logout</a> </p>
                        </div>
                    </div> 

<section class="admin" id="admin">
    <div class = "m-content">    
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                    <h3>
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                    </h3>
                </div>
                <?php endif ?>
        <h1 class="m-center">Users reservation and submited messages</h1>                   
                        <!-- read feedback script-->
                        <?php include('includes/read_fedback.php') ?>

                <?php endif ?>
                
        
    </div>  
</section>


<!-- footer -->
<?php include('includes/footer.php') ?>