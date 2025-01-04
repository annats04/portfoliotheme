<?php get_header() ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<!--php field name variables -->
<?php
$name = get_field("name");
$profession = get_field("profession");
$heroimage = get_field("hero_image");
$aboutMeText = get_field("about_me_text");
$file = get_field("cv-document");
$filename = $file['filename'];
$fileurl = $file['url'];
$videoCV = get_field("video_cv");
$cubeVideo = get_field("cube_video");
$cubeFileName = $cubeVideo['filename'];
$cubeFileUrl = $cubeVideo['url'];

$arrow = get_field("arrow");

$trapholtLaptop = get_field("laptop");
$trapholtTablet = get_field("tablet");
$trapholtPhone = get_field("phonemockup");
$trapholtBus = get_field("bus");
$trapholtPoster = get_field("main_poster");
$trapholtAW = get_field("art_workshops");
$trapholtChristmas = get_field("christmas");
$trapholtBag = get_field("bag");
$screenPoster = get_field("screen_poster");
$treasureHunt = get_field("treasure_hunt");

$trDuration = get_field("duration");
$trPeriod = get_field("period");
$trTeam = get_field("team");
$trRole = get_field("my_role");
$trContribution = get_field("my_contribution");
$trMethodology = get_field("methodology");
$trMethods= get_field("methods");
$trTools = get_field("tools");
$trBrief = get_field("creative_brief");
$trProblem = get_field("problem");
$trSolution1 =get_field("solution_1");
$trSolution2 =get_field("solution_2");
$trSolution3 =get_field("solution_3");
$trLink =get_field("trapholt_website");




$jlLoading = get_field("loading_screen");
$jlNetflix = get_field("netflix");
$jlSearchJob = get_field("search_job");
$jlCounsil = get_field("job_counsiling");
$jlPP = get_field("projects_portfolio");
$jlextra = get_field("extra_features");


$jlDuration = get_field ("jl_duration");
$jlPeriod = get_field ("jl_period");
$jlTeam = get_field ("jl_team");
$jlRole = get_field ("jl_role");
$jlContribution = get_field ("jl_contribution");
$jlMethodology = get_field ("jl_methodology");
$jlMethods = get_field ("jl_methods");
$jlTools = get_field ("jl_tools");

$jlCB = get_field ("jl_creative_brief");
$jlProblem = get_field ("jl_problem");
$jlSolution1 = get_field ("jl_soluttion");
$jlSolution2 = get_field ("jl_soluttion_2");
$jlSolution3 = get_field ("jl_soluttion_3");
$jlSolution4 = get_field ("jl_soluttion_4");


?>

  <div class="container">
          <div class="hero">
             <div class="row">
            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
    <div class="introduction">
    <div class="name">
<?php echo $name; ?>
    </div>
    <div class="title">
    Multimedia Designer based in Denmark
    </div>
<div class="row link-buttons">
  <div class="col-auto">
   <div class="mx-auto link-to-website">
              <a href="<?php echo $fileurl; ?>"
                download> 
        <img src="<?php echo $arrow['url']; ?>" alt="" width="11"> 
        DOWNLOAD CV
      </a>
            </div>
            </div>
   <div class="col-auto">
            <div class="mx-auto link-to-website">
              <a
                href="<?php echo $videoCV ?>"
                target="_blank">
        <img src="<?php echo $arrow['url']; ?>" alt="" width="11"> VIDEO CV</a>
            </div>
            </div>
          </div>
</div>
</div>
<div class="col-lg-6 heroimage text-end">
    <img src="<?php echo $heroimage["url"]; ?>" alt="" class="img-fluid heroimage" width="650">
 
</div>

</div>
</div>
<hr>
</div>








    <!-- ABOUT-->
<div class="content-container container" id="about">
    <div class="row">
        <div class="col-lg-6">
             <?php if($cubeVideo): ?>
                <video  autoplay loop muted playsinline>
                    <source src="<?php echo esc_url($cubeFileUrl); ?>" type="video/mp4">
                    
                </video>
            <?php endif; ?>
        </div>
        <div class="col-lg-6">
            <div class="content about-section">
                <h1 class="mb-3 about-title">
                    WELCOME TO MY
                    <span class="portfolio">Portfolio</span><span class="dot">.</span>
                </h1>
                <div class="about-me">About me </div>
                <p>
                    <?php echo $aboutMeText; ?>
                </p>
            </div>
        </div>
    </div>

</div>


<!--PROJCTES-->


<!--test FANTASY FESTIVAL-->


<div class="container" id="projects"> 
  <hr>
 <header class="text-center m-3">CASE STUDY: Fantasy Festival</header>
 <hr>
