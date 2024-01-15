<div>
    <div class="row">
        <div class="col-xxl-12 col-md-12">
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" required/>
                <div class="invalid-feedback"> Name</div>
            </div>
        </div>
        <!--end col-->


    </div>



    <div class="row">


        <div class="col-xxl-6 col-md-6">
            <div class="mb-3">
                <label class="form-label">Tel number</label>
                <div class="input-group" data-input-flag>
                    <button class="btn btn-light border" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/images/flags/us.svg" alt="flag img" height="20" class="country-flagimg rounded"><span class="ms-2 country-codeno">+ 1</span></button>
                    <input type="number" class="form-control rounded-end flag-input" name="phone" value="" placeholder="Enter number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                </div>
            </div>
        </div>


        <div class="col-xxl-6 col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="form-icon right">
                    <input type="email" class="form-control form-control-icon" id="email" name="email" placeholder="example@gmail.com" required/>
                    <i class="ri-mail-unread-line"></i>
                    <div class="invalid-feedback">Please enter an email address</div>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-xxl-6 col-md-6">
            <div class="mb-3">
                <label for="dateOfBirth" class="form-label">Date of birth</label>
                <input type="date" class="form-control" id="dateOfBirth" name="dob" required/>
            </div>
        </div>


        <div class="col-xxl-6 col-md-6">
            <div class="mb-3">
                <label for="dateOfBirth" class="form-label">Sex</label>
                <select class="form-select mb-3" aria-label="Default select example" id="gender" name="gender" required>
                            <option value="">Select Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                </select>
            </div>
        </div>

        <!--end col-->

    </div>


</div>
