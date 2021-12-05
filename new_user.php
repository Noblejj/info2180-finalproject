
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BugMe Issue Tracker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!--HEADER WITH ICON -->
        <?php include 'header.php'; ?>
        <div class="content">
            <!-- SIDEBAR MENU-->
            <?php include 'sidebar.php'; ?>
            <!--Main Page Content display -->
            <main>
                <form action="add_new_user.php" method="post">
                    <div class="addUserContainer">
                        <h1 id="NewUserHeading">New User</h1>
                        <hr>
                        
                        <label for="firstname"><b>Firstname</b></label>
                        <input type="text" name="firstname" id="firstname" required>
                    
                        <label for="lastname"><b>Lastname</b></label>
                        <input type="text" name="lastname" id="lastname" required>

                        <label for="email"><b>Email</b></label>
                        <input type="text" name="email" id="email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" name="password" id="password" required>   
                        <button type="submit" class="Submitbtn">Submit</button>
                    </div>

                </form>
            </main>
        </div>
    </div>
    
</body>
</html>