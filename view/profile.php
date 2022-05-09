<?php
include "header.php";
include "navbar.php";
?>

<div class="container" >
    <div class="row justify-content-center  " >
<!--Cover -->
        <div class="col-9 rounded-3" style="background-color: white" >
            <img src="https://picsum.photos/id/1/1000/400"  class="img-fluid rounded-3">
            <button class="btn btn-light btn_cover">افزودن کاور</button>

            <div class="row justify-content-center">
                <div class="col-12" style="height: 135px">
                    <button class="btn btn-secondary " style="position:relative;top: -80px;"> ویرایش پروفایل</button>
                    <button class="btn btn-primary" style="position:relative;top: -80px;">افزودن دوستان</button>

                    <h5 class="d-inline" style="margin-right: 45%; position:relative;top: -80px;">sara</h5>
                    <img src="view/img/team-3.jpg" width="200px" class="img-thumbnail rounded-pill ms-2" style="position:relative;top: -100px;">
                    <hr class="text-dark" style="position:relative;top: -85px;">
                </div>

                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container p-0">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="navbar-nav">
                                <button class="nav-item btn btn-outline-light border-0">
                                    <a class="nav-link " aria-current="page" href="#">پست</a>
                                </button>
                                <button class="nav-item btn btn-outline-light border-0">
                                    <a class="nav-link " aria-current="page" href="#">درباره</a>
                                </button>
                                <button class="nav-item btn btn-outline-light border-0">
                                    <a class="nav-link " aria-current="page" href="#">دوستان</a>
                                </button>
                                <button class="nav-item btn btn-outline-light border-0">
                                    <a class="nav-link " aria-current="page" href="#">عکس</a>
                                </button>
                                <button class="nav-item btn btn-outline-light border-0">
                                    <a class="nav-link " aria-current="page" href="#">ویدئو</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </div>
</div>

<div class="container" >
    <div class="row justify-content-center mt-3 " >

            <div class="col-6 p-1">
                <div class="card ">
                    <div class="card-header">
                        چی توی ذهنته یک پست جدید بزار
                    </div>
                    <div class="card-body">
                        <form method="post" action="controller/post.php" id="newpostform">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </form>

                    </div>
                    <div class="card-footer text-muted">
                        <button class="btn btn-primary" type="submit" form="newpostform"> انشار پست جدید </button>
                    </div>
                </div>
            </div>
            <div class="col-3  p-1">
                <div class="card ">
                    <div class="card-header">
                        معرفی
                    </div>
                    <div class="card-body bg-transparent">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        bio
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show " aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body ">
                                        <ul class="list-group border-0">
                                            <li class="list-group-item border-0 "><i class="far fa-map me-2"></i> مشهد</li>
                                            <li class="list-group-item border-0"><i class="far fa-briefcase me-2"></i> طراحی سایت</li>
                                            <li class="list-group-item border-0"><i class="far fa-graduation-cap me-2"></i>دانشگاه سجاد</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        علایق
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <ul class="list-group border-0">
                                            <li class="list-group-item border-0 "><i class="far fa-football-ball me-2"></i> فوتبال</li>
                                            <li class="list-group-item border-0"><i class="far fa-tennis-ball me-2"></i> تنیس</li>
                                            <li class="list-group-item border-0"><i class="far fa-music me-2"></i>پیانو</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>


    </div>
</div>

<?php include "footer.php" ?>

