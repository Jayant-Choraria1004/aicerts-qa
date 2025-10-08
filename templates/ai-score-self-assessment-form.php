<?php
/* Template Name: AI SCORE SELF ASSESSEMENT FORM  */
?>

<?php
get_header();
?>

<div id="ai-score-self-assessment-form">

    <section class="hero-section common-section">
        <div class="content-wraper container">
            <h1 class="mb-4">AI Career Quiz: Which role is right for me?</h1>
            <h3 class="font400 mb-4 pb-2">AI Self-Assessment Application helps users evaluate their AI proficiency through a Technical
                Assessment for
                developers, data scientists, and engineers or a Business Assessment for executives, managers, and strategists,
                guiding them on their AI readiness journey.</h3>
            <div class="d-md-flex justify-content-center">
                <a href="" class="btn btn-white me-md-4 mw100 mb-4">Technical Assessment</a>
                <a href="" class="btn btn-primary mw100">Business Assessment</a>
            </div>
        </div>
    </section>

    <section class="container common-section questions-wraper">
        <h4 class="mb-4">Answer each question to the best of your ability. Select the option that best reflects your current skills,
            interests, and preferred work style.</h4>
    
        <div class="question-cards">
            <div class="row d-xl-flex justify-content-between">
            <?php echo do_shortcode('[gravityform id="22" title="false" ajax="true"]'); ?>

                <!-- <div class="col-12 col-lg-6 card-item">
                    <div class="qcard-header"> <span class="num-sapm me-3 font600">1</span>  <span class="font700">Qual é a função principal do JavaScript?</span></div>
                    <div class="qcard-content">
                        <form>
                            <p>
                              <input type="radio" id="test1" name="radio-group" class="qcustom-radio" checked>
                              <label for="test1">Manipulação de estilos</label>
                            </p>
                            <p>
                                <input type="radio" id="test2" name="radio-group" class="qcustom-radio" checked>
                                <label for="test2">Programação assíncrona</label>
                              </p>
                              <p>
                                <input type="radio" id="test3" name="radio-group" class="qcustom-radio" checked>
                                <label for="test3">Interatividade em páginas web</label>
                              </p>
                          </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6 card-item">
                    <div class="qcard-header"> <span class="num-sapm me-3 font600 font16">2</span>  <span class="font700">Qual é a função principal do JavaScript?</span></div>
                    <div class="qcard-content">
                        <form>
                            <p>
                              <input type="radio" id="test4" name="radio-group" class="qcustom-radio" checked>
                              <label for="test4">Manipulação de estilos</label>
                            </p>
                            <p>
                                <input type="radio" id="test5" name="radio-group" class="qcustom-radio" checked>
                                <label for="test5">Programação assíncrona</label>
                              </p>
                              <p>
                                <input type="radio" id="test6" name="radio-group" class="qcustom-radio" checked>
                                <label for="test6">Interatividade em páginas web</label>
                              </p>
                          </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6 card-item">
                    <div class="qcard-header"> <span class="num-sapm me-3 font600 font16">3</span>  <span class="font700">Qual é a função principal do JavaScript?</span></div>
                    <div class="qcard-content">
                        <form>
                            <p>
                              <input type="radio" id="test1" name="radio-group" class="qcustom-radio" checked>
                              <label for="test1">Manipulação de estilos</label>
                            </p>
                            <p>
                                <input type="radio" id="test2" name="radio-group" class="qcustom-radio" checked>
                                <label for="test2">Programação assíncrona</label>
                              </p>
                              <p>
                                <input type="radio" id="test3" name="radio-group" class="qcustom-radio" checked>
                                <label for="test3">Interatividade em páginas web</label>
                              </p>
                          </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6 card-item">
                    <div class="qcard-header"> <span class="num-sapm me-3 font600 font16">4</span>  <span class="font700">Qual é a função principal do JavaScript?</span></div>
                    <div class="qcard-content">
                        <form>
                            <p>
                              <input type="radio" id="test1" name="radio-group" class="qcustom-radio" checked>
                              <label for="test1">Manipulação de estilos</label>
                            </p>
                            <p>
                                <input type="radio" id="test2" name="radio-group" class="qcustom-radio" checked>
                                <label for="test2">Programação assíncrona</label>
                              </p>
                              <p>
                                <input type="radio" id="test3" name="radio-group" class="qcustom-radio" checked>
                                <label for="test3">Interatividade em páginas web</label>
                              </p>
                          </form>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-primary" style="width: 370px; max-width: 100%;" data-bs-toggle="modal" data-bs-target="#myModal">
                        Calculate AI Score
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Centered Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This modal is centered on the page.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section class="You-credit-in-ecellent-sape common-section">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-4 d-flex flex-column">
                    <div class="your-ai-score flex-fill">
                        <div class="primary-text d-flex justify-content-center pb-3"><span class="td me-1">Your</span> AI Score</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/percentage-circle.png" alt="upload image"
                            style="width: 284px; height: 281px;" />
                        <div class="mt-4 text-center">
                            <h3>Nerd 👍</h3>
                            <p class="mb-1" style="font-weight: 600;">Generated 10th Feb</p>
                            <p style="color: #91919F; font-weight: 600;">AICERTs</p>
                        </div>
                    </div>
                </div>

                <div class="right-content-wrapper col-12 col-lg-8 d-flex flex-column align-items-center justify-content-center mt-5 mt-lg-0">
                    <h1 class="text-center mb-5">Your Self <br> Assessment score : </br> 5/10</h1>
                    <a href="" class="btn btn-primary mw100">Test Your Advanced AI Readiness</a>
                </div>

            </div>
        </div>
    </section>

    <section class="common-section">
        <div class="container">
            <div class="scoreherocard">
                <h2 class="text-white">The Future of AI</h2>
                <h3 class="text-white">Discover how AI is shaping the world of tomorrow.</h3>
            </div>
        </div>
    </section>

    <section class="h2_faq pt-0">
        <div class="container">
            <h2 class="white_text mb-3 mb-md-5 text-center">Frequently Asked Questions</h2>
    
            <div class="faq_wrap">
                <div class="accordion" id="faq-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq_heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse1" aria-expanded="false" aria-controls="faq_collapse1">
                                What is your return policy?
                            </button>
                        </h2>
                        <div id="faq_collapse1" class="accordion-collapse collapse" aria-labelledby="faq_heading1" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                You can return any item within 30 days of purchase with a valid receipt.
                            </div>
                        </div>
                    </div>
    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq_heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse2" aria-expanded="false" aria-controls="faq_collapse2">
                                Do you offer international shipping?
                            </button>
                        </h2>
                        <div id="faq_collapse2" class="accordion-collapse collapse" aria-labelledby="faq_heading2" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                Yes, we ship to most countries worldwide. Shipping charges may apply.
                            </div>
                        </div>
                    </div>
    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq_heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse3" aria-expanded="false" aria-controls="faq_collapse3">
                                How can I track my order?
                            </button>
                        </h2>
                        <div id="faq_collapse3" class="accordion-collapse collapse" aria-labelledby="faq_heading3" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                Once your order is shipped, you will receive a tracking number via email.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<?php
get_footer();
?>