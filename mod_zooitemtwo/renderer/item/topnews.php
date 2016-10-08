<?php
/**
* @package   ZOO Item
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>
	<?php if ($this->checkPosition('title')) : ?>
	<div class="col-lg-4 headertoptitle"><?php echo $this->renderPosition('title'); ?></div>
	<?php endif; ?>