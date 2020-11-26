<nav class="nav-container">
    <div class="nav-left">
        <div class="hamburger" onclick="openSideNav()">
            <i class="fas fa-bars fa-2x" id="openSideNav"></i>
        </div>
        <div class="company-logo">
             <img src="static/company-logo.jpg" alt="">
        </div>
        <div class="company-name">
            CraftArt.in
        </div>
    </div>
    <div class="nav-right">
        <ul>
            <li>
                <form action="">
                    <div class="form-box">
                        <input type="text" class="search-product" id="search-product" placeholder="Search">
                        <i class="fas fa-search fa-lg"></i>
                        <!-- <button type="button" class="btn-search-product" id="btn-search-product">
                            SEARCH     
                        </button> -->
                    </div>
                </form>
            </li>
            <li>
                <div class="cart-box">
                    <a href="#">
                        <div class="cart-name">
                            Cart
                        </div>
                        <div class="cart-logo">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- side nav bar starts here -->
<nav class="side-navbar-container" id="sideNavbarContainer">
    <div class="side-navbar-top">
        <div class="side-navbar-close-btn" onclick="closeSideNav()">
             <i class="far fa-times fa-2x" id="closeSideNav"></i>
        </div>
    </div>
    <div class="side-navbar-bottom">
        <ul>
            <li><a href="">Item1</a></li><hr class="side-nav-hr-width">
            <li><a href="">Item1</a></li><hr class="side-nav-hr-width">
            <li><a href="">Item1</a></li><hr class="side-nav-hr-width">
            <li><a href="">Item1</a></li><hr class="side-nav-hr-width">
        </ul>
    </div>
</nav>
<!-- side nav bar ends here -->
