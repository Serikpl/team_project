
 <?php include ROOT.'/Views/Admin/adminheader.php'; ?>
    <div class="adminContent">
        <div class="container">
            <div class="admin-category clearfix">
                <h1>Edit order <a class="btn" href="../">&larr;</a></h1>
                <div class="content-wrapper one_column">
                    <form class="row" action="#" method="post" enctype="multipart/form-data">
                        <p><label>Name of brand</label><br />
                            
                            <select name="status">
                                <option value="new (undelivered)" selected>new (undelivered)</option>
                                <option value="in progress">in progress</option>
                                <option value="delivered">delivered</option>
                            </select>

                        <button type="submit" class="btn btn-success">Zapisz</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</body>

</html>
