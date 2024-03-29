<?php get_header(); ?>
<section class="mainContent">
  <h1>DANDELION</h1>
  <p>学生によるデザイン事務所</p>
  <div class="layer overRay"></div>
  <div class="layer background" style="background-image: url(<?php echo esc_url( get_template_directory_uri().'/image/main.jpg' ) ?>);"></div>
</section>

<section class="section">
  <div class="innerWrapper">
    <h2>NEWS</h2>
    <ul class="newsWrapper">
        <?php
          $paged = (int) get_query_var('paged');
          $args = array(
          	'posts_per_page' => 5,
          	'paged' => $paged,
          	'orderby' => 'post_date',
          	'order' => 'DESC',
          	'post_type' => 'post',
          	'post_status' => 'publish'
          );
          $the_query = new WP_Query($args);
          if ( $the_query->have_posts() ) :
          	while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name; //カテゴリー名
        $date = get_the_date();
        ?>
        <li class="newsRow">
          <a href="<?php the_permalink(); ?>" class="cf">
            <ul>
              <li class="tag"><span><?php echo $catname ?></span></li>
              <li class="date"><?php echo $date ?></li>
              <li class="content"><?php the_title(); ?></li>
            </ul>
          </a>
        </li>
        <?php endwhile; endif; ?>
      </ul>
    <div class="buttonZone">
      <a href='http://dandelion.weblike.jp/news' class="linkButton">詳細を見る</a>
    </div>
  </div>
</section>

<section class="section about">
  <div class="innerWrapper">
    <h2>ABOUT</h2>
    <h3>社会に 学生の力を</h3>
    <p>
      DANDELIONは、関西を中心に結成したデザイン系学生事務所です。 <br>

      産学連携の社会づくりを目的としています。 <br>
      学生たちがそれぞれの得意を掛け合わせ、社会で活躍する中で成長していくことを促進する団体です。
    </p>
    <div class="buttonZone">
      <a href='http://dandelion.weblike.jp/about' class="linkButton">詳細を見る</a>
    </div>
  </div>
</section>

<section class="section activity">
  <div class="innerWrapper">
    <h2>ACTIVITY</h2>
    <h3>ものづくりに、正しい評価を</h3>
    <p>
      DANDELIONはデザイナーやエンジニアを軽んじない。 <br>
      いつだって感謝と報酬を惜しまず、 <br>
      ものづくりへのリスペクトを払い続ける。 <br>
      もっと、いいものが生まれる社会のために。
    </p>
    <ul class="activityContent">
      <li>
        <img src="<?php echo esc_url( get_template_directory_uri().'/image/web.png' ) ?>" alt="web">
        <p>
          顧客が自身で編集できるホームページを制作  <br>
          デザイナーとエンジニアのタッグで <br>
          デザイン刷新
        </p>
      </li>
      <li>
        <img src="<?php echo esc_url( get_template_directory_uri().'/image/ad.png' ) ?>" alt="web">
        <p>
          イベントCM、クラウドファンディングCMなど制作。 <br>
          関西大学動画制作団体MOVAと共同制作
        </p>
      </li>
      <li>
        <img src="<?php echo esc_url( get_template_directory_uri().'/image/music.png' ) ?>" alt="web">
        <p>
          作曲から編曲まで <br>
          DJ多数在籍<br>
          同女音楽科在籍メンバーと共同制作
        </p>
      </li>
      <li>
        <img src="<?php echo esc_url( get_template_directory_uri().'/image/movie.png' ) ?>" alt="web">
        <p>
          デザイナーが広告をデザイン
          イベント​チラシやメニューデザイン <br>
          名刺・ロゴなど制作
        </p>
      </li>
    </ul>
  </div>
  <div class="buttonZone">
    <a href='http://dandelion.weblike.jp/portfolio' class="linkButton">制作事例はこちら</a>
  </div>
</section>

<?php get_template_part( 'greek', get_post_format() ); ?>


<section class="section contact">
  <a href='https://goo.gl/forms/F6Aep9j0PrC2uPjp1' class="linkButton" target="_blank">お問い合わせ・お見積もりはこちら</a>
</section>
<?php get_footer(); ?>
