<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: white;">
    <div class="container-fluid">
      <a class="navbar-brand items" href="#">دسته بندی کالاها</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"></li>
          <li class="nav-item">
            <a class="nav-link items" aria-current="page" href="#"><i class="far fa-shopping-basket"></i>سوپرمارکت</a>
          </li>
          <li class="nav-item">
            <a class="nav-link items" href="#"><i class="far fa-tag"></i>تخفیف ها و پیشنهادها</a>
          </li>
          <li class="nav-item">
            <a class="nav-link items" href="#"><i class="fas fa-medal"></i>دیجی کالای من</a>
          </li>
          <li class="nav-item">
            <a class="nav-link items"><i class="fas fa-gem" style="color: rgb(107, 13, 173);"></i>دیجی پلاس</a>
          </li>
          <li class="nav-item">
            <a class="nav-link items"><i class="fas fa-thumbs-up"></i>دیجی کلاب</a>
          </li>
          <li class="nav-item">
            <a class="nav-link items"><i class="fas fa-fire text-primary"></i>دیجی پی</a>
          </li>
          <li class="nav-item">
            <a class="nav-link items">سوالی دارید؟</a>
          </li>
          <li class="nav-item">
            <a class="nav-link items">فروشنده شوید</a>
          </li>
          <li class="nav-item ms-5 ">
            <a class="nav-link items" style="margin-right: 182px;"> لطفا شهر واستان خود را انتخا کنید<i
                class="fal fa-map-marker-alt fa-lg text-dark"></i></a>
          </li>
        </ul>
      </div>
    </div>
