@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="display-3 text-center">О нас</h1>
    <div class="row mb-4 mt-4">
        <div class="col-md-6">
            <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
        </div>
        <div class="col-md-6">
            <h3>В чем состоит наш успех?</h3>
            <p class="lead text-justify">
                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
            </p>
            <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>Nulla volutpat aliquam velit</li>
                <li>Faucibus porta lacus fringilla vel</li>
                <li>Aenean sit amet erat nunc</li>
                <li>Eget porttitor lorem</li>
            </ul>
        </div>
        <div class="col-md-12">
            <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis consectetur leo. Mauris a nisi placerat, malesuada sapien sed, efficitur urna. Ut rhoncus ante sit amet sodales mollis. Sed ante lorem, malesuada nec diam malesuada, scelerisque sodales nulla. Nunc ac sem urna. Phasellus pulvinar, elit non commodo lobortis, metus libero cursus turpis, sit amet vulputate metus lorem non nisi. Cras id nulla urna.
                Donec ullamcorper varius mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis dolor at orci luctus lobortis viverra ut nulla. Etiam a vulputate quam. Pellentesque eget ipsum fermentum, vulputate sem finibus, aliquam massa. Nulla euismod cursus cursus. Morbi ut lacus et metus pharetra aliquam eget et metus. Nam pellentesque eu tellus vel varius. Quisque eu mauris eget eros tempus fermentum vel et metus.
            </p>
        </div>
    </div>
</div>

@endsection