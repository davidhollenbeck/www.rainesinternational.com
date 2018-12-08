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
            <ul>
                <li>
                    <a href="#"><i class="fa fa-laptop"></i>Devices</a>
                    <h2><i class="fa fa-laptop"></i>Devices</h2>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-phone"></i>Mobile Phones</a>
                            <h2><i class="fa fa-phone"></i>Mobile Phones</h2>
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
                            <a href="#"><i class="fa fa-desktop"></i>Televisions</a>
                            <h2><i class="fa fa-desktop"></i>Televisions</h2>
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
                            <a href="#"><i class="fa fa-camera-retro"></i>Cameras</a>
                            <h2><i class="fa fa-camera-retro"></i>Cameras</h2>
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
                    <a href="#"><i class="fa fa-book"></i>Magazines</a>
                    <h2><i class="fa fa-book"></i>Magazines</h2>
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
                    <a href="#"><i class="fa fa-shopping-cart"></i>Store</a>
                    <h2><i class="fa fa-shopping-cart"></i>Store</h2>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-tags"></i>Clothes</a>
                            <h2><i class="fa fa-tags"></i>Clothes</h2>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-female"></i>Women's Clothing</a>
                                    <h2><i class="fa fa-female"></i>Women's Clothing</h2>
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
                                    <a href="#"><i class="fa fa-male"></i>Men's Clothing</a>
                                    <h2><i class="fa fa-male"></i>Men's Clothing</h2>
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
        </nav>
    </div>
	<?php
}