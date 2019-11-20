<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod__mdul
 *
 * @copyright   Copyright (C) {{OWNER}} {{YEAR}}.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;


$doc = JFactory::getDocument();

?>

<?php if ($module->showtitle): ?>
<p><?php echo $params->get('title'); ?></p>
<?php endif; ?>
<?php if ($params->get('thing')): ?>
<p><?php echo $params->get('thing'); ?></p>
<?php endif; ?>
