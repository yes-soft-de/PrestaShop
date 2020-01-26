{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 {block name='product_miniature_item'}
<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="thumbnail-inner">
		
		<div class="thumbnail-image-inner">
			{block name='product_thumbnail'}
			  <a href="{$product.url}" class="thumbnail product-thumbnail">
				<img
				  src = "{$product.cover.bySize.homecategory_default.url}"
				  alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
				  data-full-size-image-url = "{$product.cover.large.url}"
				>
			  </a>
			{/block}
			<!--<div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
				  {block name='quick_view'}
				  <a href="#" class="quick-view" data-link-action="quickview">
					<i class="material-icons search">&#xE8B6;</i> {l s='Quick view' d='Shop.Theme.Actions'}
				  </a>
				  {/block}
				  {block name='product_variants'}
					{if $product.main_variants}
					  {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
					{/if}
				  {/block}
			</div>-->
			 {block name='product_reviews'}
		        {hook h='displayProductListReviews' product=$product}
		      {/block}
		</div>

	
<div class="thumbnail-sidebar-inner">	
    <div class="product-description">
      {block name='product_name'}
        <h1 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
      {/block}

      {block name='product_price_and_shipping'}
        {if $product.show_price}
          <div class="product-price-and-shipping">
           {if $product.has_discount}
                {hook h='displayProductPriceBlock' product=$product type="old_price"}

                <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
                <span class="regular-price">{$product.regular_price}</span>
                {if $product.discount_type === 'percentage'}
                  <span class="discount-percentage">{$product.discount_percentage}</span>
                {/if}
              {/if}

              {hook h='displayProductPriceBlock' product=$product type="before_price"}

              <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
              <span itemprop="price" class="price">{$product.price}</span>

              {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
			
				
          </div>
        {/if}
      {/block}	
      <div class="addtocart-button">
						<form action="{$urls.pages.cart}" method="post">
							<input type="hidden" name="token" value="{$static_token}">
							<input type="hidden" value="{$product.id_product}" name="id_product">
							<input type="hidden" class="input-group form-control" value="1" name="qty" />
							<button data-button-action="add-to-cart" class="btn btn-primary">Adicionar ao carrinho</button>
						  </form>
		</div>
   </div>
	    

</div>
  
    
	
	
	
	 </div>	
</div>
</article>
{/block}
