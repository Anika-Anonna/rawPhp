<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card ">
                    <div class="card-header text-center bg-info py-3 h3">Calculator</div>
                    <div class="card-body bg-info bg-opacity-25 px-5 py-4">

                        <form action="action.php?page=calculate" method="POST" class="">
                            <div class="row mb-3">
                                <label class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="first_number">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3" >Last Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="last_number">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3" >Pick One</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="choice" value="+" class="">+</label>
                                    <label><input type="radio" name="choice" value="-" class="">-</label>
                                    <label><input type="radio" name="choice" value="*" class="">*</label>
                                    <label><input type="radio" name="choice" value="/" class="">/</label>
                                    <label><input type="radio" name="choice" value="%" class="">%</label>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo $message; ?>"/>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-info px-5 py-2" value="Get Result">
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
