@include('header')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('/Images/logo.png') }}" alt="logo" height="24">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex">
          <input class="form-control me-2 border-0" type="search" id="search"
            placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;جستجو در دیجی کالا ... " aria-label="Search"
            style="width: 600px; border-radius: 10px;">
          <i class="far fa-search fw-bold"
            style="position:relative;left: 600px; top: 15px; color: rgb(180, 180, 180);"></i>
          <img src="{{ asset('/Images/0.png') }}" class="img-fluid" alt="pic_1" style="width: 142px; height: 44px;">
        </form>
      </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light" id="btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="far fa-user"></i>
      ورود به حساب کاربری
    </button>
    <button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="fal fa-shopping-cart text-dark fa-lg "></i>
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</nav>
