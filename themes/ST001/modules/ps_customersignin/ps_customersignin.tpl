{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="_desktop_user_info">
  <div class="user-info">
{if $logged}
   <div class="user-icon"></div>
   <ul class="userinfo-toggle">

      <li>
      <a
      class="account"
      href="{$my_account_url}"
      title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}"
      rel="nofollow"
      >
      <!--<i class="material-icons hidden-md-up logged">&#xE7FF;</i>-->
      <span class="hidden-sm-down">{$customerName}</span>
      </a>
      </li>
      <li>
      <a
      class="logout hidden-sm-down"
      href="{$logout_url}"
      rel="nofollow"
      >
      {l s='Sign out' d='Shop.Theme.Actions'}
      </a>
      </li>
    </ul>      
    {else}
      <a
      href="{$my_account_url}"
      title="{l s='Conecte-se' d='Shop.Theme.CustomerAccount'}"
      rel="nofollow"
      >
        <div class="user-icon"></div>    
      </a>
    {/if}

  </div>
</div>