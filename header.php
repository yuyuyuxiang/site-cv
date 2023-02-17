<?php
$projectInitial = $_GET['projectInitial'];
?>
<div class="header__content">
    <a <?php echo 'href="?lang='.$lang.'"' ?>>
        <div class="header__logo-container" data-aos="fade-right" data-aos-duration="1000">
            <div class="header__logo-img-cont">
                <img
                    src="./assets/jpeg/icon.jpg"
                    alt="Logo Image"
                    class="header__logo-img"
                />
            </div>
            <span class="header__logo-sub left-to-right"><?php echo NAME;?></span>
        </div>
    </a>
    <div class="header__main" data-aos="fade-left" data-aos-duration="1000">
        <ul class="header__links">
            <li class="header__link-wrapper">
                <a <?php echo 'href="?lang='.$lang.'"' ?> class="header__link left-to-right"> <?php echo MENU_HOME;?> </a>
            </li>
            <li class="header__link-wrapper">
                <a <?php echo 'href="?lang='.$lang.'&page=about"' ?> class="header__link left-to-right"><?php echo MENU_ABOUT;?> </a>
            </li>
            <li class="header__link-wrapper">
                <a <?php echo 'href="?lang='.$lang.'&page=project"' ?> class="header__link left-to-right">
                    <?php echo MENU_PROJECT;?>
                </a>
            </li>
            <li class="header__link-wrapper">
                <a <?php echo 'href="?lang='.$lang.'#contact"' ?> class="header__link left-to-right"> <?php echo MENU_CONTACT;?> </a>
            </li>
            <li class="header__link-wrapper header__link-drop-down">
                <a href="#" class="header__link" style="margin-top: -2px;"><?php echo MENU_LANGUE;?><svg version="1.1" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 1802 1024" style="width: 16px; height: 16px; margin-left:5px; padding-top:3px;"><path d="M797.354667 935.253333c65.536 72.362667 172.032 70.997333 236.202666-2.730666l720.896-824.661334c20.48-23.210667 17.749333-60.074667-5.461333-80.554666-23.210667-20.48-60.074667-17.749333-80.554667 5.461333L947.541333 857.429333c-19.114667 21.845333-46.421333 21.845333-65.536 1.365334L133.802667 32.768C111.957333 9.557333 76.458667 6.826667 53.248 28.672 30.037333 49.152 27.306667 86.016 49.152 109.226667l748.202667 826.026666z"></path></svg></a>
                <ul class="drop-down-menu">
                    <li class="header__link-wrapper">
                        <a <?php echo 'href="?lang=cn&page='.$page.'&projectInitial='.$projectInitial.'"' ?> class="header__link left-to-right"><?php echo LIEN_CN;?></a>
                    </li>
                    <li class="header__link-wrapper">
                        <a <?php echo 'href="?lang=fr&page='.$page.'&projectInitial='.$projectInitial.'"' ?> class="header__link left-to-right"><?php echo LIEN_FR;?></a>
                    </li>
                    <li class="header__link-wrapper">
                        <a <?php echo 'href="?lang=en&page='.$page.'&projectInitial='.$projectInitial.'"' ?> class="header__link left-to-right"><?php echo LIEN_EN;?></a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="header__main-ham-menu-cont">
            <img
                src="./assets/svg/ham-menu.svg"
                alt="hamburger menu"
                class="header__main-ham-menu"
            />
            <img
                src="./assets/svg/ham-menu-close.svg"
                alt="hamburger menu close"
                class="header__main-ham-menu-close d-none"
            />
        </div>
    </div>
</div>
<div class="header__sm-menu">
    <div class="header__sm-menu-content">
        <ul class="header__sm-menu-links">
            <li class="header__sm-menu-link">
                <a <?php echo 'href="?lang='.$lang.'"' ?>> <?php echo MENU_HOME;?> </a>
            </li>

            <li class="header__sm-menu-link">
                <a <?php echo 'href="?lang='.$lang.'&page=about"' ?>> <?php echo MENU_ABOUT;?> </a>
            </li>

            <li class="header__sm-menu-link">
                <a <?php echo 'href="?lang='.$lang.'&page=project"' ?>> <?php echo MENU_PROJECT;?> </a>
            </li>

            <li class="header__sm-menu-link">
                <a <?php echo 'href="?lang='.$lang.'#contact"' ?>> <?php echo MENU_CONTACT;?> </a>
            </li>
            <!--
            <li class="header__sm-menu-link">
                <a <?php echo 'href="?lang=fr&page='.$page.'"' ?>><?php echo LIEN_FR;?></a>
            </li>
            <li class="header__sm-menu-link">
                <a <?php echo 'href="?lang=en&page='.$page.'"' ?>><?php echo LIEN_EN;?></a>
            </li>
            <li class="header__sm-menu-link">
                <a <?php echo 'href="?lang=cn&page='.$page.'"' ?>><?php echo LIEN_CN;?></a>
            </li>
            -->

            <li class="header__sm-menu-link header__link-wrapper header__link-drop-down">
                <a href="#" class="header__link" style="margin-top: -2px;"><?php echo MENU_LANGUE;?><svg version="1.1" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 1802 1024" style="width: 16px; height: 16px; margin-left:5px; padding-top:3px;"><path d="M797.354667 935.253333c65.536 72.362667 172.032 70.997333 236.202666-2.730666l720.896-824.661334c20.48-23.210667 17.749333-60.074667-5.461333-80.554666-23.210667-20.48-60.074667-17.749333-80.554667 5.461333L947.541333 857.429333c-19.114667 21.845333-46.421333 21.845333-65.536 1.365334L133.802667 32.768C111.957333 9.557333 76.458667 6.826667 53.248 28.672 30.037333 49.152 27.306667 86.016 49.152 109.226667l748.202667 826.026666z"></path></svg></a>
                <ul class="drop-down-menu">
                    <li class="header__link-wrapper">
                        <a <?php echo 'href="?lang=cn&page='.$page.'&projectInitial='.$projectInitial.'"' ?> class="header__link"><?php echo LIEN_CN;?></a>
                    </li>
                    <li class="header__link-wrapper">
                        <a <?php echo 'href="?lang=fr&page='.$page.'&projectInitial='.$projectInitial.'"' ?> class="header__link"><?php echo LIEN_FR;?></a>
                    </li>
                    <li class="header__link-wrapper">
                        <a <?php echo 'href="?lang=en&page='.$page.'&projectInitial='.$projectInitial.'"' ?> class="header__link"><?php echo LIEN_EN;?></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>