<?php
/**
 * Kunena Component
 * @package     Kunena.Template.Crypsis
 * @subpackage  Layout.Widget
 *
 * @copyright   (C) 2008 - 2015 Kunena Team. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link        http://www.kunena.org
 **/
defined('_JEXEC') or die;
?>
<?php if (($rss = $this->getRSS()) !== null) : ?>
<div class="pull-right large-kicon"><a href="<?php /** TODO: echo $this->getRSS(); **/ ?>" rel="follow"><span class="icon-feed" title="<?php echo JText::_('COM_KUNENA_CATEGORIES_LABEL_GETRSS') ?>"></span></a></div>
<div class="clearfix"></div>
<?php endif; ?>

<?php if (($time = $this->getTime()) !== null) : ?>
<div class="center">
	<?php echo JText::sprintf('COM_KUNENA_VIEW_COMMON_FOOTER_TIME', $time); ?>
</div>
<?php endif; ?>
