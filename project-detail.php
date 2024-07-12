<?php
$projectInitial = $_GET['projectInitial'];

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}

$sql = "SELECT titre, sousTitre, img, shortDesc, description, lien, tool FROM project WHERE initial = '{$projectInitial}'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $titre='';
    $sousTitre='';
    $img='';
    $shortDesc='';
    $description='';
    $lien='';
    $tool='';
    while($row2=$result->fetch_array(MYSQLI_ASSOC)){
        $titre=$row2['titre'];
        $sousTitre=$row2['sousTitre'];
        $img=$row2['img'];
        $shortDesc=$row2['shortDesc'];
        $description=$row2['description'];
        $lien=$row2['lien'];
        $tool=$row2['tool'];
    }
} else {
    echo "0 results";
}
$conn->close();

echo '
    <section class="project-cs-hero">
    <div class="project-cs-hero__content">
        <h1 class="heading-primary" data-aos="zoom-in" data-aos-duration="1000">'.$titre.'</h1>
        <div class="project-cs-hero__info" data-aos="zoom-in" data-aos-duration="1000">
            <p class="text-primary">
                '.$shortDesc.'
            </p>
        </div>
        <div class="project-cs-hero__cta">
            <a href="'.$lien.'" class="btn btn--bg" target="_blank">'.PAGE_PROJECT_1_BTN.'</a>
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
<section class="project-details">
    <div class="main-container">
        <div class="project-details__content">
            <div class="project-details__showcase-img-cont" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000">
                <img
                    src="./'.$img.'"
                    alt="Project Image"
                    class="project-details__showcase-img"
                />
            </div>
            <div class="project-details__content-main">
                <div class="project-details__desc" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000">
                    <h3 class="project-details__content-title">'.PAGE_PROJECT_PRESENTATION_TITRE.'</h3>
                    <p class="project-details__desc-para" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000">
                        '.$description.'
                    </p>
                </div>
                <div class="project-details__tools-used" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000">
                    <h3 class="project-details__content-title">'.PAGE_PROJECT_TOOL.'</h3>
                    <div class="skills">
                        <div class="skills__skill">'.$tool.'</div>
                    </div>
                </div>
                <div class="project-details__links" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000">
                    <h3 class="project-details__content-title">'.PAGE_PROJECT_1_VIEW.'</h3>
                    <a
                        href="'.$lien.'"
                        class="btn btn--med btn--theme project-details__links-btn"
                        target="_blank"
                    >'.PAGE_PROJECT_1_BTN.'</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>
'
?>