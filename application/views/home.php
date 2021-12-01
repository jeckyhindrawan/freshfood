<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fresh Food</title>

    <style type="text/css">
    body {
        background-color: #a9a9a9;
        font-family: "Rubik";
    }

    .container {
        width: 1440px;
        margin: auto;
    }

    .header {
        background: #fff;
    }

    .logo {
        width: 75px;
        height: 67px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 52px;
        margin-right: 57px;
    }

    .menuBar {
        position: fixed;
        top: 0px;
        background-color: #ffffff;
        width: 1440px;
    }

    .topBar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #cdcccc;
        font-size: 17px;
        font-weight: 400;
    }

    .selectedMenu {
        color: #1dcf5c;
        margin-right: 47px;
        margin-top: 43px;
        margin-bottom: 44px;
        font-weight: 500;
    }

    .menuList {
        margin-right: 49px;
        margin-top: 43px;
        margin-bottom: 44px;
        background-color: transparent;
        border: none;
    }

    .leftMenu {
        display: flex;
    }

    .rightMenu {
        justify-content: end;
        display: flex;
    }

    .cartIcon {
        width: 30px;
        height: 30px;
        align-self: center;
        margin-right: 7px;
    }

    .cartContainer {
        display: flex;
        margin-right: 32px;
    }

    .userIcon {
        width: 14px;
        height: 16px;
    }

    .userIconContainer {
        border: 1px solid #d3d3d3;
        border-radius: 8px;
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
    }

    .bottomLeftMenu {
        display: flex;
        margin-left: 52px;
        font-size: 15px;
        font-weight: 400;
    }

    .bottomSelectedMenu {
        margin-right: 38px;
        color: #1dcf5c;
        font-weight: 500;
    }

    .bottomMenuList {
        margin-right: 38px;
    }

    .leafIconContainer {
        display: flex;
        margin-right: 29px;
        padding-left: 10px;
        border-left: 1px solid #d3d3d3;
    }

    .bookIconContainer {
        display: flex;
        margin-right: 29px;
        padding-left: 10px;
    }

    .leafIcon {
        margin-right: 9px;
        width: 11px;
        height: 16px;
        align-self: center;
    }

    .sortContainer {
        display: flex;
    }

    .downIcon {
        width: 8px;
        height: 5px;
        align-self: center;
        margin-left: 14px;
        margin-right: 32px;
    }

    .mainContainer {
        margin-top: 163px;
        padding-top: 50px;
        background-color: #e5e5e5;
        padding-bottom: 34px;
        font-weight: 400;
        display: flex;
        margin-bottom: -10px;
    }

    .foodContainer {
        background-color: #ffffff;
        margin-left: 20px;
        width: 977px;
        padding: 32px;
    }

    .chickenImage {
        width: 422px;
        height: 350px;
        margin-right: 27px;
        margin-bottom: 35px;
    }

    .bigMenu {
        display: flex;
    }

    .menuTitle {
        font-size: 24px;
        margin-top: 13px;
    }

    .caloriesDaysText {
        font-size: 14px;
        color: #bebebe;
        margin-top: 21px;
        margin-bottom: 20px;
    }

    .iconLoncengKecil {
        width: 15px;
        height: 10px;
        margin-right: 7px;
    }

    .clockIcon {
        width: 14px;
        height: 14px;
        margin-right: 7px;
        margin-top: -2px;
    }

    .textIcon {
        width: 12px;
        height: 14px;
        margin-right: 7px;
        margin-top: -2px;
    }

    .containerIconLonceng {
        display: flex;
        margin-right: 28px;
    }

    .smallText {
        font-size: 15px;
        margin-top: -4px;
    }

    .starIcon {
        width: 16px;
        height: 16px;
        margin-right: 2px;
        margin-top: 3px;
    }

    .ratingText {
        margin-left: 8px;
        font-size: 14px;
        font-weight: 500;
        color: #101010;
        margin-top: 3px;
    }

    .menuDesc {
        font-size: 15px;
        color: #717171;
        margin-top: -2px;
    }

    .categoryContainer {
        background-color: #f5f5f5;
        width: 76px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #f5f5f5;
        border-radius: 2px;
        margin-right: 11px;
    }

    .categoryText {
        font-size: 12px;
        color: #535353;
    }

    .secondCategoryContainer {
        border: 1px solid #d3d3d3;
        border-radius: 4px;
        width: 130px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 3px;
        margin-top: 19px;
    }

    .selectedSecondCategoryContainer {
        border: 1px solid rgba(29, 207, 92, 1);
        border-radius: 4px;
        width: 130px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 3px;
        margin-top: 19px;
        background-color: rgba(29, 207, 92, 0.2);
    }

    .secondCategoryText {
        font-size: 14px;
    }

    .selectedSecondCategoryText {
        font-size: 14px;
        color: #189243;
    }

    .underlineBox {
        width: 25px;
        height: 2px;
        background-color: #1dcf5c;
        margin-top: -10px;
    }

    .day {
        font-size: 15px;
    }

    .bottomMenu1 {
        width: 169px;
        height: 99px;
        margin-top: -5px;
        border-radius: 4px;
    }

    .bottomFoodContainer {
        margin-right: 15px;
    }

    .bottomFoodTitle {
        font-size: 15px;
        width: 161px;
        margin-top: 14px;
    }

    .snackContainer {
        width: 169px;
        height: 99px;
        display: flex;
        margin-top: -5px;
        align-items: center;
        justify-content: center;
        border: 1px dotted #d3d3d3;
    }

    .bigPlus {
        font-size: 30px;
        margin-top: 28px;
    }

    .bigPlusContainer {
        width: 34px;
        height: 34px;
        background-color: #e9e9e9;
        border: 1px solid transparent;
        border-radius: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .priceContainer {
        display: flex;
        justify-content: end;
        align-items: center;
        margin-top: 35px;
    }

    .bookmarkIcon {
        width: 14px;
        height: 18px;
    }

    .priceText {
        margin-right: 25px;
    }

    .bookmarkContainer {
        width: 49px;
        height: 48px;
        border: 1px solid #d3d3d3;
        display: flex;
        align-items: center;
        justify-content: center;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .addCartContainer {
        display: flex;
        width: 144px;
        height: 48px;
        border-top: 1px solid #d3d3d3;
        border-right: 1px solid #d3d3d3;
        border-bottom: 1px solid #d3d3d3;
        align-items: center;
        justify-content: center;
    }

    .priceCartIcon {
        width: 26px;
        height: 26px;
        margin-right: 9px;
    }

    .sidebarContainer {
        width: 329px;
        height: 155px;
        background-color: #ffffff;
        margin-left: 30px;
        display: flex;
    }

    .pastaImage {
        width: 108px;
        height: 125px;
        padding: 15px;
    }

    .judulMakananSideBar {
        font-size: 18px;
    }

    .containerIconClock {
        display: flex;
        margin-right: 21px;
    }

    .sideBarSmallText {
        font-size: 12px;
        margin-top: -2px;
    }

    .sideBarAddCartContainer {
        display: flex;
        width: 121px;
        height: 38px;
        border: 1px solid #d3d3d3;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
    }

    .sideBarPriceCartIcon {
        width: 20px;
        height: 20px;
        margin-right: 3px;
    }

    .addCartText {
        font-size: 17px;
    }

    .sideBarAddCartText {
        font-size: 14px;
    }

    .sidebarContainer2 {
        width: 329px;
        height: 155px;
        background-color: #ffffff;
        margin-left: 30px;
        margin-top: 35px;
        display: flex;
    }

    .sidebarContainer3 {
        width: 329px;
        height: 155px;
        background-color: #ffffff;
        margin-left: 30px;
        margin-top: 35px;
        display: flex;
    }

    .sideBarCountingBox {
        display: flex;
        width: 121px;
        height: 38px;
        border: 1px solid #d3d3d3;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
    }

    .numberCountingText {
        font-size: 16px;
    }

    .numberCountingTextContainer {
        width: 34px;
        background-color: #e9ebef;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 16px;
        margin-left: 16px;
    }
    </style>

</head>

<body>

    <div class="container">
        <div class="header">
            <div class="menuBar">
                <div class="topBar">
                    <div class="leftMenu">
                        <img src="http://localhost/freshfood/assets/images/Logo.png" alt="logo" class="logo">
                        <p class="selectedMenu">Menu</p>
                        <p class="menuList">About</p>
                        <p class="menuList">Contact</p>
                    </div>
                    <div class="rightMenu">
                        <div class="cartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon" class="cartIcon">
                            <p>Your Cart (0)</p>
                        </div>
                        <div class="userIconContainer">
                            <img src="http://localhost/freshfood/assets/images/user.png" alt="icon" class="userIcon">
                        </div>
                        <div class="userIconContainer">
                            <img src="http://localhost/freshfood/assets/images/search.png" alt="icon" class="userIcon">
                        </div>
                        <div class="userIconContainer">
                            <img src="http://localhost/freshfood/assets/images/lonceng.png" alt="icon" class="userIcon">
                        </div>
                    </div>
                </div>
                <div class="topBar">
                    <div class="bottomLeftMenu">
                        <p class="bottomSelectedMenu">All</p>
                        <p class="bottomMenuList">Weight Loss</p>
                        <p class="bottomMenuList">Weight Gain</p>
                    </div>
                    <div class="rightMenu">
                        <div class="leafIconContainer">
                            <img src="http://localhost/freshfood/assets/images/leaf.png" alt="icon" class="leafIcon">
                            <p>Dietary</p>
                        </div>
                        <div class="bookIconContainer">
                            <img src="http://localhost/freshfood/assets/images/book.png" alt="icon" class="leafIcon">
                            <p>Calories</p>
                        </div>
                        <div class="sortContainer">
                            <p>Sort by: <strong>Recommended</strong>
                            </p>
                            <img src="http://localhost/freshfood/assets/images/chevron-down.png" alt="icon"
                                class="downIcon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainContainer">
            <div class="foodContainer">
                <div class="bigMenu">
                    <img src="http://localhost/freshfood/assets/images/chickenStick.png" alt="image"
                        class="chickenImage">
                    <div>
                        <p class="menuTitle"><strong>Clean Eating 7 days Meal Plan</strong></p>
                        <p class="caloriesDaysText">1700 Calories / days</p>
                        <div class="bigMenu">
                            <div class="containerIconLonceng">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="smallText">28 Meals</p>
                            </div>
                            <div class="containerIconLonceng">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="smallText">7 Days</p>
                            </div>
                            <div class="containerIconLonceng">
                                <img src="http://localhost/freshfood/assets/images/text.png" alt="icon"
                                    class="textIcon">
                                <p class="smallText">Clean Eating Plan</p>
                            </div>
                        </div>
                        <div class="bigMenu">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <img src="http://localhost/freshfood/assets/images/star.png" alt="icon" class="starIcon">
                            <p class="ratingText">5.0</p>
                        </div>
                        <p class="menuDesc">A little bit nutty and a whole lot noice, thid healthy spin on the takeout
                            classic stars chicken and veg in a sweet and
                            savoury stir-fry sauce. Based on what you’ve told us, We’ve customised a clean eating meal
                            paln.</p>
                        <div class="bigMenu">
                            <div class="categoryContainer">
                                <p class="categoryText">Vegetarian</p>
                            </div>
                            <div class="categoryContainer">
                                <p class="categoryText">Low-calorie</p>
                            </div>
                            <div class="categoryContainer">
                                <p class="categoryText">7 days plan</p>
                            </div>
                            <div class="categoryContainer">
                                <p class="categoryText">Detoxing</p>
                            </div>
                        </div>
                        <div class="bigMenu">
                            <div class="secondCategoryContainer">
                                <p class="secondCategoryText">Lunch + Dinner</p>
                            </div>
                            <div class="selectedSecondCategoryContainer">
                                <p class="selectedSecondCategoryText">All Meals</p>
                            </div>
                            <div class="secondCategoryContainer">
                                <p class="secondCategoryText">Lunch + Snacks</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bottom menu -->
                <p class="day">Day 1</p>
                <div class="underlineBox"></div>
                <div class="bigMenu">
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Breakfast</strong></p>
                        <img src="http://localhost/freshfood/assets/images/friedPasta.png" alt="menu"
                            class="bottomMenu1">
                        <p class="bottomFoodTitle">Blueberry Yoghurt with
                            Protein Granola</p>
                    </div>
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Lunch</strong></p>
                        <img src="http://localhost/freshfood/assets/images/tomatoPasta.png" alt="menu"
                            class="bottomMenu1">
                        <p class="bottomFoodTitle">Loaded chicken and
                            pumpkin salad</p>
                    </div>
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Evening meal</strong></p>
                        <img src="http://localhost/freshfood/assets/images/friedrice.png" alt="menu"
                            class="bottomMenu1">
                        <p class="bottomFoodTitle">Satay chicken with
                            radicchio sauce</p>
                    </div>
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Snack 1</strong></p>
                        <div class="snackContainer">
                            <div class="bigPlusContainer">
                                <p class="bigPlus">+</p>
                            </div>
                        </div>
                        <p class="bottomFoodTitle">Choose Yourself a
                            snack</p>
                    </div>
                    <div class="bottomFoodContainer">
                        <p class="day"><strong>Dinner</strong></p>
                        <img src="http://localhost/freshfood/assets/images/mincedPork.png" alt="menu"
                            class="bottomMenu1">
                        <p class="bottomFoodTitle">Nonnas spaghettie
                            bolognaise</p>
                    </div>
                </div>
                <div class="priceContainer">
                    <p class="priceText"><strong>$295.58</strong></p>
                    <div class="bookmarkContainer">
                        <img src="http://localhost/freshfood/assets/images/bookmark.png" alt="icon"
                            class="bookmarkIcon">
                    </div>
                    <div class="addCartContainer">
                        <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon" class="priceCartIcon">
                        <p class="addCartText">Add Cart</p>
                    </div>
                </div>
            </div>
            <!-- sidebar -->
            <div>
                <div class="sidebarContainer">
                    <img src="http://localhost/freshfood/assets/images/delicios.png" alt="imageMenu" class="pastaImage">
                    <div>
                        <p class="judulMakananSideBar"><strong>Rasberry & Protein
                                Blondie</strong></p>
                        <div class="bigMenu">
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="sideBarSmallText">28 Meals</p>
                            </div>
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="sideBarSmallText">7 Days</p>
                            </div>
                        </div>
                        <div class="sideBarAddCartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon"
                                class="sideBarPriceCartIcon">
                            <p class="sideBarAddCartText">Add Cart</p>
                        </div>
                    </div>
                </div>

                <div class="sidebarContainer2">
                    <img src="http://localhost/freshfood/assets/images/brownis.png" alt="imageMenu" class="pastaImage">
                    <div>
                        <p class="judulMakananSideBar"><strong>Chco Protien<br>
                                Brownie
                            </strong></p>
                        <div class="bigMenu">
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="sideBarSmallText">28 Meals</p>
                            </div>
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="sideBarSmallText">Eat Earth</p>
                            </div>
                        </div>
                        <div class="sideBarCountingBox">
                            <div>
                                <p>-</p>
                            </div>
                            <div class="numberCountingTextContainer">
                                <p class="numberCountingText"><strong>2</strong></p>
                            </div>
                            <div>
                                <p>+</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebarContainer3">
                    <img src="http://localhost/freshfood/assets/images/justwing.png" alt="imageMenu" class="pastaImage">
                    <div>
                        <p class="judulMakananSideBar"><strong>Just Wing it Brekky Ball</strong></p>
                        <div class="bigMenu">
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="sideBarSmallText">28 Meals</p>
                            </div>
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="sideBarSmallText">7 Days</p>
                            </div>
                        </div>
                        <div class="sideBarAddCartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon"
                                class="sideBarPriceCartIcon">
                            <p class="sideBarAddCartText">Add Cart</p>
                        </div>
                    </div>
                </div>
                <div class="sidebarContainer3">
                    <img src="http://localhost/freshfood/assets/images/Youtella.png" alt="imageMenu" class="pastaImage">
                    <div>
                        <p class="judulMakananSideBar"><strong>Youtella Protein Cookies</strong></p>
                        <div class="bigMenu">
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/loncengKecil.png" alt="icon"
                                    class="iconLoncengKecil">
                                <p class="sideBarSmallText">28 Meals</p>
                            </div>
                            <div class="containerIconClock">
                                <img src="http://localhost/freshfood/assets/images/clock.png" alt="icon"
                                    class="clockIcon">
                                <p class="sideBarSmallText">7 Days</p>
                            </div>
                        </div>
                        <div class="sideBarAddCartContainer">
                            <img src="http://localhost/freshfood/assets/images/cart.png" alt="icon"
                                class="sideBarPriceCartIcon">
                            <p class="sideBarAddCartText">Add Cart</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>