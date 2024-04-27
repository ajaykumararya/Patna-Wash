<section
    class="elementor-section elementor-top-section elementor-element elementor-element-1d652af elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
    data-id="1d652af" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c6160c"
            data-id="7c6160c" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">

                <style>
                    /*! elementor - v3.21.0 - 24-04-2024 */
                    .elementor-counter {
                        display: flex;
                        justify-content: center;
                        align-items: stretch;
                        flex-direction: column-reverse
                    }

                    .elementor-counter .elementor-counter-number {
                        flex-grow: var(--counter-number-grow, 0)
                    }

                    .elementor-counter .elementor-counter-number-wrapper {
                        flex: 1;
                        display: flex;
                        font-size: 69px;
                        font-weight: 600;
                        line-height: 1;
                        text-align: center
                    }

                    .elementor-counter .elementor-counter-number-prefix {
                        text-align: end;
                        flex-grow: var(--counter-prefix-grow, 1);
                        white-space: pre-wrap
                    }

                    .elementor-counter .elementor-counter-number-suffix {
                        text-align: start;
                        flex-grow: var(--counter-suffix-grow, 1);
                        white-space: pre-wrap
                    }

                    .elementor-counter .elementor-counter-title {
                        flex: 1;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin: 0;
                        padding: 0;
                        font-size: 19px;
                        font-weight: 400;
                        line-height: 2.5
                    }
                </style>
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-c4dd1a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                    data-id="c4dd1a6" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                    <div class="elementor-container elementor-column-gap-default">

                        <?php
                        $our_counters = [
                            'first_counter' => 'Clothes Washed',
                            'secound_counter' => 'Orders processed',
                            'third_counter' => 'Satisfied Families'
                        ];
                        foreach ($our_counters as $index => $counter) {
                            $title = ES($index . '_title', $counter);
                            $value = ES($index . '_value');

                            preg_match_all('/-?\d+(\.\d+)?/', $value, $matches);

                            $numbers = $matches[0];
                            $counter = '';
                            $plus_sign = $value;
                            if ($numbers) {
                                
                                $counter = $numbers[0];
                                $plus_sign = str_replace($counter, '', $plus_sign);
                            }
                            ?>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d773666"
                                data-id="d773666" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-ba24708 elementor-widget elementor-widget-counter"
                                        data-id="ba24708" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">

                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title"><?= $title ?></div>
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000"
                                                        data-to-value="<?= $counter ?>" data-from-value="0"
                                                        data-delimiter=","><?=$counter?></span>
                                                    <span class="elementor-counter-number-suffix"><?= $plus_sign ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>