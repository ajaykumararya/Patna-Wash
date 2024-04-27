<section
    class="elementor-section elementor-top-section elementor-element elementor-element-a7daa3b elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
    data-id="a7daa3b" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
    <div class="elementor-container elementor-column-gap-default">

        <?php
        $data = content($type);
        if ($data->num_rows()) {
            $i = 1;
            foreach ($data->result() as $row) {

                ?>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-286c231"
                    data-id="286c231" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-37d6f4e elementor-widget elementor-widget-ucaddon_square_icon_box"
                            data-id="37d6f4e" data-element_type="widget" data-widget_type="ucaddon_square_icon_box.default">
                            <div class="elementor-widget-container">

                                <!-- start Icon Box -->
                                <link id="uc_ac_assets_file_blox_boxed_small_square_icon_box_css_0-css"
                                    href="https://mrjohnnycare.in/wp-content/uploads/ac_assets/blox-boxed-small-square-icon-box/blox-boxed-small-square-icon-box.css"
                                    type="text/css" rel="stylesheet">

                                <style>
                                    /* widget: Icon Box */

                                    #uc_square_icon_box_elementor_37d6f4e * {
                                        box-sizing: border-box;
                                    }

                                    #uc_square_icon_box_elementor_37d6f4e {
                                        font-family: inherit;
                                        transition: 0.3s;
                                        position: relative;
                                    }

                                    #uc_square_icon_box_elementor_37d6f4e .blox-boxed-small-square-icon-box-icon {

                                        position: relative;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        transform: rotate(0deg);
                                        z-index: 2;
                                    }

                                    #uc_square_icon_box_elementor_37d6f4e .ue-icon {
                                        display: inline-block;
                                    }

                                    #uc_square_icon_box_elementor_37d6f4e .blox-boxed-small-square-icon-box-icon>div {

                                        position: relative;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        transform: rotate(-0deg);
                                    }

                                    #uc_square_icon_box_elementor_37d6f4e .ue-icon-inner {
                                        line-height: 1em;
                                    }


                                    #uc_square_icon_box_elementor_37d6f4e .ue-icon-inner svg {
                                        height: 1em;
                                        width: 1em;
                                    }

                                    .blox-boxed-small-square-icon-box-heading {
                                        font-size: 21px;
                                    }


                                    #uc_square_icon_box_elementor_37d6f4e:hover {
                                        position: relative;
                                        z-index: 1;
                                    }


                                    #uc_square_icon_box_elementor_37d6f4e .ue_box_button {
                                        text-align: center;
                                        text-decoration: none;
                                        display: inline-block;
                                        transition: 0.3s;
                                    }


                                    #uc_square_icon_box_elementor_37d6f4e span.line {
                                        display: block;
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        width: 0px;
                                        transition: 0.3s;
                                    }

                                    #uc_square_icon_box_elementor_37d6f4e:hover span.line {
                                        width: 100%;
                                    }

                                    #uc_square_icon_box_elementor_37d6f4e .ue-title-separator span {
                                        display: inline-block;
                                        transition: 0.3s;
                                    }
                                </style>

                                <div class="square_icon_box " id="uc_square_icon_box_elementor_37d6f4e">



                                    <div class="ue-icon">
                                        <a style="display:inline-block; text-decoration:none;" href="#">
                                            <div class="blox-boxed-small-square-icon-box-icon" style="background-color: ;">
                                                <div class="ue-icon-inner"><i class="<?= $row->field1 ?>"></i></div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="blox-boxed-small-square-icon-box-heading">
                                        <?=$row->field2?>
                                    </div>

                                    <div class="ue-title-separator">
                                        <span></span>
                                    </div>


                                    <div class="blox-boxed-small-square-icon-box-content">
                                        <p><?=$row->field3?></p>
                                    </div>


                                    <span class="line"></span>


                                </div>
                                <!-- end Icon Box -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if ($i % 3 == 0) {
                    ?>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-a7daa3b elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                data-id="a7daa3b" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                <div class="elementor-container elementor-column-gap-default">
                    <?php
                }


                $i++;

            }
        }
        ?>

    </div>
</section>