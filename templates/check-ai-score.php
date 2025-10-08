<?php
/* Template Name: Check AI SCORE */
?>

<?php
get_header();
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 

<div id="ai-score-tool-page">
    <section class="cya-ai-score-container cya-ai-score-bg">
        <div class="container">
            <div class="row px-md-4">
                <div class="col-xs-12 col-lg-6 col-xl-7 d-flex align-items-center">
                    <h2 class="mb-2 m-lg-0">Check Your Advanced AI Score </h2>
                </div>
                <div class="col-xs-12 col-lg-6 col-xl-5">
                    <div class="finput-wrapper">
                        <div class="finput-content">
                            <div class="btn-wrapper">
                                <button>Submit</button>
                            </div>
                            <!-- <input type="text" class="form-control" placeholder="John@aicerts.io"> -->
                            <input type="text" id="email-input" class="form-control" placeholder="John@aicerts.io">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Thanks You Modal Popup -->

    <div class="modal fade cya-ai-score-container-popup gf-thank-you-popup" id="exampleModalCentered" tabindex="-1" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl p-2">
            <div class="modal-content">
                <div class="modal-header border-0 p-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 p-lg-5">
                    <div class="d-flex justify-content-center mb-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cya-thanks-popup.png" alt="upload image"/>
                    </div>
                    <div>
                        <!-- <h4 class="text-center w-90 m-auto">Thank you for completing the Advanced AI Test. Your results are being evaluated, and you will receive a detailed report via email within a week.</h4> -->
                        <h4 class="text-center w-90 m-auto">Please complete AI Score Test first.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Your results are not Modal Popup -->
    <div class="modal fade cya-ai-score-container-popup" id="exampleModalCentered1" tabindex="-1" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl p-2">
            <div class="modal-content">
                <div class="modal-header border-0 p-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 p-lg-5">
                    <div class="d-flex justify-content-center mb-3 mb-lg-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cya-error-popup.png" alt="upload image"/>
                    </div>
                    <div>
                        <h4 class="text-center">Your results are not available yet. Please check back later or wait for the email notification. You can reach out to <span style="color: var(--primary-color); font-size: 20px;">support@aicerts.io</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container You-credit-in-ecellent-sape common-section mt-4">
        <div class="row">
            <div class="col-12 col-lg-4 d-flex flex-column">        
                <div class="your-ai-score flex-fill">
                    <div class="primary-text d-flex justify-content-center pb-3"><span class="td me-1">Your</span> AI Score</div>
                    <div class="scorecircleai"><label>750</label><img src="<?php echo get_template_directory_uri(); ?>/images/roi-circle-bg.png" alt="upload image"/></div>
                    <div class="mt-4 text-center">
                        <h3>Nerd 👍</h3>
                        <p class="mb-1" style="font-weight: 600;">Generated 10th Feb</p>
                        <p style="color: #91919F; font-weight: 600;">AICERTs</p>
                    </div>
                </div>        
            </div>
            <div class="col-12 col-lg-8 d-lg-flex mt-4 mt-lg-0">
                <div class="ycies">        
                    <div class="row">
                        <div class="col-1 d-flex">
                            <div class="ait-wm-sw-lr flex-1 mx-3 font500">
                                <h3 class="mt-1">AI</h3>
                                <h3>Score</h3>
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="primary-text">Your credit in excellent shape!</div>
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="font500">
                            <div class="d-flex justify-content-center py-4">Categories</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 p-0">
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wl-ai.png" alt="upload image" class="mw100" /> 
                 </div>
            </div>
            <div class="col-12 col-lg-8 d-lg-flex oa-table">
                <table class="table flex-1 mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Category</th>
                            <th scope="col">Score</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Weighted Contribution</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Certifications</td>
                        <td id="certifications-score">250</td>
                        <td>0.25</td>
                        <td id="certifications-contribution" style="color: #CFA935;">62.5</td>
                    </tr>

                    <tr>
                        <td>Experience</td>
                        <td id="experience-score">200</td>
                        <td>0.3</td>
                        <td id="experience-contribution" style="color: #CFA935;">60.0</td>
                    </tr>

                    <tr>
                        <td>Skills</td>
                        <td id="skills-score">150</td>
                        <td>0.2</td>
                        <td id="skills-contribution" style="color: #CFA935;">30.0</td>
                    </tr>

                    <tr>
                        <td>Contributions</td>
                        <td id="contributions-score">100</td>
                        <td>0.15</td>
                        <td id="contributions-contribution" style="color: #CFA935;">15.0</td>
                    </tr>

                    <tr>
                        <td>Feedback</td>
                        <td id="feedback-score">50</td>
                        <td>0.1</td>
                        <td id="feedback-contribution" style="color: #CFA935;">5.0</td>
                    </tr>

                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td id="total-contribution" style="color: #CFA935;">182.5</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php
    $the_future_of_ai_heading = get_field('the_future_of_ai_heading');
    $the_future_of_ai_subheading = get_field('the_future_of_ai_subheading');
    $dive_deeper_into_the_ai_score_title = get_field('dive_deeper_into_the_ai_score_title');
    $dive_deeper_into_the_ai_score_subtitle = get_field('dive_deeper_into_the_ai_score_subtitle');
    $see_how_the_ai_score_works_button = get_field('see_how_the_ai_score_works_button');
    $faq_heading = get_field('faq_heading');
    $score_faq = get_field('score_faq');
    ?>
    <?php if($the_future_of_ai_heading): ?>
    <section class="common-section">
        <div class="container">
            <div class="scoreherocard">
                <h2 class="text-white"><?php echo $the_future_of_ai_heading; ?></h2>
                <h3 class="text-white"><?php echo $the_future_of_ai_subheading; ?></h3>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <?php if($dive_deeper_into_the_ai_score_title): ?>
    <section class="common-section scorecta">
        <div class="container text-center">    
            <div class="scorecta-cnt">
                <h2 class="mb-4"><?php echo $dive_deeper_into_the_ai_score_title; ?></h2>
                <h3><?php echo $dive_deeper_into_the_ai_score_subtitle; ?></h3>
                <a href="<?php echo $see_how_the_ai_score_works_button['url']; ?>" class="btn btn-primary"><?php echo $see_how_the_ai_score_works_button['title']; ?></a>
            </div>  
        </div>
    </section>
    <?php endif; ?>
    
    <?php if($faq_heading): ?>
    <section class="h2_faq pt-0">
        <div class="container">
            <h2 class="white_text mb-3 mb-md-5 text-center"><?php echo $faq_heading; ?></h2>
    
            <div class="faq_wrap">
                <div class="accordion" id="faq-accordion">
                    <?php $i=1; foreach($score_faq as $faq): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq_heading<?php echo $i; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="faq_collapse<?php echo $i; ?>">
                                <?php echo $faq['faq_question']; ?>
                                </button>
                            </h2>
                            <div id="faq_collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="faq_heading<?php echo $i; ?>" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                <?php echo $faq['faq_answer']; ?>
                                </div>
                            </div>
                        </div>
                    <?php $i++;  endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

