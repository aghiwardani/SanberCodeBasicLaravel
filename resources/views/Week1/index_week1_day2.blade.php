<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <style>
        body {
            background: url("/img/pattern.jpg");
            width: 100%;
            /* padding: none; */
            margin: 0px;
            padding-top: 70px;
        }
        header{
            position: fixed;
            top: 0px;
            background-color: white;
            width: 100%;
            /* padding: 0%; */
        }
        header nav{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
        }
        header nav ul{
            /* position: fixed; */
            list-style-type: none;
            /* margin: 0;
            padding: 0; */
        }
        header nav ul li{
            /* position: fixed; */
            float: right;
            /* display: block; */
            margin: 10px 10px 10px 10px;
        }
        section{
            background-color: white;
            width: 70%;
            margin: 0 auto;
        }
        section h1{
            text-align: center;
        }
        footer{
            background-color: black;
            color: white;
            /* margin: 0 auto; */
            height: 30px;
            margin: auto;
            padding: 15px;
            text-align: center;
        }
        footer h5{
            margin: 0 auto;
        }
        article{
            margin: 40px 5px 5px 5px;
            border-bottom: outset;
        }
    </style>
  </head>
  <body>
    <header>
      {{-- <img id="logo" src="{{url('/')}}/img/logo.png}}" width="200px" /> --}}
      <img id="logo" src="{{URL::asset('/img/logo.png')}}" width="15%" />

      <nav>
        <ul>
          <a href="#"><li>Home</li></a>
          <a href="#"><li>About</li></a>
          <a href="#"><li>Contact</li></a>
        </ul>
      </nav>
    </header>
    <section>
      <h1>Featured Posts</h1>
      <div id="article-list">
        <article>
          <a href=""><h3>Lorem Post 1</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
        <article>
          <a href=""><h3>Lorem Post 2</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
        <article>
          <a href=""><h3>Lorem Post 3</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
        <article>
          <a href=""><h3>Lorem Post 4</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
        <article>
          <a href=""><h3>Lorem Post 5</h3></a>
          <p>
            Lorem Ipsum Dolor Sit Amet, mea te verear signiferumque, per illum labores ne. Blandit omnesque scripserit pri ex, et pri dicant eirmod deserunt. Aeque perpetua ea nec. Sit erant patrioque delicatissimi ut. Et sea quem sint, nam in minim voluptatibus. Etiam placerat eam in.
          </p>
        </article>
      </div>
    </section>
    <footer>
      <h5>copyright &copy; 2019 by Sanbercode</h5>
    </footer>
  </body>
</html>