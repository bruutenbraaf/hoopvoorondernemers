<div class="space"></div>
<?php if (have_rows('sections')) : ?>
    <?php while (have_rows('sections')) : the_row(); ?>
        <?php if (get_row_layout() == 'header_homepagina') : ?>
            <?php $achtergrond_foto = get_sub_field('achtergrond_foto'); ?>
            <?php if ($achtergrond_foto) { ?>
                <section class="hp-header">
                    <div class="container">
                        <div class="hp-header-int d-flex align-items-end" style="background-image:url('<?php echo $achtergrond_foto['sizes']['homeheader']; ?>');">
                            <div class="inner">
                                <?php the_sub_field('titel'); ?>
                                <span class="ml-auto">€ <span class="count">834000</span> aan claims ingediend</span>
                            </div>
                        </div>
                    </div>
                    <div class="hp-usps">
                        <div class="container">
                            <div class="row d-flex justify-content-center align-items-center">
                                <?php if (have_rows('unique_selling_propositions')) : ?>
                                    <ul>
                                        <?php while (have_rows('unique_selling_propositions')) : the_row(); ?>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.5 8.31V9C16.4991 10.6173 15.9754 12.191 15.007 13.4864C14.0386 14.7817 12.6775 15.7294 11.1265 16.1879C9.57557 16.6465 7.91794 16.5914 6.40085 16.0309C4.88376 15.4705 3.58849 14.4346 2.70822 13.0778C1.82795 11.721 1.40984 10.1161 1.51626 8.50224C1.62267 6.88843 2.24791 5.35225 3.29871 4.12281C4.34951 2.89337 5.76959 2.03654 7.34714 1.68011C8.92469 1.32369 10.5752 1.48676 12.0525 2.14501" stroke="#20AFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16.5 3L9 10.5075L6.75 8.2575" stroke="#20AFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <?php the_sub_field('unique_selling_proposition'); ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
        <?php elseif (get_row_layout() == 'over_ons_homepagina') : ?>
            <section class="hp-about">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="offset-md-1 col-lg-7">
                            <?php the_sub_field('content'); ?>
                            <?php $button = get_sub_field('button'); ?>
                            <?php if ($button) { ?>
                                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn"><?php echo $button['title']; ?>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-end">
                            <svg width="236" height="321" viewBox="0 0 236 321" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.1">
                                    <path d="M118.749 146.424C98.212 146.424 80.7276 139.399 66.296 125.348C51.8644 111.112 44.6486 93.7336 44.6486 73.2121C44.6486 52.6905 51.8644 35.4043 66.296 21.3535C80.7276 7.11784 98.212 0 118.749 0C139.472 0 156.956 7.11784 171.202 21.3535C185.634 35.4043 192.85 52.6905 192.85 73.2121C192.85 93.7336 185.634 111.112 171.202 125.348C156.956 139.399 139.472 146.424 118.749 146.424ZM118.749 102.053C126.89 102.053 133.551 99.3724 138.731 94.011C144.097 88.6495 146.78 81.7165 146.78 73.2121C146.78 64.7076 144.097 57.7747 138.731 52.4132C133.551 47.0517 126.89 44.371 118.749 44.371C110.793 44.371 104.133 47.0517 98.7671 52.4132C93.5865 57.7747 90.9962 64.7076 90.9962 73.2121C90.9962 81.7165 93.5865 88.6495 98.7671 94.011C104.133 99.3724 110.793 102.053 118.749 102.053Z" fill="#20AFFF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M95.6757 295.506L95.6757 123.421H146.703L146.703 295.506L95.6757 295.506Z" fill="#20AFFF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M63.7838 155.289H172.216V199.903H63.7838V155.289Z" fill="#20AFFF" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M49.6842 199.903C49.6842 238.623 80.2702 270.012 118 270.012C155.73 270.012 186.316 238.623 186.316 199.903H236C236 266.783 183.17 321 118 321C52.8304 321 0 266.783 0 199.903H49.6842Z" fill="#20AFFF" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == 'advocaten_homepagina') : ?>
            <section class="hp-lawyers">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-10 d-flex justify-content-center text-center">
                            <?php the_sub_field('titel'); ?>
                        </div>
                        <?php $selecteer_advocaten_om_te_tonen = get_sub_field('selecteer_advocaten_om_te_tonen'); ?>
                        <?php if ($selecteer_advocaten_om_te_tonen) : ?>
                            <div class="offset-lg-1 col-lg-10">
                                <div class="lawyers">
                                    <?php foreach ($selecteer_advocaten_om_te_tonen as $post) :  ?>
                                        <?php setup_postdata($post); ?>
                                        <?php $profielfoto = get_field('profielfoto'); ?>
                                        <a href="<?php the_permalink(); ?>" class="lawyer d-flex align-items-end" style="background-image:url(<?php echo $profielfoto['sizes']['medium']; ?>);">
                                            <span><?php the_title(); ?></span>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="lawyer-int offset-lg-2 col-lg-8">
                            <div class="col-md-11">
                                <?php the_sub_field('informatie'); ?>
                                <?php $button = get_sub_field('button'); ?>
                                <?php if ($button) { ?>
                                    <a href="<?php echo $button['url']; ?>" class="btn">
                                        <?php echo $button['title']; ?>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-1 d-flex justify-content-end">
                            <div class="lawyer-dots"></div>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                jQuery(document).ready(function() {
                    jQuery('.lawyers').slick({
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        autoPlay: false,
                        dots: true,
                        appendDots: '.lawyer-dots',
                        accessibility: false,
                        prevArrow: jQuery('.prev-slide'),
                        nextArrow: jQuery('.next-slide'),
                        responsive: [{
                                breakpoint: 1560,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3,
                                }
                            },
                            {
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            }
                        ]
                    })
                });
            </script>
        <?php elseif (get_row_layout() == 'recensies') : ?>
            <section class="reviews">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-7">
                            <?php the_sub_field('informatie'); ?>
                        </div>
                        <?php $recensies_selected = get_sub_field('recensies_selected'); ?>
                        <?php if ($recensies_selected) : ?>
                            <div class="offset-lg-1 col-lg-9">
                                <div class="reviews-s">
                                    <?php foreach ($recensies_selected as $post) :  ?>
                                        <?php setup_postdata($post); ?>
                                        <a href="<?php the_permalink(); ?>" class="review d-flex align-items-center">
                                            <?php $profielfoto = get_field('profielfoto'); ?>
                                            <?php if ($profielfoto) { ?>
                                                <div class="avatar" style="background-image:url(<?php echo $profielfoto['sizes']['thumbnail']; ?>)">
                                                </div>
                                            <?php } else { ?>
                                                <div class="avatar no-pic d-flex justify-content-center align-items-center">
                                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M33.3334 35V31.6667C33.3334 29.8986 32.631 28.2029 31.3807 26.9526C30.1305 25.7024 28.4348 25 26.6667 25H13.3334C11.5652 25 9.86955 25.7024 8.61931 26.9526C7.36907 28.2029 6.66669 29.8986 6.66669 31.6667V35" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 18.3333C23.6819 18.3333 26.6666 15.3486 26.6666 11.6667C26.6666 7.98477 23.6819 5 20 5C16.3181 5 13.3333 7.98477 13.3333 11.6667C13.3333 15.3486 16.3181 18.3333 20 18.3333Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            <?php } ?>
                                            <div class="information">
                                                <span class="name"><?php the_title(); ?></span>
                                                <span class="company"><?php the_field('eigenaar_bedrijf'); ?></span>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <script>
                                jQuery(document).ready(function() {
                                    jQuery('.reviews-s').slick({
                                        infinite: true,
                                        slidesToShow: 3,
                                        dots: false,
                                        autoplay: true,
                                        autoplaySpeed: 4000,
                                        fade: false,
                                        arrows: false,
                                        accessibility: false,
                                        responsive: [{
                                                breakpoint: 1560,
                                                settings: {
                                                    slidesToShow: 3,
                                                }
                                            },
                                            {
                                                breakpoint: 991,
                                                settings: {
                                                    slidesToShow: 3,
                                                }
                                            },
                                            {
                                                breakpoint: 768,
                                                settings: {
                                                    slidesToShow: 2,
                                                }
                                            }
                                        ]
                                    })
                                });
                            </script>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>