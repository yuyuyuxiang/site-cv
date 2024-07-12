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
            <div class="logo-text left-to-right" style="display: flex; flex-direction: column;">
                <span class="header__logo-sub"><?php echo NAME;?></span>
                <span style="font-size: 1.4rem;">Web developer</span>
            </div>
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
                <a href="#" class="header__link"><?php echo MENU_LANGUE;?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><g transform="rotate(90 12 12)"><path fill="none" stroke="#112d4e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m17 14l-5-5m0 0l-5 5"/></g></svg>
                </a>
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
                <a href="#" class="header__link"><?php echo MENU_LANGUE;?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><g transform="rotate(90 12 12)"><path fill="none" stroke="#112d4e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m17 14l-5-5m0 0l-5 5"/></g></svg>
                </a>
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