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

<div class="footer-top"> 
<div class="container">
  <div class="row">
    {hook h='displayFooterBefore'}
  </div>
</div>
</div>
<div class="footer-container">
   <div class="container">
      <div class="row">
         <div class="footer_inner">
            {hook h='displayFooter'}
         </div>
      </div>
      <div class="row">
         {hook h='displayFooterAfter'}
      </div>
   </div>
</div>
<div class="footer-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="footer-bottom-link">
               {hook h='displayFooterBottom'}
            </div>
         </div>
         <div class="col-md-12">
            <div class="copyright_outer container">
               <div class="copyright">
                   Copyright © 2020 Agora Chegou - All right reserved. Implemented By 
                  <a class="_blank" href="https://yes-soft.de/" target="_blank">
                    Yes Soft Team
                  </a>
                  .
                  {hook h='displayPaymentBottom'}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142190160-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-142190160-3');
</script>
