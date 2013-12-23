<?php

if ( !function_exists( 'shoestrap_variables_less' ) ) :
/*
 * The content below is a copy of bootstrap's variables.less file.
 *
 * Some options are user-configurable and stored as theme mods.
 * We try to minimize the options and simplify the user environment.
 * In order to do that, we 'll have to provide a minimum amount of options
 * and calculate the rest based on the user's selections.
 *
 */
function shoestrap_variables_less() {

  $body_bg          = '#' . str_replace( '#', '', shoestrap_getVariable( 'color_body_bg', true ) );
  $brand_primary    = '#' . str_replace( '#', '', shoestrap_getVariable( 'color_brand_primary', true ) );
  $brand_secondary  = '#' . str_replace( '#', '', shoestrap_getVariable( 'color_brand_secondary', true ) );
  $brand_success    = '#' . str_replace( '#', '', shoestrap_getVariable( 'color_brand_success', true ) );
  $brand_warning    = '#' . str_replace( '#', '', shoestrap_getVariable( 'color_brand_warning', true ) );
  $brand_danger     = '#' . str_replace( '#', '', shoestrap_getVariable( 'color_brand_danger', true ) );
  $brand_info       = '#' . str_replace( '#', '', shoestrap_getVariable( 'color_brand_info', true ) );

  $font_base              = shoestrap_process_font( shoestrap_getVariable( 'font_base', true ) );
  $font_navbar            = shoestrap_process_font( shoestrap_getVariable( 'font_navbar', true ) );
  $font_brand             = shoestrap_process_font( shoestrap_getVariable( 'font_brand', true ) );
  $font_jumbotron         = shoestrap_process_font( shoestrap_getVariable( 'font_jumbotron', true ) );
  $font_heading           = shoestrap_process_font( shoestrap_getVariable( 'font_heading', true ) );  

  $font_h1 = shoestrap_process_font( shoestrap_getVariable( 'font_h1', true ) );
  $font_h2 = shoestrap_process_font( shoestrap_getVariable( 'font_h2', true ) );
  $font_h3 = shoestrap_process_font( shoestrap_getVariable( 'font_h3', true ) );
  $font_h4 = shoestrap_process_font( shoestrap_getVariable( 'font_h4', true ) );
  $font_h5 = shoestrap_process_font( shoestrap_getVariable( 'font_h5', true ) );
  $font_h6 = shoestrap_process_font( shoestrap_getVariable( 'font_h6', true ) );

  $font_h1_face   = $font_h1['font-family'];
  $font_h1_size   = ( ( filter_var( $font_h1['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h1_weight = $font_h1['font-weight'];
  $font_h1_style  = $font_h1['font-style'];

  $font_h2_face   = $font_h2['font-family'];
  $font_h2_size   = ( ( filter_var( $font_h2['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h2_weight = $font_h2['font-weight'];
  $font_h2_style  = $font_h2['font-style'];

  $font_h3_face   = $font_h3['font-family'];
  $font_h3_size   = ( ( filter_var( $font_h3['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h3_weight = $font_h3['font-weight'];
  $font_h3_style  = $font_h3['font-style'];

  $font_h4_face   = $font_h4['font-family'];
  $font_h4_size   = ( ( filter_var( $font_h4['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h4_weight = $font_h4['font-weight'];
  $font_h4_style  = $font_h4['font-style'];

  $font_h5_face   = $font_h5['font-family'];
  $font_h5_size   = ( ( filter_var( $font_h5['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h5_weight = $font_h5['font-weight'];
  $font_h5_style  = $font_h5['font-style'];

  $font_h6_face   = $font_h6['font-family'];
  $font_h6_size   = ( ( filter_var( $font_h6['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h6_weight = $font_h6['font-weight'];
  $font_h6_style  = $font_h6['font-style'];

  if ( shoestrap_getVariable( 'font_heading_custom', true ) != 1 ) :

    $font_h1_face   = '@font-family-base';
    $font_h1_weight = '@headings-font-weight';
    $font_h1_style  = 'inherit';

    $font_h2_face   = '@font-family-base';
    $font_h2_weight = '@headings-font-weight';
    $font_h2_style  = 'inherit';

    $font_h3_face   = '@font-family-base';
    $font_h3_weight = '@headings-font-weight';
    $font_h3_style  = 'inherit';

    $font_h4_face   = '@font-family-base';
    $font_h4_weight = '@headings-font-weight';
    $font_h4_style  = 'inherit';

    $font_h5_face   = '@font-family-base';
    $font_h5_weight = '@headings-font-weight';
    $font_h5_style  = 'inherit';

    $font_h6_face   = '@font-family-base';
    $font_h6_weight = '@headings-font-weight';
    $font_h6_style  = 'inherit';

  endif;

  $text_color       = '#' . str_replace( '#', '', $font_base['color'] );
  $font_size_base   = $font_base['font-size'];
  $font_style_base  = $font_base['font-style'];
  $font_weight_base = $font_base['font-weight'];
  $sans_serif       = $font_base['font-family'];

  $border_radius    = filter_var( shoestrap_getVariable( 'general_border_radius', true ), FILTER_SANITIZE_NUMBER_INT );
  if ( strlen( $border_radius ) < 1 ) :
    $border_radius = 0;
  endif;

  $padding_base     = intval( shoestrap_getVariable( 'padding_base', true ) );
  $navbar_bg        = '#' . str_replace( '#', '', shoestrap_getVariable( 'navbar_bg', true ) );
  $jumbotron_bg     = '#' . str_replace( '#', '', shoestrap_getVariable( 'jumbotron_bg', true ) );

  $screen_tablet         = filter_var( shoestrap_getVariable( 'screen_tablet', true ), FILTER_SANITIZE_NUMBER_INT );
  $screen_desktop        = filter_var( shoestrap_getVariable( 'screen_desktop', true ), FILTER_SANITIZE_NUMBER_INT );
  $screen_large_desktop  = filter_var( shoestrap_getVariable( 'screen_large_desktop', true ), FILTER_SANITIZE_NUMBER_INT );
  $gutter                = filter_var( shoestrap_getVariable( 'layout_gutter', true ), FILTER_SANITIZE_NUMBER_INT );

  $navbar_height    = filter_var( shoestrap_getVariable( 'navbar_height', true ), FILTER_SANITIZE_NUMBER_INT );
  $navbar_text_color       = '#' . str_replace( '#', '', $font_navbar['color'] );

  $brand_text_color       = '#' . str_replace( '#', '', $font_brand['color'] );
  $jumbotron_text_color   = '#' . str_replace( '#', '', $font_jumbotron['color'] );

  if ( shoestrap_getVariable( 'font_jumbotron_heading_custom', true ) == 1 ) :

    $font_jumbotron_headers = shoestrap_process_font( shoestrap_getVariable( 'font_jumbotron_headers', true ) );

    $font_jumbotron_headers_face   = $font_jumbotron_headers['font-family'];
    $font_jumbotron_headers_weight = $font_jumbotron_headers['font-weight'];
    $font_jumbotron_headers_style  = $font_jumbotron_headers['font-style'];
    $jumbotron_headers_text_color   = '#' . str_replace( '#', '', $font_jumbotron_headers['color'] );

  else :

    $font_jumbotron_headers_face   = $font_jumbotron['font-family'];
    $font_jumbotron_headers_weight = $font_jumbotron['font-weight'];
    $font_jumbotron_headers_style  = $font_jumbotron['font-style'];
    $jumbotron_headers_text_color  = $jumbotron_text_color;
  endif;

  // Calculate the gray shadows based on the body background.
  // We basically create 2 "presets": light and dark.
  if ( shoestrap_get_brightness( $body_bg ) > 80 ) :
    $gray_darker  = 'lighten(#000, 13.5%)';
    $gray_dark    = 'lighten(#000, 20%)';
    $gray         = 'lighten(#000, 33.5%)';
    $gray_light   = 'lighten(#000, 60%)';
    $gray_lighter = 'lighten(#000, 93.5%)';
  else :
    $gray_darker  = 'darken(#fff, 13.5%)';
    $gray_dark    = 'darken(#fff, 20%)';
    $gray         = 'darken(#fff, 33.5%)';
    $gray_light   = 'darken(#fff, 60%)';
    $gray_lighter = 'darken(#fff, 93.5%)';
  endif;

  $link_hover_color = ( shoestrap_get_brightness( $brand_secondary ) > 50 ) ? 'darken($link-color, 15%) !default;' : 'lighten($link-color, 15%) !default;';

  if ( shoestrap_get_brightness( $brand_secondary ) > 50 ) :
    $table_bg_accent      = 'darken($body-bg, 2.5%)';
    $table_bg_hover       = 'darken($body-bg, 4%)';
    $table_border_color   = 'darken($body-bg, 13.35%)';
    $input_border         = 'darken($body-bg, 20%)';
    $dropdown_divider_top = 'darken($body-bg, 10.2%)';
  else :
    $table_bg_accent      = 'lighten($body-bg, 2.5%)';
    $table_bg_hover       = 'lighten($body-bg, 4%)';
    $table_border_color   = 'lighten($body-bg, 13.35%)';
    $input_border         = 'lighten($body-bg, 20%)';
    $dropdown_divider_top = 'lighten($body-bg, 10.2%)';
  endif;

  if ( shoestrap_get_brightness( $navbar_bg ) > 80 ) :
    $navbar_link_hover_color    = 'darken($navbar-default-color, 26.5%)';
    $navbar_link_active_bg      = 'darken($navbar-default-bg, 6.5%)';
    $navbar_link_disabled_color = 'darken($navbar-default-bg, 6.5%)';
    $navbar_brand_hover_color   = 'darken($navbar-default-brand-color, 10%)';
  else :
    $navbar_link_hover_color    = 'lighten($navbar-default-color, 26.5%)';
    $navbar_link_active_bg      = 'lighten($navbar-default-bg, 6.5%)';
    $navbar_link_disabled_color = 'lighten($navbar-default-bg, 6.5%)';
    $navbar_brand_hover_color   = 'lighten($navbar-default-brand-color, 10%)';
  endif;

  if ( shoestrap_get_brightness( $brand_primary ) > 80 ) :
    $btn_primary_color  = '#fff';
    $btn_primary_border = 'darken($btn-primary-bg, 5%)';
  else :
    $btn_primary_color  = '#333';
    $btn_primary_border = 'lighten($btn-primary-bg, 5%)';
  endif;

  if ( shoestrap_get_brightness( $brand_success ) > 80 ) :
    $btn_success_color  = '#fff';
    $btn_success_border = 'darken($btn-success-bg, 5%)';
  else :
    $btn_success_color  = '#333';
    $btn_success_border = 'lighten($btn-success-bg, 5%)';
  endif;

  if ( shoestrap_get_brightness( $brand_warning ) > 80 ) :
    $btn_warning_color  = '#fff';
    $btn_warning_border = 'darken($btn-warning-bg, 5%)';
  else :
    $btn_warning_color  = '#333';
    $btn_warning_border = 'lighten($btn-warning-bg, 5%)';
  endif;

  if ( shoestrap_get_brightness( $brand_danger ) > 80 ) :
    $btn_danger_color  = '#fff';
    $btn_danger_border = 'darken($btn-danger-bg, 5%)';
  else :
    $btn_danger_color  = '#333';
    $btn_danger_border = 'lighten($btn-danger-bg, 5%)';
  endif;

  if ( shoestrap_get_brightness( $brand_info ) > 80 ) :
    $btn_info_color  = '#fff';
    $btn_info_border = 'darken($btn-info-bg, 5%)';
  else :
    $btn_info_color  = '#333';
    $btn_info_border = 'lighten($btn-info-bg, 5%)';
  endif;

  if ( shoestrap_get_brightness( $brand_primary ) < 100 ) :
    $input_border_focus = 'lighten($brand-primary, 10%);';
  else :
    $input_border_focus = 'darken($brand-primary, 10%);';
  endif;

  if ( shoestrap_get_brightness( $brand_primary ) < 50 ) :
    $navbar_border  = 'lighten($navbar-default-bg, 6.5%)';
  else :
    $navbar_border  = 'darken($navbar-default-bg, 6.5%)';
  endif;

$variables = '
$brand-secondary: ' . $brand_secondary . ';

$428bca: ' . $brand_primary . ';
$5cb85c: ' . $brand_success . ';
$f0ad4e: ' . $brand_warning . ';
$d9534f: ' . $brand_danger . ';
$5bc0de: ' . $brand_info . ';

$fff: ' . $body_bg . ';


// a flag to toggle asset pipeline / compass integration
// defaults to true if twbs-font-path function is present (no function => twbs-font-path('') parsed as string == right side)
// in Sass 3.3 this can be improved with: function-exists(twbs-font-path)
$bootstrap-sass-asset-helper: (twbs-font-path('') != unquote("twbs-font-path('')")) !default;
//
// Variables
// --------------------------------------------------


// Global values
// --------------------------------------------------

// Grays
// -------------------------

$gray-darker:            ' . $gray_darker . ';
$gray-dark:              ' . $gray_dark . ';
$gray:                   ' . $gray . ';
$gray-light:             ' . $gray_light . ';
$gray-lighter:           ' . $gray_lighter . ';

$ccc: mix($gray-light, $gray-lighter);

// Brand colors
// -------------------------

$brand-primary:         $428bca !default;
$brand-success:         $5cb85c !default;
$brand-warning:         $f0ad4e !default;
$brand-danger:          $d9534f !default;
$brand-info:            $5bc0de !default;

// Scaffolding
// -------------------------

$body-bg:               $fff !default;
$text-color:            ' . $text_color . ' !default;

// Links
// -------------------------

$link-color:            ' . $brand_secondary . ' !default;
$link-hover-color:      ' . $link_hover_color . ' !default;

// Typography
// -------------------------

$font-family-sans-serif:  ' . $sans_serif . ';
$font-family-serif:       Georgia, "Times New Roman", Times, serif !default;
$font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace !default;
$font-family-base:        $font-family-sans-serif !default;

$font-size-base:          ' . $font_size_base . 'px;
$font-size-large:         ceil(($font-size-base * 1.25)) !default; // ~18px
$font-size-small:         ceil(($font-size-base * 0.85)) !default; // ~12px

$font-size-h1:            floor(($font-size-base * ' . $font_h1_size . ')); // ~36px
$font-size-h2:            floor(($font-size-base * ' . $font_h2_size . ')); // ~30px
$font-size-h3:            ceil(($font-size-base * ' . $font_h3_size . ')); // ~24px
$font-size-h4:            ceil(($font-size-base * ' . $font_h4_size . ')); // ~18px
$font-size-h5:            ' . $font_h5_size . ';
$font-size-h6:            ceil(($font-size-base * ' . $font_h6_size . ')); // ~12px

$line-height-base:        1.428571429 !default; // 20/14
$line-height-computed:    floor(($font-size-base * $line-height-base)) !default; // ~20px

$headings-font-family:    $font-family-base;
$headings-font-weight:    500 !default;
$headings-line-height:    1.1 !default;
$headings-color:          inherit !default;

// Iconography
// -------------------------

$icon-font-path:          "' . get_template_directory_uri() . '/assets/fonts/";
$icon-font-name:          "Elusive-Icons";

// Components
// -------------------------
// Based on 14px font-size and 1.428 line-height (~20px to start)

$padding-base-vertical:          ' . $padding_base . 'px;
$padding-base-horizontal:        ' . round( $padding_base * 1.5 ) . 'px;

$padding-large-vertical:         ' . round( $padding_base * 1.75 ) . 'px;
$padding-large-horizontal:       ' . ( $padding_base * 2 ) . 'px;

$padding-small-vertical:         ' . round( $padding_base * 0.625 ) . 'px;
$padding-small-horizontal:       ' . round( $padding_base * 1.25 ) . 'px;

$line-height-large:              1.33 !default;
$line-height-small:              1.5 !default;

$border-radius-base:      ' . $border_radius . 'px;
$border-radius-large:     ceil(($border-radius-base * 1.5));
$border-radius-small:     floor(($border-radius-base * 0.75));

$component-active-color:         $fff;
$component-active-bg:            $brand-primary;

$caret-width-base:               ceil(($font-size-small / 3 )); // ~4px
$caret-width-large:              ceil(($caret-width-base * (5/4) )); // ~5px

// Tables
// -------------------------

$table-cell-padding:                 ceil(((($font-size-small * 2)) / 3 )); // ~8px;
$table-condensed-cell-padding:       ceil(((($font-size-small / 3 )) * 5)) / 4); // ~5px

$table-bg:                           transparent !default; // overall background-color
$table-bg-accent:                    ' . $table_bg_accent . '; // for striping
$table-bg-hover:                     ' . $table_bg_hover . '; // for hover
$table-bg-active:                    $table-bg-hover !default;

$table-border-color:                 ' . $table_border_color . '; // table and cell border


// Buttons
// -------------------------

$btn-font-weight:                normal !default;

$btn-default-color:              $gray-dark;
$btn-default-bg:                 $body-bg;
$btn-default-border:             $ccc;

$btn-primary-color:              ' . $btn_primary_color . ';
$btn-primary-bg:                 $brand-primary !default;
$btn-primary-border:             ' . $btn_primary_border . ';

$btn-success-color:              ' . $btn_success_color . ';
$btn-success-bg:                 $brand-success !default;
$btn-success-border:             ' . $btn_success_border . ';

$btn-warning-color:              ' . $btn_warning_color . ';
$btn-warning-bg:                 $brand-warning !default;
$btn-warning-border:             ' . $btn_warning_border . ';

$btn-danger-color:               ' . $btn_danger_color . ';
$btn-danger-bg:                  $brand-danger !default;
$btn-danger-border:              ' . $btn_danger_border . ';

$btn-info-color:                 ' . $btn_info_color . ';
$btn-info-bg:                    $brand-info
$btn-info-border:                ' . $btn_info_border . ';

$btn-link-disabled-color:        $gray-light !default;


// Forms
// -------------------------

$input-bg:                       $body-bg;
$input-bg-disabled:              $gray-lighter !default;

$input-color:                    $gray !default;
$input-border:                   $ccc;
$input-border-radius:            $border-radius-base;
$input-border-focus:             ' . $input_border_focus . ';

$input-color-placeholder:        $gray-light;

$input-height-base:              ($line-height-computed + ($padding-base-vertical * 2) + 2) !default;
$input-height-large:             (ceil($font-size-large * $line-height-large) + ($padding-large-vertical * 2) + 2) !default;
$input-height-small:             (floor($font-size-small * $line-height-small) + ($padding-small-vertical * 2) + 2) !default;

$legend-color:                   $gray-dark !default;
$legend-border-color:            $gray-lighter;

$input-group-addon-bg:           $gray-lighter !default;
$input-group-addon-border-color: $input-border !default;


// Dropdowns
// -------------------------

$dropdown-bg:                    ' . $body_bg . ';
$dropdown-border:                rgba(0,0,0,.15);
$dropdown-fallback-border:       $input-border;
$dropdown-divider-bg:            $legend-border-color;

$dropdown-link-color:            $gray-dark;
$dropdown-link-hover-color:      darken($gray-dark, 5%) !default;
$dropdown-link-hover-bg:         $table-bg-hover;

$dropdown-link-active-color:     $component-active-color !default;
$dropdown-link-active-bg:        $component-active-bg !default;

$dropdown-link-disabled-color:   $gray-light !default;

$dropdown-header-color:          $gray-light !default;

// Note: Deprecated $dropdown-caret-color as of v3.1.0
$dropdown-caret-color:           $gray-darker;


// COMPONENT VARIABLES
// --------------------------------------------------


// Z-index master list
// -------------------------
// Used for a bird\'s eye view of components dependent on the z-axis
// Try to avoid customizing these :)

$zindex-navbar:            1000 !default;
$zindex-dropdown:          1000 !default;
$zindex-popover:           1010 !default;
$zindex-tooltip:           1030 !default;
$zindex-navbar-fixed:      1030 !default;
$zindex-modal-background:  1040 !default;
$zindex-modal:             1050 !default;

// Media queries breakpoints
// --------------------------------------------------

// Extra small screen / phone
// Note: Deprecated $screen-xs and $screen-phone as of v3.0.1
$screen-xs:                  480px;
$screen-xs-min:              $screen-xs !default;
$screen-phone:               $screen-xs-min !default;

// Small screen / tablet
// Note: Deprecated $screen-sm and $screen-tablet as of v3.0.1
$screen-sm:                  ' . $screen_tablet . 'px;
$screen-sm-min:              $screen-sm !default;
$screen-tablet:              $screen-sm-min !default;

// Medium screen / desktop
// Note: Deprecated $screen-md and $screen-desktop as of v3.0.1
$screen-md:                  ' . $screen_desktop . 'px;
$screen-md-min:              $screen-md !default;
$screen-desktop:             $screen-md-min !default;

// Large screen / wide desktop
// Note: Deprecated $screen-lg and $screen-lg-desktop as of v3.0.1
$screen-lg:                  ' . $screen_large_desktop . 'px;
$screen-lg-min:              $screen-lg !default;
$screen-lg-desktop:          $screen-lg-min !default;

// So media queries don\'t overlap when required, provide a maximum
$screen-xs-max:              ($screen-sm-min - 1) !default;
$screen-sm-max:              ($screen-md-min - 1) !default;
$screen-md-max:              ($screen-lg-min - 1) !default;


// Grid system
// --------------------------------------------------

// Number of columns in the grid system
$grid-columns:              12;
// Padding, to be divided by two and applied to the left and right of all columns
$grid-gutter-width:         ' . $gutter . 'px;

// Navbar collapse

// Point at which the navbar becomes uncollapsed
$grid-float-breakpoint:     $screen-sm-min !default;
// Point at which the navbar begins collapsing
$grid-float-breakpoint-max: ($grid-float-breakpoint - 1) !default;


// Navbar
// -------------------------

// Basics of a navbar
$navbar-height:                    ' . $navbar_height . 'px;
$navbar-margin-bottom:             $line-height-computed !default;
$navbar-border-radius:             $border-radius-base !default;
$navbar-padding-horizontal:        floor(($grid-gutter-width / 2)) !default;
$navbar-padding-vertical:          (($navbar-height - $line-height-computed) / 2) !default;

$navbar-default-color:             ' . $navbar_text_color . ';
$navbar-default-bg:                ' . $navbar_bg . ';
$navbar-default-border:            ' . $navbar_border . ';

// Navbar links
$navbar-default-link-color:                $navbar-default-color;
$navbar-default-link-hover-color:          ' . $navbar_link_hover_color . ';
$navbar-default-link-hover-bg:             transparent;
$navbar-default-link-active-color:         mix($navbar-default-color, $navbar-default-link-hover-color, 50%);
$navbar-default-link-active-bg:            ' . $navbar_link_active_bg . ';
$navbar-default-link-disabled-color:       ' . $navbar_link_disabled_color . ';
$navbar-default-link-disabled-bg:          transparent;

// Navbar brand label
$navbar-default-brand-color:               $navbar-default-link-color;
$navbar-default-brand-hover-color:         ' . $navbar_brand_hover_color . ';
$navbar-default-brand-hover-bg:            transparent;

// Navbar toggle
$navbar-default-toggle-hover-bg:           $table-border-color;
$navbar-default-toggle-icon-bar-bg:        $ccc;
$navbar-default-toggle-border-color:       $table-border-color;


// Inverted navbar
//
// Reset inverted navbar basics
$navbar-inverse-color:                      $gray-light !default;
$navbar-inverse-bg:                         #222 !default;
$navbar-inverse-border:                     darken($navbar-inverse-bg, 10%) !default;

// Inverted navbar links
$navbar-inverse-link-color:                 $gray-light !default;
$navbar-inverse-link-hover-color:           #fff !default;
$navbar-inverse-link-hover-bg:              transparent !default;
$navbar-inverse-link-active-color:          $navbar-inverse-link-hover-color !default;
$navbar-inverse-link-active-bg:             darken($navbar-inverse-bg, 10%) !default;
$navbar-inverse-link-disabled-color:        #444 !default;
$navbar-inverse-link-disabled-bg:           transparent !default;

// Inverted navbar brand label
$navbar-inverse-brand-color:                $navbar-inverse-link-color !default;
$navbar-inverse-brand-hover-color:          #fff !default;
$navbar-inverse-brand-hover-bg:             transparent !default;

// Inverted navbar toggle
$navbar-inverse-toggle-hover-bg:            #333 !default;
$navbar-inverse-toggle-icon-bar-bg:         #fff !default;
$navbar-inverse-toggle-border-color:        #333 !default;


// Navs
// -------------------------

$nav-link-padding:                          10px 15px;
$nav-link-hover-bg:                         $gray-lighter !default;

$nav-disabled-link-color:                   $gray-light !default;
$nav-disabled-link-hover-color:             $gray-light !default;

$nav-open-link-hover-color:                 $body-bg;

// Tabs
$nav-tabs-border-color:                     $table-border-color;

$nav-tabs-link-hover-border-color:          $gray-lighter !default;

$nav-tabs-active-link-hover-bg:             $body-bg !default;
$nav-tabs-active-link-hover-color:          $gray !default;
$nav-tabs-active-link-hover-border-color:   $table-border-color;

$nav-tabs-justified-link-border-color:            $table-border-color;
$nav-tabs-justified-active-link-border-color:     $body-bg !default;

// Pills
$nav-pills-border-radius:                   $border-radius-base !default;
$nav-pills-active-link-hover-bg:            $component-active-bg !default;
$nav-pills-active-link-hover-color:         $component-active-color !default;


// Pagination
// -------------------------

$pagination-color:                     $link-color !default;
$pagination-bg:                        ' . $body_bg . ';
$pagination-border:                    ' . $table_border_color . ';

$pagination-hover-color:               $link-hover-color !default;
$pagination-hover-bg:                  $gray-lighter !default;
$pagination-hover-border:              $pagination-border;

$pagination-active-color:              $fff !default;
$pagination-active-bg:                 $brand-primary !default;
$pagination-active-border:             $brand-primary !default;

$pagination-disabled-color:            $gray-light !default;
$pagination-disabled-bg:               $fff !default;
$pagination-disabled-border:           $pagination-border;


// Pager
// -------------------------

$pager-bg:                             $pagination-bg !default;
$pager-border:                         $pagination-border !default;
$pager-border-radius:                  $navbar-padding-horizontal;

$pager-hover-bg:                       $pagination-hover-bg !default;

$pager-active-bg:                      $pagination-active-bg !default;
$pager-active-color:                   $pagination-active-color !default;

$pager-disabled-color:                 $pagination-disabled-color !default;


// Jumbotron
// -------------------------

$jumbotron-padding:              ($border-radius-large * 5);
$jumbotron-color:                inherit !default;
$jumbotron-bg:                   ' . $jumbotron_bg . ';
$jumbotron-heading-color:        inherit !default;
$jumbotron-font-size:            ceil(($font-size-base * 1.5)) !default;


// Form states and alerts
// -------------------------

$state-success-text:             #468847;
$state-success-bg:               #dff0d8;
$state-success-border:           darken(adjust-hue($state-success-bg, -10), 5%) !default;

$state-info-text:                #3a87ad;
$state-info-bg:                  #d9edf7;
$state-info-border:              darken(adjust-hue($state-info-bg, -10), 7%) !default;

$state-warning-text:             #c09853;
$state-warning-bg:               #fcf8e3;
$state-warning-border:           darken(adjust-hue($state-warning-bg, -10), 5%) !default;

$state-danger-text:              #b94a48;
$state-danger-bg:                #f2dede;
$state-danger-border:            darken(adjust-hue($state-danger-bg, -10), 5%) !default;


// Tooltips
// -------------------------
$tooltip-max-width:           200px;
$tooltip-color:               $body-bg;
$tooltip-bg:                  darken($gray-darker, 15%);

$tooltip-arrow-width:         $padding-small-vertical;
$tooltip-arrow-color:         $tooltip-bg !default;


// Popovers
// -------------------------
$popover-bg:                          $body-bg;
$popover-max-width:                   276px !default;
$popover-border-color:                rgba(0,0,0,.2) !default;
$popover-fallback-border-color:       $ccc !default;

$popover-title-bg:                    darken($popover-bg, 3%) !default;

$popover-arrow-width:                 ($tooltip-arrow-width * 2);
$popover-arrow-color:                 $body-bg;

$popover-arrow-outer-width:           ($popover-arrow-width + 1) !default;
$popover-arrow-outer-color:           rgba(0,0,0,.25) !default;
$popover-arrow-outer-fallback-color:  $gray-light;


// Labels
// -------------------------

$label-default-bg:            $gray-light !default;
$label-primary-bg:            $brand-primary !default;
$label-success-bg:            $brand-success !default;
$label-info-bg:               $brand-info !default;
$label-warning-bg:            $brand-warning !default;
$label-danger-bg:             $brand-danger !default;

$label-color:                 $body-bg;
$label-link-hover-color:      $body-bg;


// Modals
// -------------------------
$modal-inner-padding:         $line-height-computed;

$modal-title-padding:         ceil(($modal-inner-padding * (4/3))); // ~15px
$modal-title-line-height:     $line-height-base !default;

$modal-content-bg:                             $body-bg;
$modal-content-border-color:                   rgba(0,0,0,.2);
$modal-content-fallback-border-color:          $gray-light;

$modal-backdrop-bg:           darken($gray-darker, 15%);
$modal-backdrop-opacity:      .5 !default;
$modal-header-border-color:   lighten($gray-lighter, 12%);
$modal-footer-border-color:   $modal-header-border-color;

$modal-lg:                    900px !default;
$modal-sm:                    300px !default;


// Alerts
// -------------------------
$alert-padding:               $navbar-padding-horizontal;
$alert-border-radius:         $border-radius-base !default;
$alert-link-font-weight:      bold !default;

$alert-success-bg:            $state-success-bg !default;
$alert-success-text:          $state-success-text !default;
$alert-success-border:        $state-success-border !default;

$alert-info-bg:               $state-info-bg !default;
$alert-info-text:             $state-info-text !default;
$alert-info-border:           $state-info-border !default;

$alert-warning-bg:            $state-warning-bg !default;
$alert-warning-text:          $state-warning-text !default;
$alert-warning-border:        $state-warning-border !default;

$alert-danger-bg:             $state-danger-bg !default;
$alert-danger-text:           $state-danger-text !default;
$alert-danger-border:         $state-danger-border !default;


// Progress bars
// -------------------------
$progress-bg:                 ' . $table_bg_hover . ';
$progress-bar-color:          ' . $body_bg . ';

$progress-bar-bg:             $brand-primary !default;
$progress-bar-success-bg:     $brand-success !default;
$progress-bar-warning-bg:     $brand-warning !default;
$progress-bar-danger-bg:      $brand-danger !default;
$progress-bar-info-bg:        $brand-info !default;


// List group
// -------------------------
$list-group-bg:               ' . $body_bg . ';
$list-group-border:           ' . $table_border_color . ';
$list-group-border-radius:      $border-radius-base !default;

$list-group-hover-bg:         ' . $table_bg_hover . ';
$list-group-active-color:       $component-active-color !default;
$list-group-active-bg:          $component-active-bg !default;
$list-group-active-border:      $list-group-active-bg !default;
$list-group-active-text-color:  lighten($list-group-active-bg, 40%) !default;

$list-group-link-color:          $gray;
$list-group-link-heading-color:  $gray-dark;


// Panels
// -------------------------
$panel-bg:                    ' . $body_bg . ';
$panel-body-padding:          $navbar-padding-horizontal;
$panel-border-radius:         $border-radius-base !default;

$panel-inner-border:          $list-group-border;
$panel-footer-bg:             $list-group-hover-bg;

$panel-default-text:          $gray-dark !default;
$panel-default-border:        $panel-inner-border;
$panel-default-heading-bg:    $list-group-hover-bg

$panel-primary-text:          ' . $body_bg . ';
$panel-primary-border:        $brand-primary !default;
$panel-primary-heading-bg:    $brand-primary !default;

$panel-success-text:          $state-success-text !default;
$panel-success-border:        $state-success-border !default;
$panel-success-heading-bg:    $state-success-bg !default;

$panel-warning-text:          $state-warning-text !default;
$panel-warning-border:        $state-warning-border !default;
$panel-warning-heading-bg:    $state-warning-bg !default;

$panel-danger-text:           $state-danger-text !default;
$panel-danger-border:         $state-danger-border !default;
$panel-danger-heading-bg:     $state-danger-bg !default;

$panel-info-text:             $state-info-text !default;
$panel-info-border:           $state-info-border !default;
$panel-info-heading-bg:       $state-info-bg !default;


// Thumbnails
// -------------------------
$thumbnail-padding:           ceil($table-cell-padding / 2 );
$thumbnail-bg:                $body-bg !default;
$thumbnail-border:            $list-group-border;
$thumbnail-border-radius:     $border-radius-base !default;

$thumbnail-caption-color:     $text-color !default;
$thumbnail-caption-padding:   $table-cell-padding;

// Wells
// -------------------------
$well-bg:                     $table-bg-hover;
$well-border:                 darken($well-bg, 7%) !default;


// Badges
// -------------------------
$badge-color:                 $body-bg;
$badge-link-hover-color:      $body-bg;
$badge-bg:                    $gray-light !default;

$badge-active-color:          $link-color !default;
$badge-active-bg:             $body-bg;

$badge-font-weight:           bold !default;
$badge-line-height:           1 !default;
$badge-border-radius:         10px !default;


// Breadcrumbs
// -------------------------
$breadcrumb-padding-vertical:   $table-cell-padding;
$breadcrumb-padding-horizontal: $pager-border-radius;
$breadcrumb-bg:                 $table-bg-hover;
$breadcrumb-color:              $ccc !default;
$breadcrumb-active-color:       $gray-light !default;
$breadcrumb-separator:          "/" !default;

// Carousel
// ------------------------

$carousel-text-shadow:                        0 1px 2px rgba(0,0,0,.6) !default;

$carousel-control-color:                      $body-bg;
$carousel-control-width:                      15%;
$carousel-control-opacity:                    .5;
$carousel-control-font-size:                  $line-height-computed;

$carousel-indicator-active-bg:                $body-bg;
$carousel-indicator-border-color:             $body-bg;

$carousel-caption-color:                      $body-bg;


// Close
// ------------------------
$close-font-weight:           bold;
$close-color:                 darken($gray-darker, 15%);
$close-text-shadow:           0 1px 0 $body-bg;


// Code
// ------------------------
$code-color:                  #c7254e !default;
$code-bg:                     #f9f2f4 !default;

$kbd-color:                   #fff !default;
$kbd-bg:                      #333 !default;

$pre-bg:                      #f5f5f5 !default;
$pre-color:                   $gray-dark !default;
$pre-border-color:            #ccc !default;
$pre-scrollable-max-height:   340px !default;

// Type
// ------------------------
$text-muted:                  $gray-light !default;
$abbr-border-color:           $gray-light !default;
$headings-small-color:        $gray-light !default;
$blockquote-small-color:      $gray-light !default;
$blockquote-border-color:     $gray-lighter !default;
$page-header-border-color:    $gray-lighter !default;

// Miscellaneous
// -------------------------

// Hr border color
$hr-border:                   $gray-lighter !default;

// Horizontal forms & lists
$component-offset-horizontal: 180px !default;


// Container sizes
// --------------------------------------------------

// Small screen / tablet
$container-tablet:           ' . ( $screen_tablet - ( $gutter / 2 ) ). 'px;
$container-sm:               $container-tablet;

// Medium screen / desktop
$container-desktop:          ' . ( $screen_desktop - ( $gutter / 2 ) ). 'px;
$container-md:               $container-desktop;

// Large screen / wide desktop
$container-large-desktop:    ' . ( $screen_large_desktop - ( $gutter / 2 ) ). 'px;
$container-lg:                 $container-large-desktop;


// Shoestrap-specific variables
// --------------------------------------------------

$navbar-font-size:        ' . $font_navbar['font-size'] . 'px;
$navbar-font-weight:      ' . $font_navbar['font-weight'] . ';
$navbar-font-style:       ' . $font_navbar['font-style'] . ';
$navbar-font-family:      ' . $font_navbar['font-family'] . ';
$navbar-font-color:       ' . $navbar_text_color . ';

$brand-font-size:         ' . $font_brand['font-size'] . 'px;
$brand-font-weight:       ' . $font_brand['font-weight'] . ';
$brand-font-style:        ' . $font_brand['font-style'] . ';
$brand-font-family:       ' . $font_brand['font-family'] . ';
$brand-font-color:        ' . $brand_text_color . ';

$jumbotron-font-size:         ' . $font_jumbotron['font-size'] . 'px;
$jumbotron-font-weight:       ' . $font_jumbotron['font-weight'] . ';
$jumbotron-font-style:        ' . $font_jumbotron['font-style'] . ';
$jumbotron-font-family:       ' . $font_jumbotron['font-family'] . ';
$jumbotron-font-color:        ' . $jumbotron_text_color . ';

$jumbotron-headers-font-weight:       ' . $font_jumbotron_headers_weight . ';
$jumbotron-headers-font-style:        ' . $font_jumbotron_headers_style . ';
$jumbotron-headers-font-family:       ' . $font_jumbotron_headers_face . ';
$jumbotron-headers-font-color:        ' . $jumbotron_headers_text_color . ';

// H1
$heading-h1-face:         ' . $font_h1_face . ';
$heading-h1-weight:       ' . $font_h1_weight . ';
$heading-h1-style:        ' . $font_h1_style . ';

// H2
$heading-h2-face:         ' . $font_h2_face . ';
$heading-h2-weight:       ' . $font_h2_weight . ';
$heading-h2-style:        ' . $font_h2_style . ';

// H3
$heading-h3-face:         ' . $font_h3_face . ';
$heading-h3-weight:       ' . $font_h3_weight . ';
$heading-h3-style:        ' . $font_h3_style . ';

// H4
$heading-h4-face:         ' . $font_h4_face . ';
$heading-h4-weight:       ' . $font_h4_weight . ';
$heading-h4-style:        ' . $font_h4_style . ';

// H5
$heading-h5-face:         ' . $font_h5_face . ';
$heading-h5-weight:       ' . $font_h5_weight . ';
$heading-h5-style:        ' . $font_h5_style . ';

// H6
$heading-h6-face:         ' . $font_h6_face . ';
$heading-h6-weight:       ' . $font_h6_weight . ';
$heading-h6-style:        ' . $font_h6_style . ';

$navbar-margin-top:       ' . shoestrap_getVariable( 'navbar_margin_top' ) . 'px;

';

  return $variables;
}
endif;


if ( !function_exists( 'shoestrap_complete_less' ) ) :
/*
 * Brings all the LESS files that need to be compiled together.
 */
function shoestrap_complete_less() {
  $bootstrap    = get_template_directory() . '/assets/less/';

  $bootstrap_less = '@import "' . $bootstrap . 'app.less";';
  $bootstrap_less .= shoestrap_variables_less();

  if ( shoestrap_getVariable( 'gradients_toggle' ) == 1 ) :
    $bootstrap_less .= '@import "' . $bootstrap . 'gradients.less";';
  endif;

  // The custom LESS file path
  $customlessfile = get_template_directory() . '/assets/less/custom.less';

  // If file is writable, process this.
  if ( is_writable( $customlessfile ) ) :
    // If the 'shoestrap_custom_lessfile_datetime' option does not exist, create it
    if ( get_option( 'shoestrap_custom_lessfile_datetime' ) == '' ) :
      add_option( 'shoestrap_custom_lessfile_datetime', filemtime( $customlessfile ) );
    endif;

    $bootstrap_less .= '@import "' . $bootstrap . 'custom.less";';
  endif;

  $bootstrap_less .= shoestrap_getVariable( 'user_less' );

  return apply_filters( 'shoestrap_compiler', $bootstrap_less );
}
endif;
