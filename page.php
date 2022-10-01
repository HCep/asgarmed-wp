<?php
get_header(); ?>
<?php if(!is_front_page()){ ?>
    <div class="page-banner">
        <div class="page-banner-container container mx-auto">
                <h1 class="page-title"> 
                    <?php echo the_title(); ?>
                </h1>
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                    ?>

        </div>
   
    </div>


<?php } ?>


<main>
    <div class="page-container mx-auto">
        <?php the_content(); ?>

			


	</div>
</main>

<?php get_footer(); ?>
