<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
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
    <link rel="stylesheet" href="{{url('./test.css')}}" />
    <title>پادمیرا</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./index.css" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body dir="rtl">
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="{{url('./logo/padamira.png')}}"/>
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
                            href="./male.html"
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
                <a href="#"><img src="{{url('./logo/img1.png')}}" /></a>
            </div>
            <div class="p-3">
                <a href="#"> <img src="{{url('./logo/img2.png')}}" /></a>
            </div>
            <div class="p-3">
                <a href="#"><img src="{{url('./logo/img3.png')}}" /></a>
            </div>
        </div>
    </nav>
    <hr class="text-secondary"/>
    <div class="mx-5 text-secondary fs-6"></div>


    <br>



    <div class="container">
        <div class="row">
            @foreach($kalas as $kala)

                <div class="col-6 col-md-4 col-xl-3 p-4 " style="align-items: center;justify-content: center;display: flex;flex-direction: column;">
                    <div class="card bg-light" style="width: 100%;">
                        <img
                            src="{{url('images/'.$kala->image)}}"
                            style="height: 300px;"
                            alt="">
                        <div class="card-body">
                            <h6 class="card-title text-center fs-6 p-3 mb-2 bg-white text-dark rounded "> {{ 'name = '.$kala->name .' --  id ='. $kala->id}}</h6>
                            <hr>
                            <button type="button" class="btn btn-outline-primary" style="margin:0 auto; display: block;"> تومان {{$kala->price}}</button>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>

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


</body>
</html>
