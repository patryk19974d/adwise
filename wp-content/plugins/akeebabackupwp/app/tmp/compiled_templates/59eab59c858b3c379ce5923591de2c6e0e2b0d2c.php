<?php /* C:\xampp\htdocs\AdWise\wp-content\plugins\akeebabackupwp\app\Solo\ViewTemplates\Main\profile.blade.php */ ?>
<?php
/**
 * @package   solo
 * @copyright Copyright (c)2014-2024 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

use Awf\Html;
use Awf\Text\Text;

defined('_AKEEBA') or die();

// Used for type hinting
/** @var \Solo\View\Main\Html $this */

?>

<div class="akeeba-panel--info">
	<form action="<?php echo $this->container->router->route('index.php?view=main'); ?>" method="post" name="profileForm" class="akeeba-form--inline">
		<div class="akeeba-form-group">
			<label>
				<?php echo $this->getLanguage()->text('COM_AKEEBA_CPANEL_PROFILE_TITLE'); ?>: # <?php echo $this->profile; ?>

			</label>
			<?php echo $this->getContainer()->html->get('select.genericlist', $this->profileList, 'profile', ['list.select' => $this->profile, 'id' => 'comAkeebaControlPanelProfileSwitch']); ?>
		</div>
		<div class="akeeba-form-group--actions">
			<button class="akeeba-btn--small--grey" type="submit">
				<span class="akion-android-share"></span>
				<?php echo $this->getLanguage()->text('COM_AKEEBA_CPANEL_PROFILE_BUTTON'); ?>
			</button>
		</div>
		<div class="akeeba-form-group--actions">
			<input type="hidden" name="token" value="<?php echo $this->container->session->getCsrfToken()->getValue(); ?>">
			<input type="hidden" name="task" value="switchProfile" />
		</div>
	</form>
</div>