</div>
    <div class="container trapholt-case">
        <div class="row justify-content-center">
            <div class="col-md-6">
<!--NEW carousel-->
<div id="trapholtcarousel"
class="carousel slide"
data-bs-interval="5000"
data-bs-ride="carousel"
>
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
<img src="<?php echo $trapholtLaptop["url"];?>"
class="d-block img-fluid"
alt="trapholt website on laptop screen">
    </div>
    <div class="carousel-item">
<img src="<?php echo $trapholtPhone["url"];?>"
class="d-block img-fluid"
alt="trapholt on phone">
    </div>
    <div class="carousel-item">
<img src="<?php echo $trapholtTablet["url"];?>"
class="d-block"
alt="tablet for-families">
    </div>
      <div class="carousel-item">
<img src="<?php echo $trapholtBus["url"];?>"
class="d-block"
alt="nanna ditzel poster">
    </div>
      <div class="carousel-item">
<img src="<?php echo $trapholtPoster["url"];?>"
class="d-block"
alt="main-poster">
    </div>
      <div class="carousel-item">
<img src="<?php echo $trapholtAW["url"];?>"
class="d-block"
alt="artworkshops poster">
    </div>
      <div class="carousel-item">
<img src="<?php echo $screenPoster["url"];?>"
class="d-block"
alt="screen poster for family activities">
    </div>
     <div class="carousel-item">
<img src="<?php echo $treasureHunt["url"];?>"
class="d-block"
alt="treasure hunt assignment sheet">
    </div>
    <div class="carousel-item">
<img src="<?php echo $trapholtChristmas["url"];?>"
class="d-block"
alt="christmas carol poster">
    </div>
     <div class="carousel-item">
<img src="<?php echo $trapholtBag["url"];?>"
class="d-block"
alt="trapholt tote bag">
    </div>
</div>
<button class="carousel-control-prev" 
type="button"
data-bs-target="#trapholtcarousel"
data-bs-slide="prev"
>
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>

<button class="carousel-control-next" 
type="button"
data-bs-target="#trapholtcarousel"
data-bs-slide="next"
>
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>


</div>

</div>
<div class="col-md-6">
<div class="row project-overview rounded">
   <div class="col-6">
  <p> <strong>DURATION:</strong> <span class="duration">4 weeks </span> </p>
    <p> <strong>PERIOD:</strong> <span class="period">May - June 2024</span> </p>

    <p> <strong>TEAM:</strong> <span class="team">4 team members</span> </p>
      <p> <strong>MY ROLE:</strong> <span class="role">Graphic Designer and Brand Strategist</span> </p>
          <p> <strong>MY CONTRIBUTION:</strong> <span class="contribution">brand design, strategy, concept design, UX Research, graphic design </span> </p>

           
    



   </div>
    <div class="col-6">
 <p> <strong>METHODOLOGY:</strong> <span class="methodology"> brand audit, brand identity research, UX research </span> </p>

            <p> <strong>METHODS:</strong> <span class="methods"> quantitative survey, qualitative interviws, UX testing, user personas, fieldwork, competitors analysis, moodboards </span> </p>

     <p> <strong>TOOLS:</strong> <span class="tools">Photoshop, Illustrator, InDesign, Figma, After Effects, HTML,  CSS, Github, Miro, Milanote</span> </p>



   </div>
</div>
<div class="row trapholt-description">
<p>
    <strong>CREATIVE BRIEF:</strong> 
    <span class="creative-brief">
<?php echo $trBrief ?>
</span> 
</p> 
<p>
    <strong>PROBLEM:</strong> 
    <span class="problem">
<?php echo $trProblem ?>
</p>
<p><strong>SOLUTION:</strong></p>

<div class="row trapholt-solution">
    <div class="col-4">
     
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text"><?php echo $trSolution1 ?>
 </p>

</div>
<div class="col-4">
     
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text"> <?php echo $trSolution2 ?> </p>

</div>
<div class="col-4">
     
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text"><?php echo $trSolution2 ?> </p>

</div>

</div>

</div>
<div class="mx-auto link-to-website">
              <a
                href="<?php echo $trLink ?>"
                target="_blank">
        <img src="<?php echo $arrow['url']; ?>" alt="" width="11"> VISIT WEBSITE</a>
            </div>

</div>
        </div>
    </div>
        







<!--test area end-->

 <!--CASE STUDY: TRAPHOLT-->
<div class="container" id="projects"> 
  <hr>
 <header class="text-center m-3">CASE STUDY: TRAPHOLT REBRANDING</header>
 <hr>
</div>
    <div class="container trapholt-case">
        <div class="row justify-content-center">
            <div class="col-md-6">
