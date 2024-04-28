<?php
if ($isPrimary) {
    ?>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-2daea6f elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
        data-id="2daea6f" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-44f1898"
                data-id="44f1898" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <?php
                    $sliders = [];
                    $sliderData = $this->SiteModel->slider();
                    if ($sliderData->num_rows()) {
                        foreach ($sliderData->result() as $slider) {
                            $sliders[] = [
                                'url' => base_url('upload/' . $slider->image)
                            ];
                        }

                        ?>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-ead48cc elementor-section-full_width elementor-section-height-min-height elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="ead48cc" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:<?= str_replace('"', '&quot;', json_encode($sliders)) ?>,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500,&quot;_ha_eqh_enable&quot;:false}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-381b00f"
                                    data-id="381b00f" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-8e55d83 elementor-widget elementor-widget-heading"
                                            data-id="8e55d83" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.21.0 - 18-04-2024 */
                                                    .elementor-heading-title {
                                                        padding: 0;
                                                        margin: 0;
                                                        line-height: 1
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                        color: inherit;
                                                        font-size: inherit;
                                                        line-height: inherit
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                        font-size: 15px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                        font-size: 19px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                        font-size: 29px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                        font-size: 39px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                        font-size: 59px
                                                    }
                                                </style>
                                                <h1 class="elementor-heading-title elementor-size-default">
                                                    {slider_title}</h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-99e7ecc wpr-fancy-text-clip wpr-advanced-text-style-animated wpr-animated-text-infinite-yes elementor-widget elementor-widget-wpr-advanced-text"
                                            data-id="99e7ecc" data-element_type="widget"
                                            data-settings="{&quot;anim_loop&quot;:&quot;yes&quot;}"
                                            data-widget_type="wpr-advanced-text.default">
                                            <div class="elementor-widget-container">

                                                <h2 class="wpr-advanced-text">



                                                    <span class="wpr-anim-text wpr-anim-text-type-clip"
                                                        data-anim-duration="1000,2000" data-anim-loop="yes">
                                                        <span class="wpr-anim-text-inner">
                                                            <?php
                                                            $slider_locations = ES('slider_locations');
                                                            if (strpos($slider_locations, ',')) {
                                                                foreach (explode(',', $slider_locations) as $location)
                                                                    echo '<b>' . $location . '</b>';
                                                            } else
                                                                echo "<b>$slider_locations</b>";
                                                            ?>
                                                        </span>
                                                        <span class="wpr-anim-text-cursor">|</span>
                                                    </span>


                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ab226c4 wpr-pc-btn-align-inline wpr-pc-btn-icon-left elementor-widget elementor-widget-wpr-phone-call"
                                            data-id="ab226c4" data-element_type="widget"
                                            data-widget_type="wpr-phone-call.default">
                                            <div class="elementor-widget-container">
                                                <div class="wpr-pc-wrapper"><a href="tel:{number}" class="wpr-pc-btn">
                                                        <div class="wpr-pc-content"><span class="wpr-pc-text">Call Now:
                                                                {number}</span><span class="wpr-pc-btn-icon"><i
                                                                    class="fas fa-phone-alt"></i></span>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9175aea elementor-hidden-mobile"
                                    data-id="9175aea" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
} else {
    ?>

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-d84c627 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
        data-id="d84c627" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8645fea"
                data-id="8645fea" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-0df30ca elementor-widget elementor-widget-heading"
                        data-id="0df30ca" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.21.0 - 18-04-2024 */
                                .elementor-heading-title {
                                    padding: 0;
                                    margin: 0;
                                    line-height: 1
                                }

                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                    color: inherit;
                                    font-size: inherit;
                                    line-height: inherit
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                    font-size: 15px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                    font-size: 19px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                    font-size: 29px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                    font-size: 39px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                    font-size: 59px
                                }
                            </style>
                            <h2 class="elementor-heading-title elementor-size-default">{page_name}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php


}

?>

{content}