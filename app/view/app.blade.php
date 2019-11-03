<?php app\lib\HTML::csrf(); ?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='Content-Type' content='text/html; charset='utf-8'>
<meta name='description' content='Simple and Sweet framework'>
<meta name='csrf-token' content="{!! app\model\Session::get('csrf') !!}">
<meta name='author' content='TemmyScope'>
<title>{!! BRAND !!} | @yield('title') </title>
<link rel='icon' href='{!! PROOT.FAVICON !!}'>
<script type='application/x-javascript'> 
  addEventListener('load', function(){setTimeout(hideURLbar, 0); }, false); 
  function hideURLbar(){window.scrollTo(0,1);}
</script>
<script src='{!! PROOT."assets/js/app.js" !!}' defer></script>
<link rel='dns-prefetch' href='//fonts.gstatic.com'>
<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
<link href='{!! PROOT."assets/css/app.css" !!}' type='text/css' rel='stylesheet' >
<link href='{!! PROOT."assets/css/custom.css" !!}' type='text/css' rel='stylesheet'>
</head>
<body><div id='app'>

<?= app\lib\HTML::nav(); ?>

<main class='py-4'>
<div class='container'><div class='row justify-content-center'>
<div class='col-md-8'>

@yield('content')

</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body>
</html>