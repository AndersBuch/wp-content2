


<footer>

<div class="page-sidebar">
    <div class="page-sidebar-item">
    <?php if ( get_field('cvr' ) ): ?>
    <h3><?php echo esc_html( get_field('cvr') ); ?></h3>
    <?php endif; ?>
    </div>

    <div class="page-sidebar-item">
    <?php if ( get_field('email' ) ): ?>
    <h3><?php echo esc_html( get_field('email') ); ?></h3>
    <?php endif; ?>
    </div>


    <div class="page-sidebar-item">
    <?php if ( get_field('abningstider' ) ): ?>
    <h3><?php echo esc_html( get_field('abningstider') ); ?></h3>
    <?php endif; ?>
    </div>

    <div class="page-sidebar-item">
    <?php if ( get_field('adresse' ) ): ?>
    <h3><?php echo esc_html( get_field('adresse') ); ?></h3>
    <?php endif; ?>
    
    </div>
    <div class="page-sidebar-item">
    <?php if( is_active_sidebar('page-sidebar') ):?>
            
            <?php dynamic_sidebar('page-sidebar');?>

    <?php endif;?>

    </div>
</div>

</footer>

<?php wp_footer();?>
</body>
</html>