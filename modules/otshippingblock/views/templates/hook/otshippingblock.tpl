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


<div id="shipping-text">
 <div class="shipping-text-inner container">
	{if isset($cms_shippinginfos) && $cms_shippinginfos}
	{$cms_shippinginfos.text nofilter}
	{else}
	<div class="shipping-outer">
	<div class="shipping-inner">
	<div class="subtitle-part subtitle-part1">
	<div class="subbanner-part-maininnner1">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Free Shipping</div>
	<div class="subtitile2">Shipping in World for orders over $99</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part2">
	<div class="subbanner-part-maininnner2">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Special Gift</div>
	<div class="subtitile2">Give the perfect gift to your loved ones</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part3">
	<div class="subbanner-part-maininnner3">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Money Back</div>
	<div class="subtitile2">Not receiving an item applied to reward</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	{/if}
 </div>
</div>
