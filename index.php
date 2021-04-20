<?php
include "header.php";


?>
<nav class="navbar navbar-light bg-dark justify-content-between">
    <a class="navbar-brand text-warning">Logo</a>
    <form class="form-inline">
        <button class="btn btn-outline-warning " type="submit">LogIn</button>&nbsp;&nbsp;
        <button class="btn btn-outline-warning " type="submit">SignUp</button>
    </form>
</nav>
<br>

<div class="container float-right">
    <img src="https://cdn2.iconfinder.com/data/icons/online-shopping-112/32/shopping_cart_buy_retail_store-256.png" alt="cart"
    style="width: 60px;">
</div> <br><br><br>

<!-- -----tabs-------------- -->

<ul class="nav nav-tabs pt-5 pl-3 pr-3 " id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Table Set</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sala Set</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Chairs</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">


    <!-- table set -->
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="container">
            <div class="row pt-5">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">

                            <center><img id="prodImg" src="./img/table1.jpg" alt=""></center>
                            <p class="card-text">Wooden Set </p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <center><img id="prodImg" src="./img/table2.jpg" alt=""></center>
                            <p class="card-text">Ryal Table Set</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <center><img id="prodImg" src="./img/table3.jpg" alt=""></center>
                            <p class="card-text">Craftswood Square Solid Wood Four Seater Dining Set</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <center><img id="prodImg" src="./img/table4.jpg" alt=""></center>
                            <p class="card-text">Fallax Pure Forest Teak Wood Table</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- sala set -->
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container">
            <div class="row pt-5">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">

                            <center><img id="prodImg" src="./img/table1.jpg" alt=""></center>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <center><img id="prodImg" src="./img/table2.jpg" alt=""></center>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <center><img id="prodImg" src="./img/table3.jpg" alt=""></center>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <center><img id="prodImg" src="./img/table4.jpg" alt=""></center>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chairs -->
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="container">
            <div class="row pt-5">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">

                            <center><img id="prodImg" src="./img/table1.jpg" alt=""></center>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <center><img id="prodImg" src="./img/table2.jpg" alt=""></center>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <center><img id="prodImg" src="./img/table3.jpg" alt=""></center>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <center><img id="prodImg" src="./img/table4.jpg" alt=""></center>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------- product container------ -->

<?php

include "footer.php";
?>