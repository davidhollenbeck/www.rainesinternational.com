<?php
/**
 *
 * Drawer Navigation Component
 *
 * @package     Ucoast\Raines
 * @since       1.0.0
 * @author      ucoast
 * @link        https://ucoastweb.com
 * @license     GNU General Public License 2.0+
 */

namespace Ucoast\Raines;

add_action( 'genesis_site_title', __NAMESPACE__ . '\drawer_navigation__toggle', 1 );


function drawer_navigation__toggle() {
    ?>
		<span href="#" class="drawer-navigation__toggle hidden" id="drawer-navigation__toggle" style="display:inline-block; width:20px;">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14"><defs><style>.a{fill:#333;}</style></defs><path class="a" d="M-6160,14V12h10v2Zm0-6V6h16V8Zm0-6V0h16V2Z" transform="translate(6160)"/></svg>
		</span>

    <div id="drawer-nav">
        <nav>
            <ul class="genesis-nav-menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5 current_page_item menu-item-19">
                    <a href="http://raines.ucoastweb.com/" itemprop="url">
                        <span itemprop="name">Home</span>
                    </a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-20">
                    <a href="http://raines.ucoastweb.com/solutions/" itemprop="url" >
                        <span itemprop="name">Solutions</span>
                    </a>
                    <ul>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="http://raines.ucoastweb.com/solutions/executive-search/" itemprop="url"><span itemprop="name">Executive Search</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="http://raines.ucoastweb.com/solutions/talent-mapping/" itemprop="url"><span itemprop="name">Talent Mapping</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="http://raines.ucoastweb.com/solutions/organizational-strategy/" itemprop="url"><span itemprop="name">Organizational Strategy</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="http://raines.ucoastweb.com/solutions/diversity-and-inclusion/" itemprop="url"><span itemprop="name">Diversity and Inclusion</span></a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-22"><a href="http://raines.ucoastweb.com/industries/" itemprop="url" ><span itemprop="name">Industries</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-65"><a href="http://raines.ucoastweb.com/industries/consumer/" itemprop="url" ><span itemprop="name">Consumer</span></a>
                            <ul>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="http://raines.ucoastweb.com/industries/consumer/apparel/" itemprop="url"><span itemprop="name">Apparel</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="http://raines.ucoastweb.com/industries/consumer/consumer-technology/" itemprop="url"><span itemprop="name">Consumer Technology</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a href="http://raines.ucoastweb.com/industries/consumer/ecommerce/" itemprop="url"><span itemprop="name">Ecommerce</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="http://raines.ucoastweb.com/industries/consumer/food-beverage/" itemprop="url"><span itemprop="name">Food & Beverage</span></a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a href="http://raines.ucoastweb.com/industries/consumer/retail/" itemprop="url"><span itemprop="name">Retail</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="http://raines.ucoastweb.com/industries/financial-services/" itemprop="url"><span itemprop="name">Financial Services</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="http://raines.ucoastweb.com/industries/healthcare-life-sciences/" itemprop="url"><span itemprop="name">Healthcare &amp; Life Sciences</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a href="http://raines.ucoastweb.com/industries/industrial/" itemprop="url"><span itemprop="name">Industrial</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61"><a href="http://raines.ucoastweb.com/industries/not-for-profit/" itemprop="url"><span itemprop="name">Not-for-Profit</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60"><a href="http://raines.ucoastweb.com/industries/private-equity/" itemprop="url"><span itemprop="name">Private Equity</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-59"><a href="http://raines.ucoastweb.com/industries/real-estate/" itemprop="url"><span itemprop="name">Real Estate</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58"><a href="http://raines.ucoastweb.com/industries/technology-media/" itemprop="url"><span itemprop="name">Technology &amp; Media</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a href="http://raines.ucoastweb.com/industries/venture-capital/" itemprop="url"><span itemprop="name">Venture Capital</span></a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-23"><a href="http://raines.ucoastweb.com/functions/" itemprop="url" ><span itemprop="name">Functions</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"><a href="http://raines.ucoastweb.com/functions/boards-general-management/" itemprop="url"><span itemprop="name">Boards &amp; General Management</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97"><a href="http://raines.ucoastweb.com/functions/cfo-financial-officer/" itemprop="url"><span itemprop="name">CFO &amp; Financial Officer</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a href="http://raines.ucoastweb.com/functions/commercial-excellence/" itemprop="url"><span itemprop="name">Commercial Excellence</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a href="http://raines.ucoastweb.com/functions/cio-information-technology/" itemprop="url"><span itemprop="name">CIO &amp; Information Technology</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a href="http://raines.ucoastweb.com/functions/digital-analytics/" itemprop="url"><span itemprop="name">Digital &amp; Analytics</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="http://raines.ucoastweb.com/functions/human-resources/" itemprop="url"><span itemprop="name">Human Resources</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="http://raines.ucoastweb.com/functions/operational-excellence/" itemprop="url"><span itemprop="name">Operational Excellence</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91"><a href="http://raines.ucoastweb.com/functions/strategy-business-development/" itemprop="url"><span itemprop="name">Strategy &amp; Business Development</span></a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-24"><a href="http://raines.ucoastweb.com/intel-resources/" itemprop="url" ><span itemprop="name">Intel &amp; Resources</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-104"><a href="http://raines.ucoastweb.com/raines-intel/" itemprop="url"><span itemprop="name">Raines Intel</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-103"><a href="http://raines.ucoastweb.com/consultanttrack/" itemprop="url"><span itemprop="name">ConsultantTrack</span></a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25"><a href="http://raines.ucoastweb.com/about/" itemprop="url" ><span itemprop="name">About</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-117"><a href="http://raines.ucoastweb.com/about/overview/" itemprop="url"><span itemprop="name">Overview</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="http://raines.ucoastweb.com/about/team/" itemprop="url"><span itemprop="name">Team</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a href="http://raines.ucoastweb.com/about/placements/" itemprop="url"><span itemprop="name">Placements</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119"><a href="http://raines.ucoastweb.com/about/raines-international-careers/" itemprop="url"><span itemprop="name">Raines International Careers</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a href="http://raines.ucoastweb.com/about/in-the-news/" itemprop="url"><span itemprop="name">In the News</span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-122"><a href="http://raines.ucoastweb.com/about/sustainability-social-impact/" itemprop="url"><span itemprop="name">Sustainability &amp; Social Impact</span></a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="http://raines.ucoastweb.com/contact/" itemprop="url"><span itemprop="name">Contact</span></a></li>
            </ul>
        </nav>
        <!-- <nav>
            <ul class="genesis-nav-menu">
                <li>
                    <a href="#">Devices</a>
                    <h2>Devices</h2>
                    <ul>
                        <li>
                            <a href="#">Mobile Phones</a>
                            <h2>Mobile Phones</h2>
                            <ul>
                                <li>
                                    <a href="#">Super Smart Phone</a>
                                </li>
                                <li>
                                    <a href="#">Thin Magic Mobile</a>
                                </li>
                                <li>
                                    <a href="#">Performance Crusher</a>
                                </li>
                                <li>
                                    <a href="#">Futuristic Experience</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Televisions</a>
                            <h2>Televisions</h2>
                            <ul>
                                <li>
                                    <a href="#">Flat Super Screen</a>
                                </li>
                                <li>
                                    <a href="#">Gigantic LED</a>
                                </li>
                                <li>
                                    <a href="#">Power Eater</a>
                                </li>
                                <li>
                                    <a href="#">3D Experience</a>
                                </li>
                                <li>
                                    <a href="#">Classic Comfort</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Cameras</a>
                            <h2>Cameras</h2>
                            <ul>
                                <li>
                                    <a href="#">Smart Shot</a>
                                </li>
                                <li>
                                    <a href="#">Power Shooter</a>
                                </li>
                                <li>
                                    <a href="#">Easy Photo Maker</a>
                                </li>
                                <li>
                                    <a href="#">Super Pixel</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Magazines</a>
                    <h2>Magazines</h2>
                    <ul>
                        <li>
                            <a href="#">National Geographics</a>
                        </li>
                        <li>
                            <a href="#">The Spectator</a>
                        </li>
                        <li>
                            <a href="#">Rambler</a>
                        </li>
                        <li>
                            <a href="#">Physics World</a>
                        </li>
                        <li>
                            <a href="#">The New Scientist</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Store</a>
                    <h2>Store</h2>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-tags"></i>Clothes</a>
                            <h2>Clothes</h2>
                            <ul>
                                <li>
                                    <a href="#">Women's Clothing</a>
                                    <h2>Women's Clothing</h2>
                                    <ul>
                                        <li>
                                            <a href="#">Tops</a>
                                        </li>
                                        <li>
                                            <a href="#">Dresses</a>
                                        </li>
                                        <li>
                                            <a href="#">Trousers</a>
                                        </li>
                                        <li>
                                            <a href="#">Shoes</a>
                                        </li>
                                        <li>
                                            <a href="#">Sale</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Men's Clothing</a>
                                    <h2>Men's Clothing</h2>
                                    <ul>
                                        <li>
                                            <a href="#">Shirts</a>
                                        </li>
                                        <li>
                                            <a href="#">Trousers</a>
                                        </li>
                                        <li>
                                            <a href="#">Shoes</a>
                                        </li>
                                        <li>
                                            <a href="#">Sale</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Jewelry</a>
                        </li>
                        <li>
                            <a href="#">Music</a>
                        </li>
                        <li>
                            <a href="#">Grocery</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Collections</a>
                </li>
                <li>
                    <a href="#">Credits</a>
                </li>
            </ul>
        </nav> -->
    </div>
	<?php
}