<?php
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}

$sql = "SELECT titre, sousTitre, img, lien, initial FROM project";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $titre=array();
    $sousTitre=array();
    $img=array();
    $lien=array();
    $initial=array();
    while($row2=$result->fetch_array(MYSQLI_ASSOC)){
        $titre[]=$row2['titre'];
        $sousTitre[]=$row2['sousTitre'];
        $img[]=$row2['img'];
        $lien[]=$row2['lien'];
        $initial[]=$row2['initial'];
    }
}
$conn->close();
?>
<section class="project-cs-hero">
    <div class="project-cs-hero__content">
        <h1 class="heading-primary" data-aos="zoom-in" data-aos-duration="1000"><?php echo PROJET_TITLE;?></h1>
        <div class="project-cs-hero__info" data-aos="zoom-in" data-aos-duration="1000">
            <p class="text-primary">
                <?php echo PROJET_SUBTITLE;?>
            </p>
        </div>
    </div>
</section>
<section class="project-details">
    <div class="main-container" style="margin-bottom: 20px; margin-top: 20px;">
        <div class="projects__content">
            <?php
            for($i=0;$i<count($titre);$i++){
                echo '
                <div class="projects__row" data-aos="fade-up" data-aos-offset="100">
                    <div class="projects__row-img-cont">
                        <img
                            src="'.$img[$i].'"
                            alt="Software Screenshot"
                            class="projects__row-img"
                            loading="lazy"
                        />
                    </div>
                    <div class="projects__row-content">
                        <h3 class="projects__row-content-title">'.$titre[$i].'</h3>
                        <p class="projects__row-content-desc">
                            '.$sousTitre[$i].'
                        </p>
                        <a
                            href="?page=project-detail&projectInitial='.$initial[$i].'&lang='.$lang.'"
                            class="btn btn--med btn--theme dynamicBgClr"
                            target="view_window"
                        >'.PROJECT_BTN.'</a
                        >
                    </div>
                </div>
                ';
            }
            ?>
        </div>
    </div>
</section>