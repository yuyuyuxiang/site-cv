<?php
// Path: about.php
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}

$sql1 = "SELECT DISTINCT category FROM skill where code <> 'personal_skill' ORDER BY category DESC";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    $category1 = array();
    while ($row2 = $result1->fetch_array(MYSQLI_ASSOC)) {
        $category1[] = $row2['category'];
    }
}

$conn->close();
?>

<section class="project-cs-hero">
    <div class="project-cs-hero__content">
        <h1 class="heading-primary" data-aos="zoom-in" data-aos-duration="1000"><?php echo ABOUT_TITLE; ?></h1>
        <div class="project-cs-hero__info" data-aos="zoom-in" data-aos-duration="1000">
            <p class="text-primary">
                <?php echo ABOUT_SHORT_INTRO; ?>
            </p>
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
</section>
<section class="main-container" style="margin-top: 40px; margin-bottom: 20px;">
    <div class="about__content">
        <div class="about__content-main" data-aos="fade-right" data-aos-offset="100" data-aos-duration="1000">
            <h3 class="about__content-title"><?php echo ABOUT_TEXT_TITLE; ?></h3>
            <div class="about__content-details">
                <p class="about__content-details-para">
                    <?php echo ABOUT_TEXT_1; ?>
                </p><br>
                <p class="about__content-details-para">
                    <?php echo ABOUT_TEXT_2; ?>
                    <br><br><strong><?php echo ABOUT_TEXT_3; ?></strong>
                </p>
            </div>
            <a href="./#contact" class="btn btn--med btn--theme dynamicBgClr"><?php echo ABOUT_BTN_CONTACT; ?></a>
            <a href="https://drive.google.com/file/d/172khCDq9-H38RlDmQNtMROcnxgQY0hyh/view?usp=sharing"
               class="btn btn--med btn--theme dynamicBgClr"><?php echo ABOUT_BTN_CV; ?></a>
        </div>
        <div class="about__content-skills" data-aos="fade-left" data-aos-offset="100" data-aos-duration="1000">
            <h3 class="about__content-title"><?php echo ABOUT_SKILL_TITLE; ?></h3>
            <div class="skills">
                <?php
                for ($i = 0; $i < count($category1); $i++) {
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $conn->set_charset('utf8');
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connetion failed: " . $conn->connect_error);
                    }

                    $sql2 = "SELECT name FROM skill where category = '$category1[$i]'";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                        $name1 = array();
                        while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) {
                            $name1[] = $row2['name'];
                        }
                    }

                    $conn->close();
                    echo '
                        <div class="category" data-aos="fade-up" data-aos-offset="100">
                            <div class="category_name">' . $category1[$i] . ': </div>
                    ';
                    for ($j = 0; $j < count($name1); $j++) {
                        echo '<div class="skills__skill">' . $name1[$j] . '</div>';
                    }
                    echo '</div>';
                }

                $conn = new mysqli($servername, $username, $password, $dbname);
                $conn->set_charset('utf8');
                // Check connection
                if ($conn->connect_error) {
                    die("Connetion failed: " . $conn->connect_error);
                }

                $sql3 = "SELECT category FROM skill where code = 'personal_skill'";
                $sql4 = "SELECT name FROM skill where code = 'personal_skill'";
                $result3 = $conn->query($sql3);
                if ($result3->num_rows > 0) {
                    $category2 = array();
                    while ($row2 = $result3->fetch_array(MYSQLI_ASSOC)) {
                        $category2[] = $row2['category'];
                    }
                }
                $result4 = $conn->query($sql4);
                if ($result4->num_rows > 0) {
                    $name2 = array();
                    while ($row2 = $result4->fetch_array(MYSQLI_ASSOC)) {
                        $name2[] = $row2['name'];
                    }
                }

                $conn->close();
                echo '
                    <div class="category" data-aos="fade-up" data-aos-offset="100">
                        <div class="category_name">' . $category2[0] . ': </div>
                ';
                for ($j = 0; $j < count($name2); $j++) {
                    echo '<div class="skills__skill">' . $name2[$j] . '</div>';
                }
                echo '</div>';
                ?>
            </div>
        </div>
        <script>
            if (window.innerWidth < 600) {
                document.querySelector(".about__content-skills").setAttribute("data-aos", "fade-up");
            }
        </script>
    </div>
</section>