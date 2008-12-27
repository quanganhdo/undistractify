<?php
/* SVN FILE: $Id: dump.ctp 7962 2008-12-25 23:30:33Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.elements
 * @since         CakePHP(tm) v 0.10.5.1782
 * @version       $Revision: 7962 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-25 23:30:33 +0000 (Thu, 25 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<div id="cakeControllerDump">
	<h2><?php __('Controller dump:'); ?></h2>
	<pre>
		<?php echo h(print_r($controller, true)); ?>
	</pre>
</div>