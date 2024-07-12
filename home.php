<?php
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}

$sql2 = "SELECT tel, mail, adress FROM coordonnee";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    $tel='';
    $mail='';
    $adress='';
    while($row2=$result2->fetch_array(MYSQLI_ASSOC)){
        $tel=$row2['tel'];
        $mail=$row2['mail'];
        $adress=$row2['adress'];
    }
}
$conn->close();
?>
<section class="home-hero">
    <div class="home-hero__content">
        <h1 class="heading-primary" data-aos="zoom-in" data-aos-duration="1000"><?php echo MSG_BIENVENUE;?></h1>
        <div class="home-hero__info" data-aos="zoom-in" data-aos-duration="1000">
            <p class="text-primary">
                <?php echo SHORT_INTRO;?>
            </p>
        </div>
        <div class="home-hero__cta">
            <a href="#about" class="btn btn--bg"><?php echo KNOW_BTN;?></a>
        </div>
    </div>
    <div class="home-hero__socials" data-aos="fade-down" data-aos-duration="1000">
        <div class="home-hero__social">
            <a href="https://www.linkedin.com/in/yuxiang-zhang-860919193/" class="home-hero__social-icon-link">
                <img
                    src="./assets/png/linkedin-ico.png"
                    alt="icon"
                    class="home-hero__social-icon"
                />
            </a>
        </div>
        <div class="home-hero__social">
            <a href="https://github.com/yuyuyuxiang" class="home-hero__social-icon-link">
                <img
                    src="./assets/png/github-ico.png"
                    alt="icon"
                    class="home-hero__social-icon"
                />
            </a>
        </div>
        <div class="home-hero__social">
            <a
                href="https://www.instagram.com/damien_zhang/"
                class="home-hero__social-icon-link home-hero__social-icon-link--bd-none"
            >
                <img
                    src="./assets/png/insta-ico.png"
                    alt="icon"
                    class="home-hero__social-icon"
                />
            </a>
        </div>
    </div>
    <div class="home-hero__mouse-scroll-cont">
        <div class="mouse"></div>
    </div>
</section>
<section id="about" class="about sec-pad">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000">
            <span class="heading-sec__main"><?php echo ABOUT_TITLE;?></span>
            <span class="heading-sec__sub">
            <?php echo ABOUT_SHORT_INTRO;?>
          </span>
        </h2>
        <div class="portrait-container">
            <image class="portrait" src="assets/jpeg/portrait2.jpg" alt="Portrait Yuxiang ZHANG" data-aos="fade-right" data-aos-duration="1000"></image>
            <div class="portrait__content">
                <div class="portrait__content-main" data-aos="fade-left" data-aos-offset="100" data-aos-duration="1000">
                    <h3 class="about__content-title"><?php echo ABOUT_TEXT_TITLE;?></h3>
                    <div class="about__content-details">
                        <p class="about__content-details-para">
                            <?php echo Portrait1;?>
                        </p><br>
                        <p class="about__content-details-para">
                            <?php echo Portrait2;?>
                            <a
                                <?php echo 'href="?page=about&lang='.$lang.'"'?>
                                    class="btn btn--med dynamicBgClr"
                            ><?php echo PROJECT_BTN;?></a
                            >
                            <br><br><strong><?php echo ABOUT_TEXT_3;?></strong>
                        </p>
                    </div>
                    <a href="#contact" class="btn btn--med btn--theme dynamicBgClr"><?php echo ABOUT_BTN_CONTACT;?></a>
                    <a href="https://drive.google.com/file/d/172khCDq9-H38RlDmQNtMROcnxgQY0hyh/view?usp=sharing" target="_blank" class="btn btn--med btn--theme dynamicBgClr"><?php echo ABOUT_BTN_CV;?></a>
                </div>
                <script>
                    if (window.innerWidth < 600) {
                        document.querySelector(".portrait__content-main").setAttribute("data-aos", "fade-up");
                    }
                </script>
            </div>
        </div>
    </div>
