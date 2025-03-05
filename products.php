<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

 include "products.php";

 foreach ($array['products'] as $product) {
   echo "<div class='card'>";
   echo "<img class='card_image' src='{$product['photos'][0]}' alt='{}'/>";
   echo "<p>{$product['price']}</p>";
   echo "<div>{$product['id']}</div>";
   echo "<div>{$product['omschrijving']}</div>";
   echo "<div>{$product['price']}</div>";
   echo "<a href='detail.php?id={$product['id']}' class='neon'>
      Maak een afspraak
    </a>";
   echo "</div>"; 
 }
 

$array = [
    "products" => [
        [
            "id" => "01",
            "title" => "DFY Digital Marketing Freebie Guide",
            "omschrijving" => "Gratis guide om te starten met digital marketing",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 0,
            "photos" =>
                [
                    "https://i.pinimg.com/564x/f2/d0/44/f2d04447db63f5e4f507ebcf42188462.jpg",
                    "https://i.pinimg.com/474x/68/ee/5e/68ee5e2b2b9132110f19adb6ff0f1dd5.jpg",
                    "https://i.pinimg.com/474x/f4/12/ef/f412eff520a8bb0ffadf9ea42502b3e7.jpg",
                    "https://i.pinimg.com/474x/3c/46/93/3c4693518fb36a4cdae8e5569ae21567.jpg",
                ]
        ],

        [
            "id" => "02",
            "title" => "3 Months Of Social Media Content",
            "omschrijving" => "3 Maanden Lang Inspiratie Voor Social Media",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 0,
            "photos" =>
                [
                    "https://i.pinimg.com/564x/33/37/de/3337def0d1a8b8b6a5058876d86d1f18.jpg",
                    "https://i.pinimg.com/474x/27/0f/8c/270f8c8ff27f1cadd9eba35a41e717df.jpg",
                    "https://i.pinimg.com/474x/c4/f9/1d/c4f91d373aadd1b8bb9c38d9596b4f27.jpg",
                    "https://i.pinimg.com/474x/ce/99/0a/ce990a3078d621b22e9c6006f9917055.jpg",

                ]
        ],

        [
            "id" => "03",
            "title" => "130 Faceless Video's",
            "omschrijving" => "130 Faceless Video's To Start",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 35,
            "photos" =>
                [
                    "https://i.pinimg.com/474x/19/b1/6c/19b16c4b3a37b2c96e5abbd9a66920a9.jpg",
                    "https://i.pinimg.com/474x/00/b5/80/00b580f3b4d97cba61f692ac03c27084.jpg",
                    "https://i.pinimg.com/474x/82/dc/83/82dc83e0a778a3f51b522508ac10f516.jpg",
                    "https://i.pinimg.com/474x/ac/8f/0c/ac8f0c772c41e207d6b44a7eb14c34e1.jpg",
                ]
        ],

        [
            "id" => "04",
            "title" => "300+ Canva Templates",
            "omschrijving" => "300+ Canva Templates For You To Resell.",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 30,
            "photos" =>
                [
                    "https://i.pinimg.com/564x/a0/87/9b/a0879b29059383c1cb694adb30b9a395.jpg",
                    "https://i.pinimg.com/474x/6b/d0/92/6bd0920c8890c77d64f2480258a059aa.jpg",
                    "https://i.pinimg.com/474x/d4/b0/51/d4b0517fdd46b48dc70a41cf700a5435.jpg",
                    "https://i.pinimg.com/474x/4d/04/89/4d04892fea87ca5c5588c58d7a3a9811.jpg",
                ]
        ],

        [
            "id" => "05",
            "title" => "The No Face Money Guide",
            "omschrijving" => "For the girlies who wants to make money without showing their face.",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 25,
            "photos" =>
                [
                    "https://i.pinimg.com/736x/0c/29/ca/0c29ca4b00e5e91abbc932a55c135b48.jpg",
                    "https://i.pinimg.com/474x/02/99/ad/0299ad6e29e067c2e0d39c51beda7d4c.jpg",
                    "https://i.pinimg.com/474x/4b/f7/65/4bf76508082251f43dae5c960631a61d.jpg",
                    "https://i.pinimg.com/474x/2b/2c/92/2b2c9209771c43af831ec0fda19237dc.jpg",
                ]
        ],

        [
            "id" => "06",
            "title" => "Swipe To Profit",
            "omschrijving" => "Hoe sales maken in instagram reels.",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 20,
            "photos" =>
                [
                    "https://i.pinimg.com/474x/71/f3/98/71f3988203c75cee92e7e8850cd24a7e.jpg",
                    "https://i.pinimg.com/474x/dc/df/09/dcdf09b5092ad5ace3a04b9e3365ca7b.jpg",
                    "https://i.pinimg.com/474x/80/12/0c/80120c1c4fea45326bf40e7513f6e773.jpg",
                    "https://i.pinimg.com/474x/06/3b/fb/063bfbba216b9f2395315c9b67b5de4b.jpg",
                ]
        ],

        [
            "id" => "07",
            "title" => "The Complete Content Handbook",
            "omschrijving" => "Alle tips en tricks hpoe je content maakt.",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 30,
            "photos" =>
                [
                    "https://i.pinimg.com/474x/85/41/77/854177f52ad8494d13e9c4c332d55d82.jpg",
                    "https://i.pinimg.com/474x/02/f0/9c/02f09c842efd5a754af72585d86efa59.jpg",
                    "https://i.pinimg.com/474x/01/c2/82/01c2828ee771b83cc87b5319154c411c.jpg",
                    "https://i.pinimg.com/474x/e0/24/1f/e0241faa2d294a364d851fef0becaa63.jpg",
                ]
        ],

        [
            "id" => "08",
            "title" => "The Content Code",
            "omschrijving" => "De betere versie dan de Complete Contnt Handbook",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 25,
            "photos" =>
                [
                    "https://i.pinimg.com/474x/59/d5/b8/59d5b8254d552da344308370520b5c1a.jpg",
                    "https://i.pinimg.com/474x/57/28/1d/57281d6f586a40ed01188b6ad6583136.jpg",
                    "https://i.pinimg.com/474x/9d/8d/dc/9d8ddcc5cfa292cab5d088fca7a1e055.jpg",
                    "https://i.pinimg.com/474x/5c/34/05/5c3405e47f0c1e6205a5d8076a9dbe77.jpg",
                ]
        ],

        [
            "id" => "09",
            "title" => "The Content Creator's Playbook",
            "category" => "Category 7",
            "omschrijving" => "Leer succesvol zijn met content maken.",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 25,
            "photos" =>
                [
                    "https://i.pinimg.com/474x/b2/6b/ff/b26bff8826967f8303f049760aed04b0.jpg",
                    "https://i.pinimg.com/474x/4d/5f/f4/4d5ff4247387abafe2f73e3ed096a6c7.jpg",
                    "https://i.pinimg.com/474x/59/39/d9/5939d91864dc944879c460860b7d2edc.jpg",
                    "https://i.pinimg.com/474x/c4/f9/1d/c4f91d373aadd1b8bb9c38d9596b4f27.jpg",
                ]
        ],

        [
            "id" => "10",
            "title" => "The DFY Digital Marketing Blueprint",
            "omschrijving" => "Create, Launch And Profit",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 47,
            "photos" =>
                [
                    "https://i.pinimg.com/474x/26/e7/d7/26e7d7f069e20d9f7ed0858eb996f94e.jpg",
                    "https://i.pinimg.com/564x/f2/d0/44/f2d04447db63f5e4f507ebcf42188462.jpg",
                    "https://i.pinimg.com/564x/f2/d0/44/f2d04447db63f5e4f507ebcf42188462.jpg",
                    "https://i.pinimg.com/474x/c4/f9/1d/c4f91d373aadd1b8bb9c38d9596b4f27.jpg",
                ]
        ],

        [
            "id" => "11",
            "title" => "The DFY Vendor List",
            "omschrijving" => "List of certified vendors.",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 25,
            "photos" =>
                [
                    "https://i.pinimg.com/564x/57/30/19/57301908993ea915d1baf35f8bbb7637.jpg",
                    "https://i.pinimg.com/564x/f2/d0/44/f2d04447db63f5e4f507ebcf42188462.jpg",
                    "https://i.pinimg.com/564x/f2/d0/44/f2d04447db63f5e4f507ebcf42188462.jpg",
                    "https://i.pinimg.com/474x/c4/f9/1d/c4f91d373aadd1b8bb9c38d9596b4f27.jpg",
                ]
        ],

        [
            "id" => "12",
            "title" => "The Ultimate Reel Strategy",
            "omschrijving" => "Hoe je de beste reels maakt.",
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur
            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!",
            "price" => 19.99,
            "photos" =>
                [
                    "https://i.pinimg.com/564x/54/f0/93/54f093e0ba9868c89281799cdb22357a.jpg",
                    "https://i.pinimg.com/564x/f2/d0/44/f2d04447db63f5e4f507ebcf42188462.jpg",
                    "https://i.pinimg.com/564x/f2/d0/44/f2d04447db63f5e4f507ebcf42188462.jpg",
                    "https://i.pinimg.com/474x/c4/f9/1d/c4f91d373aadd1b8bb9c38d9596b4f27.jpg",
                ]
        ]
    ]
];

//     "navigation" => [
//         [
//             "title" => "Home",
//             "url" => "/"
//         ],
//         [
//             "title" => "Producten",
//             "url" => "/producten"
//         ],
//         [
//             "title" => "Contact",
//             "url" => "/contact"
//         ]
//     ]
// ];

