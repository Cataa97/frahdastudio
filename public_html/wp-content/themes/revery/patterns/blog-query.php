<?php
/**
 * Title: Blog Query
 * Slug: revery/blog-query
 * Categories: query, posts
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"auto","dimRatio":20} /-->

<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"-50px"}},"elements":{"link":{"color":{"text":"#fbd25a"},":hover":{"color":{"text":"var:preset|color|hovercolor"}}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"30px"},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} /-->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->