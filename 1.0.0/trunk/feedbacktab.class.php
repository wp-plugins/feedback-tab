<?php

/*
Part of the auto-tag plugin for wordpress

Copyright 2011 Scott Underhill www.monyta.com

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/
class feedbacktab {
	
	
	
	
	public static function initFeedbackTabPlugin()
	{

		$feedback = get_option( 'monyta_key');

		if( $_POST['sent'] == 'Y' ) {	
			$feedback = $_POST[ 'monyta_key' ];		
			update_option( 'monyta_key', $feedback );
			
	?>
	<div class="updated"><p><strong><?php _e('Options saved.', 'mt_trans_domain' ); ?></strong></p></div>
	<?php

		}
		echo '<div class="wrap">';
		echo "<h2>" . __( 'Feedback Tab Options' ) . "</h2>";
		?>
	<form name="form1" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="sent" value="Y" />

	<p>
	<label>
	<?php _e("Feedback Tab ID:", 'mt_trans_domain' ); ?>
	<input type="text" name="monyta_key" value="<?php echo $feedback; ?>" size="20" />
	</label>
	</p>	
	<hr />

	<p class="submit">
	<input type="submit" name="Submit" value="<?php _e('Update Options', 'mt_trans_domain' ) ?>" />
	</p>

	</form>
	<p>Hey! Do you like this plugin? Give it a <a href="http://www.monyta.com">good rating</a> on wordpress, or blog about it!</p>
	</div>
		<?php
	}
	public static function addPluginToSubmenu()
	{
		add_submenu_page('options-general.php', 'Feedback tab plugin', 'Feedback tab plugin', 10, __FILE__, 'feedbacktab::initFeedbackTabPlugin');
	}
	public function init(){
		add_action('admin_menu', 'feedbacktab::addPluginToSubmenu');
		add_action('wp_footer', 'feedbacktab::renderscript');  
	}
	public static function renderscript2(){
		echo "<span>hi</span>";
	}
	public static function renderscript(){
			
			$MONYTA_ID = get_option( 'monyta_key');
			$html2 ="<script type='text/javascript'>
document.write('<script src=\"http://app.monyta.com/starttab.ashx?id=". $MONYTA_ID ."\"><\/script>');</script>"; 
			echo $html2;
	}
	
}


?>
