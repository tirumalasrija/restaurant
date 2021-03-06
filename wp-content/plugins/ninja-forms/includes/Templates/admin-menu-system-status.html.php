<div class="wrap">

    <h1><?php _e( 'Get Help', 'ninja-forms' ); ?></h1>
<h2>Before requesting help from our support team please review:</h2>
<ol>
  <li><a href='http://ninjaforms.com/three/'>Ninja Forms THREE documentation</a></li>
  <li><a href='http://docs.ninjaforms.com/customer/en/portal/articles/2045713-troubleshooting-ninja-forms'>What to try before contacting support</a></li>
  <li><a href='http://ninjaforms.com/scope-of-support/'>Our Scope of Support</a></li>
</ol>


    <div class="nf-box">
        <div>
    		<h4><?php _e( 'Please include this information when requesting support:', 'ninja-forms' ); ?> </h4>
    		<p class="submit debug-report">
                <a href="#" class="button-primary"><?php _e( 'Get System Report', 'ninja-forms' ); ?></a>
            </p>
    	</div>
    	<div id="debug-report">
            <textarea readonly="readonly"></textarea>
        </div>
    </div>

</div>
<br/>
<table class="nf-status-table" cellspacing="0">
	<thead>
		<tr>
			<th colspan="2"><?php _e( 'Environment', 'ninja-forms' ); ?></th>
		</tr>
	</thead>
	<tbody>
        <?php foreach( $environment as $key => $value ): ?>
            <tr>
                <td><?php echo $key . ':'; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <thead>
        <tr>
            <th colspan="2"><?php _e( 'Plugins', 'ninja-forms' ); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php _e( 'Installed Plugins','ninja-forms' ); ?>:</td>
            <td><?php echo $site_wide_plugins; ?></td>
        </tr>
    </tbody>
</table>
