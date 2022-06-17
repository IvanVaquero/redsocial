<template>
<div>
    <nav class="navbar bg-light fixed-top shadow">
        <div class="content-form d-flex justify-content-between align-items-center">
            <div class="contenedor-image">
                <a href="">
                    <img src="img/logo.png" class="logo-left" width="200" height="200">
                </a>
            </div>
            <form action="posts" method="get">
            <div class="d-flex justify-content-center align-items-center">
                <div class="ps-1">
                    <input type="text" class="form-control cont-place" name="filter" placeholder="Search posts">
                </div>
                <div class="ps-1">
                    <button type="submit" class="btn btn-primary cont-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            </form>
            <div class="d-flex flex-row separator">
                <div class="p-2">
                    <a>
                        <div class="no-circle-div align-items-center">
                            <i class="fa-solid fa-circle-plus icono-house"></i>
                        </div>
                    </a>
                </div>
                <div class="p-2">
                    <a>
                        <div class="no-circle-div align-items-center">
                            <i class="fa-solid fa-comment-dots icono-house"></i>
                        </div>
                    </a>
                </div>
                <div class="p-2">
                    <a href="/">
                        <div class="no-circle-div align-items-center">
                            <i class="fa-solid fa-arrow-right-from-bracket icono-house"></i>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </nav>

    <div class="bg-titles">
        <div class="container">
            <p class="post-info">14 Total posts</p>
        </div>
        <div class="container">
            <div class="row row-cols-auto grid_gaps">
                <a href="">
                    <div class="card" style="width: 18rem;">
                        <img src="img/selfie3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Primera Imagen</h5>
                            <p class="card-text">Alguen save komo funciona esta app ?</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa-solid fa-user"></i> Pepe57</li>
                            <li class="list-group-item"><i class="fa-solid fa-font-awesome"></i>Text</li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="card" style="width: 18rem;">
                        <img src="img/selfie2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Not so warm...</h5>
                            <p class="card-text">Today we have reached 40 degrees, the truth is that it is nice to program</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa-solid fa-user"></i> Rookie Coder</li>
                            <li class="list-group-item"><i class="fa-solid fa-font-awesome"></i> Image</li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="card" style="width: 18rem;">
                        <img src="img/selfie1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Selfie with friends</h5>
                            <p class="card-text">We have made a route through the galaxy and we have had some beers</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa-solid fa-user"></i> DarthVady</li>
                            <li class="list-group-item"><i class="fa-solid fa-font-awesome"></i> Text</li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="card" style="width: 18rem;">
                        <img src="img/scene1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enjoying life</h5>
                            <p class="card-text">Nature is something splendid who would have told me how much I like it</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa-solid fa-user"></i> Plant Friend</li>
                            <li class="list-group-item"><i class="fa-solid fa-font-awesome"></i> Image</li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="card" style="width: 18rem;">
                        <img src="img/no-image.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">calidad</h5>
                            <p class="card-text">La mayor mentira que he escuchado decir a un programador es: "Ahora debería funcionar"</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa-solid fa-user"></i> Rookie Coder</li>
                            <li class="list-group-item"><i class="fa-solid fa-font-awesome"></i> Text</li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="card" style="width: 18rem;">
                        <img src="img/code1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">My code...</h5>
                            <p class="card-text">No text</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa-solid fa-user"></i> Rookie Coder</li>
                            <li class="list-group-item"><i class="fa-solid fa-font-awesome"></i> Image</li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="msg-cont shadow">
        <i class="fa-solid fa-comment-dots"></i>
        Messages
    </div>
</div>
</template>
<script>
export default {



}
</script>
<style scoped>
    * {
    box-sizing: border-box;
    /* background-color: #f8f9fa; */
    }
    body, html {
    height: 100%;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    /* background-color: #8E1FB5; */
    }
    .bg-titles {
    font-weight: bold;
    position: absolute;
    z-index: 2;
    top: 15%;
    width: 100%;
    padding-top: 20px;
    padding-bottom: 10px;
    text-align: center;
    }
    .post-info{
    text-align: left;
    margin-left: -12px;
    padding-bottom: 15px;
    font-size: 18px;
    }
    .main-text{
    font-size: 50px;
    }
    .separator{
        padding-right: 30px;
    }

    .cont-place{
        width: 210px;
        height: 35px;
    }
    .cont-in{
        width: 90px;
        height: 35px;
    }
    .cont-out{
        width: 90px;
        height: 35px;
    }
    .cont-guest{
        width: 220px;
        height: 35px;
    }
    .cont-guest-label{
    height: 35px;
    }
    .cont-search{
        width: 50px;
        height: 35px;
        background: linear-gradient(135deg, #3458B6 0%,#349FB6 30%,#8E1FB5 100%);
    }

    .contenedor-image{
    margin-left: 50px;
    }
    .logo-left{
    float: right;
    margin-top: -45px;
    margin-bottom: -52px;
    }
    .content-form{
    width: 100%;
    position: relative;
    float: left;
    }
    .no-circle-div{
    height: 70px;
    width: 70px;
    background-color: transparent;
    border: 2px solid transparent;
    border-radius: 50%;
    display: inline-block;
    text-align: center;
    }
    .icono-house{
    padding-top: 14px;
    height: 24px;
    font-size: 33px;
    color: #302F2F;
    }
    .grid_gaps {
    column-gap: 50px;
    row-gap: 30px;
    }
    .card {
    text-align: left;
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
    border-radius: 6px;
    color:#333333;
    border: none;
    background-color: transparent;
    }
    .card img {
    max-height: 220px;
    object-fit: contain;
    width: auto;
    margin-bottom: auto;
    margin-top: 1em;
    filter: drop-shadow(2px 4px 6px black);
    }
    a{
    text-decoration: none;
    color: white;
    padding: 0 !important;
    margin: 0 !important;
    }
    a:hover{
    text-decoration: none;
    color: white;
    padding: 0 !important;
    margin: 0 !important;
    }
    .msg-cont{
        position: fixed;
        bottom: 0;
        right: 200px;
        height: 40px;
        width:280px;
        background-color: white;
        border-radius: 15px 15px 0px 0px;
        text-align: left;
        padding-left: 10px;
        padding-top: 10px;
        cursor: pointer;
    }
    li{
        background-color: transparent;
    }

</style>
