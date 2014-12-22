<?php get_header(); ?>

<body>
<div class="primary">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">

        <!-- 제목 출력 -->
        <h2 class="page-header"><a href="<?php the_permalink(); ?>"
               rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_title(); ?></a></h2>

        <!-- 썸네일 출력? -->
        <?php echo get_post_meta($post->ID, 'PostThumb', true); ?>

        <!-- 날짜와 저자 정보 출력 -->
        <div>
          <span>Posted on </span><?php the_time('F jS, Y'); ?>
          <span> by </span><?php the_author(); ?>
        </div>

        <!-- 포스트 내용 출력 -->
        <?php the_content('Read Full Article'); ?>

        <!-- 카테고리와 댓글 정보 출력 -->
        <div><?php the_tags('Tags: ', ', ', '<br />'); ?>Posted in <?php the_category(', '); ?>
          <?php comments_popup_link("No Comments;','1 Comment', '% Comments'"); ?></div>
      </div>
    <?php endwhile; ?>

<!--    --><?php //next_posts_link('Older Entries'); ?>
<!--    --><?php //previous_posts_link('Newer Entries'); ?>
<!--    --><?php //wp_tag_cloud(); ?>
<!--    --><?php //wp_list_pages(); ?>

  <?php else : ?>
    <h2>Nothing Found</h2>
  <?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>