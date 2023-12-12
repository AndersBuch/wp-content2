<?php get_header(); ?>

<main class="main1">

        <div class="container">
            <?php get_template_part('includes/section','content');?>

            <?php //følgende kode hjælper os med at få posts ind på siden.     
            $args = array('post_type' => 'post',  // Vi ønsker kun indlæg
            'cat' => 10, // Kategori ID er 5  
            'posts_per_page' => -1, 
            // Vis alle indlæg i kategorien  
            );
            $custom_query = new WP_Query($args); //args = argumenter       
            if ($custom_query->have_posts()) :  while ($custom_query->have_posts()) : $custom_query->the_post();  ?>  
            <div class='item-6'><?php the_content(); ?> </div> <?php endwhile; // Ingen indlæg fundet i den specificerede kategori
             endif;  // Gendan den oprindelige forespørgsel og nulstil postdata     
             wp_reset_postdata();   ?>

            <?php //følgende kode hjælper os med at få posts ind på siden.     
            $args = array('post_type' => 'post',  // Vi ønsker kun indlæg
            'cat' => 11, // Kategori ID er 5  
            'posts_per_page' => -1, 
            // Vis alle indlæg i kategorien  
            );
            $custom_query = new WP_Query($args); //args = argumenter       
            if ($custom_query->have_posts()) :  while ($custom_query->have_posts()) : $custom_query->the_post();  ?>  
            <div class='item-7'><?php the_content(); ?> </div> <?php endwhile; // Ingen indlæg fundet i den specificerede kategori
             endif;  // Gendan den oprindelige forespørgsel og nulstil postdata     
             wp_reset_postdata();   ?>
        </div>
        
</main>

<?php get_footer(); ?>