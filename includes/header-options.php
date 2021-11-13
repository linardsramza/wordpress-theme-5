<?php if(otm_get_option( 'custom_css' )): ?>
<!-- OTM Theme Options Custom CSS -->
<style>
	<?php echo otm_get_option( 'custom_css' ); ?>
</style>
<!-- END OTM Theme Options Custom CSS -->
<?php endif; ?>

<?php echo otm_get_option( 'header_scripts' ); ?>