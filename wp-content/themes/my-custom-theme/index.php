<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="loading-container">
    <h1>Loading... <span id="loading-count">0</span></h1>
</div>

<div id="main-content" style="display: none;">
    <h1>Welcome to the site!</h1>
    <p>Your content goes here.</p>
</div>

<h1>hello</h1>
<h1>hello 2</h1>

<script>
    let count = 0;
    const loadingCountElement = document.getElementById('loading-count');
    const loadingContainer = document.getElementById('loading-container');
    const mainContent = document.getElementById('main-content');
    const loadingIntervalDuration = 10;

    const interval = setInterval(() => {
        count++;
        loadingCountElement.textContent = count;
        if (count >= 99) {
            clearInterval(interval);

            // After count finishes, check if page is already loaded
            if (document.readyState === 'complete') {
                finishLoading();
            } else {
                // Wait for it to fully load
                window.addEventListener('load', finishLoading);
            }
        }
    }, loadingIntervalDuration);

    function finishLoading() {
        loadingCountElement.textContent = 100;

        setTimeout(() => {
            loadingContainer.style.display = 'none';
            mainContent.style.display = 'block';
        }, 500);
    }
</script>

</body>
</html> -->



<?php get_header(); ?>

<?php
    // if ( have_posts() ) {
    //     while ( have_posts() ) {
    //         the_post();
    //         get_template_part( 'pages' );
    //     }
    // }
?>

<h1>from index.php</h1>
<h1>hello</h1>
<h1><?php echo get_post_type(); ?></h1>

<?php get_footer(); ?>