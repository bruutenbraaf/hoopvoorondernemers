<footer>
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10 d-flex justify-content-between">
                <div class="widget">
                    <?php dynamic_sidebar('footer_1'); ?>
                </div>
                <div class="widget">
                    <?php dynamic_sidebar('footer_2'); ?>
                </div>
                <div class="widget">
                    <?php dynamic_sidebar('footer_3'); ?>
                </div>
                <div class="socials">
                    <ul>
                        <?php $facebook = get_field('facebook', 'option'); ?>
                        <?php if ($facebook) { ?>
                            <li>
                                <a href="<?php echo $facebook['url']; ?>" target="_blank">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.32919 18V9.94922H4.49652V6.75H7.32919V4.2293C7.32919 1.49063 9.08715 0 11.6539 0C12.8837 0 13.94 0.0878906 14.2465 0.126562V2.98828H12.4664C11.0704 2.98828 10.8008 3.62109 10.8008 4.5457V6.75H13.9511L13.519 9.94922H10.8008V18" />
                                    </svg>
                                </a>
                            </li>
                        <?php } ?>
                        <?php $linkedin = get_field('linkedin', 'option'); ?>
                        <?php if ($linkedin) { ?>
                            <li>
                                <a href="<?php echo $linkedin['url']; ?>" target="_blank">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.02901 18H0.297255V5.98259H4.02901V18ZM2.16112 4.3433C0.968087 4.3433 0 3.35491 0 2.16161C0 0.968304 0.968087 0 2.16112 0C3.35416 0 4.32225 0.968304 4.32225 2.16161C4.32225 3.35491 3.35416 4.3433 2.16112 4.3433ZM17.996 18H14.2723V12.15C14.2723 10.7558 14.2441 8.96786 12.3321 8.96786C10.3919 8.96786 10.0946 10.4826 10.0946 12.0496V18H6.36688V5.98259H9.94599V7.62187H9.99821C10.4963 6.67768 11.7135 5.68125 13.5291 5.68125C17.3051 5.68125 18 8.1683 18 11.3987V18H17.996Z" />
                                    </svg>
                                </a>
                            </li>
                        <?php } ?>
                        <?php $youtube = get_field('youtube', 'option'); ?>
                        <?php if ($youtube) { ?>
                            <li>
                                <a href="<?php echo $youtube['url']; ?>" target="_blank">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M17.6204 4.24494C17.4134 3.45969 16.8034 2.84125 16.029 2.63137C14.6253 2.25 8.99652 2.25 8.99652 2.25C8.99652 2.25 3.36779 2.25 1.96404 2.63137C1.1896 2.84128 0.579664 3.45969 0.372648 4.24494C-0.003479 5.66826 -0.003479 8.63788 -0.003479 8.63788C-0.003479 8.63788 -0.003479 11.6075 0.372648 13.0308C0.579664 13.8161 1.1896 14.4088 1.96404 14.6186C3.36779 15 8.99652 15 8.99652 15C8.99652 15 14.6252 15 16.029 14.6186C16.8034 14.4088 17.4134 13.8161 17.6204 13.0308C17.9965 11.6075 17.9965 8.63788 17.9965 8.63788C17.9965 8.63788 17.9965 5.66826 17.6204 4.24494ZM7.1556 11.3341V5.94169L11.8601 8.63795L7.1556 11.3341Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        <?php } ?>
                        <?php $twitter = get_field('twitter', 'option'); ?>
                        <?php if ($twitter) { ?>
                            <li>
                                <a href="<?php echo $twitter['url']; ?>" target="_blank">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M16.1463 5.61444C16.1577 5.76209 16.1577 5.90977 16.1577 6.05742C16.1577 10.5609 12.4458 15.75 5.66152 15.75C3.5714 15.75 1.62978 15.191 -0.003479 14.2207C0.293487 14.2523 0.578992 14.2629 0.887384 14.2629C2.61198 14.2629 4.19957 13.725 5.46735 12.8074C3.84551 12.7758 2.48637 11.7949 2.01808 10.4449C2.24653 10.4765 2.47494 10.4976 2.71481 10.4976C3.04602 10.4976 3.37726 10.4554 3.68562 10.3816C1.99527 10.0652 0.727457 8.69413 0.727457 7.03828V6.9961C1.21856 7.24923 1.78967 7.40743 2.39496 7.4285C1.4013 6.81677 0.750309 5.77264 0.750309 4.59138C0.750309 3.95858 0.933017 3.3785 1.25283 2.87225C3.06884 4.93944 5.79856 6.28941 8.85945 6.43709C8.80235 6.18397 8.76807 5.92032 8.76807 5.65665C8.76807 3.77928 10.4128 2.25 12.4572 2.25C13.5194 2.25 14.4787 2.66133 15.1526 3.32578C15.9863 3.17813 16.7858 2.89335 17.494 2.50313C17.2198 3.29416 16.6374 3.95861 15.8722 4.38046C16.6146 4.30667 17.3341 4.11678 17.9965 3.85314C17.4941 4.52811 16.8659 5.12926 16.1463 5.61444Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="socket">
        <div class="container">
            <div class="row">
                <div class="offset-lg-1 col-lg-10 d-flex inner align-items-center">
                    <div class="copyright col"><?php _e('<b>Copyright 2021</b> - Hoop voor ondernemers', 'hvo'); ?></div>
                    <div class="ml-auto col justify-content-end d-flex">
                        <?php wp_nav_menu(array('theme_location' => 'socket')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>