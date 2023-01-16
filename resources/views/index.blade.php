@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<div class="container">
    <header class="headernav">
        <a href="#" class="logo">WIKBOOK</a>
        <nav class="navbar">
            <li class="homenav">HOME</li>
            <li>BOOKS</li>  
            <li>CONTACT</li>
            <li>LOGIN</li>
        </nav>
    </header>
    <img src="assets/img/gradient.png" class="gradient" alt="">
    <div class="desk">
        <p class="welcome">Welcome to</p>
        <p class="wikbooks">Wikrama Books</p>
        <p class="desk1 desk1-atas">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet, quo tenetur quasi amet asperiores eaque blanditiis voluptatum eos maxime. Soluta sunt distinctio consequuntur ipsum dignissimos quisquam sapiente voluptates libero. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur nulla, doloremque illo ipsa iste et sunt quibusdam voluptates sequi est necessitatibus veniam dicta. Optio dignissimos sit iste! Quos, perferendis officiis.</p>
        <p class="howto">How to</p>
        <p class="borrow">Borrow</p>
        <p class="desk1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab itaque tenetur praesentium dicta at nihil, totam voluptatem amet beatae quibusdam accusantium et repellat iste, dolorem doloribus quia. Sit, distinctio nobis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic labore, dicta laboriosam incidunt provident reprehenderit culpa consequuntur molestiae ex, rerum impedit ipsa, sequi suscipit id modi placeat aperiam facere perspiciatis!</p>
        <p class="desk1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam excepturi veritatis ipsa debitis! Repellat quae excepturi omnis dignissimos aut exercitationem alias sapiente voluptate quaerat. Sunt repellendus ipsa aliquam laborum recusandae! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus amet sit dignissimos velit, qui fuga, fugiat quas, culpa ratione et labore doloribus magnam aperiam neque a ea accusamus ab placeat!</p>
    </div>
    <p class="title-1">SUPPORTED BY</p>
    <div class="container2">
        <div class="gramed"><img src="assets/img/gramedia.png" alt=""></div>
        <div class="gramed"><img src="assets/img/books.png" alt=""></div>
        <div class="gramed"><img src="assets/img/wikrama.png" alt=""></div>
        <div class="gramed"><img src="assets/img/microsoft.png" alt=""></div>
        <div class="gramed"><img src="assets/img/google.png" alt=""></div>
    </div>
    <footer>
        <div class="footercoi">
            <div class="footlogo">
                <div class="ea">
                    <div class="anak-ea"></div>
                </div>
                <div class="eaa"></div>
            </div>
            <div class="foot1">
                <ul>
                    <p class="special-1"><b>Latest Books</b></p>
                    <li><a href="/books/latest">Atomic Habits</a></li>
                    <li><a href="/books/latest">The Hunger Games</a></li>
                    <li><a href="/books/latest">To Kill a Mockbird</a></li>
                    <li><a href="/books/latest">1984</a></li>
                    <li><a href="/books/latest">Freakonomics</a></li>
                </ul>
            </div>
            <div class="foot2">
                <ul>
                    <p class="special-2"><b>Pages</b></p>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/tos">Terms of Use</a></li>
                    <li><a href="/privacypolicy">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="foot3">
                <ul>
                    <p class="special-3"><b>Pages</b></p>
                    <li><a href="/">Home</a></li>
                    <li><a href="/books">Books</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

@endsection