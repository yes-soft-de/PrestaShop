{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}


<div id="footerbottom-text">
 <div class="footerbottom-text-inner container">
	{if isset($cms_footerbottominfos) && $cms_footerbottominfos}
	{$cms_footerbottominfos.text nofilter}
	{else}
	<div class="bottom-link bottom-left">
	<ul class="link-inner">
	<li><a href="#">home</a></li>
	<li><a href="#">about</a></li>
	<li><a href="#">work</a></li>
	<li><a href="#">home</a></li>
	<li><a href="#">team</a></li>
	<li><a href="#">blog</a></li>
	<li><a href="#">contact</a></li>
	</ul>
	<ul class="icon-wrapper">
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	{/if}
 </div>
</div>
