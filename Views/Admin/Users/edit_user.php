
 <?php include ROOT.'/Views/Admin/adminheader.php'; ?>
    <div class="adminContent">
        <div class="container">
            <div class="admin-category clearfix">
                <h1>Edit user <a class="btn" href="../">&larr;</a></h1>
                <div class="content-wrapper one_column">
                    <p><?php 
                        if ($errors) 
                        {
                            echo $errors[0];
                        }
                         
                    ?></p>
                    
                    <form class="row" action="#" method="post" enctype="multipart/form-data">

                        <input type="text" name="name" placeholder="name" value="<?php echo $user['name'] ?>" required><br>

                        <!-- <input type="email" name="email" placeholder="email" value="<?php echo $user['email'] ?>" required><br>  -->
                        <p>Email can't be changed.</p>

                        <input type="password" name="password" placeholder="new password" ><br>
                        <!-- <p><label for='sel_type'>User type</label></p> -->
                        <select name="user_type" id="sel_type">
                            <option value="">Select user type</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>

                        <button type="submit" class="btn btn-success">Edit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</body>

</html>
