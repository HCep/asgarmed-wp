<?php
get_header(); ?>
<?php if(!is_front_page()){ ?>
    <div class="single-banner">
        <div class="single-banner-container">
                <h1 class="single-title"> 
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
    <div class="single-container mx-auto">
        <?php the_content(); ?>

			


	</div>
</main>

<?php get_footer(); ?>
