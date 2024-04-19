<?php 
function portfolio_load_resources(){
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("stylesheet", get_template_directory_uri() . "/style.css");
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/56a699bfcb.js');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
}

add_action("wp_enqueue_scripts", "portfolio_load_resources");

function portfolio_remove_gutenberg(){
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "portfolio_remove_gutenberg");