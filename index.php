<?php get_header(); ?>

<body>
<div class="container">
  <div class="row">
    <div class="col-lg-9">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">

          <!-- 제목 출력 -->
          <h2 class="page-header"><a href="<?php the_permalink(); ?>"
                 rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php the_title(); ?></a></h2>

          <!-- 포스트 내용 출력 -->
          <?php the_content('Read Full Article'); ?>

          <!-- 날짜와 저자 정보 출력 -->
          <div class="meta">
            <div>
              이 글은 <span class="postdate"><?php the_time('Y.n.j.'); ?></span>
              <span class="author"><?php the_author(); ?></span>님이 작성했습니다.
            </div>
            <div>
              <?php the_tags('태그: ', ', ', '<br />'); ?>
              <?php the_category(', '); ?>
              <?php comments_popup_link("No Comments;','1 Comment', '% Comments'"); ?></code>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <h2 class="text-muted">Nothing Found</h2>
    <?php endif; ?>
  </div>

  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
