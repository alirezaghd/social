<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true):?>

<?php
include "header.php";
include "navbar.php";
?>

<div class="container-fluid" >
    <div class="row justify-content-center mt-5">
<!-- Right side-->
        <div class="col-3">
            <div class="list-group position-absolute  ">
                <button type="button" class="list-group-item list-group-item-action bg-transparent border-0" aria-current="true">
                   <a class="text-decoration-none text-dark" href="profile.php">
                       <img src="view/img/team-3.jpg" width="40px"  class="img-fluid rounded-pill " >
                       <?php  echo $_SESSION["username"];
                       ?>
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
<!-- put Post -->
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    چی توی ذهنته یک پست جدید بزار
                </div>
                <div class="card-body">
                    <form method="post" action="post" id="newpostform">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" name="captions" id="exampleFormControlTextarea1" rows="3"></textarea>
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

<!-- show posts -->
    <?php foreach ($my_array as $post): ?>
    <div class="row justify-content-center mt-5 ">
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    <div class="row" >
                        <div class="col-1" >

                            <img class="rounded-pill" src="<?php
                            if ($post["image"] != "")
                            {
                                echo $post["image"];
                            }
                            else
                            {
                                if ($post["gender"] == 0){
                                    echo "images/users/userfemale.png";
                                }
                                else{
                                    echo "images/users/usermale.png";
                                }
                            }

                            ?>" class="img-fluid" width="50px" loading="lazy"  alt="...">

                        </div>
                        <div class="col-10" >
                            <p class="fw-bold  mb-0"> <a href="#" class="text-decoration-none"><?php echo $post["username"];?></a>  </p>
                            <p class="text-secondary mb-0">
                               <small> <?php echo time2str($post["time"]);?>
                               </small> </p>
                        </div>
                        <?php if ($_SESSION["user_id"] == $post["user_id"] ): ?>
                        <div class="col-1" >
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle border-0" type="button" id="dropdownCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" >
                                    <li><a class="dropdown-item" href="#">ویرایش</a></li>
                                    <li><a class="dropdown-item" href="#">حذف</a></li>
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>
                        </div>
                </div>
                <div class="card-body">
                    <p>
                        <?php echo $post["caption"];?>
                    </p>


                  <img  src="<?php echo $post["media"];?>" class="img-fluid" loading="lazy" alt="...">

                </div>
                <div class="card-footer ">
                    <form class="d-inline" id="form-like-<?php echo $post["postid"];?>">
                        <input type="hidden" name="post_id" value="<?php echo $post["postid"];?>">
                        <button type="button" id="btn-like-<?php echo $post["postid"];?>" onclick="send_like(<?php echo $post["postid"]; ?>)" class="btn
                            <?php
                        if($post["like_user"] == 0)
                                {
                                    echo "btn-outline-secondary";
                                }
                        else{
                                    echo "btn-secondary";
                                }
                                ?>">
                            <i class="far fa-thumbs-up "></i>
                            <span id="count-like-<?php echo $post["postid"];?>" class="badge btn  bg-secondary">
                            <?php echo $post["likes"]["count"]; ?>
                            </span>
                        </button>

                    </form>

                    <button type="button" class="btn btn-outline-secondary " data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $post["postid"];?>" aria-expanded="false" aria-controls="collapseExample">
                        <i class="far fa-comment"></i> <span class="badge bg-secondary">
                            <?php echo $post["comments_num"]["count"]; ?>
                        </span>
                    </button>
                    <div class="collapse" id="collapse<?php echo $post["postid"];?>">
                        <form id="form-comment-<?php echo $post["postid"];?>">
                            <div class="card card-header mt-2">
                                <div class="input-group mb-3">
                                    <textarea class="form-control" name ="text"  placeholder="کامنت خود را بنویسید" rows="1" aria-describedby="button-addon1"></textarea>
                                    <button class="btn btn-outline-secondary" type="button" onclick="send_comments(<?php echo $post["postid"]; ?>,'<?php echo $post["username"];?>')" id="button-addon1"> ارسال </button>
                                    <input type="hidden" name="post_id" value="<?php echo $post["postid"];?>">

                                </div>

                            </div>

                        </form>


                        <ul class="list-group" id="listcomments-<?php echo $post["postid"];?>">

                        <?php foreach ($post["comments"] as $comment): ?>

                                <li  class="list-group-item list-group-item-action mt-2" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?php echo $comment["username"];?></h5>
                                        <small><?php echo time2str($comment["time"]);?></small>
                                    </div>
                                    <p class="mb-1">
                                        <?php echo $comment["text"];?>
                                    </p>
                                </li>

                        <?php endforeach;?>
                        </ul>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>

</div>
<?php else:
    header("Location: index");
 endif; ?>

<?php include "footer.php" ?>
<script >
    function send_like(postid) {

        let btn = document.getElementById("btn-like-" + postid)
        let count_number_tag = document.getElementById("count-like-" + postid)
        let form_like = document.getElementById("form-like-" + postid)
        let form_data = new FormData(form_like)


        fetch("send-like",{
            method :"post",
            body:form_data
        }).then(result=> result.text()
        ).then(result=>{

            if(result == 1)
            {
                btn.classList.remove("btn-outline-secondary")
                btn.classList.add("btn-secondary")
                let number = count_number_tag.innerHTML;
                number++
                count_number_tag.innerHTML = number;
                <?php  $_SESSION["like"] = 0 ?>
            }
            else if(result == 0){
                btn.classList.remove("btn-secondary")
                btn.classList.add("btn-outline-secondary")
                let number = count_number_tag.innerHTML;
                number--;
                count_number_tag.innerHTML = number;
                <?php  $_SESSION["like"] = 1 ?>

            }
        }).catch(erorr =>{
            alert(erorr)
        });

    }



    function send_comments(postid,user) {
        let form = document.getElementById("form-comment-" + postid)
        let form_data = new FormData(form)


        fetch("send_comments",{
            method :"post",
            body:form_data
        }).then(result =>{
            let comments = document.getElementById("listcomments-" + postid);

            let li = document.createElement("LI");
            li.className = "list-group-item list-group-item-action mt-2";

            let div = document.createElement("DIV");
            div.className = "d-flex w-100 justify-content-between";

            let h5 = document.createElement("H5");
            h5.className = "mb-1";
            h5.innerHTML = user;

            let small = document.createElement("SMALL");
            small.innerHTML = " هم اکنون"

            let p = document.createElement("P");
            p.className = "mb-1";

            p.innerHTML = form_data.get("text")

            li.appendChild(div);
            div.appendChild(h5);
            div.appendChild(small);
            li.appendChild(p);
            comments.appendChild(li)

        }).catch(error=>{
            alert(error);
        });

    }
</script>
