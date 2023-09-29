<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Apple MacBook Pro 15" Touch Bar MPTU2LL/A 256GB (Silver)',
            'slug' => 'laptop-1',
            'details' => 'Capacity: 2.8GHz / 16GB RAM / 256GB SSD',
            'price' => '15999',
            'title' => 'Laptop',
            'description' => 'Apple 15.4" MacBook Pro with Touch Bar. The Touch Bar places controls right at your fingertips and adapts to different apps to provide useful functions without having to navigate complex menus or memorize keyboard shortcuts. Replacing the function keys in the top row of the keyboard, the Touch Bar features a Retina-quality display and supports multi-touch input.
',
        ]);

        Product::create([
            'name' => 'Apple MacBook 12" MNYN2LL/A 512GB (Rose Gold)',
            'slug' => 'laptop-2',
            'details' => 'Capacity: 1.3GHz / 8GB RAM / 512GB SSD',
            'price' => '15499',
            'title' => 'Laptop',
            'description' => 'This pre-owned or refurbished product has been professionally inspected and tested to work and look like new. How a product becomes part of Amazon Renewed, your destination for pre-owned, refurbished products: A customer buys a new product and returns it or trades it in for a newer or different model. That product is inspected and tested to work and look like new by Amazon-qualified suppliers. Then, the product is sold as an Amazon Renewed product on Amazon. If not satisfied with the purchase, renewed products are eligible for replacement or refund under the Amazon Renewed Guarantee.',
        ]);

        Product::create([
            'name' => 'Lenovo IdeaPad YOGA 7i-13IKB 80Y7001RRK (Copper)',
            'slug' => 'laptop-3',
            'details' => 'Capacity: 2.5GHz / 8GB RAM / 1240GB SSD',
            'price' => '11999',
            'title' => 'Laptop',
            'description' => 'The Lenovo Yoga 7i combines versatile portability and enhanced productivity, thanks to the boundary-breaking performance and responsiveness of 12th generation Intel Core processors and vibrant WQXGA clarity with Intel Iris Xe graphics. Go anywhere with a sleek 2-in-1 metal chassis featuring thoughtful details including a webcam privacy shutter.',
        ]);

        Product::create([
            'name' => 'Apple MacBook Air 13" MQD32LL/A 128GB (Silver)',
            'slug' => 'laptop-4',
            'details' => 'Capacity: 2.5GHz / 8GB RAM / 128GB SSD',
            'price' => '8490',
            'title' => 'Laptop',
            'description' => 'The product is refurbished, fully functional, and in excellent condition. Backed by the 90-day Amazon Renewed Guarantee.
            - This pre-owned product has been professionally inspected, tested and cleaned by Amazon qualified vendors. It is not certified by Apple. - This product is in "Excellent condition". The screen and body show no signs of cosmetic damage visible from 12 inches away.',
        ]);



        Product::create([
            'name' => 'HP Elite Desktop PC Computer Intel Core i5',
            'slug' => 'desktop-1',
            'details' => 'Capacity: 3.1GHz / 8GB RAM / 1TB SSD',
            'price' => '5490',
            'title' => 'Desktop',
            'description' => 'Every component is tested for full functionality and compatibility to ensure years of ongoing performance and reliability. Exterior cosmetics are restored to a like-new condition with little to no visible signs of previous use. A fresh and authentic installation of Microsoft Windows 10 is performed with the new activation license digitally rendered in the PC for an easy and secure start upon first use.',
        ]);
        Product::create([
            'name' => 'CyberpowerPC Gamer Xtreme VR Gaming PC',
            'slug' => 'desktop-2',
            'details' => 'Capacity: 2.1GHz / 16GB RAM / 1TB SSD',
            'price' => '11969',
            'title' => 'Desktop',
            'description' => 'Destroy the competition with the CYBERPOWERPC Gamer Xtreme VR series of gaming desktops. The Gamer Xtreme VR series features the latest generation of high performance Intel Core processors and ultra-quick DDR RAM to easily handle system-intensive tasks, such as high definition video playback and gaming. Coupled with powerful discreet video cards, the Gamer Xtreme VR series provides a smooth gaming and multimedia experience.',
        ]);
        Product::create([
            'name' => 'Dell OptiPlex 7050 Micro Computer',
            'slug' => 'desktop-3',
            'details' => 'Capacity: 2.1GHz / 16GB RAM / 256GB SSD',
            'price' => '1390',
            'title' => 'Desktop',
            'description' => 'This Certified Refurbished product is tested and certified to look and work like new. The refurbishing process includes functionality testing, basic cleaning, inspection, and repackaging. The product ships with all relevant accessories, a minimum 90-day warranty, and may arrive in a generic box. Only select sellers who maintain a high-performance bar may offer Certified Refurbished products on Amazon.com.',
        ]);


        Product::create([
            'name' => 'Digital Camera 4K Auto Focus 48MP Vlogging Digital Video Camera',
            'slug' => 'digital-camera-1',
            'details' => 'Features : Lightweight / 	Silver / Ultracompact',
            'price' => '1350',
            'title' => 'Digital Camera',
            'description' => "【4K & 48MP Digital Camera】 With a 4K and 48-megapixel digital camera, you'll be able to capture stunning, high-resolution photos and videos. Whether you're an photographer or simply want to take higher-quality photos and videos of your everyday life, this camera delivers stunning results. With its powerful 48-megapixel sensor, you'll be able to capture even the smallest details with clarity, while its 4K video recording capability allows you to create crisp and clear videos that are perfect for sharing on social media or showcasing on a big screen.",
        ]);
        Product::create([
            'name' => 'DASH Rapid Egg Cooker: 6 Egg Capacity Electric Egg Cooker',
            'slug' => 'appliance-1',
            'details' => 'Features : RED / Plastic / 1 Pounds',
            'price' => '180',
            'title' => 'Appliance',
            'description' => 'SATISFACTION GUARANTEED: Dash Rapid Egg Cooker is the ORIGINAL (and most trusted) egg cooker on the market, for perfect eggs, your way, EVERY TIME, we guarantee it.
            SIX EGG CAPACITY: Cook up to 6 eggs in soft, medium, or hard boiled firmness, while saving time and water. Eggs come out consistently perfect with shell easy to peel, and clean up is snap.
            VERSATILE: This is the PERFECT appliance for picky eaters, large families, or those who have busy schedules. Hard boiled eggs, soft boiled eggs, poached eggs, scrambled eggs, individual omelets, and all within minutes of the push start button - it couldnt be easier.',
        ]);
        Product::create([
            'name' => 'Halo Versa 16 Liquid Propane Gas Outdoor Pizza Oven',
            'slug' => 'appliance-2',
            'details' => 'Features : Black / 21100 watts / 	20 Pounds',
            'price' => '5480',
            'title' => 'Appliance',
            'description' => 'Great Tasting Pizza - Cooks up to 16” Pizza in 5 minutes or less. We believe that everybody deserves great tasting pizza without the wait and our 16” gas pizza oven has been designed and developed for that purpose.
            Cooked to Perfection - Includes a large (16” diameter) Cordierite Cooking Stone 360° Rotating Stone for hands free pizza making. This stone will capture all the flavor of the old world without any of the hassle.
            The Latest Technology - Patented Dual Burner system for a balanced cook consistency, faster cook times and better tasing pizza. Our outdoor pizza oven will be the best outdoor cooking solution for your deck, patio or outdoor living space',
        ]);
        Product::create([
            'name' => 'Hamilton Beach Electric Panini Press Grill with Locking Lid',
            'slug' => 'appliance-3',
            'details' => 'Features : Red / 	1400 watts / 2.64 Kilograms',
            'price' => '5480',
            'title' => 'Appliance',
            'description' => 'GREAT FOR PANINIS AND MORE: Use this Panini press to try savory sandwiches, quesadillas, and sweet fruit turnovers Use the lock top lid to warm personal pizzas or open-face sandwiches
            FLOATING LID: This hot sandwich maker features a cafe-style floating lid that evenly presses any size sandwich
            NO NEED TO FLIP: Nonstick top and bottom Panini press grids heat and brown the sandwich, giving you warm, crisp results
            GREEN MEANS GO: For best results, preheat sandwich maker 6 minutes before use Built-in ready light will turn green when the press is ready to cook your sandwich',
        ]);
        Product::create([
            'name' => 'Logitech G502 HERO High Performance Wired Gaming Mouse',
            'slug' => 'mouse-1',
            'details' => 'Capacity: 25,600 DPI / RGB / 11 Programmable Buttons',
            'price' => '380',
            'title' => 'Mouse',
            'description' => 'Hero 25K sensor through a software update from G HUB, this upgrade is free to all players: Our most advanced, with 1:1 tracking, 400-plus ips, and 100 - 25,600 max dpi sensitivity plus zero smoothing, filtering, or acceleration
            11 customizable buttons and onboard memory: Assign custom commands to the buttons and save up to five ready to play profiles directly to the mouse',
        ]);
        Product::create([
            'name' => 'TECKNET Wireless Mouse, 2.4G Ergonomic Optical Mouse',
            'slug' => 'mouse-2',
            'details' => 'Capacity: 2600 DPI / RGB / 5 Programmable Buttons',
            'price' => '2880',
            'title' => 'Mouse',
            'description' => 'Plug & Play: Wireless mouse comes with a tiny USB Nano receiver (stored within the back of the mouse), plug it into your PC, and then forget it. With 5 adjustable DPI levels (2600-2000-1600-1200-800), you can freely choose your cursor speed.
            2.4GHz Computer Mouse: Ensures reliable connection with an increased working distance of up to 15m (49ft) and eliminates delays, dropouts, and interference. An ergonomic mouse with a contoured shape and soft rubber grip ensure all-day comfort.
            TECKNET Tru-Wave Technology: Wireless gaming mouse provides precise, intelligent cursor control over many surface types. TECKNET Co-Link technology – no need to re-establish pairing if a signal is lost or shut down.',
        ]);
    }
}
