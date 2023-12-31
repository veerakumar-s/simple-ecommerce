<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My TRY</title>
    <link rel="stylesheet" href="">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <style>
        body{
    margin: 0;
    padding: 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
nav{
    background-color: #706f6f;
    font-size: 20px;
    width: 100;
    display: flex;
    align-items: center;
    justify-content: space-around;
    color: palevioletred;
}
nav li{
    display: inline-block;
    margin: 8px 25px;
    color: white;
}
nav a{
    text-decoration: none;
}
nav a:hover{
    color: black;
}
.logo{
    font-size: 30px;
    font-weight: bolder;
    color: rgb(1, 63, 1);
}
.Menu-line{
    height: 3px;
    width: 30px;
    background-color: rgb(8, 8, 8);
    margin-bottom: 4px;
}
.menu{
    cursor: pointer;
    display: none;
}
.box{
    color: black;
    width: 30px;
    height: 30px;
    text-align: center;
    position: relative;
}
.cart-count{
    position: absolute;
    background-color: white;
    top: -5px;
    right: 0;
    padding: -5px;
    height: 20px;
    width: 20px;
    line-height: 20px;
    border-radius: 50%;
    z-index: 99;
}
#cart-icon{
    font-size: 1.5rem;
    cursor: pointer;
    padding: 10px;
}
.cart{
    position: fixed;
    top: 0;
    right: -100%;
    width: 1325px;
    height: 100vh;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 20px; 
    background-color: white;
    box-shadow: 0 1px 4px rgba(40,37,37,0.1);
    z-index: 100;
}
.cart-active{
    right: 0;
    transition: 0.5s;

}
.cart-title{
    text-align: center;
    font-size: 1.5rem;
    font-weight: 500;
    margin-bottom: 1rem;
    padding: 20px;
    border-bottom: 1px solid rgba(0,0,0,0.1);
}
.cart-box{
    display: grid;
    grid-template-columns: 32% 50% 18%;
    align-items: center;
    gap: 1rem;
    margin-top: 1rem;
    border-bottom: 1px solid rgba(0,0,0,0.1);
    padding-bottom: 10px;
}
.cart-img{
    width: 75px;
    height: 75px;
    object-fit: cover;
    border: 2px solid rgba(0,0,0,0.1);
    padding: 5px;
}
.detail-box{
    display: grid;
    row-gap: 0.5rem;
}
.price-box{
    display: flex;
    justify-content: space-between;
}
.cart-food-title{
    font-size: 1rem;
    text-transform: uppercase;
    color: red;
    font-weight: 500;
}
.cart-quantity{
    border: 1px solid rgba(0,0,0,0.1);
    outline: none;
    width: 2.4rem;
    text-align: center;
    font-size: 1rem;
}
.cart-remove{
    font-size: 24px;
    color: red;
    cursor: pointer;
}
.total{
    display: flex;
    justify-content: flex-end;
    margin-top: 1.rem;
}
.total-title{
    font-size: 1rem;
    font-weight: 600;
}
.total-price{
    margin-left: 0.5rem;
}
.btn-div{
    text-align: center;
}
.btn-buy{
    padding: 12px 20px;
    background-color: black;
    color: white;
    border: none;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;

}
#cart-close{
    position: absolute;
    top: 1rem;
    right: 0.8rem;
    font-size: 2rem;
    color: black;
    cursor: pointer;
}
img{
    width: 100%;
    
}
.container{
    max-width: 1200px;
    padding: 10rem;
    margin: auto;
    width: 100%;
    background-color: rgb(155, 197, 92);
}
.shop-content{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    width: 100;
    justify-content: center;
    align-content: center;
}
.food-box{
    position: relative;
    background-color: #eeeee5;
    padding: 10px;
    border-radius: 20px;
}
.pic{
    overflow: hidden;
    filter: drop-shadow(0 40px 10px #0009);

}
.pic:hover img{
    transform: scale(1.5);
}
.food-img{
    transition: 0.4s;
    aspect-ratio: 1/1;
    object-fit: cover;
}
.food-title{
    font-weight: 500;
    font-size: large;
    text-align: center;
}
.food-price{
    font-weight: 500;
}
.summa{
    text-align: center;
}
.add-cart{
    position: absolute;
    bottom: 0;
    right: 0;
    background-color: red;
    border-radius: 20px;
    color: white;
    padding: 10px;
    font-size: 1.3rem;
    cursor: pointer;
    transition: 0.5s;
    
}
.add-cart:hover{
    background-color: black;
}



@media all and (max-width:625px){
    nav{
        flex-direction: column;
    }
    nav li{
        display: block;
    }
    ul{
        text-align: center;
        padding: 0;
        display: none;
    }
    .logo{
        margin: 17px 0px 0px 0px;
    }
    .menu{
        display: block;
        position: absolute;
        right: 20px;
        top: 25px;
    }
    .showmenu{
        display: block;
    }
    
}

    </style>

</head>
<body>
    <nav>
        <div class="logo">
            <a href="register.php">LOGO</a>
        </div>
        <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">CONTACT</a></li>
            <li><a href="">HELP</a></li>
        </ul>
        <div class="menu">
            <div class="Menu-line"></div>
            <div class="Menu-line"></div>
            <div class="Menu-line"></div>
        </div>
        <div class="box">
            <div class="cart-count">0</div>
            <ion-icon name="cart" 
            id="cart-icon"></ion-icon>
            
        </div>
        <div class="cart">
            <div class="cart-title">CART ITEM</div>
            <div class="cart-content">
                <!--
                <div class="cart-box">
                    <img src="images/11.jpg" class="cart-img">
                    <div class="detail-box">
                        <div class="cart-food-title">Fruits</div>
                        <div class="price-box">
                            <div class="cart-price">Rs.5</div>
                             <div class="cart-amt">Rs.5</div>
                        </div>
                         <input type="number" value="1" class="cart-quantity">
                    </div>
                    <ion-icon name="trash-outline" class="cart-remove"></ion-icon>
                </div>
            -->
            </div>
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">Rs.0</div>
            </div>
            <div class="btn-div">
            <button class="btn-buy">Buy now</button>
            </div>
            <ion-icon name="close-circle-outline" id="cart-close"></ion-icon>
            
        </div>
    </nav>
    <div class="container">
        <?php
        if(isset($_GET['cart'])){

            $product_name = $_GET['product_name'];
            $product_price = $_GET['product_price'];
            $product_image = $_GET['product_image'];
            $product_quantity = 1;
         
            $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");
         
            if(mysqli_num_rows($select_cart) > 0){
               $message[] = 'product already added to cart';
            }else{
               $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
               $message[] = 'product added to cart succesfully';
            }
         
         }
         
        ?>
        <h2 class="title">Items</h2>
        <div class="shop-content">
            <div class="food-box">
                <div class="pic">
                    <img src="1.png" name="product_image" class="food-img" alt="">
                </div>
                <h2 name="product_name" class="food-title">Summa</h2>
                <div class="summa">
                <span name="product_price" class="food-price">Rs.40</span>
                </div>
                <ion-icon name="cart" class="add-cart"></ion-icon>
            </div>
            <div class="food-box">
                <div class="pic">
                    <img src="images/2.png" class="food-img" alt="">
                </div>
                <h2 class="food-title">Summa2</h2>
                <span class="food-price">Rs.40</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
                
            </div>
            <div class="food-box">
                <div class="pic">
                    <img src="images/3.png" class="food-img" alt="">
                </div>
                <h2 class="food-title">Summa3</h2>
                <span class="food-price">Rs.40</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
                
            </div>
            <div class="food-box">
                <div class="pic">
                    <img src="images/4.png" class="food-img" alt="">
                </div>
                <h2 class="food-title">Summa4</h2>
                <span class="food-price">Rs.40</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
                
            </div>
            <div class="food-box">
                <div class="pic">
                    <img src="images/5.png" class="food-img" alt="">
                </div>
                <h2 class="food-title">Summa5</h2>
                <span class="food-price">Rs.40</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
                
            </div>
            <div class="food-box">
                <div class="pic">
                    <img src="images/6.png" class="food-img" alt="">
                </div>
                <h2 class="food-title">Summa6</h2>
                <span class="food-price">Rs.40</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
                
            </div>
            <div class="food-box">
                <div class="pic">
                    <img src="images/11.jpg" class="food-img" alt="">
                </div>
                <h2 class="food-title">Summa</h2>
                <span class="food-price">Rs.40</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
                
            </div>
            <div class="food-box">
                <div class="pic">
                    <img src="images/11.jpg" class="food-img" alt="">
                </div>
                <h2 class="food-title">Summa</h2>
                <span class="food-price">Rs.40</span>
                <ion-icon name="cart" class="add-cart"></ion-icon>
                
            </div>
        </div>
        

    </div>
    

</body>
<script>
    //cart
    const btnCart=document.querySelector('#cart-icon')
    const cart=document.querySelector('.cart')
    const btnClose=document.querySelector('#cart-close')
    //cart active add
    btnCart.addEventListener('click',()=>{
        cart.classList.add('cart-active')
    })
    //cart active remove
    btnClose.addEventListener('click',()=>{
        cart.classList.remove('cart-active')
    })
    //load items
    document.addEventListener('DOMContentLoaded',loaditem);
    function loaditem(){
        loadContent();


    }
    function loadContent(){
        //Remove Items From Cart
      const btnRemove=document.querySelectorAll('.cart-remove');
      btnRemove.forEach((btn)=>{
        btn.addEventListener('click',removeItem);
      });
     
    //increase item quantity
    const qtyElements=document.querySelectorAll('.cart-quantity');
      qtyElements.forEach((input)=>{
        input.addEventListener('change',changeQty);
      });
    //product cart button
    const cartBtns=document.querySelectorAll('.add-cart');
      cartBtns.forEach((btn)=>{
        btn.addEventListener('click',addCart);
      });
      updateTotal();
    }
    //remove item
    function removeItem(){
        if(confirm('Confirm Remove!')){
        let title=this.parentElement.querySelector('.cart-food-title').innerHTML;
        itemList=itemList.filter(el=>el.title!=title);
        this.parentElement.remove();
        loadContent();
        }
    }
    //change quantity
    function changeQty(){
        if(isNaN(this.value) || this.value<1){
            this.value=1;
        }
        loadContent();
    }
    let itemList=[];
    // add cart
    function addCart(){
        let food=this.parentElement;
        let title=food.querySelector('.food-title').innerHTML;
        let price=food.querySelector('.food-price').innerHTML;
        let imgSrc=food.querySelector('.food-img').src;
        //console.log(title,price,imgSrc);
        let newProduct={title,price,imgSrc}
        //chect product already exist in cart
        if(itemList.find((el)=>el.title==newProduct.title))
        {
            alert("product already exist in cart");
            return;
        }else{
            itemList.push(newProduct);
        }
        let newProductElement=createCartProduct(title,price,imgSrc);
        let element=document.createElement('div');
        element.innerHTML=newProductElement;
        let cartBasket=document.querySelector('.cart-content')
        cartBasket.append(element);
        loadContent();
    }
    function createCartProduct(title,price,imgSrc){
        return `
        <div class="cart-box">
                    <img src=" ${imgSrc}" class="cart-img">
                    <div class="detail-box">
                        <div class="cart-food-title">${title}</div>
                        <div class="price-box">
                            <div class="cart-price">${price}</div>
                             <div class="cart-amt"> ${price}</div>
                        </div>
                         <input type="number" value="1" class="cart-quantity">
                    </div>
                    <ion-icon name="trash-outline" class="cart-remove"></ion-icon>
                </div>
                `;
    }
    function updateTotal()
    {
        const cartItems=document.querySelectorAll('.cart-box');
        const totalValue=document.querySelector('.total-price');

        let total=0;

        cartItems.forEach(product=>{
            let priceElement=product.querySelector('.cart-price');
            let price=parseFloat(priceElement.innerHTML.replace("Rs.",""));
            let qty=product.querySelector('.cart-quantity').value;
            total+=(price*qty);
            product.querySelector('.cart-amt').innerText="Rs."+(price*qty);
        });
        totalValue.innerHTML='Rs.'+total;

        //add product count in cart icon
        const cartCount=document.querySelector('.cart-count');
        let count=itemList.length;
        cartCount.innerHTML=count;

        if(count==0){
            cartCount.style.display='none';

        }else{
            cartCount.style.display='block';
        }
    }
    //menu symbol
    const menu =document.querySelector('.menu')
    const menulist =document.querySelector('nav ul')
    menu.addEventListener('click',()=>{
    menulist.classList.toggle('showmenu')
    })
</script>

</html>