</div>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');

    // Check for screen width
    const isMobile = window.innerWidth <= 768;

    // Define chart options
    const chartOptions = {
        type: 'bar',
        data: {
            labels: ['Certifications', 'Experience', 'Skills', 'Contributions', 'Feedback'],
            datasets: [{
                data: [250, 200, 150, 100, 50],
                backgroundColor: ['#F3F3F3', '#F3F3F3', '#F3F3F3', '#F3F3F3', '#CFA935'],
                borderColor: 'none',
                borderWidth: 0,
                borderRadius: 7,
                barThickness: isMobile ? 35 : 50, // Adjust bar thickness for mobile view
            }]
        },
        options: {
            scales: {
                x: {
                    beginAtZero: true,
                    grid: {
                        display: false, // Hide grid lines
                    },
                    ticks: {
                        display: true, // Hide ticks
                        font: {
                            size: isMobile ? 14 : 16,
                            weight: isMobile ? 400 : '500',
                        },
                    },
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        display: true, // Hide grid lines
                    },
                    ticks: {
                        display: true, // Hide ticks
                        font: {
                            size: isMobile ? 14 : 18,  // Adjust font size for mobile view
                            weight: isMobile ? 400 : 500, // Adjust font weight for mobile view
                        },
                    },
                    border: {
                        display: false, // Hide Y-axis line
                    }
                }
            },
    
            responsive: true
        }
    };

    // Create chart
    new Chart(ctx, chartOptions);

    jQuery(document).ready(function($) {
        let myChart = null; // Store the chart instance

        $("#email-input").on("change", function() {
            let email = $(this).val();
            if (!email) {
                return;
            }

            $.ajax({
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                type: "POST",
                data: {
                    action: "get_ai_score",
                    email: email
                },
                beforeSend: function() {
                    console.log("Fetching AI Score...");
                },
                success: function(response) {
                    if (response.success) {
                        console.log("Data received:", response.data);
                        // Calculate weighted contributions
                        let scores = response.data;
                        let weights = { certifications: 0.25, experience: 0.3, skills: 0.2, contributions: 0.15, feedback: 0.1 };

                        // 🚀 Check if any score field is empty
                        if (!scores.certifications || !scores.experience || !scores.skills || !scores.contributions || !scores.feedback) {
                            var myModal = new bootstrap.Modal(document.getElementById('exampleModalCentered1'));
                            myModal.show();
                            return; // Stop execution if any field is empty
                        }


                        let contributions = {
                            certifications: (scores.certifications * weights.certifications).toFixed(2),
                            experience: (scores.experience * weights.experience).toFixed(2),
                            skills: (scores.skills * weights.skills).toFixed(2),
                            contributions: (scores.contributions * weights.contributions).toFixed(2),
                            feedback: (scores.feedback * weights.feedback).toFixed(2)
                        };

                        let totalContribution = (
                            parseFloat(contributions.certifications) +
                            parseFloat(contributions.experience) +
                            parseFloat(contributions.skills) +
                            parseFloat(contributions.contributions) +
                            parseFloat(contributions.feedback)
                        ).toFixed(2);

                        // Update table scores
                        $("#certifications-score").text(scores.certifications);
                        $("#experience-score").text(scores.experience);
                        $("#skills-score").text(scores.skills);
                        $("#contributions-score").text(scores.contributions);
                        $("#feedback-score").text(scores.feedback);

                        // Update weighted contributions
                        $("#certifications-contribution").text(contributions.certifications);
                        $("#experience-contribution").text(contributions.experience);
                        $("#skills-contribution").text(contributions.skills);
                        $("#contributions-contribution").text(contributions.contributions);
                        $("#feedback-contribution").text(contributions.feedback);

                        // Update total score
                        $("#total-contribution").text(totalContribution);

                        // Update Chart
                        updateChart(scores);
                    } else {
                        //alert(response.data.message);
                        //$("#emailNotFoundModal").modal("show");
                        var myModal = new bootstrap.Modal(document.getElementById('exampleModalCentered'));
                        myModal.show();
                    }
                },
                error: function() {
                    alert("An error occurred while fetching data.");
                }
            });
        });

        function updateChart(data) {
            const canvas = document.getElementById("myChart");
            const ctx = canvas.getContext("2d");

            // ✅ Clear the canvas before creating a new chart
            if (myChart !== null) {
                myChart.destroy();  // Properly destroy the existing chart
            }

            // ✅ Completely remove and recreate the canvas element to prevent errors
            $("#myChart").remove();
            $(".ycies .col-11").append('<canvas id="myChart"></canvas>');
            const newCanvas = document.getElementById("myChart").getContext("2d");

            // ✅ Create a new chart
            myChart = new Chart(newCanvas, {
                type: "bar",
                data: {
                    labels: ["Certifications", "Experience", "Skills", "Contributions", "Feedback"],
                    datasets: [{
                        data: [data.certifications, data.experience, data.skills, data.contributions, data.feedback],
                        backgroundColor: ["#F3F3F3", "#F3F3F3", "#F3F3F3", "#F3F3F3", "#CFA935"],
                        borderRadius: 7,
                        barThickness: isMobile ? 35 : 50,
                    }]
                },
                options: { 
                    scales: {
                        x: {
                            beginAtZero: true,
                            grid: {
                                display: false, // Hide grid lines
                            },
                            ticks: {
                                display: true, // Hide ticks
                                font: {
                                    size: isMobile ? 14 : 16,
                                    weight: isMobile ? 400 : '500',
                                },
                            },
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: true, // Hide grid lines
                            },
                            ticks: {
                                display: true, // Hide ticks
                                font: {
                                    size: isMobile ? 14 : 18,  // Adjust font size for mobile view
                                    weight: isMobile ? 400 : 500, // Adjust font weight for mobile view
                                },
                            },
                            border: {
                                display: false, // Hide Y-axis line
                            }
                        }
                    },
                    responsive: true 
                }
            });
        }
    });
    
</script>
<?php
get_footer();
?>