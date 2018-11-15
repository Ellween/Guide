<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,300i,400,400i,600,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>

      <div class="header">
        @include('includes/_header')
      </div>

        <main>
          @yield('content')
        </main>


      <div class="footer">
        {{-- @include('includes/_footer') --}}
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function(){
              var section_2 = $(".section_2").position();
              var section_3 = $(".section_3").position();
          $('.wat').click(function(){
            $('html, body').animate({
                  scrollTop: section_2.top
                }, 800);
                return false;
          });



            $('.menu-li-home, .logo').click(function(){
              $('html, body').animate({
                  scrollTop: $('body').scrollTop(),
                }, 800, function(){
                });
                  });

            $('.menu-li-location').click(function(){
              $('html, body').animate({
                    scrollTop: section_3.top
                  }, 800);
                  return false;
            });

            });

            $(document).ready(function(){

              $('.form_name input').on({
                focus: function(){
                  $(this).prev().addClass('active');
                },
                blur: function(){
                  $(this).prev().removeClass('active');
                }
              })


            });



      </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