</nav>

  <div class="container-fluid">
    <div class="container mt-3">
      <div class="row">
        <div class="col_12">
          <img src="<?php echo e(asset('/Images/1.gif')); ?>" class="img-fluid " alt="pic_1" style="border-radius: 15px;">
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-lg-8 col-md-8 c0l-sm-12 ">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
            style="border-radius: 15px;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                aria-label="Slide 7"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                aria-label="Slide 8"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                aria-label="Slide 9"></button>
            </div>
            <div class="carousel-inner mb-3" style="border-radius: 15px;">
              <div class="carousel-item active">
                <img src="<?php echo e(asset('/Images/9.jpeg')); ?>" class="d-block w-100" alt="pic_9">
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/Images/8.jpeg')); ?>" class="d-block w-100" alt="pic_8">
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/Images/5.jpeg')); ?>" class="d-block w-100" alt="pic_5">
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/Images/3.jpeg')); ?>" class="d-block w-100" alt="pic_3">
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/Images/6.jpeg')); ?>" class="d-block w-100" alt="pic_6">
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/Images/7.jpeg')); ?>" class="d-block w-100" alt="pic_7">
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/Images/4.jpeg')); ?>" class="d-block w-100" alt="pic_4">
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/Images/2.jpeg')); ?>" class="d-block w-100" alt="pic_2">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="row">
            <img src="<?php echo e(asset('/Images/11.jpeg')); ?>" class="img-fluid " alt="pic_11" style="border-radius: 25px;">
          </div>
          <div class="row " style="margin-top: 12px;">
            <img src="<?php echo e(asset('/Images/10.jpeg')); ?>" class="img-fluid " alt="pic_10" style="border-radius: 25px;">
          </div>
        </div>
      </div>
    </div>

    <div class="row bg-danger py-4 mt-3">
      <div class="col">
        <div class="container ">
          <div class="row ">
            <div class="col-lg d-none d-lg-block d-xl-block d-xl-block mb-3">
              <img src="<?php echo e(asset('/Images/12.png')); ?>" class="img-fluid" alt="pic_12">
              <button type="button" class="btn btn-outline-light rounded-3">مشاهده همه</button>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-3">
              <div class="card" style="border-radius: 10px;">
                <img src="<?php echo e(asset('/Images/13.jpeg')); ?>" class="card-img-top" alt="pic_13" style="border-radius: 10px;">
                <div class="card-body text-center">
                  <h5 class="card-title">مدادشمعی</h5>
                  <p class="card-text">مدادشمعی 12 رنگ موس بوی کد tm1</p>
                  <div class="text-end mt-5">
                    <div>
                      <span class="text-decoration-line-through ">50,000</span>
                      <span class="bg-danger text-white p-1 rounded-pill ">50%</span>
                    </div>
                    <div>
                      <span class="fw-normal"><span class="fs-4 fw-bold">25,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-3">
              <div class="card" style="border-radius: 10px;">
                <img src="<?php echo e(asset('/Images/14.jpeg')); ?>" class="card-img-top" alt="pic_14" style="border-radius: 10px;">
                <div class="card-body text-center">
                  <h5 class="card-title">خودکار</h5>
                  <p class="card-text">خودکار نامرئی آپیت کد 01</p>
                  <div class="text-end mt-5">
                    <br>
                    <div>
                      <span class="text-decoration-line-through ">50,000</span>
                      <span class="bg-danger text-white p-1 rounded-pill ">50%</span>
                    </div>
                    <div>
                      <span class="fw-normal"><span class="fs-4 fw-bold">25,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-3">
              <div class="card" style="border-radius: 10px;">
                <img src="<?php echo e(asset('/Images/15.jpeg')); ?>" class="card-img-top" alt="pic_15" style="border-radius: 10px;">
                <div class="card-body text-center">
                  <h5 class="card-title">کرم</h5>
                  <p class="card-text ">کرم جوان‌ساز و رفع‌کننده تیرگی لدورا 30 میلی لیتر</p>
                  <div class="text-end mt-5">
                    <div>
                      <span class="text-decoration-line-through ">50,000</span>
                      <span class="bg-danger text-white p-1 rounded-pill ">50%</span>
                    </div>
                    <div>
                      <span class="fw-normal"><span class="fs-4 fw-bold">25,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-3">
              <div class="card" style="border-radius: 10px;">
                <img src="<?php echo e(asset('/Images/16.jpeg')); ?>" class="card-img-top" alt="pic_16" style="border-radius: 10px;">
                <div class="card-body text-center">
                  <h5 class="card-title text-center">پتو</h5>
                  <p class="card-text ">پتو گلبافت کد 500S سایز 220×160 سانتی متر</p>
                  <div class="text-end mt-5">
                    <div>
                      <span class="text-decoration-line-through ">50,000</span>
                      <span class="bg-danger text-white p-1 rounded-pill ">50%</span>
                    </div>
                    <div>
                      <span class="fw-normal"><span class="fs-4 fw-bold">25,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-4 mt-3">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <img src="<?php echo e(asset('/Images/17.jpeg')); ?>" class="img-fluid w-100" alt="pic_17" style="border-radius: 15px;">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <img src="<?php echo e(asset('/Images/18.jpeg')); ?>" class="img-fluid w-100" alt="pic_18" style="border-radius: 15px;">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <img src="<?php echo e(asset('/Images/19.jpeg')); ?>" class="img-fluid w-100" alt="pic_19" style="border-radius: 15px;">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <img src="<?php echo e(asset('/Images/20.jpeg')); ?>" class="img-fluid w-100" alt="pic_20" style="border-radius: 15px;">
        </div>
      </div>
    </div>

    <div class="row bg-Success py-4 mt-3">
      <div class="col">
        <div class="container ">
          <div class="row ">
            <div class="col-lg d-none d-lg-block d-xl-block d-xl-block mb-3">
              <img src="<?php echo e(asset('/Images/21.png')); ?>" class="img-fluid" alt="pic_21">
              <button type="button" class="btn btn-outline-light rounded-3">مشاهده همه</button>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-3">
              <div class="card" style="border-radius: 10px;">
                <img src="<?php echo e(asset('/Images/22.jpeg')); ?>" class="card-img-top" alt="pic_22" style="border-radius: 10px;">
                <div class="card-body text-center">
                  <h5 class="card-title">گوشت مهیار</h5>
                  <p class="card-text">گوشت گوساله خورشتی مهیا پروتئین - 800 گرم</p>
                  <div class="text-end mt-5">
                    <div>
                      <span class="text-decoration-line-through ">100,000</span>
                      <span class="bg-danger text-white p-1 rounded-pill ">34%</span>
                    </div>
                    <div>
                      <span class="fw-normal"><span class="fs-4 fw-bold">66,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-3">
              <div class="card" style="border-radius: 10px;">
                <img src="<?php echo e(asset('/Images/23.jpeg')); ?>" class="card-img-top" alt="pic_23" style="border-radius: 10px;">
                <div class="card-body text-center">
                  <h5 class="card-title">سیب زمینی تنوری</h5>
                  <p class="card-text">سیب زمینی Fresh 1 کیلوگرم</p>
                  <div class="text-end mt-5">
                    <br>
                    <div>
                      <span class="text-decoration-line-through ">100,000</span>
                      <span class="bg-danger text-white p-1 rounded-pill ">34%</span>
                    </div>
                    <div>
                      <span class="fw-normal"><span class="fs-4 fw-bold">66,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-3">
              <div class="card" style="border-radius: 10px;">
                <img src="<?php echo e(asset('/Images/24.jpeg')); ?>" class="card-img-top" alt="pic_24" style="border-radius: 10px;">
                <div class="card-body text-center">
                  <h5 class="card-title">عسل کوهستان</h5>
                  <p class="card-text ">عسل سی گل پارس خمین - 1700 گرم</p>
                  <div class="text-end mt-5">
                    <div>
                      <span class="text-decoration-line-through ">100,000</span>
                      <span class="bg-danger text-white p-1 rounded-pill ">34%</span>
                    </div>
                    <div>
                      <span class="fw-normal"><span class="fs-4 fw-bold">66,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-12 mb-3">
              <div class="card" style="border-radius: 10px;">
                <img src="<?php echo e(asset('/Images/25.jpeg')); ?>" class="card-img-top" alt="pic_25" style="border-radius: 10px;">
                <div class="card-body text-center">
                  <h5 class="card-title text-center">زیتون</h5>
                  <p class="card-text ">ترشی مخلوط زیتون با فلفل دلمه اصالت مقدار 680 گرم</p>
                  <div class="text-end mt-5">
                    <div>
                      <span class="text-decoration-line-through ">100,000</span>
                      <span class="bg-danger text-white p-1 rounded-pill ">34%</span>
                    </div>
                    <div>
                      <span class="fw-normal"><span class="fs-4 fw-bold">66,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row py-4 mt-3">
        <div class="col">
          <img src="<?php echo e(asset('/Images/26.jpeg')); ?>" class="img-fluid " alt="pic_26" style="border-radius: 15px;">
        </div>
        <div class="col">
          <img src="<?php echo e(asset('/Images/27.jpeg')); ?>" class="img-fluid " alt="pic_27" style="border-radius: 15px;">
        </div>
      </div>
    </div>

    <div class="container">
      <div>
        <div class="row">
          <div class="col-lg-10 col-sm-12 bg-white shadow-sm p-3 bg-body" style="border-radius: 10px;">
            <div class="mt-2 ">
              <h4>پتو</h4>
              <p>بر اساس بازدیدهای شما</p>
              <hr>
            </div>
            <div class="row ">
              <div class="col-lg col-sm-12">
                <div class="card  border-0">
                  <img src="<?php echo e(asset('/Images/28.jpeg')); ?>" class="card-img-top p-3" alt="pic_28">
                  <div class="card-body">
                    <h5 class="card-title text-center">پتو</h5>
                    <p class="card-text ">پتو گلبافت کد 500S سایز 220×160 سانتی متر</p>
                    <div class="text-end mt-5">
                      <span class="fw-normal"><span class="fs-4 fw-bold">66,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-12">
                <div class="card  border-0">
                  <img src="<?php echo e(asset('/Images/29.jpeg')); ?>" class="card-img-top p-3" alt="pic_29">
                  <div class="card-body">
                    <h5 class="card-title text-center">پتو</h5>
                    <p class="card-text ">پتو گلبافت کد 500S سایز 220×160 سانتی متر</p>
                    <div class="text-end mt-5">
                      <span class="fw-normal"><span class="fs-4 fw-bold">76,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-12">
                <div class="card  border-0">
                  <img src="<?php echo e(asset('/Images/30.jpeg')); ?>" class="card-img-top p-3" alt="pic_30">
                  <div class="card-body">
                    <h5 class="card-title text-center">پتو</h5>
                    <p class="card-text ">پتو گلبافت کد 500S سایز 220×160 سانتی متر</p>
                    <div class="text-end mt-5">
                      <span class="fw-normal"><span class="fs-4 fw-bold">86,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-12">
                <div class="card border-0">
                  <img src="<?php echo e(asset('/Images/31.jpeg')); ?>" class="card-img-top p-3" alt="pic_31">
                  <div class="card-body">
                    <h5 class="card-title text-center">پتو</h5>
                    <p class="card-text ">پتو گلبافت کد 500S سایز 220×160 سانتی متر</p>
                    <div class="text-end mt-5">
                      <span class="fw-normal"><span class="fs-4 fw-bold">96,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-12">
                <div class="card border-0">
                  <img src="<?php echo e(asset('/Images/32.jpeg')); ?>" class="card-img-top p-3" alt="pic_32">
                  <div class="card-body">
                    <h5 class="card-title text-center">پتو</h5>
                    <p class="card-text ">پتو گلبافت کد 500S سایز 220×160 سانتی متر</p>
                    <div class="text-end mt-5">
                      <span class="fw-normal"><span class="fs-4 fw-bold">66,000</span>تومان</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-12 ">
            <div class="card border-info mt-2" style=" border-radius: 10px;">
              <p class="card-text text-center fs-14 mt-2 pt-3  "
                style="font-size: 15px; font-weight: 600;">پیشنهادهای لحظه‌ای برای شما</p>
              <br><br><br>
              <div class="card-body " style="margin-bottom: 30px;">
                <img src="<?php echo e(asset('/Images/33.jpeg')); ?>" class="card-img-top" alt="pic_33">
                <h5 class="card-title text-center">خانه باربی</h5>
                <p class="card-text "> کد 500S سایز 220×160 سانتی متر</p>
                <div class="text-end mt-5 text-center">
                  <span class="fw-normal"><span class="fs-4 fw-bold">55,000</span>تومان</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-3 ">
      <div class="row bg-white shadow-sm p-3 bg-body" style="border-radius: 10px;">
        <h6 class="text-center fw-bold fs-5 pt-4" style="color: rgb(209, 206, 206);">بیش از 6,000,000 کالا در
          دسته‌بندی‌های مختلف</h6>
        <div class="col-lg col-md col-sm text-center mt-3">
          <a href="#">
            <i class="far fa-laptop fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala">کالای دیجیتال</p>
          <p class="text-info mt-3 number-kala">+990000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3">
          <a href="#">
            <i class="far fa-wrench fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala">ابزار و تجهیزات </p>
          <p class="text-info mt-3 number-kala">+179000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3">
          <a href="#">
            <i class="far fa-tshirt fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala">پوشاک</p>
          <p class="text-info mt-3 number-kala">+135000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3">
          <a href="#">
            <i class="fal fa-baby fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala text-info">کودک و نوزاد</p>
          <p class="text-info mt-3 number-kala">+121000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3">
          <a href="#">
            <i class="far fa-shopping-basket fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala text-info">سوپر مارکتی</p>
          <p class="text-info mt-3 number-kala">+721000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3">
          <a href="#">
            <i class="fad fa-heart fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala text-info">زیبایی و سلامت</p>
          <p class="text-info mt-3 number-kala">+21000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center mt-3">
          <a href="#">
            <i class="far fa-couch fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala">خانه و آشپزخانه</p>
          <p class="text-info mt-3 number-kala">+231000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3">
          <a href="#">
            <i class="far fa-pencil-alt fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala">لوازم و تحریر</p>
          <p class="text-info mt-3 number-kala">+121000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3">
          <a href="#">
            <i class="fal fa-running fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala">ورزش و سفر</p>
          <p class="text-info mt-3 number-kala">+421000 کالا</p>
        </div>
        <div class="col-lg col-md col-sm text-center  mt-3">
          <a href="#">
            <i class="far fa-female fs-1 text-info"></i>
          </a>
          <p class="text-dark mt-3 text-kala">بومی</p>
          <p class="text-info mt-3 number-kala">+81000 کالا</p>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div>
        <div class="row ">
          <div class="col-md-3 col-sm-12 mb-2 ">
            <div class="card" style="border-radius: 10px;">
              <p class=" text-center">
                <i class="fas fa-medal fs-1 mt-5 text-success"></i>
              </p>
              <div class="card-body">
                <h5 class="card-text text-center fw-bold">!شخصی سازی پیشنهاد ها</h5>
                <br>
                <p class="card-text text-center ">برای مشاهده پیشنهادهای مناسب خود وهمچنین داشتن تجربه
                  بهتر لطفا وارد حساب کاربری شوید.</p>
                <div class="d-grid gap-2 my-2">
                  <br>
                  <button class="btn btn-danger ms-4" type="button" style="border-radius:10px ;">
                    <i class="fas fa-sign-in-alt"></i>
                    ورود به حساب دیجی کالا
                  </button>
                  <p class="text-center  fw-bold" style="font-size: 11px;">ثبت‌نام رایگان در صورت نداشتن
                    حساب کاربری</p>
                  <br><br>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-12 shadow bg-white" style="border-radius: 10px;">
            <div class="mt-2 ">
              <h4>دستمال کاغذی</h4>
              <p>بر اساس بازدیدهای شما</p>
              <hr>
            </div>
            <div class="row ">
              <div class="col-lg col-sm-2">
                <div class="card border-0">
                  <img src="<?php echo e(asset('/Images/41.jpeg')); ?>" class="card-img-top" alt="pic_41">
                  <div class="card-body">
                    <h5 class="card-title text-center">دستمال کاغذی</h5>
                    <p class="card-text ">دستمال توالت مدل B Side بسته 8 عددی</p>
                    <div class="text-end mt-5">
                      <div class="text-center">
                        <span class="fw-normal"><span class="fs-4 fw-bold">76,000</span>تومان</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-2">
                <div class="card border-0">
                  <img src="<?php echo e(asset('/Images/37.jpeg')); ?>" class="card-img-top p-3" alt="pic_37">
                  <div class="card-body">
                    <h5 class="card-title text-center">دستمال کاغذی</h5>
                    <p class="card-text ">دستمال توالت مدل B Side بسته 8 عددی</p>
                    <div class="text-end mt-5">
                      <div class="text-center">
                        <span class="fw-normal"><span class="fs-4 fw-bold">76,000</span>تومان</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-2">
                <div class="card border-0">
                  <img src="<?php echo e(asset('/Images/38.jpeg')); ?>" class="card-img-top p-3" alt="pic_38">
                  <div class="card-body">
                    <h5 class="card-title text-center">دستمال کاغذی</h5>
                    <p class="card-text ">دستمال توالت مدل B Side بسته 8 عددی</p>
                    <div class="text-end mt-5">
                      <div class="text-center">
                        <span class="fw-normal"><span class="fs-4 fw-bold">76,000</span>تومان</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-2">
                <div class="card border-0">
                  <img src="<?php echo e(asset('/Images/39.jpeg')); ?>" class="card-img-top p-3" alt="pic_39">
                  <div class="card-body">
                    <h5 class="card-title text-center">دستمال کاغذی</h5>
                    <p class="card-text ">دستمال توالت مدل B Side بسته 8 عددی</p>
                    <div class="text-end mt-5">
                      <div class="text-center">
                        <span class="fw-normal"><span class="fs-4 fw-bold">76,000</span>تومان</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-2">
                <div class="card border-0">
                  <img src="<?php echo e(asset('/Images/40.jpeg')); ?>" class="card-img-top p-3" alt="pt-40">
                  <div class="card-body">
                    <h5 class="card-title text-center">دستمال کاغذی</h5>
                    <p class="card-text ">دستمال توالت مدل B Side بسته 8 عددی</p>
                    <div class="text-end mt-5">
                      <div class="text-center">
                        <span class="fw-normal"><span class="fs-4 fw-bold">76,000</span>تومان</span>
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

  <div class="container py-4 ">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
        <img src="<?php echo e(asset('/Images/42.jpeg')); ?>" class="img-fluid w-100" alt="pic-42" style="border-radius: 15px;">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
        <img src="<?php echo e(asset('/Images/43.jpeg')); ?>" class="img-fluid w-100" alt="pic-43" style="border-radius: 15px;">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-3 ">
        <img src="<?php echo e(asset('/Images/44.jpeg')); ?>" class="img-fluid w-100" alt="pic-44" style="border-radius: 15px;">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-3 ">
        <img src="<?php echo e(asset('/Images/45.jpeg')); ?>" class="img-fluid w-100" alt="pic-45" style="border-radius: 15px;">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 shadow-sm p-3 bg-body" style="border-radius: 10px;">
        <div class="mt-2 ">
          <h4>ماسک</h4>
          <p>بر اساس بازدیدهای شما</p>
          <hr>
        </div>
        <div class="row ">
          <div class="col-lg col-md-12 col-sm-12">
            <div class="card border-0">
              <img src="<?php echo e(asset('/Images/46.jpeg')); ?>" class="card-img-top p-3" alt="pic_46">
              <div class="card-body">
                <h5 class="card-title text-center">ماسک</h5>
                <p class="card-text ">ماسک صورت شب بایو آکوا مدل pomegranate حجم 120 میلی لیتر</p>
                <div class="text-end mt-5">
                  <div class="text-center">
                    <span class="fw-normal"><span class="fs-4 fw-bold">48,000</span>تومان</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg col-md-12 col-sm-12">
            <div class="card border-0">
              <img src="<?php echo e(asset('/Images/47.jpeg')); ?>" class="card-img-top p-3" alt="pic_47">
              <div class="card-body">
                <h5 class="card-title text-center">ماسک</h5>
                <p class="card-text ">ماسک صورت شب بایو آکوا مدل pomegranate حجم 120 میلی لیتر</p>
                <div class="text-end mt-5">
                  <div class="text-center">
                    <span class="fw-normal"><span class="fs-4 fw-bold">48,100</span>تومان</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg col-md-12 col-sm-12">
            <div class="card border-0">
              <img src="<?php echo e(asset('/Images/48.jpeg')); ?>" class="card-img-top p-3" alt="pt-48">
              <div class="card-body">
                <h5 class="card-title text-center">ماسک</h5>
                <p class="card-text ">ماسک صورت شب بایو آکوا مدل pomegranate حجم 120 میلی لیتر</p>
                <div class="text-end mt-5">
                  <div class="text-center">
                    <span class="fw-normal"><span class="fs-4 fw-bold">48,200</span>تومان</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg col-md-12 col-sm-12">
            <div class="card border-0">
              <img src="<?php echo e(asset('/Images/49.jpeg')); ?>" class="card-img-top p-3" alt="pic_49">
              <div class="card-body">
                <h5 class="card-title text-center">ماسک</h5>
                <p class="card-text ">ماسک صورت شب بایو آکوا مدل pomegranate حجم 120 میلی لیتر</p>
                <div class="text-end mt-5">
                  <div class="text-center">
                    <span class="fw-normal"><span class="fs-4 fw-bold">48,400</span>تومان</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg col-md-12 col-sm-12">
            <div class="card border-0">
              <img src="<?php echo e(asset('/Images/50.jpeg')); ?>" class="card-img-top p-3" alt="pic_50">
              <div class="card-body">
                <h5 class="card-title text-center">ماسک</h5>
                <p class="card-text ">ماسک صورت شب بایو آکوا مدل pomegranate حجم 120 میلی لیتر</p>
                <div class="text-end mt-5">
                  <div class="text-center">
                    <span class="fw-normal"><span class="fs-4 fw-bold">48,800</span>تومان</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=" mt-5">
      <div>
        <div class="row">
          <div class="col-lg-12 col-sm-12 shadow-sm p-4 bg-body" style="border-radius: 10px ;width: 2200px">
            <div class="mt-2 ">
              <div class="mt-2 ">
                <h5>برندهای ویژه</h5>
                <hr>
              </div>
              <div class="row ">
                <div class="col-lg col-md-12 col-sm-12">
                  <div class="card border-0">
                    <img src="<?php echo e(asset('/Images/52.jpeg')); ?>" class="card-img-top p-3" alt="pic_52">
                  </div>
                </div>
                <div class="col-lg col-md-12 col-sm-12">
                  <div class="card  border-0">
                    <img src="<?php echo e(asset('/Images/51.png')); ?>" class="card-img-top p-3" alt="pic-51">
                  </div>
                </div>
                <div class="col-lg col-md-12 col-sm-12">
                  <div class="card border-0">
                    <img src="<?php echo e(asset('/Images/53.jpeg')); ?>" class="card-img-top p-3" alt="pic-53">
                  </div>
                </div>
                <div class="col-lg col-md-12 col-sm-12">
                  <div class="card border-0">
                    <img src="<?php echo e(asset('/Images/54.jpeg')); ?>" class="card-img-top p-3" alt="pic-54">
                  </div>
                </div>
                <div class="col-lg col-md-12 col-sm-12">
                  <div class="card border-0">
                    <img src="<?php echo e(asset('/Images/55.jpeg')); ?>" class="card-img-top p-3" alt="pic_55">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="row">
      <div class="col_lg-12 ">
        <img src="<?php echo e(asset('/Images/36.jpeg')); ?>" class="img-fluid " alt="" style="border-radius: 15px;">
      </div>
    </div>
  </div>
  </div>


<?php echo $__env->make('/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nastaran/Helloworld/resources/views/index.blade.php ENDPATH**/ ?>