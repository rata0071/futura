<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix span6'); ?> role="article">
  
  <header>
    <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    
    <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?></p>
  
  </header> <!-- end article header -->

</article> <!-- end article -->
