@extends('layouts.main')
@section('main-section')

<style>
    .modal-dialog-centered {
        min-width: 800px !important;
    }

    @media only screen and (max-width:567px) {

        .modal-dialog-centered {
            min-width: 10vh !important;
        }
    }
</style>

<main id="main" class="main" style="background-color: #adacad1f; border-top-left-radius: 25px; ">

    <!-- Start Page Title -->
    <div class="pagetitle">
        <h1>POS</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">POS</a></li>
                <li class="breadcrumb-item active">POS Credit Customer</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- Modal Forms Start -->

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">


        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content" style="background-color: #1212128f; color:white;">
                <div class="" style="margin: 0 12px;">
                    <div class="row p-2" style="background: linear-gradient(90deg, #d53369 0%, #daae51 100%); border-radius:5px 5px 0 0; ">
                        <div class="col-8 d-flex justify-content-start">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Edit Your Choice</h5>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <a href="" data-bs-dismiss="modal" aria-label="Close" style="text-decoration: none; color:#4d0215; font-size: 23px;"><i class="fa fa-window-close" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Username <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="recipient-name" style="background-color:#737171a8; color:white;">
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="card" class="col-form-label">Id Card <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="card" style="background-color:#737171a8; color:white;">
                            </div>
                            <div class="col-8">
                                <label for="email" class="col-form-label">Your Email <span style="color:red;">*</span></label>
                                <input type="email" class="form-control" id="email" style="background-color:#737171a8; color:white;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="address" class="col-form-label">Address <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="address" style="background-color:#737171a8; color:white;">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="contact" class="col-form-label">Contact <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="contact" style="background-color:#737171a8; color:white;">
                            </div>
                            <div class="col-6">
                                <label for="alternate-contact" class="col-form-label">Alternate Contact <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="alternate-contact" style="background-color:#737171a8; color:white;">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="py-3 d-flex justify-content-center">
                    <button class="btn btn-primary " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="bi bi-pencil-square me-2"></i>Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Forms Ends -->

    <div class="card" style="border-radius: 10px;">
        <div class="row">
            <div class="card-body col-8 justify-content-start" style="padding: 20px 20px 20px 40px;">
                <span style="color: #0D6EFD;"><i class="bi bi-person-fill px-2"></i>ARUN MAK</span><br>
                <span style="color: #e60073;"><i class="bi bi-telephone-fill px-2"></i>3323323323</span>
            </div>
            <div class="col-4 d-flex justify-content-end  align-items-center" style="font-size:30px; color:#0D6EFD; padding-right:40px"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a></div>
        </div>
    </div>
    <div class="card" style="border-radius: 10px;">
        <div class="row">
            <div class="card-body col-8 justify-content-start" style="padding: 20px 20px 20px 40px;">
                <span style="color: #0D6EFD;"><i class="bi bi-person-fill px-2"></i>ARUN MAK</span><br>
                <span style="color: #e60073;"><i class="bi bi-telephone-fill px-2"></i>3323323323</span>
            </div>
            <div class="col-4 d-flex justify-content-end  align-items-center" style="font-size:30px; color:#0D6EFD; padding-right:40px"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a></div>
        </div>
    </div>
    <div class="card" style="border-radius: 10px;">
        <div class="row">
            <div class="card-body col-8 justify-content-start" style="padding: 20px 20px 20px 40px;">
                <span style="color: #0D6EFD;"><i class="bi bi-person-fill px-2"></i>ARUN MAK</span><br>
                <span style="color: #e60073;"><i class="bi bi-telephone-fill px-2"></i>3323323323</span>
            </div>
            <div class="col-4 d-flex justify-content-end  align-items-center" style="font-size:30px; color:#0D6EFD; padding-right:40px"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a></div>
        </div>
    </div>
    <div class="card" style="border-radius: 10px;">
        <div class="row">
            <div class="card-body col-8 justify-content-start" style="padding: 20px 20px 20px 40px;">
                <span style="color: #0D6EFD;"><i class="bi bi-person-fill px-2"></i>ARUN MAK</span><br>
                <span style="color: #e60073;"><i class="bi bi-telephone-fill px-2"></i>3323323323</span>
            </div>
            <div class="col-4 d-flex justify-content-end  align-items-center" style="font-size:30px; color:#0D6EFD; padding-right:40px"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a></div>
        </div>
    </div>
    <div class="card" style="border-radius: 10px;">
        <div class="row">
            <div class="card-body col-8 justify-content-start" style="padding: 20px 20px 20px 40px;">
                <span style="color: #0D6EFD;"><i class="bi bi-person-fill px-2"></i>ARUN MAK</span><br>
                <span style="color: #e60073;"><i class="bi bi-telephone-fill px-2"></i>9948554499</span>
            </div>
            <div class="col-4 d-flex justify-content-end  align-items-center" style="font-size:30px; color:#0D6EFD; padding-right:40px"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-pencil-square" style="color:#0D6EFD;"></i></a></div>
        </div>
    </div>
</main>


@endsection
