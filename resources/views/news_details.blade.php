@extends('layouts.app')

@section('title', 'News Intelligence')

@push('styles')
<style>

.news-details{
background:#050b0f;
color:#e6edf3;
min-height:100vh;
}

.back-feed{
color:#9aa4af;
text-decoration:none;
font-size:13px;
letter-spacing:.05em;
}

.back-feed:hover{
color:#ffffff;
}

.news-category{
display:inline-block;
background:#0f5132;
color:#00ff9c;
font-size:12px;
padding:6px 12px;
border-radius:6px;
margin-right:10px;
text-transform:uppercase;
}

.news-date{
color:#6b7280;
font-size:13px;
}

.news-title{
font-size:46px;
font-weight:700;
line-height:1.2;
margin-top:20px;
margin-bottom:20px;
}

.news-meta{
border-top:1px solid rgba(255,255,255,.08);
border-bottom:1px solid rgba(255,255,255,.08);
padding:15px 0;
display:flex;
align-items:center;
justify-content:space-between;
}

.news-source{
font-size:14px;
color:#9aa4af;
}

.news-actions .btn{
margin-left:10px;
}

.news-image img{
width:100%;
border-radius:10px;
margin-top:25px;
max-height:500px;
object-fit:cover;
}

.news-body{
margin-top:30px;
font-size:18px;
line-height:1.8;
color:#c9d1d9;
}

.btn-intel{
background:#00d68f;
border:none;
color:black !important;
padding: 7px;
}

.btn-intel:hover{
background:#00ffa6;
}

</style>
@endpush


@section('content')

<section class="news-details py-5">

<div class="container">

<a href="/" class="back-feed">
← BACK TO FEED
</a>

<div class="mt-3">

<span class="news-category" id="newsCategory">Investment</span>

<span class="news-date" id="newsDate"></span>

</div>

<h1 class="news-title" id="newsTitle"></h1>


<div class="news-meta">

<div class="news-source">
Originally published by <span id="newsSource"></span>
</div>

<div class="news-actions">

<a id="newsLink" target="_blank" class="btn btn-intel btn-sm">
    <i class="bi bi-arrow-up-right-square me-1"></i>
    View Original
</a>

<button class="btn btn-outline-light btn-sm" onclick="shareArticle()">
    <i class="bi bi-share me-1"></i>
    Share
</button>


</div>

</div>


<div class="news-image">
<img id="newsImage"/>
</div>


<div class="news-body" id="newsDescription">
</div>


</div>

</section>

@endsection


@push('scripts')

<script>

const article = JSON.parse(localStorage.getItem('selectedNews'));

if(article){

document.getElementById('newsTitle').innerText = article.title;

document.getElementById('newsDescription').innerText =
article.description || "No description available.";

document.getElementById('newsSource').innerText =
article.source || "Unknown";

document.getElementById('newsImage').src =
article.image || 'https://via.placeholder.com/1200x600';

document.getElementById('newsLink').href =
article.url;

document.getElementById('newsCategory').innerText =
Array.isArray(article.category) ? article.category[0] : article.category;

document.getElementById('newsDate').innerText =
article.published ? new Date(article.published).toLocaleString() : '';

}

function shareArticle(){

navigator.clipboard.writeText(window.location.href);

alert("Article link copied.");

}

</script>

@endpush