<!--NEW carousel-->
<div id="trapholtcarousel"
class="carousel slide"
data-bs-interval="5000"
data-bs-ride="carousel"
>
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
<img src="<?php echo $trapholtLaptop["url"];?>"
class="d-block img-fluid"
alt="trapholt website on laptop screen">
    </div>
    <div class="carousel-item">
<img src="<?php echo $trapholtPhone["url"];?>"
class="d-block img-fluid"
alt="trapholt on phone">
    </div>
    <div class="carousel-item">
<img src="<?php echo $trapholtTablet["url"];?>"
class="d-block"
alt="tablet for-families">
    </div>
      <div class="carousel-item">
<img src="<?php echo $trapholtBus["url"];?>"
class="d-block"
alt="nanna ditzel poster">
    </div>
      <div class="carousel-item">
<img src="<?php echo $trapholtPoster["url"];?>"
class="d-block"
alt="main-poster">
    </div>
      <div class="carousel-item">
<img src="<?php echo $trapholtAW["url"];?>"
class="d-block"
alt="artworkshops poster">
    </div>
      <div class="carousel-item">
<img src="<?php echo $screenPoster["url"];?>"
class="d-block"
alt="screen poster for family activities">
    </div>
     <div class="carousel-item">
<img src="<?php echo $treasureHunt["url"];?>"
class="d-block"
alt="treasure hunt assignment sheet">
    </div>
    <div class="carousel-item">
<img src="<?php echo $trapholtChristmas["url"];?>"
class="d-block"
alt="christmas carol poster">
    </div>
     <div class="carousel-item">
<img src="<?php echo $trapholtBag["url"];?>"
class="d-block"
alt="trapholt tote bag">
    </div>
</div>
<button class="carousel-control-prev" 
type="button"
data-bs-target="#trapholtcarousel"
data-bs-slide="prev"
>
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>

<button class="carousel-control-next" 
type="button"
data-bs-target="#trapholtcarousel"
data-bs-slide="next"
>
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>


</div>

</div>
<div class="col-md-6">
<div class="row project-overview rounded">
   <div class="col-6">
  <p> <strong>DURATION:</strong> <span class="duration"><?php echo $trDuration ?></span> </p>
    <p> <strong>PERIOD:</strong> <span class="period"><?php echo $trPeriod ?></span> </p>

    <p> <strong>TEAM:</strong> <span class="team"><?php echo $trTeam ?></span> </p>
      <p> <strong>MY ROLE:</strong> <span class="role"><?php echo $trRole ?></span> </p>
          <p> <strong>MY CONTRIBUTION:</strong> <span class="contribution"><?php echo $trContribution ?> </span> </p>

           
    



   </div>
    <div class="col-6">
 <p> <strong>METHODOLOGY:</strong> <span class="methodology"><?php echo $trMethodology ?></span> </p>

            <p> <strong>METHODS:</strong> <span class="methods"> <?php echo $trMethods ?> </span> </p>

     <p> <strong>TOOLS:</strong> <span class="tools"><?php echo $trTools ?></span> </p>



   </div>
</div>
<div class="row trapholt-description">
<p>
    <strong>CREATIVE BRIEF:</strong> 
    <span class="creative-brief">
<?php echo $trBrief ?>
</span> 
</p> 
<p>
    <strong>PROBLEM:</strong> 
    <span class="problem">
<?php echo $trProblem ?>
</p>
<p><strong>SOLUTION:</strong></p>

<div class="row trapholt-solution">
    <div class="col-4">
     
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text"><?php echo $trSolution1 ?>
 </p>

</div>
<div class="col-4">
     
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text"> <?php echo $trSolution2 ?> </p>

</div>
<div class="col-4">
     
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text"><?php echo $trSolution2 ?> </p>

</div>

</div>

</div>
<div class="mx-auto link-to-website">
              <a
                href="<?php echo $trLink ?>"
                target="_blank">
        <img src="<?php echo $arrow['url']; ?>" alt="" width="11"> VISIT WEBSITE</a>
            </div>

</div>
        </div>
    </div>
        



 <!--case study JOB LAUNCHer-->
 <div class="container">
 <hr>
 <header class="text-center m-3">CASE STUDY: JOB LAUNCHER</header>
 <hr></div>
<!--section JOB LAUNCHER-->
 <section class="section-trapholt">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
<!--NEW carousel-->
<div id="jobcarousel"
class="carousel slide"
data-bs-interval="5000"
data-bs-ride="carousel"
>
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
<img src="<?php echo $jlLoading["url"];?>"
class="d-block img-fluid"
alt="job launcer app loading screen">
    </div>
    <div class="carousel-item">
