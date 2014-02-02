<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php if ( defined( 'SHOESTRAP_BOXED' ) ) : ?>
    <div class="container boxed-container">
  <?php endif; ?>

  <?php do_action( 'get_header' ); ?>

  <?php do_action( 'shoestrap_pre_navbar' ); ?>
  <?php if ( defined( 'SHOESTRAP_NAV_MODE' ) ) : ?>
    <?php if ( SHOESTRAP_NAV_MODE != 'pills' ) : ?>
      <?php if ( !has_action( 'shoestrap_header_top_navbar_override' ) ) : ?>
        <?php get_template_part( 'templates/header-top-navbar' ); ?>
      <?php else : ?>
        <?php do_action( 'shoestrap_header_top_navbar_override' ); ?>
      <?php endif; ?>
    <?php else : ?>
      <?php if ( !has_action( 'shoestrap_header_override' ) ) : ?>
        <?php get_template_part( 'templates/header' ); ?>
      <?php else : ?>
        <?php do_action( 'shoestrap_header_override' ); ?>
      <?php endif; ?>
    <?php endif; ?>
  <?php endif; ?>
v
  <?php do_action( 'shoestrap_post_navbar' ); ?>

  <?php if ( defined( 'SHOESTRAP_BOXED' ) ) : ?>
    </div>
  <?php endif; ?>

  <?php if ( defined( 'SHOESTRAP_NAV_MODE' ) && SHOESTRAP_NAV_MODE == 'left') : ?>
    <section class="static-menu-main <?php echo SHOESTRAP_STATIC_LEFT_BREAKPOINT; ?> col-static-<?php echo ( 12 - SHOESTRAP_LAYOUT_SECONDARY_WIDTH ); ?>">
  <?php endif; ?>

  <?php if ( has_action( 'shoestrap_below_top_navbar' ) ) : ?>
    <div class="before-main-wrapper">
      <?php do_action('shoestrap_below_top_navbar'); ?>
    </div>
  <?php endif; ?>

  <?php do_action('shoestrap_pre_wrap'); ?>
  <?php do_action('shoestrap_breadcrumbs'); ?>
  <?php do_action('shoestrap_header_media'); ?>

  <div class="wrap main-section <?php echo SHOESTRAP_CONTAINER_CLASS; ?>" role="document">

    <?php do_action('shoestrap_pre_content'); ?>

    <div class="content">
      <div class="row bg">

        <?php do_action('shoestrap_pre_main'); ?>

        <?php if ( defined( 'SHOESTRAP_SECTION_CLASS_WRAPPER' ) ) : ?>
          <div class="mp_wrap <?php echo SHOESTRAP_SECTION_CLASS_WRAPPER ?>">
            <div class="row">
        <?php endif; ?>

        <main class="main <?php echo SHOESTRAP_SECTION_CLASS_MAIN; ?>" <?php if (is_home()){ echo 'id="home-blog"';} ?> role="main">
          <?php include roots_template_path(); ?>
        </main><!-- /.main -->

        <?php do_action('shoestrap_after_main'); ?>

        <?php if ( ( SHOESTRAP_LAYOUT != 0 && ( roots_display_sidebar() ) ) || ( is_front_page() && defined( 'SHOESTRAP_SIDEBAR_ON_FRONT' ) && SHOESTRAP_LAYOUT != 0 ) ) : ?>
          <?php if ( !is_front_page() || ( is_front_page() && defined( 'SHOESTRAP_SIDEBAR_ON_FRONT' ) ) ) : ?>
            <aside class="sidebar <?php echo SHOESTRAP_SECTION_CLASS_PRIMARY; ?>" role="complementary">
              <?php if ( !has_action( 'shoestrap_sidebar_override' ) ) : ?>
                <?php include roots_sidebar_path(); ?>
              <?php else : ?>
                <?php do_action( 'shoestrap_sidebar_override' ); ?>
              <?php endif; ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        <?php endif; ?>

        <?php if ( defined( 'SHOESTRAP_SECTION_CLASS_WRAPPER' ) ) : ?>
            </div>
          </div>
        <?php endif; ?>

        <?php if ( SHOESTRAP_LAYOUT >= 3 && is_active_sidebar( 'sidebar-secondary' ) ) : ?>
          <?php if ( !is_front_page() || ( is_front_page() && defined( 'SHOESTRAP_SIDEBAR_ON_FRONT' ) ) ) : ?>
            <aside class="sidebar secondary <?php echo SHOESTRAP_SECTION_CLASS_SECONDARY; ?>" role="complementary">
              <?php dynamic_sidebar( 'sidebar-secondary' ); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div><!-- /.content -->
    <?php do_action('shoestrap_after_content'); ?>
  </div><!-- /.wrap -->
  <?php do_action('shoestrap_after_wrap'); ?>

  <?php if ( defined( 'SHOESTRAP_BOXED' ) ) : ?>
    <div class="container boxed-container">
  <?php endif; ?>

  <?php do_action('shoestrap_pre_footer'); ?>
  <?php if ( !has_action( 'shoestrap_footer_override' ) ) : ?>
    <?php get_template_part('templates/footer'); ?>
  <?php else : ?>
    <?php do_action( 'shoestrap_footer_override' ); ?>
  <?php endif; ?>

  <?php do_action('shoestrap_after_footer'); ?>

  <?php if ( defined( 'SHOESTRAP_BOXED' ) ) : ?>
    </div>
  <?php endif; ?>

  <?php if ( defined( 'SHOESTRAP_NAV_MODE' ) && SHOESTRAP_NAV_MODE == 'left') : ?></section><?php endif; ?>

  <?php wp_footer(); ?>

</body>
</html>