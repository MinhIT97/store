<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">User</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi mdi-account menu-icon"></i>
    </a>
    <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('users.show')}}"> User </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Tài khoản khách hàng</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Categories </span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-image-album menu-icon"></i>
    </a>
    <div class="collapse" id="category-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('categories.show')}}"> Categories </a></li>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#poster-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Poster </span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-cards menu-icon"></i>
    </a>
    <div class="collapse" id="poster-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('posters.show')}}"> Poster </a></li>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Brand </span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-library menu-icon"></i>
    </a>
    <div class="collapse" id="brand-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('brand.show')}}"> Brand </a></li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#geseral-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Products </span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-google-cardboard menu-icon"></i>
    </a>
    <div class="collapse" id="geseral-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('products')}}"> Products </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('adminstore/products/men')}}"> MEN </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('adminstore/products/women')}}"> WOMAN</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('adminstore/products/accessories')}}"> ACCESSORIES</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('size.show')}}"> Sizes</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('colors.show')}}"> Colors</a></li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#orders-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Orders </span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-contact-mail menu-icon"></i>
    </a>
    <div class="collapse" id="orders-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('orders.show')}}"> Orders </a></li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#contacts-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Contacts </span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-contact-mail menu-icon"></i>
    </a>
    <div class="collapse" id="contacts-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('contact.show')}}"> Contacts </a></li>
        </ul>
    </div>
</li>
<li class="nav-item" id="bannerClose">
    <a class="nav-link" data-toggle="collapse" href="#option-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Option </span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
    </a>
    <div class="collapse" id="option-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('option.show')}}"> Config </a></li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#blog-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Blog </span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-blogger menu-icon"></i>
    </a>
    <div class="collapse" id="blog-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('blog.show')}}"> Blog </a></li>

    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#pas" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Pages </span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-book-open-page-variant menu-icon"></i>
    </a>
    <div class="collapse" id="pas">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('pages.show')}}"> Pages </a></li>

    </div>
</li>