</section>
<section id="projects" class="projects sec-pad">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-bg" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000">
            <span class="heading-sec__main"><?php echo PROJET_TITLE;?></span>
            <span class="heading-sec__sub">
            <?php echo PROJET_SUBTITLE;?>
          </span>
        </h2>
        <div class="fly_border" data-aos="zoom-in" data-aos-offset="100" data-aos-duration="500"><i class="top"></i><i class="bottom"></i>
        <div class="box" id="box">
            <div class="inner">

                <ul id="ulimg">
                  	<li><a
                            <?php echo 'href="?page=project-detail&projectInitial=applipro&lang=' . $lang . '"' ?>
                                    target="view_window"
                            ><img src="assets/png/applipro.png" alt="">
                            <span class="project-slider-description"><?php echo PROJET_SLIDER_INTRO8 ?></span>
                        </a>
                    </li>
                    <li><a
                            <?php echo 'href="?page=project-detail&projectInitial=passionauto&lang=' . $lang . '"' ?>
                                    target="view_window"
                            ><img src="assets/png/passionauto.png" alt="">
                            <span class="project-slider-description"><?php echo PROJET_SLIDER_INTRO7 ?></span>
                        </a>
                    </li>
                    <li><a
                            <?php echo 'href="?page=project-detail&projectInitial=toweb&lang='.$lang.'"'?>
                                target="view_window"
                        ><img src="assets/png/logo-toweb.png" alt="">
                            <span class="project-slider-description"><?php echo PROJET_SLIDER_INTRO1?></span>
                        </a>
                    </li>
                    <li><a
                            <?php echo 'href="?page=project-detail&projectInitial=arn&lang='.$lang.'"'?>
                                target="view_window"
                        ><img src="assets/png/arn.png" alt="">
                            <span class="project-slider-description"><?php echo PROJET_SLIDER_INTRO2?></span>
                        </a>
                    </li>
                    <li><a
                            <?php echo 'href="?page=project-detail&projectInitial=aki&lang='.$lang.'"'?>
                                target="view_window"
                        ><img src="assets/png/aki.png" alt="">
                            <span class="project-slider-description"><?php echo PROJET_SLIDER_INTRO3?></span>
                        </a>
                    </li>
                    <li><a
                            <?php echo 'href="?page=project-detail&projectInitial=snow&lang='.$lang.'"'?>
                                target="view_window"
                        ><img src="assets/png/snow.png" alt="">
                            <span class="project-slider-description"><?php echo PROJET_SLIDER_INTRO4?></span>
                        </a>
                    </li>
                    <li><a
                            <?php echo 'href="?page=project-detail&projectInitial=opinaka&lang='.$lang.'"'?>
                                target="view_window"
                        ><img src="assets/png/opinaka.png" alt="">
                            <span class="project-slider-description"><?php echo PROJET_SLIDER_INTRO5?></span>
                        </a>
                    </li>
                    <li><a
                            <?php echo 'href="?page=project-detail&projectInitial=demineur&lang='.$lang.'"'?>
                                target="view_window"
                        ><img src="assets/png/demineur.png" alt="">
                            <span class="project-slider-description"><?php echo PROJET_SLIDER_INTRO6?></span>
                        </a>
                    </li>
                </ul>

                <ol class="bar"></ol>

                <div id="arr">
									<span id="left">
										<
									</span>
                    <span id="right">
										>
									</span>
                </div>
            </div>
        </div>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center;">
            <a
                <?php echo 'href="?page=project&lang='.$lang.'"'?>
                    class="btn btn--med btn--theme dynamicBgClr"
            ><?php echo PROJECT_BTN;?></a
            >
        </div>
    </div>
</section>
<section id="contact" class="contact sec-pad dynamicBg" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main heading-sec__main--lt"><?php echo ABOUT_BTN_CONTACT;?></span>
            <span class="heading-sec__sub heading-sec__sub--lt">
            <?php echo CONTACT_SUBTITLE;?>
          </span>
        </h2>
        <div class="contact__form-container" data-aos="zoom-in" data-aos-offset="100" data-aos-duration="500">
            <form action="contact.php" method="post" class="contact__form">
                <div class="contact__form-field">
                    <label class="contact__form-label" for="mail"><?php echo CONTACT_MAIL;?></label>
                    <input
                        required
                        placeholder="<?php echo CONTACT_MAIL;?>"
                        type="email"
                        class="contact__form-input"
                        name="mail"
                        id="mail"
                    />
                </div>
                <div class="contact__form-field">
                    <label class="contact__form-label" for="object"><?php echo CONTACT_OBJECT;?></label>
                    <input
                        required
                        placeholder="<?php echo CONTACT_OBJECT;?>"
                        type="text"
                        class="contact__form-input"
                        name="object"
                        id="object"
                    />
                </div>

                <div class="contact__form-field">
                    <label class="contact__form-label" for="message"><?php echo CONTACT_MESSAGE;?></label>
                    <textarea
                        required
                        cols="30"
                        rows="10"
                        class="contact__form-input"
                        placeholder="<?php echo CONTACT_MESSAGE_HOLDPLACE;?>"
                        name="message"
                        id="message"
                    ></textarea>
                </div>
                <button id="btn_submit" name="btn_submit" class="btn btn--theme contact__btn"><?php echo CONTACT_BTN;?></button>
            </form>
            <div class="contact_info-container">
                <p class="contact_info-number"><strong><?php echo CONTACT_TEL;?></strong></p>
                <a href="tel:+33699427731" class="contact_tel"><?php echo $tel; ?></a>
                <p class="contact_info-mail"><strong><?php echo CONTACT_MAIL;?></strong></p>
                <a href="mailto:yuxiang.zhang@yuxiangzhang123.com" class="contact_mail"><?php echo $mail; ?></a>
                <p class="contact_info-adress"><strong><?php echo CONTACT_ADDRESS;?></strong></p>
                <a href="https://goo.gl/maps/T3Ruh68yBbw3fYBP8" class="contact_address" target="_blank"><?php echo $adress; ?></a>
            </div>
        </div>
    </div>
</section>