<?php
include "header.php";
?>

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-lg-5 col-md-10 col-sm-10 col-10 ">
            <div class="card shadow border-0 rounded-3">


                <div class="card-body">
                    <form >
                        <div class="mb-3">
                            <label class="form-label ">نام کاربری</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">گذرواژه</label>
                            <input type="password" name="password" class="form-control">
                        </div>



                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label " for="exampleCheck1">مرا به خاطر بسپار</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary ">ورود</button>
                        </div>


                    </form>
                    <div class="text-center">
                        <a href="#" class="text-muted text-decoration-none">گذرواژه رو فراموش کردی</a>

                    </div>
                    <hr>
                    <div class="text-center ">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                            ثبت نام
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">نام نویسی</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="../controller/register.php" method="post">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" name="firstname" class="form-control" placeholder="نام">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" name="lastname" class="form-control" placeholder="نام خانوادگی">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" name="email" class="form-control" placeholder="ایمیل " >
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" name="mobile"  class="form-control" placeholder=" موبایل" >
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" name="password" class="form-control"  placeholder="گذرواژه">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                <input type="text" class="form-control"  placeholder="تکرار گذرواژه">
                                            </div>

                                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                <h6 class="mb-3">تاریخ تولد</h6>

                                                <h3 hidden="hidden">From Date</h3>
                                                <div class="input-group mb-3">
                                                    <span id="dtp1" class="input-group-text cursor-pointer" data-mds-dtp-guid="f43a28f4-a501-4ed8-afe2-13879d016db3" data-bs-original-title="" title="" data-mds-dtp-group="group1" data-from-date="true"> <i class="fas fa-calendar"></i> </span>
                                                    <input type="text"  name="birthday" data-name="dtp1-text" class="form-control">
                                                </div>

                                            </div>


                                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                <h6 class="mb-4">جنسیت</h6>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input"  type="radio" name="men" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">مرد</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="women" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">زن</label>
                                                </div>
                                            </div>


                                            </div>
<!--                                            <div class="col-12">-->
<!--                                                <button type="submit" class="btn btn-primary">Sign in</button>-->
<!--                                            </div>-->

                                                <div class="modal-footer  d-flex justify-content-center   ">
                                                    <button type="submit" class="btn  btn-success">ذخیره</button>
                                                </div>
                                        </form>
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

<?php

include "footer.php"

?>

