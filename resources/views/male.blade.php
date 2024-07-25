<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./test.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link
        href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
        rel="stylesheet"
    />
    <title>مردانه</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./index.css" />
</head>
<body dir="rtl">
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="./logo/padamira.png" />
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="./female.html"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            زنانه
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">شلوار</a></li>
                            <li><a class="dropdown-item" href="#">شومیز</a></li>
                            <li>
                                <a class="dropdown-item" href="#">سویشرت</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            مردانه
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">شلوارک</a></li>
                            <li><a class="dropdown-item" href="#">شلوار</a></li>
                            <li>
                                <a class="dropdown-item" href="#">پیراهن</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="./childish.html"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            بچگانه
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">شلوار</a></li>
                            <li><a class="dropdown-item" href="#">سارافون</a></li>
                            <li>
                                <a class="dropdown-item" href="#">پیراهن</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="p-3">
                <a href="#"><img src="./logo/img1.png" /></a>
            </div>
            <div class="p-3">
                <a href="#"> <img src="./logo/img2.png" /></a>
            </div>
            <div class="p-3">
                <a href="#"><img src="./logo/img3.png" /></a>
            </div>
        </div>
    </nav>
    <hr class="text-secondary"/>
    <div class="mx-5 text-secondary fs-6">
        <p>فروشگاه اینترنتی پارمیدا > مردانه</p>
    </div>
    <hr class="text-secondary mx-5" />

    <div class="row">
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/شلوار')}}"><img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/1.jpg"
                    alt="شلوار"
                    title="شلوار"
                /></a>
            <div class="text-center p-2"><h6>شلوار</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/شلوارک')}}"><img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/3.jpg"
                    alt="شلوارک"
                    title="شلوارک"
                /></a>
            <div class="text-center p-2"><h6>شلوارک</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/پیراهن')}}"> <img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/4.jpg"
                    alt="پیراهن"
                    title="پیراهن"
                /></a>
            <div class="text-center p-2"><h6>پیراهن</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/تیشرت')}}"> <img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/5.jpg"
                    alt="تیشرت و پلوشرت"
                    title="تیشرت و پلوشرت"
                /></a>
            <div class="text-center p-2"><h6>تیشرت و پلوشرت</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/هودی')}}"><img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/6.jpg"
                    alt="سویشرت و هودی و دورس"
                    title="سویشرت و هودی و دورس"
                /></a>
            <div class="text-center p-2"><h6>سویشرت و هودی و دورس</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 " style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/ژاکت')}}"> <img
                    style="
              width: 151px;
              height: 160px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    width="200"
                    src="./man/7.jpg"
                    alt="ژاکت و پلیور و بافت"
                    title="ژاکت و پلیور و بافت"
                /></a>
            <div class="text-center p-2"><h6>ژاکت و پلیور و بافت</h6></div>
        </div>
        <div  class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/کلاه')}}"> <img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/2.jpg"
                    alt="کلاه"
                    title="کلاه"
                /></a>
            <div class="text-center p-2"><h6>کلاه</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/جوراب')}}"><img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/8.jpg"
                    alt="جوراب"
                    title="جوراب"
                /></a>
            <div class="text-center p-2"><h6>جوراب</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/لباسزیر')}}"><img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/9.jpg"
                    alt="لباس زیر"
                    title="لباس زیر"
                /></a>
            <div class="text-center p-2"><h6>لباس زیر</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/حوله')}}"><img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/10.jpg"
                    alt="حوله"
                    title="حوله"
                /></a>
            <div class="text-center p-2"><h6>حوله</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/کیف')}}"><img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/11.jpg"
                    alt="کیف و کمربند و صندل"
                    title="کیف و کمربند و صندل"
                /></a>
            <div class="text-center p-2"><h6>کیف و کمربند و صندل</h6></div>
        </div>
        <div class="col-12 col-sm-4 col-md-3" style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
            <a href="{{url('kalas/man/ورزشی')}}"><img
                    style="
              height: 150px;
              border: 1px solid black;
              border-radius: 150px;
              padding: 5px;
            "
                    class="w-200"
                    src="./man/12.jpg"
                    alt="لباس راحتی و ورزشی"
                    title="لباس راحتی و ورزشی"
                /></a>
            <div class="text-center p-2"><h6>لباس راحتی و ورزشی</h6></div>
        </div>
    </div>
</div>
<br>
<br>
<footer class="p-10">
    <div class="container py-5">
        <div class="row pb-5">
            <div class="col-lg-4">
                <div class="footer-right-side">
                    <p class="py-2 text-white">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است.
                    </p>
                    <ul class="d-flex">
                        <li>
                            <a href="../logo/img4.png"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 pr-5">
                <div class="footer-left-side">
                    <h5 class="text-white footer-off">
                        به مناسبت روز زن تمامی صندل های زنانه 50% تخفیف خواهند داشت.
                    </h5>
                    <div class="footer-left-side-item d-flex mt-5">
                        <div class="quick-access">
                            <h6 class="text-white mb-4">لینک های مفید</h6>
                            <ul class="d-flex flex-wrap">
                                <li><a href="">خانه</a></li>
                                <li><a href="">درباره ما</a></li>
                                <li><a href="">بلاگ</a></li>
                                <li><a href="">تماس با ما</a></li>
                                <li><a href="">مشاغل</a></li>
                                <li><a href="">حریم خصوصی</a></li>
                                <li><a href="">شرایط و ضوابط</a></li>
                                <li><a href="">پشتیبانی</a></li>
                            </ul>
                        </div>
                        <div class="ecommerce">
                            <h6 class="text-white mb-4">فروشگاه ما</h6>
                            <p class="text-white">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                با استفاده از طراحان گرافیک است.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 border-top">
            <div class="col-lg-6">
                <ul class="d-flex">
                    <li><a href="" class="text-muted pl-4">حریم خصوصی</a></li>
                    <li><a href="" class="text-muted pl-4">شرایط خدمات رسانی</a></li>
                    <li><a href="" class="text-muted pl-4">مراقبت از مشتری</a></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <p class="text-muted">© 2020 کلیه حقوق محفوظ است</p>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>
