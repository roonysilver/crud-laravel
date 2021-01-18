@php
    $uri = $request->path();
        echo "<br>URI: ".$uri;

        $url = $request->url();
        echo '<br>';

        echo 'URL: '.$url;
        $method = $request->method();
        echo '<br>';

        echo 'Method: '.$method;
@endphp
<p>{{ $name }}</p>