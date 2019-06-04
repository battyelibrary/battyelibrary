<!-- HEAD & HEADER -->
<?php 
$pageTitle ="Articles";
include 'templates/header.php';?>

<main class="grid-x">
    <!-- LEFT COLUMN -->
    <!-- articles -->
    
    <div class="column column-left cell small-12 medium-8">
        <section class="mod mod-section-articles-articles">
            <?php include 'modules/articles-page/mod-section-articles.php'?>
        </section> <!-- end .mod-section-articles-articles -->
    </div> <!-- end .column-left -->

    <!-- RIGHT COLUMN -->
    <div class="column column-right cell show-for-medium medium-4">
        <!-- search bar -->
        <section class="mod mod-section-articles-search">
            <h1>Search Articles</h1>
            <?php include 'modules/mod-form-search.php'?>
        </section> <!-- end .mod-section-articles-search -->

        <!-- latest articles -->
        <section class="mod mod-section-articles-latest">
            <h1>Latest Articles</h1>

        </section> <!-- end .mod-section-articles-latest -->

    </div> <!-- end .column-right -->

</main>
<!-- FOOTER -->
<?php include 'templates/footer.php';?>
