<?php include 'header.php'; ?>

<section class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-info py-3 h3">Create Full Name</div>
                    <div class="card-body bg-info bg-opacity-25 py-4">

                        <form action="action.php?page=submitName" method="post" class="">
                            <div class="row mb-3">
                                <label class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="first-name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3" >Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="last-name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo $message; ?>"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-info px-5 py-2" value="Create Name">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
