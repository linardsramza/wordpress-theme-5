<?php
$social_profiles = otm_get_option('social_profiles');
?>

<?php if($social_profiles): ?>
<?php foreach($social_profiles as $social_profile): ?>
<a href="<?php echo $social_profile['social_profile_url'] ?>" title="<?php echo $social_profile['social_profile'] ?>" target="_blank">
	<i class="<?php echo $social_profile['social_profile_icon'] ?>"></i>
</a>
<?php endforeach; ?>
<?php endif; ?>