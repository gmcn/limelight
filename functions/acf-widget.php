<?php

if(!class_exists('CtaWidget')) {

  class CtaWidget extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
      $widget_ops = array(
        'classname' => 'cta_widget',
        'description' => 'Add a column to your megamenu',
      );
      parent::__construct( 'cta_widget', 'Megamenu Column Widget', $widget_ops );
    }

    /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget( $args, $instance ) {
      // outputs the content of the widget
      if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }

      // widget ID with prefix for use in ACF API functions
      $widget_id = 'widget_' . $args['widget_id'];

      $title = get_field( 'title', $widget_id ) ? get_field( 'title', $widget_id ) : '';
      $btn_label = get_field( 'button_label', $widget_id );
      $btn_link = get_field( 'button_link', $widget_id ) ? get_field( 'button_link', $widget_id ) : '#';

      echo $args['before_widget']; ?>

      <?php if( have_rows('menu', $widget_id) ): ?>
          <ul>
          <?php while( have_rows('menu', $widget_id) ): the_row();
              $parent_link = get_sub_field('parent_link', $widget_id);
              $use_img = get_sub_field('use_img', $widget_id);
              $link_img = get_sub_field('link_img', $widget_id);
              ?>
              <li>

                <?php
                if( $parent_link ):
                    $link_url = $parent_link['url'];
                    $link_title = $parent_link['title'];
                    $link_target = $parent_link['target'] ? $parent_link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>

                <?php if ($use_img): ?>

                  <?php
                    if( !empty( $link_img ) ): ?>
                        <img src="<?php echo esc_url($link_img['url']); ?>" alt="<?php echo esc_attr($link_img['alt']); ?>" />
                    <?php endif; ?>

                <?php endif; ?>



                <?php if( have_rows('child_links', $widget_id) ): ?>
                  <ul>
                  <?php while( have_rows('child_links', $widget_id) ): the_row();
                      $child_link = get_sub_field('child_link');
                      ?>
                      <li>
                        <?php
                        if( $child_link ):
                            $link_url = $child_link['url'];
                            $link_title = $child_link['title'];
                            $link_target = $child_link['target'] ? $child_link['target'] : '_self';
                            ?>
                            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">- <?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                      </li>
                  <?php endwhile; ?>
                  </ul>
              <?php endif; ?>


              </li>
          <?php endwhile; ?>
          </ul>
      <?php endif; ?>

      <?php

      echo $args['after_widget'];

    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
    	// outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update( $new_instance, $old_instance ) {
    	// processes widget options to be saved
    }

  }

}

/**
 * Register our CTA Widget
 */
function register_cta_widget()
{
  register_widget( 'CtaWidget' );
}
add_action( 'widgets_init', 'register_cta_widget' );
