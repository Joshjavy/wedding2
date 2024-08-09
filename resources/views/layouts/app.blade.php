<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <meta name="csrf-token" content ="{{ csrf_token() }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/agent.js','resources/js/actions.js'])
    <style>
      @font-face {
        font-family: 'SOUTH_CATALONIA';
        font-style: normal;
        font-weight: 400;
        src: url('{{ asset('font/SOUTH_CATALONIA.OTF') }}') format('truetype');
    }

      body {
        font-family: "Poppins", sans-serif;
        font-weight: 300;
        font-style: normal;
        color: #606060!important;
        font-size: 1rem;
      }

      .titulo{
      font-family: 'SOUTH_CATALONIA' ;
      color: #95977F;
    }
    .color{
      color: #95977F;
    }
    .Botones{
      font-family: "Poppins", sans-serif;
        font-weight: 300;
        font-style: normal;
        color: #95977F!important;
        font-size: .9rem;
    }
    .item .emblema{
      max-width: 85%!important;
      margin: auto;
      min-width: 50%!important;
    }

    .fade {
    opacity: 0;
    transition: all .8s ease;
}

  .fade.visible {
    opacity: 1;
  }

  /* Extra small devices (phones, 600px and down) */
  @media only screen and (min-width: 300px) {
    .imagemb{
      height: 100vh;
    }
    .divhojasmb{
      position: relative;
      le
      
    }
    .divhojastop{
      position: relative;
      z-index: 100;
      width: 60%;
      float: right;
      right: -2%;
    }
    .hojasbtbm{
      display:block;
    }
    .hojasbtDS{
      display:none;
    }
    .divhojasdesk{
      display:none;
    }
    .hojasbottom{
      width: 50%;
    }
      .hojastopmb{
        width: 50%;
        margin-top:1%;
      }
      .info{
        padding-top:7rem;
        /* padding-bottom:5rem; */
        width: 100%;
        margin: auto!important;
      }
      .emblema{
        width: 76%;
        margin: auto;
      }
    }


  /* Small devices (portrait tablets and large phones, 600px and up) */
  @media only screen and (min-width: 600px) {
    .imagemb{
      height: 100vh;
    }
    .divhojasmb{
      display:block;
    }
    .divhojastop{
      position: relative;
      z-index: 100;
      width: 60%;
      float: left;
    }
    .divhojasdesk{
      display:none;
    }
    .hojasbtbm{
      display:block;
      width: 80%;
    }

    .divhojasbtn{
      left:-51%;
    }
    .hojasbtDS{
      display:none;
    }

    .hojastopmb{
        width: 10%;
      }
      .info{
        padding-top:12rem;

        width:90%;
        margin: auto!important;
    }
    .emblema{
      width: 76%;
      margin: auto;
    }
  }
