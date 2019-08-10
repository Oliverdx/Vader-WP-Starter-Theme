</div><!-- #content -->

	<footer id="site-footer">


	</footer><!-- Site Footer -->
</div><!-- #site -->

<?php wp_footer(); ?>


<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "TYPE OF WEBSITE",
    "name": "<?php bloginfo('name') ?>",
    "url": "<?php bloginfo('url'); ?>",
    "description": "<?php bloginfo('description'); ?>",
    "logo": "<?php bloginfo('template_url'); ?>/assets/img/logo.jpg",
    "image": "<?php bloginfo('template_url'); ?>/assets/img/logo.jpg",
    "priceRange": "$$",
    "email": "<?php data_site('email'); ?>",
    "telephone": "<?php data_site('phone'); ?>",
    "sameAs":[
              "<?php data_site('facebook'); ?>",
			  "<?php data_site('twitter'); ?>",
			  "<?php data_site('instagram'); ?>"
          ],
    "address":{
            "@type": "PostalAddress",
            "streetAddress": " <?php data_site('streetAddress'); ?>",
            "addressLocality": " <?php data_site('addressLocality'); ?> ",
            "addressRegion": "<?php data_site('addressRegion'); ?> ",
            "postalCode": "<?php data_site('postalCode'); ?>"

    },
    "geo": {
            "@type": "GeoCoordinates",
            "latitude": "000000",
            "longitude": "00000 "
    },
    "aggregateRating":{
            "@type":"AggregateRating",
            "ratingValue": "0.0",
            "ratingCount": "00"
    }
}
</script>

</body>
</html>
