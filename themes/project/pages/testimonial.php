<section
    class="elementor-section elementor-top-section elementor-element elementor-element-0b16910 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
    data-id="0b16910" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f584fc3"
            data-id="f584fc3" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-b1113d6 elementor-widget elementor-widget-heading"
                    data-id="b1113d6" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">{testimonial_box_title}</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1a029cc wpr-testimonial-rating-style_1 wpr-testimonial-meta-position-top wpr-testimonial-slider-columns-2 wpr-testimonial-slider-columns--tablet2 wpr-testimonial-slider-columns--mobile1 wpr-testimonial-meta-align-center wpr-testimonial-image-position-center elementor-widget elementor-widget-wpr-testimonial"
                    data-id="1a029cc" data-element_type="widget"
                    data-settings="{&quot;testimonial_amount&quot;:2,&quot;testimonial_amount_tablet&quot;:2,&quot;testimonial_amount_mobile&quot;:1,&quot;testimonial_slides_to_scroll&quot;:2,&quot;testimonial_loop&quot;:&quot;yes&quot;}"
                    data-widget_type="wpr-testimonial.default">
                    <div class="elementor-widget-container">
                        <div class="wpr-testimonial-carousel-wrap">
                            <div class="wpr-testimonial-carousel" dir="ltr"
                                data-slick="{&quot;rtl&quot;:false,&quot;infinite&quot;:true,&quot;speed&quot;:700,&quot;arrows&quot;:true,&quot;dots&quot;:true,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:0,&quot;pauseOnHover&quot;:&quot;&quot;,&quot;prevArrow&quot;:&quot;#wpr-testimonial-prev-1a029cc&quot;,&quot;nextArrow&quot;:&quot;#wpr-testimonial-next-1a029cc&quot;,&quot;sliderSlidesToScroll&quot;:2}"
                                data-slide-effect="slide">
                                <?php
                                $data = content($type);
                                if ($data->num_rows()) {
                                    $i = 1;
                                    foreach ($data->result() as $row) {
                                        ?>
                                        <div class="wpr-testimonial-item elementor-repeater-item-8e882b2 elementor-clearfix">
                                            <div class="wpr-testimonial-meta elementor-clearfix">
                                                <div class="wpr-testimonial-meta-inner">
                                                    <div class="wpr-testimonial-image">
                                                        <img decoding="async" src="{base_url}upload/<?= $row->field1 ?>"
                                                            alt="<?= $row->field2 ?>">
                                                    </div>
                                                    <div class="wpr-testimonial-meta-content-wrap">
                                                        <div class="wpr-testimonial-name"><?= $row->field2 ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpr-testimonial-content-wrap">
                                                <div class="wpr-testimonial-content-inner">
                                                    <div class="wpr-testimonial-rating">
                                                        <?php
                                                        $rang = $row->field4;
                                                        if ($rang) {
                                                            $decimal_part = ($rang - (int) $rang) * 10;
                                                            $integer_part = (int) $rang;
                                                            $decimal_part_print = false;
                                                            // echo $integer_part;
                                                            for ($i = 0; $i < 5; $i++) {
                                                                if ($i < $integer_part)
                                                                    echo '<i class="wpr-rating-icon-full">&#xE933;</i>';
                                                                else {
                                                                    if ($decimal_part and !$decimal_part_print) {
                                                                        $decimal_part_print = true;
                                                                        echo '<i class="wpr-rating-icon-' . $decimal_part . '">&#xE933;</i>';
                                                                    } else
                                                                        echo '<i class="wpr-rating-icon-empty">&#xE933;</i>';
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="wpr-testimonial-content">
                                                        <p>
                                                        <p><?= $row->field3 ?></p>
                                                        </p>
                                                    </div>
                                                    <?php
                                                    if ($row->field5) {
                                                        ?>
                                                        <div class="wpr-testimonial-date"><?= getTimeDifference($row->field5) ?> Ago
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="wpr-testimonial-controls">
                                <div class="wpr-testimonial-dots"></div>
                            </div>
                            <div class="wpr-testimonial-arrow-container">
                                <div class="wpr-testimonial-prev-arrow wpr-testimonial-arrow"
                                    id="wpr-testimonial-prev-1a029cc">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 283.4 512" style="enable-background:new 0 0 283.4 512;"
                                        xml:space="preserve">
                                        <g>
                                            <polygon class="st0"
                                                points="54.5,256.3 283.4,485.1 256.1,512.5 0,256.3 0,256.3 27.2,229 256.1,0 283.4,27.4 " />
                                        </g>
                                    </svg>
                                </div>
                                <div class="wpr-testimonial-next-arrow wpr-testimonial-arrow"
                                    id="wpr-testimonial-next-1a029cc">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 283.4 512" style="enable-background:new 0 0 283.4 512;"
                                        xml:space="preserve">
                                        <g>
                                            <polygon class="st0"
                                                points="54.5,256.3 283.4,485.1 256.1,512.5 0,256.3 0,256.3 27.2,229 256.1,0 283.4,27.4 " />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
