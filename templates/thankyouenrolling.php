<?php /* Template Name: Thank You Enrolling 
  */
get_header();
$topcontent = get_field('top_content');

?>

<style>
.thanks_text p {line-height: 36px;font-size: 20px;}
.get_heade {
    margin-bottom: 20px;
}

.get_heade h4 {
    margin-bottom: 0;
    color: #fff;
    background: var(--primary-color);
    padding: 20px;
}

.get_card {
    border: 1px solid var(--primary-color);
    height: 100%;
    padding-bottom: 20px;
}
.quicli_lins ul {
    display: flex;
    justify-content: center;
    column-gap: 20px;
}
.social_media {
    display: flex;
    align-items: normal;
    column-gap: 20px;
    margin-top: 30px;
    justify-content: center;
}

.social_item svg {
    width: 30px;
    height: 30px;
}

.quicli_lins a {
    padding: 10px;
    display: inline-block;
    border: 1px solid var(--primary-color);
    margin-bottom: 5px;
    min-width: 150px;
    text-align: center;
}
.social_item svg.youtube_icon {
    width: 38px;
    height: 38px;
}
.thanks_heading {
    margin-bottom: 30px !important;
}
.thanks_sub-text p {
    font-size: 20px;
}
</style>

<div class="middle-section">
    <div class="inner-page blog-bg pb-0">
    
    <section class="cert-spec-section text-center pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="cmn-hd aos-init aos-animate mb-5 thanks_heading" data-aos="fade-up" data-aos-duration="1000"><?php echo get_the_title(); ?></h1>
                    <div class="thanks_sub-text"><?php the_content(); ?></div>
                    <?php if( $topcontent ): ?>
                        <div class="thanks_text">
                        <h6><?php echo $topcontent;?></h6>
                        </div>
                    <?php endif;?>                        
                </div>
            </div>
        </div>
    </section><!--TopSecttion-->

    <section class="cert-spec-section text-center pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-lg-6 col-md-6 mb-3">
                  <div class="get_card">
                    <div class="get_heade">
                        <h4>Connect With Us</h4>
                    </div>
                    <div class="social_media">
                        <div class="social_item">
                            <a href="https://www.youtube.com/@Aicerts" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16"> <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/> </svg>
                            </a>
                        </div>
                        <div class="social_item">
                            <a href="https://www.linkedin.com/company/ai-certs" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"> <g clip-path="url(#clip0_223_44)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.64075 15.6319V5.33298H0.217969V15.6319H3.64075V15.6319ZM1.92972 3.92735C3.12294 3.92735 3.86622 3.13585 3.86622 2.14757C3.84366 1.13732 3.12294 0.368164 1.95209 0.368164C0.781062 0.368195 0.015625 1.13735 0.015625 2.1476C0.015625 3.13588 0.7585 3.92738 1.90719 3.92738L1.92972 3.92735ZM5.53512 15.6319C5.53512 15.6319 5.58003 6.29929 5.53512 5.33301H8.95844V6.82657H8.93572C9.38584 6.12376 10.1968 5.09116 12.0432 5.09116C14.2959 5.09116 15.9843 6.56313 15.9843 9.72657V15.6319H12.5616V10.1223C12.5616 8.73788 12.0663 7.7932 10.8273 7.7932C9.88187 7.7932 9.31844 8.43007 9.071 9.0457C8.98047 9.26482 8.95844 9.5726 8.95844 9.88041V15.6319H5.53512Z" fill="currentColor"/> </g> <defs> <clipPath id="clip0_223_44"> <rect width="16" height="16" fill="white"/> </clipPath> </defs> </svg>
                            </a>
                        </div>
                    </div>   
                  </div>      
                </div> -->
                <!-- <div class="col-lg-6 col-md-6">
                <div class="get_card">
                    <div class="get_heade">
                        <h4>Explore More</h4>      
                    </div> 
                    <div class="quicli_lins">
                        <?php if( have_rows('quick_links') ): ?> 
                            <ul>
                                <?php while( have_rows('quick_links') ): the_row(); 
                                $link = get_sub_field('link');
                                $linklable = get_sub_field('link_lable');
                                ?>
                                <?php if($link ): ?>
                                <li><a href="<?php echo $link ?>"><?php echo $linklable;?></a></li>
                                <?php endif;?>
                                <?php endwhile; ?> 
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="social_media">
                        <div class="social_item">
                            <a href="https://www.youtube.com/@Aicerts" target="_blank">
                                <svg class="youtube_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16"> <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/> </svg>
                            </a>
                        </div>
                        <div class="social_item">
                            <a href="https://www.linkedin.com/company/ai-certs" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"> <g clip-path="url(#clip0_223_44)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.64075 15.6319V5.33298H0.217969V15.6319H3.64075V15.6319ZM1.92972 3.92735C3.12294 3.92735 3.86622 3.13585 3.86622 2.14757C3.84366 1.13732 3.12294 0.368164 1.95209 0.368164C0.781062 0.368195 0.015625 1.13735 0.015625 2.1476C0.015625 3.13588 0.7585 3.92738 1.90719 3.92738L1.92972 3.92735ZM5.53512 15.6319C5.53512 15.6319 5.58003 6.29929 5.53512 5.33301H8.95844V6.82657H8.93572C9.38584 6.12376 10.1968 5.09116 12.0432 5.09116C14.2959 5.09116 15.9843 6.56313 15.9843 9.72657V15.6319H12.5616V10.1223C12.5616 8.73788 12.0663 7.7932 10.8273 7.7932C9.88187 7.7932 9.31844 8.43007 9.071 9.0457C8.98047 9.26482 8.95844 9.5726 8.95844 9.88041V15.6319H5.53512Z" fill="currentColor"/> </g> <defs> <clipPath id="clip0_223_44"> <rect width="16" height="16" fill="white"/> </clipPath> </defs> </svg>
                            </a>
                        </div>
                    </div>           
                    </div>   
                </div> -->
            </div>
        </div>
    </section><!--GetinTouch-->


</div>
</div>

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>