<?php/*Template Name: portfolio*/?><?php get_header(); ?>   <section class="b_box">       <div class="container">        <div class="row">          <div class="breadcrumbs-box">             <ul id="breadcrumbs-one">              <li>вы находжитесь здесь:</li>              <li><a href="">Главная</a></li>              <li><a href="" class="current">Портфолио</a></li>            </ul>          </div>        </div>      </div>    </section><!-- оформление наша команда --><section class="block_portfolio_page">  <div class="container"><?php if (get_post_meta($post->ID, 'portfolio_page_title', true )) : ?>    <h2 class="block_title"><?php echo get_post_meta($post->ID, 'portfolio_page_title', true ); ?></h2>  <?php endif; ?>  <?php if (get_post_meta($post->ID, 'portfolio_page_descript', true )) : ?>    <div class="block_descr"> <?php echo get_post_meta($post->ID, 'portfolio_page_descript', true ); ?>    </div><?php endif; ?>    <div class="row">    <?php    $sliders_galery = get_post_meta( $post->ID, 'page_main_slider_list', true );/*echo '<pre>';print_r($sliders_main);echo '</pre>';*/?>      <div class="portfolio_box"> <?php  foreach ($sliders_galery as $slidergalery) :    $slide_header_galery = $slidergalery['page_main_slider_list_header'] ? $slidergalery['page_main_slider_list_header'] : '';    $slider_upload_galery = $slidergalery['page_main_slider_list_upload'] ? $slidergalery['page_main_slider_list_upload'] : '';    ?>    <div class="portfolio_box_items port_items">      <div class="port_items_overlay"><div class="port_items_overlay_text"><?php echo $slide_header_galery; ?></div>      </div>     <a href="<?php echo $slider_upload_galery ; ?>" class="item double">      <img class="card" src="<?php echo $slider_upload_galery ; ?>" alt="картинка галереи">    </a>  </div>  <?phpendforeach;?> <!-- end galery -->   </div> </div></div></section><?php get_footer(); ?>