/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 700px) {
    .imagemb{
      height: 100vh;
    }
    .divhojasmb{
      display:block;
    }
    .divhojasdesk{
      display:none;
    }
    .hojasbtbm{
      display:block;
      
    }
    .divhojasbtn{
      left:-40%;
    }
    .hojasbtDS{
      display:none;
    }

    .hojastopmb{
        width: 10%;

      }
      .info{
        padding-top:14rem;
        /* padding-bottom:5rem; */
        width:90%;
        margin: auto!important;
        left: 50%;
        translate: -50%;
    }
    .emblema{
      width: 76%;
      margin: auto;
    }
  }
  @media only screen and (min-width: 761) {
    .imagemb{
      height: 100vh;
    }
    .divhojasmb{
      display:block;
    }
    .divhojasdesk{
      display:none;
    }
    .hojasbtbm{
      display:block;
    }
    .divhojasbtn{
      left:-40%;
    }
    
    .hojasbtDS{
      display:none;
    }

    .hojastopmb{
        width: 10%;
      }
      .info{
        padding-top:14rem;
        /* padding-bottom:5rem; */
        width:90%;
        margin: auto!important;
    }
    .emblema{
      width: 76%;
      margin: auto;
    }
  }

  @media only screen and (min-width: 787px) {
    .imagemb{
      height: 100vh;
    }
    .divhojasmb{
      display:block;
    }
    .divhojastop{
      position: relative;
      z-index: 100;
      width: 60%;
      float: right;
      right: -2%;
    }
    .divhojasdesk{
      display:none;
    }
    .hojasbtbm{
      display:block;
      width: 40%;
    }
    .divhojasbtn{
      left:-0%;
    }
    .hojasbtDS{
      display:none;
    }
    .hojastopmb{
        width: 50%;
        margin-top:1%;
      }
    .info{
      padding-top:18rem;
      /* padding-bottom:5rem; */
      width: 100%;

    }
    .emblema{
      width: 76%;
      margin: auto;
    }
  }

  /* Large devices (laptops/desktops, 992px and up) max-height: 59rem; */
  @media only screen and (min-width: 992px) {
    .imagebg{
      height: 100vh;
    }
    .divhojasmb{
      display: block;
    }
    .hojasbtbm{
      display:block;
    }
    .divhojastop{
      position: relative;
      z-index: 100;
      width: 60%;
      float: right;
      right: -2%;
    }
    .divhojasbtn{
      left:-45%;
    }
    .hojasbtDS{
      display:block;
      float: right; right:-33%;
    }
    .divhojasdesk{
      display: block;
    }
    .hojastopds{
      width:35%;
    }
    .hojasbottompds{
      width:25%;
    }
    .info{
      /* padding-bottom:5rem; */
      padding-top:9rem;
      width: 60%;
      left: 50%;
      translate: -50%;

    }
    .emblema{
      width: 76%;
      margin: auto;
    }

  }

  /* Extra large devices (large laptops and desktops, 1200px and up) max-height: 59rem; */
  @media only screen and (min-width: 1024px) {
    .imagebg{
      height: 100vh;
    }
    .divhojasmb{
      position: relative;
      right: 0%;
      float: right;
    }
    .divhojastop{
      
      position: relative;
      z-index: 100;
      width: 60%;
      float: right;
    }
    .divhojasdesk{
      display: none;
    }
    .hojasbtbm{
      display:block;
      position: relative;

    }
    .divhojasbtn{
      left: -50%;
    }
    .hojasbtDS{
      display:block;
    }
    .hojastopds{
      width: 38%;
    }
    .hojasbottompds{
      width:18%;
    }
    .hojasbtDS{
      float: right; right:-50%;
    }
    .info{
      width: 50%;
      /* top:-250px; */
      /* z-index: 77; */
      left: 50%;
      translate: -50%;
    }
    .emblema{
      width: 76%;
      margin: auto;
    }

  }
  @media only screen and (min-width: 1200) {
    .hojasbtbm{
      display:block;
      position: relative;

    }
    .divhojasbtn{
      left: -50%;
    }
    
  }
  .info{
    padding-bottom: 0%;
  }
  .pagecontent{
    margin: auto;
    overflow-x: hidden;
    overflow-y: scroll;
  }
  .pagecontent::-webkit-scrollbar {
    width:.4em;
}

.pagecontent::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0);
}

.pagecontent::-webkit-scrollbar-thumb {


}
  </style>
  @yield('hscript')
  </head>
  <body class="bg-gray-100 text-gray-800">


    @yield('content')
    @include('sweetalert::alert')
    @vite(['resources/js/actions.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @yield('script')

    <script>
      $(document).ready(function() {
        let h = $(window).height();
        let hif=h-2;
        let w =$(window).width();
        if(w<=1023){
          $('.imagebg').addClass("hidden" )
          $('.imagemb').removeClass("hidden" )
          $('.imagemb').css({'height':h+'px'})
          $('.imagemb').css({'width':w+'px'})
          //hojas
          // $('.divhojasmb').removeClass("hidden" )
          // $('.divhojasdesk').addClass("hidden" )

          // $('.hojasbtbm').removeClass("hidden" )
          // $('.hojasbtDS').addClass("hidden" )
          $('.pagecontent').css({'height':hif+'px'})


        }else if(w>= 1024){
          $('.imagebg').removeClass("hidden" )
          $('.imagemb').addClass("hidden" )
          //hojas
          // $('.divhojasmb').addClass("hidden" )
          // $('.divhojasdesk').removeClass("hidden" )

          // $('.hojasbtbm').addClass("hidden" )
          // $('.hojasbtDS').removeClass("hidden" )

          $('.pagecontent').css({'height':hif+'px'})


        }

        $(window).on('resize', function(){
          let win = $(this);

          if (win.height() <=1023) {
            $('.imagebg').addClass("hidden" )
            $('.imagemb').removeClass("hidden" )
            $('.imagemb').css({'height':h+'px'})
            $('.imagemb').css({'width':w+'px'})
            $('.pagecontent').css({'height':hif+'px'})


            //hojas
          // $('.divhojasmb').removeClass("hidden" )
          // $('.divhojasdesk').addClass("hidden" )

          // $('.hojasbtbm').removeClass("hidden" )
          // $('.hojasbtDS').addClass("hidden" )


          }else{



            $('.imagebg').removeClass("hidden" )
            $('.imagemb').addClass("hidden" )
            $('.imagebg').width=win.width()
            $('.imagebg').height=win.height()
            $('.pagecontent').height=win.height()


            //hojas
            // $('.divhojasmb').addClass("hidden" )
            // $('.divhojasdesk').removeClass("hidden" )

            // $('.hojasbtbm').addClass("hidden" )
            // $('.hojasbtDS').removeClass("hidden" )
          }

      });
    });
    </script>
  </body>
</html>
