<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

?>
<!doctype html>
<html>
    <head>
    <title>Homepage</title>
    <link href="ds/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
                
                <img src="logo.jpg" alt="Store Logo" height="120px" >

    <div class="navigation">

        <nav>
            <input type="checkbox" id="responsive-nav">
            <label id="toggler" for="responsive-nav">
                <span>MENU <i class="fas fa-bars"></i></span>
            </label>

            <ul>
                <li><a href="#Home">Home</a></li>
                
              
            </ul>

            <div id="navigation">
                <input type="checkbox" id="open-close">
                <form action="" id="search-form">
                    <input type="search" placeholder="Search" id="search-bar">
                    <button id="searchButton" type="submit">
                        <span><i class="fas fa-search"></i></span>
                    </button>
                </form>

                <label for="open-close" id="opener">
                    <span><i class="fas fa-search"></i></span>
                </label>

                <label for="open-close" id="closer">
                    <span><i class="fas fa-times"></i></span>
                </label>
            </div>
            <h2><a href="logout.php">Logout</a></h2>
        </nav>
    </div>
    <h1>Jordan 1 Retro Royal</h1>
    <img src="JordanRoyals.jpg" alt="Jordan Retro Royal" style="width:50%;">
    <br>
    <div class="selections">
        <button class="selectbutton" type="submit">Low Cut</button>
        <button class="selectbutton" type="submit">Mid Cut</button>
        <button class="selectbutton" type="submit">High Cut</button>
    </div>
    <br><br><br><br>

    <h3>Product Description</h3>
    <h4>In 1985 sports photographer, Chuck Kohn, photographed Michael Jordan wearing the Air Jordan 1 Royals.
        This photo turned Nike poster was the first time anyone saw Michael wearing the Air Jordan 1 sneakers. Ever.
        Known to be his favorite colorway, Jordan chose the Royals to be the first Air Jordan 1 available for purchase.
        They were also the only color-way out of the Top 3 Air Jordan 1 Retro colorways ('Banned' and 'Chicago')
        that he never wore on the court. Since 1985, the Royals have been released in 2001, 2013, and 2017.</h4>
    <br><br>
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th class="border">Product Details</th>
                <th class="border">Size</th>
                <th class="border">Proceed</th>
            </tr>
            <tr>
                <td class="border">
                    <ul class="second-ul">
                        <li class="second-li">Buy New - $469</li>
                        <li class="second-li">Main Color - Black</li>
                        <li class="second-li">Release Date - 04/01/2017</li>
                        <li class="second-li">Upper Material - Leather</li>
                    </ul>
                </td>

                <td class="border">
                    <form action="/action_page.php">
                        <label for="size">Select a Size:</label>
                        <br>
                        <select name="Size" id="size">
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11 (SOLD OUT)</option>
                            <option value="12">12</option>
                        </select>
                    </form>
                </td>

                <td class="border">
                    <form>
                        <p>Enter Postal Code:</p>
                        <input class="ship" type="text" placeholder="Postal Code" name="shipping">
                        <br><br>
                        <button class="cartbutton" type="cart">Add to Cart ></button>
                        <button class="viewcartbutton" type="cart">View Cart ></button>
                    </form>

                </td>
            </tr>
        </table>
    </div>
    <br><br>

    <div class="similar-products">
        <h1> You May Also Like</h1>
        <table>
            <tr>
                <td class="no-border">
                    <img class="similar" src="shoe4.jpg" alt="Jordan Retro Royal">
                    <p class="similarshoe"> Air Jordan 1 Retro High OG 'Game Royal'</p>
                </td>

                <td class="no-border">
                    <img class="similar" src="shoe3.jpg" alt="Jordan Retro Royal">
                    <p class="similarshoe"> Air Jordan 1 Retro High OG 'Bred Toe'</p>
                </td>
                <td class="no-border">
                    <img class="similar" src="shoe2.jpg" alt="Jordan Retro Royal">
                    <p class="similarshoe"> Air Jordan 1 Retro High OG 'Top 3'</p>
                </td>

            </tr>
        </table>
    </div>

    </body>
</html>