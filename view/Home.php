<?php
include "header.php";
include "navbar.php";

?>

<div class="container-fluid" >
    <div class="row justify-content-center mt-5">
        <div class="col-3">
            <div class="list-group position-absolute  ">
                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                   <a class="text-decoration-none text-dark" href="profile.php">
                       <img src="view/img/team-3.jpg" width="40px"  class="img-fluid rounded-pill " >
                        <p class="d-inline ms-3">Sara</p>
                   </a>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/-XF4FQcre_i.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">دوستان</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/mk4dH3FK0jT.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">گروه ها</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/A1HlI2LVo58.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">نمایش</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/AYj2837MmgX.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">خاطرات</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/2uPlV4oORjU.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">ذخیره شده</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/_JPdPzLmp9j.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">مرکز تبلیغات</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/qR88GIDM38e.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">مدیریت تبلیغات</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/x1JqqPh_PS1.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">مدیریت تجاری</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/tInzwsw2pVX.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">اطلاعات کویید 19</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/GyZZ7Jrr5OV.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">سلامت عاطفی</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/9-o1e6LN_TX.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">رویدادها</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/Zy9sJGThmCS.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">مورد علاقه</p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/XEWvxf1LQAG.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">بازی </p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/FBOwekDrmB5.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">نمایش زنده </p>
                </button>

                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                    <img src="view/img/left_side/kULMG0uFcEQ.png"  width="36px" class="img-fluid rounded-pill " >
                    <p class="d-inline ms-3">وضعیت آب و هوا </p>
                </button>


            </div>

        </div>
        <div class="col-6">
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

<!-- left side -->
        <div class="col-3 ">
            <div class="list-group ">
                <div  class="list-group-item bg-transparent  border-0 p-0" aria-current="true">
                    مخاطبین
                    <hr class="text-dark">

                </div>

            </div>
        </div>

    </div>


    <div class="row justify-content-center mt-5 ">
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    <div class="row" >
                        <div class="col-1" >

                            <img class="rounded-pill" src="https://picsum.photos/50/50" class="img-fluid"  alt="...">

                        </div>
                        <div class="col-11" >
                            <p class="fw-bold  mb-0"> <a href="#" class="text-decoration-none">mamad gholi</a>  </p>
                            <p class="text-secondary mb-0">
                               <small>7 hours ago</small> </p>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <p>
                        iaishdacaiucbjkncakjbncaigdbajnd alkcno i aos jdasij joasdj da oisdh asld hsodih
                    </p>
                    <img  src="https://picsum.photos/700/400" class="img-fluid"  alt="...">
                </div>
                <div class="card-footer ">
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="far fa-thumbs-up "></i> <span class="badge bg-secondary">4</span>
                    </button>
                    <button type="button" class="btn btn-outline-secondary ">
                        <i class="far fa-comment"></i> <span class="badge bg-secondary">4</span>
                    </button>

                </div>
            </div>
        </div>
    </div>

</div>

<?php include "footer.php" ?>
