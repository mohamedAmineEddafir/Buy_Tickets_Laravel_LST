@extends('admin_layout.mastrAdmin')

@section('content')
    <div class="wrapper wrapper-body">
        <div class="col-md-11 ms-3">
            <div class="d-main-title">
                <h3><i class="fa-solid fa-user-group me-3"></i>Update Eventes</h3>
            </div>
        </div>

        <!---->
        <div class="col-lg-11">
            <div class="main-card mt-4 ms-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 order-lg-3">
                        <div class="contact-form bp-form p-lg-5 ps-lg-5 pt-lg-4 pb-5 p-4">
                            <div class="row row-cols-3">
                                <div class="col-md-4">
                                    <div class="form-group mt-4">
                                        <label class="form-label" for="image">Image Event*</label>
                                        <input class="form-control h_50" type="file" id="image" accept="image/*"
                                            onchange="previewImage(event)">
                                    </div>
                                </div>

                                <script>
                                    function previewImage(event) {
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var output = document.getElementById('imagePreview');
                                            output.src = reader.result;
                                            output.style.display = 'block';
                                        }
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>

                                <div class="col-md-4">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Title Event*</label>
                                        <input class="form-control h_50" type="text" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Email*</label>
                                        <input class="form-control h_50" type="Email" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Phone*</label>
                                        <input class="form-control h_50" type="text" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Date Start*</label>
                                        <input class="form-control h_50" type="Date" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Message*</label>
                                        <textarea class="form-textarea" placeholder="About"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center mt-4">
                                        <button class="main-btn btn-hover h_50 w-100" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 order-lg-1 d-none d-xl-block">
                        <div class="contact-banner-block">
                            <div class="contact-hero-banner">
                                <div class="contact-hero-banner-info">
                                    <div class="row">
                                        <div class="col-4">
                                            <img id="imagePreview" src="#" alt="Image Preview" style="display:none; margin-top:10px; max-width:40%; ">
                                        </div>
                                        <div class="col-8">
                                            <h3>Changer information about Event's</h3>
                                            <p>Please double-check all of your modifications ✅</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
