<?php
/*
* Template Name: Template Become a Trainer
*/
get_header();
?>

<style>
 .aicertsform .form-control-label {
    line-height: normal;
    margin-bottom: 15px;
}

.aicertsform p {
    margin-bottom: 5px;
}   

.form-control:focus {
    background: transparent;
}

.form-control {background: transparent;
    border-color: rgba(255, 255, 255, 0.5);}

.form_group {
    margin-bottom: 20px;
}   
.aicertsform .btn {
    opacity: 0.90;
    pointer-events: auto;
}
/*.gform_required_legend {display:none;}*/
.gform-theme--foundation .gfield {grid-column: span 3;}


</style>

<div class="middle-section">
    <div class="inner-page pt-5"> 
        <section class="cert-spec-section pb-0 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000"><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="cmn-section pt-0">
            <div class="container pt-5">
                <div class="aicertsform contactt_details"> <?php the_content(); ?></div>    
            </div>
        </section>
   
 </div>
</div>
      
<?php
get_footer();