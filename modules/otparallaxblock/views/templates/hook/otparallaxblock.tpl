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


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2007 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  if (days < 10) {
      $('.timer .day').text('0' + days);
  } else {
      $('.timer .day').text(days);
  }
  if (hours < 10) {
      $('.timer .hour').text('0' + hours);
  } else {
      $('.timer .hour').text(hours);
  }
  if (minutes < 10) {
      $('.timer .minute').text('0' + minutes);
  } else {
      $('.timer .minute').text(minutes);
  }
  if (seconds < 10) {
      $('.timer .second').text('0' + seconds);
  } else {
      $('.timer .second').text(seconds);
  }
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
      $('.timer .day').text('00');
      $('.timer .hour').text('00');
      $('.timer .minute').text('00');
      $('.timer .second').text('00');
  }
}, 1000);
</script>

<div id="custom-parallaxblock" class="custom-parallaxblock parallaxblock-outer" data-source-url="{$module_dir}/views/img/parallax.jpg">
 <div class="parallaxblock-inner container"> 
 <img src="/img/offer/04.png" class="img-side">
	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-xs-12">
	            <p class="title">Aguarde nossas ofertas</p>
	            <div class="timer">
	                <ul>
	                    <li>
	                        <span class="day">00</span>
	                        <span class="word">Days</span>
	                    </li>
	                    <li>
	                        <span class="dots">:</span>
	                    </li>
	                    <li>
	                        <span class="hour">00</span>
	                        <span class="word">Hours</span>
	                    </li>
	                    <li>
	                        <span class="dots">:</span>
	                    </li>
	                    <li>
	                        <span class="minute">00</span>
	                        <span class="word">Minutes</span>
	                    </li>
	                    <li>
	                        <span class="dots">:</span>
	                    </li>
	                    <li>
	                        <span class="second">00</span>
	                        <span class="word">Seconds</span>
	                    </li>
	                </ul>
	            </div>
	            <p class="para">Economize tempo obtendo a oferta agora</p>
	        </div>
	        <div class="col-sm-6 col-xs-12">
	            <div class="wrraper">
    	            <img src="/img/offer/03.png" class="left">
    	            <img src="/img/offer/laptop.png" class="laptop">
    	            <img src="/img/offer/01.png" class="right">
	            </div>
	        </div>
	    </div>
	</div>
 </div>
</div>