<img src="<?php echo $jlNetflix["url"];?>"
class="d-block img-fluid"
alt="netflix job posting">
    </div>
    <div class="carousel-item">
<img src="<?php echo $jlSearchJob["url"];?>"
class="d-block"
alt="job searchingg sequence">
    </div>
      <div class="carousel-item">
<img src="<?php echo $jlCounsil["url"];?>"
class="d-block"
alt="job counsillening">
    </div>
      <div class="carousel-item">
<img src="<?php echo $jlPP["url"];?>"
class="d-block"
alt="project and portfolio">
    </div>
      <div class="carousel-item">
<img src="<?php echo $jlextra["url"];?>"
class="d-block"
alt="extra features">
    </div>
      
</div>
<button class="carousel-control-prev" 
type="button"
data-bs-target="#jobcarousel"
data-bs-slide="prev"
>
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>

<button class="carousel-control-next" 
type="button"
data-bs-target="#jobcarousel"
data-bs-slide="next"
>
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>


</div>

</div>
<div class="col-md-6">
<div class="row project-overview rounded">
   <div class="col-6">
  <p> <strong>DURATION:</strong> <span class="duration"><?php echo $jlDuration ?></span> </p>
    <p> <strong>PERIOD:</strong> <span class="period"><?php echo $jlPeriod ?></span> </p>

    <p> <strong>TEAM:</strong> <span class="team"><?php echo $jlTeam ?></span> </p>
      <p> <strong>MY ROLE:</strong> <span class="role"><?php echo $jlRole ?></span> </p>
          <p> <strong>MY CONTRIBUTION:</strong> <span class="contribution"><?php echo $jlContribution ?></span> </p>

           
    



   </div>
    <div class="col-6">
 <p> <strong>METHODOLOGY:</strong> <span class="methodology"><?php echo $jlMethodology ?> </span> </p>

            <p> <strong>METHODS:</strong> <span class="methods"> <?php echo $jlMethods ?> </span> </p>

     <p> <strong>TOOLS:</strong> <span class="tools"><?php echo $jlTools ?></span> </p>



   </div>
</div>
<div class="row trapholt-description">
<p>
    <strong>CREATIVE BRIEF:</strong> 
    <span class="creative-brief">
 <?php echo $jlCB ?>
</span> 
</p> 
<p>
    <strong>PROBLEM:</strong> 
    <span class="problem">
<?php echo $jlProblem ?>
</p>
<p><strong>SOLUTION:</strong></p>

<div class="row trapholt-solution">
    <div class="col-6">
    <div>
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text">Designed a swipe-based app interface for quick job browsing and application.
[17:30]
 </p>
</div> 
<div>
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text">Infused the copywriting with a slightly gritty marketing tone, adding a cool vibe to the overall experience, making it unique and memorable. </p>
</div>
</div>
<div class="col-6">
     <div>
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text"> Developed features to cater to student users' needs, such as portfolios and project announcements, for a personalized experience. </p>
</div>
   <div>
<i class="fa-solid fa-chevron-right"></i>
<p class="inline-text"> Integrated a career counseling feature, providing personalized guidance and support for young professionals. </p>
</div>

</div>


</div>

</div>


</div>
        </div>
    </div>
        

 </section>


 <div class="div container">
  <hr>
 <header class="text-center">WEB  DEVELOPMENT </header>
 <hr>
</div>

    
<!--card 1-->
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <!--1st card-->
<!--LOOP for WEB PROJECTS-->

<?php
$webprojectLoop = new WP_Query(array (
    "post_type" => "web-project",
    "posts_per_page" => -1 ));
?>

<?php if($webprojectLoop->have_posts()): ?>
<?php while($webprojectLoop->have_posts()): $webprojectLoop->the_post(); ?>

<?php 
$webImage = get_field("project_image");
$webSubtitle = get_field("project_subtitle");
$webDescription = get_field("project_description");
$webLink = get_field("project_link");

?>


 <div class="col-md-6 col-lg-4">
      <div class="custom-card">
         <img src="<?php echo $webImage["url"];?>" class="card-img-top img-fluid mx-auto" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?> </h5>
<h6><?php echo $webSubtitle ?>  </h6>
<p class="card-text">
  <?php echo $webDescription ?>
</p>
<div class="mx-auto text-center">
              <a
                href="<?php echo $webLink ?>"
                target="_blank"
                class="btn btn-outline">
                Launch Project
                </a>
            </div>
         </div>
    </div>
 </div>



<?php endwhile; ?>
<?php wp_reset_postdata()?>
<?php endif; ?>

        </div>
    </div>

</div>

<?php endwhile; ?>
<?php endif; ?>

 <?php get_footer() ?>