<?php include 'header.php'; ?>

<!-- main-area -->
<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center" style="min-height: auto;
        padding: 70px 0;
        background: #fcc741;">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Admission Form</h2>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Admission Form</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <section id="contact" class="gmp-2 mission-wrp contact-area after-none contact-bg pt-60 pb-60 p-relative fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-2">
                    <div class="contact-bg">
                        <div class="section-title center-align text-center mb-50">
                            <h2>
                                <!-- Admission Enquiry Form -->
                            </h2>
                        </div>
                        <form class="contact-form mt-30 contact-field " enctype="multipart/form-data"
                            action="#" method="POST" novalidate="novalidate">
                            <input type="hidden" name="_token" value="mHrxrEhIXg0PGHMVGHnaAeY4SmyAOMgtuJ7v1GOe">                            <div class="row">
                                <div class="form-group col-sm-12 col-md-4">
                                    <label>Student Name <span class="text-danger">*</span></label>
                                    <input placeholder="Student Name" class="form-control" name="student_name"
                                        type="text">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label>Current School<span class="text-danger">*</span></label>
                                    <input placeholder="Current School" class="form-control" name="previous_school_name"
                                        type="text">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label>Father&#039;s Name <span class="text-danger">*</span></label>
                                    <input placeholder="Father&#039;s Name" class="form-control" name="father_name"
                                        type="text">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label>Class to be admitted in <span class="text-danger">*</span></label>
                                     <select name="admitted_class" class="form-select" style="height: 45px; padding:0 13px;"
                                        required>
                                        <option value="Not Selected">Class to be admitted in</option>
                                        <option value="NURSUERY">NURSUERY</option>
                                        <option value="LKG">LKG</option>
                                        <option value="KG">KG</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                        <option value="V">V</option>
                                        <option value="VI">VI</option>
                                        <option value="VII">VII</option>
                                        <option value="VIII">VIII</option>
                                        <option value="IX">IX</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label>Mother&#039;s Name <span class="text-danger">*</span></label>
                                    <input placeholder="Mother&#039;s Name" class="form-control" name="mother_name"
                                        type="text">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label> Date of Birth <span class="text-danger">*</span></label>
                                    <input placeholder="Date of Birth" class="form-control" name="dob" type="date">
                                </div>
                                <div class="form-group col-12">
                                    <label>Address<span class="text-danger">*</span></label>
                                    <textarea placeholder="Address" class="form-control" id="address" rows="2"
                                        name="address" cols="50"></textarea>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label>Gender<span class="text-danger">*</span></label>
                                    <select name="gender" class="form-select" style="height: 45px; padding:0 13px;"
                                        required>
                                        <option value="Not Selected">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label>Contact No.<span class="text-danger">*</span></label>
                                    <input placeholder="Contact Number" class="form-control" name="contact_no"
                                        type="text">
                                </div>



                                
                                
                                
                                


                            </div>
                            <div class="slider-btn">
                                <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Submit
                                        Now</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- main-area-end -->

<?php include 'footer.php'; ?>


