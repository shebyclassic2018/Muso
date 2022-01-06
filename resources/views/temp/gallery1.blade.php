<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">

<title>CSS Grids Gallery</title>
<style>
* { box-sizing: border-box;}

html {
  font-size: 100%;
}

body {
  padding: 1rem;
  font-familiy: Verdana, Geneva, sans-serif;
}

h2 {
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1.5;  
}

p {
  margin: .5rem 0;
  font-size: 1.25rem;
  line-height: 1.5;
}

/* First the Grid */
.gallery-grid {
  display: -ms-grid;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-gap: 1.5rem;
  justify-items: center;
  margin: 0;
  padding: 0;
}

/* The Picture Frame */
.gallery-frame {
  padding: .5rem;
  font-size: 1.2rem;
  text-align: center;
  background-color: #333;
  color: #d9d9d9;
}

/* The Images */
.gallery-img {
  max-width: 100%;
  height: auto;
  object-fit: cover;
  transition: opacity 0.25s ease-in-out;
}

.gallery-img:hover {
  opacity: .7;
}
</style>
</head>
<body>
  <h2>Responsive Image Gallery without Media Queries &ndash; but with CSS Grid Layout</h2>
  <p>This is a simple but effective image gallery styled with CSS Grid Layout and without the use of media queries.</p>
  <p>This gallery is inspired by <a href="https://hankchizljaw.com/wrote/create-a-responsive-grid-layout-with-no-media-queries-using-css-grid/" target="_blank">Andy Bell</a>.</p>
  <div class="gallery-grid">
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=1.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=2.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=3.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=4.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=5.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=6.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=7.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=8.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=9.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=10.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=11.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
    <figure class="gallery-frame">
      <img class="gallery-img" src="https://picsum.photos/230/300?random=12.jpg" alt="symbol image" title="symbol image">
      <figcaption>Image Title</figcaption>
    </figure>
  </div><!-- end:gallery-grid -->
</body>
</html>