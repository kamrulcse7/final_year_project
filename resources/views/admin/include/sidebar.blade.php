<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{route('dashboard')}}">
                <img src="{{asset('frontend/assets')}}/images/logo/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{asset('frontend/assets')}}/images/logo/logo.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{asset('frontend/assets')}}/images/favicon.png" class="header-brand-img light-logo" alt="logo">
                <img src="{{asset('frontend/assets')}}/images/logo/logo.png" class="header-brand-img light-logo1" alt="logo">
            </a><!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                                                  fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="fa fa-plus-square-o" style="padding-right: 15px" aria-hidden="true"></i>
                        <span class="side-menu__label">Category</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Category  </a></li>
                        <li><a href="{{route('category.add')}}" class="slide-item">Category Add</a></li>
                        <li><a href="{{route('category.manage')}}" class="slide-item">Category Manage</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="fa fa-wpexplorer" style="padding-right: 15px" aria-hidden="true"></i>
                        <span class="side-menu__label">Sub Category</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Sub Category  </a></li>
                        <li><a href="{{route('subCategory.add')}}" class="slide-item">Sub Category Add</a></li>
                        <li><a href="{{route('subCategory.manage')}}" class="slide-item">Sub Category Manage</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="fa fa-ravelry" style="padding-right: 15px" aria-hidden="true"></i>
                        <span class="side-menu__label">Unit</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Unit  </a></li>
                        <li><a href="{{route('unit.create')}}" class="slide-item">Unit Add</a></li>
                        <li><a href="{{route('unit.index')}}" class="slide-item">Unit Manage</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="fa fa-bandcamp" style="padding-right: 15px" aria-hidden="true"></i>
                        <span class="side-menu__label">Brand</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Brand  </a></li>
                        <li><a href="{{route('brand.create')}}" class="slide-item">Brand Add</a></li>
                        <li><a href="{{route('brand.index')}}" class="slide-item">Brand Manage</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="fa fa-shopping-bag" style="padding-right: 15px" aria-hidden="true"></i>
                        <span class="side-menu__label">Product</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Product  </a></li>
                        <li><a href="{{route('product.create')}}" class="slide-item">Product Add</a></li>
                        <li><a href="{{route('product.index')}}" class="slide-item">Product Manage</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="fa fa-car" style="padding-right: 15px" aria-hidden="true"></i>
                        <span class="side-menu__label">Courier</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{route('courier.create')}}" class="slide-item">Add Courier</a></li>
                        <li><a href="{{route('courier.index')}}" class="slide-item">Manage Courier</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="fa fa-cart-arrow-down" style="padding-right: 15px" aria-hidden="true"></i>
                        <span class="side-menu__label">Order</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{route('admin.manage-order')}}" class="slide-item">Manage Order</a></li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                                           width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
