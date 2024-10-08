@extends('layouts.app')

@section('title')Home @endsection

@section('header')
    @parent
    <p>Доп текст для главной страницы</p>
@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet fermentum leo, et ornare urna. Suspendisse scelerisque et risus at auctor. Cras orci erat, maximus vel convallis in, scelerisque at elit. Quisque lacinia massa ut lacus dapibus, eu lacinia leo bibendum. Phasellus accumsan eros cursus purus varius, a porttitor augue aliquam. Etiam vestibulum malesuada sapien, in sollicitudin erat aliquet ut. 
        Duis malesuada ipsum lacus, in sollicitudin eros aliquam in. Nullam egestas nisl pharetra ornare ullamcorper. Curabitur eleifend, arcu consectetur condimentum porta, arcu est malesuada arcu, non congue leo diam et diam. Sed ultrices magna ut orci tristique tincidunt. Sed arcu lectus, ultricies quis convallis sit amet, varius ut dui. Donec nisl purus, maximus sed nibh vel, cursus rhoncus nisl. 
        Duis elementum, nulla eget pretium pulvinar, eros nisi sodales enim, vitae vulputate mauris odio quis dui. Ut at arcu at turpis suscipit sodales ac condimentum ipsum. Aliquam elementum odio non maximus commodo. Suspendisse non tincidunt nisi, a vestibulum purus.
        Aliquam nec tempus risus. Etiam imperdiet lacus in augue laoreet, eget efficitur nunc lobortis. Nam sem tortor, ullamcorper a nulla porttitor, euismod fermentum ante. Sed convallis dui a lorem semper, a sodales ante fringilla. Ut vestibulum vitae libero eu luctus. Vivamus pulvinar placerat dui at finibus. Maecenas sed suscipit lacus, a convallis est. Aliquam et turpis at sem vulputate rhoncus. Donec at auctor urna. 
        Suspendisse arcu arcu, finibus vel vulputate id, tincidunt quis dolor. Integer luctus nibh at dui accumsan, et suscipit libero mattis. Quisque pellentesque, justo eget imperdiet vulputate, nisl diam congue elit, non iaculis est lacus nec dui. Sed id leo eu diam lobortis fringilla.</p>
@endsection