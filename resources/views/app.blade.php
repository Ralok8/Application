<!DOCTYPE html>
<html>
    <head>
        <title>zzezzy</title>
        <link rel="stylesheet" href="/resources/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/resources/css/app.css" type="text/css" />
        
        @if ( isset($fieldType) )
            <link rel="stylesheet" href="/resources/css/fields/{!! $fieldType !!}.css" type="text/css" />
        @endif
        
    </head>
    <body>
        <div class='menu'>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/fields">Fields</a></li>
            </ul>
        </div>
        
        <div class="container">
            @yield('content')
        </div>
    </body>
    
    <script type="text/javascript" src="/resources/js/app.js"></script>
    
    @if ( isset($fieldType) )
        <script type="text/javascript" src="/resources/js/fields/{!! $fieldType !!}.js"></script>
        
        <script>
            window.addEventListener('resize', () => {
                field_resize();
                resizePlayers();
            });
            document.addEventListener('DOMContentLoaded', loadPage);
        </script>
    @endif
    
</html>
