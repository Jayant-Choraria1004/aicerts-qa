<?php
$cert_sections = get_field('certification_alignment_section', 'option');
if (!$cert_sections) return; ?>
    <div class="tab-pane fade cmn-sliderdots offsetarrow show active" id="main_tab_0-pane" role="tabpanel" aria-labelledby="main_tab_0" tabindex="0">
        <?php if (!empty($cert_sections)): ?>
                <!-- Sub Tabs -->
                <ul class="nav nav-tabs h2_tabs" id="popular_certifications_Role_Base_Sub_CategoryTab" role="tablist">
                    <?php foreach ($cert_sections as $main_index => $main): 
                        $sub_tab_id = 'sub_tab_' . $main_index;
                    ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo ($main_index === 0) ? 'active' : ''; ?>" 
                                    id="<?php echo esc_attr($sub_tab_id); ?>" 
                                    data-bs-toggle="tab" 
                                    data-bs-target="#<?php echo esc_attr($sub_tab_id); ?>-pane" 
                                    type="button" 
                                    role="tab" 
                                    aria-controls="<?php echo esc_attr($sub_tab_id); ?>-pane" 
                                    aria-selected="<?php echo ($main_index === 0) ? 'true' : 'false'; ?>">
                                <?php echo esc_html($main['main_category']); ?>
                            </button>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <div class="tab-content popular_certifications_content" id="popular_certifications_Role_Base_Sub_CategoryTabContent">
                    <?php foreach ($cert_sections as $main_index => $main): 
                        $sub_tab_id = 'sub_tab_' . $main_index;
                    ?>
                    <div class="tab-pane fade <?php echo ($main_index === 0) ? 'show active' : ''; ?>" id="<?php echo esc_attr($sub_tab_id); ?>-pane" role="tabpanel" aria-labelledby="<?php echo esc_attr($sub_tab_id); ?>-pane" tabindex="0">
                        <div class="accordion-item course_accordian" id="course_accordian_0_essentials">
                            <div id="acc_course_collapse_0_essentials" class="accordion-collapse collapse" aria-labelledby="acc_course_heading_0_essentials" data-bs-parent="#course_accordian_0_essentials">
                                <div class="accordion-body">
                                    <div class="Certifications mt-4">
                                        <div class="CertificationFlex">
                                            <?php foreach ($main['sub_category'] as $cert1): ?>
                                            <div class="CertificationItem">
                                                <h4><?php echo $cert1['sub_category_name']; ?></h4>
                                                <div class="CertiCard">
                                                    <?php foreach($cert1['courses'] as $courses1): ?>
                                                        <a target="_blank" href="<?php echo $courses1['course_url']; ?>"><?php echo $courses1['course_name']; ?></a>
                                                        <?php if($courses1['or_and']): ?><div class="certispce"><?php echo $courses1['or_and']; ?></div> <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
    </div>