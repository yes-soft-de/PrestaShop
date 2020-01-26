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


<div id="custom-parallaxblock" class="custom-parallaxblock parallaxblock-outer" data-source-url="{$module_dir}/views/img/parallax.jpg">
 <div class="parallaxblock-inner container"> 
	{if isset($cms_parallaxinfos) && $cms_parallaxinfos}
	{$cms_parallaxinfos.text nofilter}
	{else}
	<div class="parallax-block">
	<div class="parallax-inner container-width">
	<div class="parallax-text">
	<div class="parallax-text2">The World’s Most<br>
								Accurate Watch</div>
	<div class="parallax-text3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable..</div>
	<div class="parallax-text4"><a href="#">View more</a></div>
	</div>
	</div>
	</div>
	{/if}
 </div>
</div>
