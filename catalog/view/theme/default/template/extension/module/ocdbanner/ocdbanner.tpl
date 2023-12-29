<?php if ((isset($width_container) && $width_container == 2) || (isset($width_container) && $width_container == 3)) { ?>
</div></div></div> 
<?php } ?>
<div id="ocdbanner-<?php echo $module; ?>" class="ocdbanner<?php echo $class_fluid; ?>" data-ocdbanner="<?php echo $module; ?>"<?php echo $background; ?>>
  <?php if (isset($width_container) && $width_container == 3) { ?>
  <div class="container">
  <?php } ?>
  <?php if ((isset($name_front_show) && $name_front_show != 0) && (isset($name_front) && $name_front != '')) { ?>
  <div class="title-module"><?php echo $name_front; ?></div>
  <?php } ?>
  <?php $group_row = 1; ?>
  <?php foreach ($group_tabs as $group_tab) { ?>
  <?php if (isset($group_tab['status']) && $group_tab['status'] != 0) { ?>
  <?php if (isset($group_tab['mode']) && $group_tab['mode'] == 'grid') { ?>  
  <div class="banner-group group-bootstrap"<?php if (isset($group_tab['rows']) && $group_tab['rows'] !='') { ?> data-group-rows="<?php echo $group_tab['rows']; ?>"<?php } ?>>  
  <?php } elseif (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel') { ?>
  <div class="banner-group group-carousel">
  <?php } else { ?>
  <div class="banner-group group-grid">
  <?php } ?>
    <?php if (isset($group_tab['title_group_front']) && $group_tab['title_group_front'] != 0) { ?>
    <div class="title-group"><?php echo $group_tab['title_group']; ?></div>
    <?php } ?>
    <?php if (isset($group_tab['mode']) && $group_tab['mode'] == 'grid') { ?>
    <div class="row">
      <?php if (!isset($group_tab['rows']) || $group_tab['rows'] == '2') { ?>
      <?php $bootstrap_class = 'col-xs-6 col-sm-6 col-md-6 col-lg-6'; ?>
      <?php } elseif (!isset($group_tab['rows']) || $group_tab['rows'] == '3') { ?>
      <?php $bootstrap_class = 'col-xs-6 col-sm-4 col-md-4 col-lg-4'; ?>
      <?php } elseif (!isset($group_tab['rows']) || $group_tab['rows'] == '4') { ?>
      <?php $bootstrap_class = 'col-xs-6 col-sm-4 col-md-3 col-lg-3'; ?>
      <?php } elseif (!isset($group_tab['rows']) || $group_tab['rows'] == '6') { ?>
      <?php $bootstrap_class = 'col-xs-6 col-sm-2 col-md-2 col-lg-2'; ?>
      <?php } elseif (!isset($group_tab['rows']) || $group_tab['rows'] == '12') { ?>
      <?php $bootstrap_class = 'col-xs-6 col-sm-1 col-md-1 col-lg-1'; ?>
      <?php } else { ?>
      <?php $bootstrap_class = 'col-sm-12'; ?>
      <?php } ?>   
    <?php } elseif (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel') { ?>
    <div id="group-carousel-<?php echo $group_row; ?>" class="splide splide-<?php echo $group_row; ?>">
      <div class="splide__track">
        <div class="splide__list">  
    <?php } else { ?>
    <div class="respgrid<?php if (isset($group_tab['banner_width_mobile']) && $group_tab['banner_width_mobile'] != 0) { ?> respgrid-banner-full<?php } ?> respgrid-<?php echo $group_row; ?>" data-group="<?php echo $group_row; ?>" data-gutter="<?php echo $group_tab['gutter']; ?>">
    <?php } ?>
      <?php $banner_row = 1; ?>
      <?php if (isset($group_tab['banner_image'])) { ?>
      <?php foreach ($group_tab['banner_image'] as $key => $banner_image) { ?>
      <?php if (isset($banner_image['status']) && $banner_image['status'] != 0) { ?>
      <?php if (isset($group_tab['mode']) && $group_tab['mode'] == 'grid') { ?>
      <div class="item-banner <?php echo $bootstrap_class; ?>">
      <?php } elseif (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel') { ?>
      <div class="splide__slide item-banner">
      <?php } else { ?>
      <?php if ((isset($banner_image['type']) && $banner_image['type'] == 'image_image') && $banner_image['image'] == '') { ?>
      <?php $class_no_image_banner = ' item-grid-no-image'; ?>
      <?php } else { ?>
      <?php $class_no_image_banner = ''; ?>
      <?php } ?>
      <?php foreach ($banner_image['image_slider'] as $slider_item) { ?>
      <?php if (empty($slider_item['image_slide'])) { ?>
      <?php $class_no_image_banner = ' item-grid-no-image'; ?>
      <?php } else { ?>
      <?php $class_no_image_banner = ''; ?>
      <?php } ?>
      <?php } ?>
      <div class="item-grid item-grid-<?php echo $banner_row; ?><?php echo $class_no_image_banner; ?>" data-colspan="<?php echo $group_tab['grid_stack'][$key]['gs_width']; ?>" data-rowspan="<?php echo $group_tab['grid_stack'][$key]['gs_height']; ?>">
      <?php } ?> 
        <?php if (((isset($banner_image['type']) && $banner_image['type'] == 'image_image') && (isset($group_tab['mode']) && $group_tab['mode'] != 'respgrid')) || ((isset($banner_image['type']) && $banner_image['type'] == 'image_image') && (isset($group_tab['mode']) && $group_tab['mode'] == 'respgrid') && $banner_image['image'] != '')) { ?>
        <?php if ((isset($banner_image['title_show']) && $banner_image['title_show'] != 0) && (isset($banner_image['position_title']) && $banner_image['position_title'] == 'title_before_image')) { ?>
        <?php if ($banner_image['link_image'] || ($banner_image['link_image'] && $banner_image['link_video'] != 0)) { ?>
        <div class="title-banner before-title <?php echo $banner_image['text_align']; ?>"><a href="<?php echo $banner_image['link_image']; ?>" <?php echo $banner_image['link_target']; ?>><?php echo $banner_image['title_image']; ?></a></div>
        <?php } else { ?>
        <div class="title-banner before-title <?php echo $banner_image['text_align']; ?>"><?php echo $banner_image['title_image']; ?></div>
        <?php } ?>
        <?php } ?>
        <?php if ($banner_image['link_image'] && $banner_image['link_video'] != 0) { ?>
        <a href="<?php echo $banner_image['link_image']; ?>" <?php echo $banner_image['link_target']; ?> <?php if (isset($banner_image['animation']) && $banner_image['animation'] !='') { ?>data-animation="<?php echo $banner_image['animation']; ?>"<?php } ?>>
          <img src="<?php echo $banner_image['image']; ?>" title="<?php echo $banner_image['title_img']; ?>" alt="<?php echo $banner_image['alt_image']; ?>" class="img-responsive" width="<?php echo $banner_image['image_width']; ?>" height="<?php echo $banner_image['image_height']; ?>" />
          <?php if ((isset($banner_image['title_show']) && $banner_image['title_show'] != 0) || (isset($banner_image['desc_show']) && $banner_image['desc_show'] != 0)) { ?>
          <div class="block-desc">
            <?php if ((isset($banner_image['title_show']) && $banner_image['title_show'] != 0) && (isset($banner_image['position_title']) && $banner_image['position_title'] == 'title_html_image')) { ?>
            <div class="title-banner html-title <?php echo $banner_image['text_align']; ?>"><?php echo $banner_image['title_image']; ?></div>
            <?php } ?>
            <?php if ((isset($banner_image['desc_show']) && $banner_image['desc_show'] != 0) && (isset($banner_image['description']) && $banner_image['description'] != '')) { ?>
            <div class="banner-desc"><?php echo $banner_image['description']; ?></div>
            <?php } ?>
          </div>
          <?php } ?>
        </a>
        <?php } elseif ($banner_image['link_image']) { ?>
        <a href="<?php echo $banner_image['link_image']; ?>" <?php echo $banner_image['link_target']; ?> <?php if (isset($banner_image['animation']) && $banner_image['animation'] !='') { ?>data-animation="<?php echo $banner_image['animation']; ?>"<?php } ?>> 
          <img src="<?php echo $banner_image['image']; ?>" title="<?php echo $banner_image['title_img']; ?>" alt="<?php echo $banner_image['alt_image']; ?>" class="img-responsive" width="<?php echo $banner_image['image_width']; ?>" height="<?php echo $banner_image['image_height']; ?>" />
          <?php if ((isset($banner_image['title_show']) && $banner_image['title_show'] != 0) || (isset($banner_image['desc_show']) && $banner_image['desc_show'] != 0)) { ?>
          <div class="block-desc">
            <?php if ((isset($banner_image['title_show']) && $banner_image['title_show'] != 0) && (isset($banner_image['position_title']) && $banner_image['position_title'] == 'title_html_image')) { ?>
            <div class="title-banner html-title <?php echo $banner_image['text_align']; ?>"><?php echo $banner_image['title_image']; ?></div>
            <?php } ?>
            <?php if ((isset($banner_image['desc_show']) && $banner_image['desc_show'] != 0) && (isset($banner_image['description']) && $banner_image['description'] != '')) { ?>
            <div class="banner-desc"><?php echo $banner_image['description']; ?></div>
            <?php } ?>
          </div>
          <?php } ?>
        </a>
        <?php } else { ?> 
        <div class="no-link" <?php if (isset($banner_image['animation']) && $banner_image['animation'] !='') { ?>data-animation="<?php echo $banner_image['animation']; ?>"<?php } ?>>  
          <img src="<?php echo $banner_image['image']; ?>" title="<?php echo $banner_image['title_img']; ?>" alt="<?php echo $banner_image['alt_image']; ?>" class="img-responsive" width="<?php echo $banner_image['image_width']; ?>" height="<?php echo $banner_image['image_height']; ?>" />
          <?php if ((isset($banner_image['title_show']) && $banner_image['title_show'] != 0) || (isset($banner_image['desc_show']) && $banner_image['desc_show'] != 0)) { ?>
          <div class="block-desc">
            <?php if ((isset($banner_image['title_show']) && $banner_image['title_show'] != 0) && (isset($banner_image['position_title']) && $banner_image['position_title'] == 'title_html_image')) { ?>
            <div class="title-banner html-title <?php echo $banner_image['text_align']; ?>"><?php echo $banner_image['title_image']; ?></div>
            <?php } ?>
            <?php if ((isset($banner_image['desc_show']) && $banner_image['desc_show'] != 0) && (isset($banner_image['description']) && $banner_image['description'] != '')) { ?>
            <div class="banner-desc"><?php echo $banner_image['description']; ?></div>
            <?php } ?>
          </div>
          <?php } ?>
        </div>
        <?php } ?>
        <?php if ((isset($banner_image['title_show']) && $banner_image['title_show'] != 0) && (isset($banner_image['position_title']) && $banner_image['position_title'] == 'title_after_image')) { ?>
        <?php if ($banner_image['link_image'] || ($banner_image['link_image'] && $banner_image['link_video'] != 0)) { ?>
        <div class="title-banner after-title <?php echo $banner_image['text_align']; ?>"><a href="<?php echo $banner_image['link_image']; ?>" <?php echo $banner_image['link_target']; ?>><?php echo $banner_image['title_image']; ?></a></div>
        <?php } else { ?>
        <div class="title-banner after-title <?php echo $banner_image['text_align']; ?>"><?php echo $banner_image['title_image']; ?></div>
        <?php } ?>
        <?php } ?>
        <?php } ?>
        <?php if (isset($banner_image['type']) && $banner_image['type'] == 'image_video') { ?>
        <?php if (isset($banner_image['align_title_video']) && $banner_image['align_title_video'] == 'left') { ?>
        <?php $before_title_class = ' class="title-banner before-title text-left"'; ?>
        <?php $after_title_class = ' class="title-banner after-title text-left"'; ?>
        <?php } elseif (isset($banner_image['align_title_video']) && $banner_image['align_title_video'] == 'center') { ?>
        <?php $before_title_class = ' class="title-banner before-title text-center"'; ?>
        <?php $after_title_class = ' class="title-banner after-title text-center"'; ?>
        <?php } else { ?>
        <?php $before_title_class = ' class="title-banner before-title text-right"'; ?>
        <?php $after_title_class = ' class="title-banner after-title text-right"'; ?>
        <?php } ?>
        <?php if ((isset($banner_image['title_video_show']) && $banner_image['title_video_show'] != 0) && (isset($banner_image['position_title_video']) && $banner_image['position_title_video'] == 'title_before_image')) { ?>
        <div<?php echo $before_title_class; ?>><?php echo $banner_image['title_video']; ?></div>
        <?php } ?>
        <?php if (isset($banner_image['type_image_video_host']) && $banner_image['type_image_video_host'] == 'youtube') { ?>
        <?php $video_host = ' class="youtube-host embed-responsive embed-responsive-16by9"'; ?>
        <?php } else { ?>
        <?php $video_host = ' class="vimeo-host embed-responsive embed-responsive-16by9"'; ?>
        <?php } ?>
        <div class="iframe-video">
          <div<?php echo $video_host; ?>>
            <?php if (isset($banner_image['type_image_video_host']) && $banner_image['type_image_video_host'] == 'youtube') { ?>
            <iframe src="//www.youtube.com/embed/<?php echo $banner_image['type_image_video_id']; ?>" loading="lazy" class="embed-responsive-item" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php } else { ?>
            <iframe src="//player.vimeo.com/video/<?php echo $banner_image['type_image_video_id']; ?>" loading="lazy" class="embed-responsive-item" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php } ?>
          </div>
        </div>
        <?php if ((isset($banner_image['title_video_show']) && $banner_image['title_video_show'] != 0) && (isset($banner_image['position_title_video']) && $banner_image['position_title_video'] == 'title_after_image')) { ?>
        <div<?php echo $after_title_class; ?>><?php echo $banner_image['title_video']; ?></div>
        <?php } ?>
        <?php } ?>
        <?php if (((isset($banner_image['type']) && $banner_image['type'] == 'image_slider') && (isset($group_tab['mode']) && $group_tab['mode'] != 'respgrid')) || ((isset($banner_image['type']) && $banner_image['type'] == 'image_slider') && (isset($group_tab['mode']) && $group_tab['mode'] == 'respgrid') && $class_no_image_banner == '')) { ?>
        <div class="type-slider">
          <?php $slider_row = 1; ?>
          <?php if (isset($banner_image['image_slider'])) { ?>
          <div id="slider-<?php echo $group_row; ?>-<?php echo $banner_row; ?>" class="splide slider-splide-<?php echo $group_row; ?>">  
            <div class="splide__track">
              <div class="splide__list">
                <?php foreach ($banner_image['image_slider'] as $slider_item) { ?>
                <?php if (isset($slider_item['status']) && $slider_item['status'] != 0) { ?>
                <div class="splide__slide item-slide slider-<?php echo $module; ?>-<?php echo $group_row; ?>-<?php echo $banner_row; ?>-<?php echo $slider_row; ?>">
                  <?php if ($slider_item['link_slide'] && $slider_item['link_slide_video'] != 0) { ?>
                  <a href="<?php echo $slider_item['link_slide']; ?>"<?php echo $slider_item['link_target_slide']; ?>>
                    <img src="<?php echo $slider_item['image_slide']; ?>" title="<?php echo $slider_item['title_slide_img']; ?>" alt="<?php echo $slider_item['alt_slide']; ?>" class="img-responsive" />
                    <?php if ((isset($slider_item['title_slide_show']) && $slider_item['title_slide_show'] != 0) || (isset($slider_item['desc_slide_show']) && $slider_item['desc_slide_show'] != 0)) { ?>
                    <div class="block-desc">
                      <?php if (isset($slider_item['title_slide_show']) && $slider_item['title_slide_show'] != 0) { ?>
                      <div class="slide-title <?php echo $slider_item['title_slide_align']; ?>"><?php echo $slider_item['title_slide']; ?></div>
                      <?php } ?>
                      <?php if ((isset($slider_item['desc_slide_show']) && $slider_item['desc_slide_show'] != 0) && (isset($slider_item['desc_slide']) && $slider_item['desc_slide'] != '')) { ?>
                      <div class="slide-desc"><?php echo $slider_item['desc_slide']; ?></div>
                      <?php } ?>
                    </div>
                    <?php } ?>
                  </a>
                  <?php } elseif ($slider_item['link_slide']) { ?>
                  <a href="<?php echo $slider_item['link_slide']; ?>"<?php echo $slider_item['link_target_slide']; ?>>
                    <img src="<?php echo $slider_item['image_slide']; ?>" title="<?php echo $slider_item['title_slide_img']; ?>" alt="<?php echo $slider_item['alt_slide']; ?>" class="img-responsive" />
                    <?php if ((isset($slider_item['title_slide_show']) && $slider_item['title_slide_show'] != 0) || (isset($slider_item['desc_slide_show']) && $slider_item['desc_slide_show'] != 0)) { ?>
                    <div class="block-desc">
                      <?php if (isset($slider_item['title_slide_show']) && $slider_item['title_slide_show'] != 0) { ?>
                      <div class="slide-title <?php echo $slider_item['title_slide_align']; ?>"><?php echo $slider_item['title_slide']; ?></div>
                      <?php } ?>
                      <?php if ((isset($slider_item['desc_slide_show']) && $slider_item['desc_slide_show'] != 0) && (isset($slider_item['desc_slide']) && $slider_item['desc_slide'] != '')) { ?>
                      <div class="slide-desc"><?php echo $slider_item['desc_slide']; ?></div>
                      <?php } ?>                    
                    </div>
                    <?php } ?>
                  </a>
                  <?php } else { ?>
                  <img src="<?php echo $slider_item['image_slide']; ?>" title="<?php echo $slider_item['title_slide_img']; ?>" alt="<?php echo $slider_item['alt_slide']; ?>" class="img-responsive" />
                  <?php if ((isset($slider_item['title_slide_show']) && $slider_item['title_slide_show'] != 0) || (isset($slider_item['desc_slide_show']) && $slider_item['desc_slide_show'] != 0)) { ?>
                  <div class="block-desc">
                    <?php if (isset($slider_item['title_slide_show']) && $slider_item['title_slide_show'] != 0) { ?>
                    <div class="slide-title <?php echo $slider_item['title_slide_align']; ?>"><?php echo $slider_item['title_slide']; ?></div>
                    <?php } ?>
                    <?php if ((isset($slider_item['desc_slide_show']) && $slider_item['desc_slide_show'] != 0) && (isset($slider_item['desc_slide']) && $slider_item['desc_slide'] != '')) { ?>
                    <div class="slide-desc"><?php echo $slider_item['desc_slide']; ?></div>
                    <?php } ?>
                  </div>
                  <?php } ?>  
                  <?php } ?>
                  <?php $slider_row++; ?>
                </div>
                <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <?php } ?>
      <?php if ((isset($group_tab['mode']) && $group_tab['mode'] == 'grid') || (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel') || (isset($group_tab['mode']) && $group_tab['mode'] == 'respgrid')) { ?>
      </div>
      <?php } ?> 
      <?php $banner_row++; ?>
      <?php } ?>
      <?php } ?>
      <?php } ?> 
    <?php if (isset($group_tab['mode']) && $group_tab['mode'] == 'grid') { ?>
    </div>
    <?php } elseif (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel') { ?>
        </div>
      </div>
    </div>
    <?php } else { ?>
    </div>
    <?php } ?>
  <?php if ((isset($group_tab['mode']) && $group_tab['mode'] == 'grid') || (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel') || (isset($group_tab['mode']) && $group_tab['mode'] == 'respgrid')) { ?>
  </div> 
  <?php } ?>
  <?php $group_row++; ?>
  <?php } ?>
  <?php } ?>
<?php $group_row = 1; ?>
<?php foreach ($group_tabs as $group_tab) { ?>
<?php if (isset($group_tab['status']) && $group_tab['status'] != 0) { ?>
<?php if (isset($group_tab['mode']) && $group_tab['mode'] == 'respgrid') { ?>
<script type="text/javascript">
var settings = {
  gutter: "<?php echo $group_tab['gutter']; ?>px",
  itemclass: "#ocdbanner-<?php echo $module; ?> .respgrid-<?php echo $group_row; ?> .item-grid",
  breakpoints: {
    "*": {
      "range": "*",
      "options": {
        "column": 12,
      }
    },    
<?php foreach ($group_tab['breakpoint'] as $breakpoint) { ?>
    "<?php echo $breakpoint['name']; ?>": {
      "range": "<?php echo $breakpoint['range']; ?>",
      "options": {
        "column": <?php echo $breakpoint['column']; ?>,
        "gutter": "<?php echo $breakpoint['gutter']; ?>px",
      }
    },
<?php } ?>
  }
};
respgrid("#ocdbanner-<?php echo $module; ?> .respgrid-<?php echo $group_row; ?>", settings);
</script>
<?php } ?>
<?php if (isset($group_tab['mode']) && $group_tab['mode'] == 'carousel') { ?>
<script type="text/javascript">
new Splide("#ocdbanner-<?php echo $module; ?> .splide-<?php echo $group_row; ?>", {
  rewind: true,
  <?php if (isset($group_tab['carousel_loop']) && $group_tab['carousel_loop'] != 0) { ?>
  type: "loop",
  <?php } ?>
  <?php if ($group_tab['carousel_item']) { ?>
  perPage: 3,
  perMove: 1,
  gap: 20,
  breakpoints: {
    <?php foreach ($group_tab['carousel_item'] as $carousel_item) { ?>
    "<?php echo $carousel_item['window']; ?>": {
      perPage: <?php echo $carousel_item['item']; ?>,
      gap: <?php echo $carousel_item['spaceBetween']; ?>,
    },
    <?php } ?>
  },
  <?php } else { ?>
  perPage: 3,
  perMove: 1,
  gap: 20,
  breakpoints: {
    "640": {
      perPage: 2,
      gap: 20,
    },
    "320": {
      perPage: 1,
      gap: 10,
    }
  },
  <?php } ?> 
  <?php if (isset($group_tab['carousel_autoplay']) && $group_tab['carousel_autoplay'] != 0) { ?>
  autoplay: true,
  <?php if (isset($group_tab['carousel_autoplay_speed']) && $group_tab['carousel_autoplay_speed'] != '') { ?>
  interval: <?php echo $group_tab['carousel_autoplay_speed']; ?>,
  <?php } ?>
  <?php } else { ?>
  autoPlay: false,
  <?php } ?>
  <?php if (isset($group_tab['carousel_pagination']) && $group_tab['carousel_pagination'] == 0) { ?>
  pagination: false,
  <?php } ?>
  <?php if (isset($group_tab['carousel_navigation']) && $group_tab['carousel_navigation'] == 0) { ?>
  arrows: false,
  <?php } ?>
}).mount();
</script>
<?php } ?>
<?php $banner_row = 1; ?>
<?php if (isset($group_tab['banner_image'])) { ?>
<?php foreach ($group_tab['banner_image'] as $banner_image) { ?>
<?php if ((isset($banner_image['type']) && $banner_image['type'] == 'image_slider')) { ?>
<script type="text/javascript">
new Splide("#ocdbanner-<?php echo $module; ?> #slider-<?php echo $group_row; ?>-<?php echo $banner_row; ?>", {
  rewind: true,
  <?php if (isset($banner_image['slider_mode']) && $banner_image['slider_mode'] == 'fade') { ?>
  type: "fade",
  <?php if (isset($banner_image['slider_loop']) && $banner_image['slider_loop'] == 1) { ?>
  rewind: true,
  <?php } ?>
  <?php } else { ?>
  <?php if (isset($banner_image['slider_loop']) && $banner_image['slider_loop'] == 1) { ?>
  type: "loop",
  <?php } ?>
  <?php } ?>
  perPage: 1,
  <?php if (isset($banner_image['slider_autoplay']) && $banner_image['slider_autoplay'] != 0) { ?>
  autoplay: true,
  <?php if (isset($banner_image['slider_autoplay_speed']) && $banner_image['slider_autoplay_speed'] != '') { ?>
  interval: <?php echo $banner_image['slider_autoplay_speed']; ?>,
  <?php } ?>
  <?php } else { ?>
  autoPlay: false,
  <?php } ?>
  <?php if (isset($banner_image['slider_pagination']) && $banner_image['slider_pagination'] == 0) { ?>
  pagination: false,
  <?php } ?>
  <?php if (isset($banner_image['slider_navigation']) && $banner_image['slider_navigation'] == 0) { ?>
  arrows: false,
  <?php } ?>
}).mount();
</script>
<?php } ?>
<?php $banner_row++; ?>
<?php } ?>
<?php } ?>
<?php $group_row++; ?>
<?php } ?>
<?php } ?>
  <?php if (isset($width_container) && $width_container == 3) { ?>
  </div>
  <?php } ?>
</div>
<?php if ((isset($width_container) && $width_container == 2) || (isset($width_container) && $width_container == 3)) { ?>  
<div><div class="container"><div>
<?php } ?>