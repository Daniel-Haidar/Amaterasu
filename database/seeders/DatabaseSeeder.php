<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //// Seed Users In Database

        // Seed the Admin
        User::create([
            'name' => 'admin',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'table 1',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'table 2',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'table 3',
            'password' => bcrypt('password')
        ]);


        //// Seed Food In Database

        // Meals
        Food::create([
            'name' => 'Beef Bowl',
            'type' => 'meals',
            'price' => 9.49,
            'image' => 'meals/beefBowl.jpg'
        ]);
        Food::create([
            'name' => 'Steak',
            'type' => 'meals',
            'price' => 21.31,
            'image' => 'meals/steak.jpg'
        ]);
        Food::create([
            'name' => 'Tofu',
            'type' => 'meals',
            'price' => 5.40,
            'image' => 'meals/tofu.jpg'
        ]);
        Food::create([
            'name' => 'Pizza',
            'type' => 'meals',
            'price' => 8.97,
            'image' => 'meals/pizza.jpg'
        ]);
        Food::create([
            'name' => 'Salmon',
            'type' => 'meals',
            'price' => 14.32,
            'image' => 'meals/salmon.jpg'
        ]);
        Food::create([
            'name' => 'Philly Cheese Steak',
            'type' => 'meals',
            'price' => 12.32,
            'image' => 'meals/phillyCheese.jpg'
        ]);
        Food::create([
            'name' => 'Hot Dog',
            'type' => 'meals',
            'price' => 6.43,
            'image' => 'meals/hotdog.jpg'
        ]);
        Food::create([
            'name' => 'Chicken Breast',
            'type' => 'meals',
            'price' => 7.98,
            'image' => 'meals/chickenBreast.jpg'
        ]);
        Food::create([
            'name' => 'BBQ',
            'type' => 'meals',
            'price' => 15.76,
            'image' => 'meals/bbq.jpg'
        ]);

        // Burgers
        Food::create([
            'name' => 'Classic Burger',
            'type' => 'burgers',
            'price' => 6.76,
            'image' => 'burgers/classicBurger.jpg'
        ]);
        Food::create([
            'name' => 'Beef Burger',
            'type' => 'burgers',
            'price' => 8.87,
            'image' => 'burgers/beefBurger.jpg'
        ]);
        Food::create([
            'name' => 'Double Beef Burger',
            'type' => 'burgers',
            'price' => 13.65,
            'image' => 'burgers/doubleBeef.jpg'
        ]);
        Food::create([
            'name' => 'Bacon Burger',
            'type' => 'burgers',
            'price' => 11.42,
            'image' => 'burgers/baconburger.jpg'
        ]);
        Food::create([
            'name' => 'Cheese Burger',
            'type' => 'burgers',
            'price' => 12.3,
            'image' => 'burgers/cheeseburger.jpg'
        ]);
        Food::create([
            'name' => 'Chicken Burger',
            'type' => 'burgers',
            'price' => 9.54,
            'image' => 'burgers/chickenburger.jpg'
        ]);
        Food::create([
            'name' => 'Fish Burger',
            'type' => 'burgers',
            'price' => 10.64,
            'image' => 'burgers/fishburger.jpg'
        ]); 

        // Sides
        
        Food::create([
            'name' => 'Salad',
            'type' => 'sides',
            'price' => 3.12,
            'image' => 'sides/salad.jpg'
        ]);
        Food::create([
            'name' => 'French Fries',
            'type' => 'sides',
            'price' => 2.42,
            'image' => 'sides/fries.jpg'
        ]);
        Food::create([
            'name' => 'Potato Wedges',
            'type' => 'sides',
            'price' => 4.31,
            'image' => 'sides/wedges.jpg'
        ]);
        Food::create([
            'name' => 'Hash Browns',
            'type' => 'sides',
            'price' => 5.21,
            'image' => 'sides/hashbrowns.jpg'
        ]);
        Food::create([
            'name' => 'Baked Potato',
            'type' => 'sides',
            'price' => 4.80,
            'image' => 'sides/bakedpotato.jpg'
        ]);
        Food::create([
            'name' => 'Popcorn Chicken',
            'type' => 'sides',
            'price' => 3.12,
            'image' => 'sides/popcornchicken.jpg'
        ]);
        Food::create([
            'name' => 'Cheese Sticks',
            'type' => 'sides',
            'price' => 3.23,
            'image' => 'sides/cheesesticks.jpg'
        ]);
        Food::create([
            'name' => 'Onion Rings',
            'type' => 'sides',
            'price' => 4.21,
            'image' => 'sides/onionrings.jpg'
        ]);
        Food::create([
            'name' => 'Fried Rice',
            'type' => 'sides',
            'price' => 4.76,
            'image' => 'sides/friedrice.jpg'
        ]);

        // Drinks
        Food::create([
            'name' => 'Tea',
            'type' => 'drinks',
            'price' => 1.23,
            'image' => 'drinks/tea.jpg'
        ]);
        Food::create([
            'name' => 'Ice Tea',
            'type' => 'drinks',
            'price' => 2.43,
            'image' => 'drinks/iceTea.jpg'
        ]);
        Food::create([
            'name' => 'Coffee',
            'type' => 'drinks',
            'price' => 3.4,
            'image' => 'drinks/coffee.jpg'
        ]);
        Food::create([
            'name' => 'Latte',
            'type' => 'drinks',
            'price' => 3.8,
            'image' => 'drinks/latte.jpg'
        ]);
        Food::create([
            'name' => 'Cappuccino',
            'type' => 'drinks',
            'price' => 4.2,
            'image' => 'drinks/cappuccino.jpg'
        ]);
        Food::create([
            'name' => 'Mocha',
            'type' => 'drinks',
            'price' => 5.2,
            'image' => 'drinks/mocha.jpg'
        ]);
        Food::create([
            'name' => 'Hot Chocolate',
            'type' => 'drinks',
            'price' => 3.21,
            'image' => 'drinks/hotChocolate.jpg'
        ]);
        Food::create([
            'name' => 'Fruit Juice',
            'type' => 'drinks',
            'price' => 2.6,
            'image' => 'drinks/fruitJuice.jpg'
        ]);

        // Desserts
        Food::create([
            'name' => 'Milkshake',
            'type' => 'desserts',
            'price' => 5.4,
            'image' => 'desserts/milkshake.jpg'
        ]);
        Food::create([
            'name' => 'Ice Cream',
            'type' => 'desserts',
            'price' => 4.54,
            'image' => 'desserts/icecream.jpg'
        ]);
        Food::create([
            'name' => 'Soft Serve',
            'type' => 'desserts',
            'price' => 3.4,
            'image' => 'desserts/softServe.jpg'
        ]);
        Food::create([
            'name' => 'Cake',
            'type' => 'desserts',
            'price' => 6.42,
            'image' => 'desserts/cake.jpg'
        ]);
        Food::create([
            'name' => 'Tart',
            'type' => 'desserts',
            'price' => 5.32,
            'image' => 'desserts/tart.jpg'
        ]);
        Food::create([
            'name' => 'Tiramisu',
            'type' => 'desserts',
            'price' => 4.23,
            'image' => 'desserts/tiramisu.jpg'
        ]);
        Food::create([
            'name' => 'Crepe',
            'type' => 'desserts',
            'price' => 4.75,
            'image' => 'desserts/crepe.jpg'
        ]);
        Food::create([
            'name' => 'Pancakes',
            'type' => 'desserts',
            'price' => 5.42,
            'image' => 'desserts/pancakes.jpg'
        ]);
        Food::create([
            'name' => 'Cupcake',
            'type' => 'desserts',
            'price' => 2.12,
            'image' => 'desserts/cupcake.jpg'
        ]);
        Food::create([
            'name' => 'Waffle',
            'type' => 'desserts',
            'price' => 3.32,
            'image' => 'desserts/waffle.jpg'
        ]);
    }
}
