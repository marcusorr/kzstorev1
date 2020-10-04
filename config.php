<?php
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\


// OTHER
// Song of your choice. If you don't want it, don't add it.
$youtubeMusicLink = "https://www.youtube.com/watch?v=3aKVgA6Iljg&ab_channel=PressplayMedia";

// Invite Link To Your Discord + If you don't want, go to index.php and delete line 21 to line 23.
$discord = "https://t.me/kzstorechat";
$discordimg = "assets/img/telegram.png";

// META TAG SECTION
// Name of your site.
$Title ="Kz's Store";

// Site's logo.
$favicon ="https://cdn.sellix.io/static/logo/single.png";

//Your URL
$Url = "Google.com";

// Limit of 150 words. Summarize your page's contents. Such as a description of your site.
$Description = "Sellix Template made by Qrow#3914";

// NAVBAR Section
// If you want none just don't put anything here
// These are top right and link off page. They open a new browser window. The first one is the name such as "Home" and the second one is where it will link to.
$navbar = [
    [
        "item" => "Made by @marcus-orr",
        "href" => "https://www.snapchat.com/add/marcus-orr",
    ],
    [
        "item" => "Telegram",
        "href" => "https://t.me/kzstorechat",
    ]
];


// Site Content
// This is the "T" of your site. Such as a little introduction.
$STitle = "Kz's Store";

// This is the Sub Title. Its a little slogan type thing under your title.
$SDesc = "The best quality accounts at the best price!";

// Site Buttons - usually used for Discord, Telegram and Shop Link
// First is the text of the button. Second is the link you want it to go to.
$btns = [
    [
        "Txt" => "Telegram",
        "link" => "https://t.me/xkzupdates",
    ],
    [
        "Txt" => "Snapchat",
        "link" => "https://www.snapchat.com/add/xkznew",
    ],
    [
        "Txt" => "Telegram store",
        "link" => "https://t.me/kzstorechat",
    ],
];

// Feature Section

$FTitle = "Features";
$FDesc = "What you get from purchasing from us!";

// This is the features section, you can remove and add as many as you want. If you don't want any just remove everything inside.
$Features = [
    [
        "Icon" => "fas fa-users",
        "Title" => "24/7 Support",
        "Desc" => "We have a reliable Support Team that want to make sure that our clients have the best experience!",
    ],
    [
        "Icon" => "far fa-star",
        "Title" => "Very Popular",
        "Desc" => "We have a strong history of extremely satisfied clients who have come back costantly.",
    ],
    [
        "Icon" => "fas fa-dollar-sign",
        "Title" => "Cheap",
        "Desc" => "We believe in high quality at very affordable prices, making a product for all!",
    ],
    [
        "Icon" => "far fa-handshake",
        "Title" => "Reliable",
        "Desc" => "To make sure our clients are satisfied, we strive to be as reliable as possible!",
    ],
    [
        "Icon" => "fas fa-boxes",
        "Title" => "Works Everywhere",
        "Desc" => "Our products are in stock at all times meanin you can have whatever you want, whenever.",
    ],
    [
        "Icon" => "far fa-clock",
        "Title" => "Quick Delivery",
        "Desc" => "All purchases are delivered automatically at really fast speeds making sure you get the product.",
    ],
];

// Products
// Product Section Title
$PTitle = "Products";

// Product Section Description
$PDesc = "Get some juicy products and services off us!";

// The Actual Products.
// First is the Product Name. Second is the Product Description. Third is the Product ID can be found int he URL. Fourth is your product Image.
$Products = [
    [
        "Name" => "Dead ebays x 4",
        "Desc" => "Email:Passwords that may log in to different sites.",
        "ID" => "5f779300477fd",
        "Image" => "https://cdn.sellix.io/static/images/products/481aed273b2947f465785983ece42ec2e9531ebb69b4a622784cd9151a8a2470.png",
    ],
    [
        "Name" => "Checked Moonpig Account",
        "Desc" => "A moonpig account that will log in.",
        "ID" => "5f77911a987f8",
        "Image" => "https://cdn.sellix.io/static/images/products/37b8b0f60fcd16190c8bee6d9f8b84c6e1b875044de0278b4605e71a7e5c4bc1.png",
    ],
    [
        "Name" => "Unchecked Paypals x 5",
        "Desc" => "Paypal accounts that may log in.",
        "ID" => "5f777b0c12f26",
        "Image" => "https://cdn.sellix.io/static/images/products/e008fa7b4418fb2ba0c84fa8bb0425cff9c3d81414a55d5b2b50a47d1a9fb542.jpg",
    ],
];

// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\

// IGNORE THIS SECTION \\

function embedMusic($path) {
    $result = preg_replace('/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/', '$5', $path);
    if (!empty($result) || !isset($result)) {
        echo "<iframe style=\"visibility: hidden;\"  src=\"https://www.youtube.com/embed/${result}?controls=0;autoplay=1\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}