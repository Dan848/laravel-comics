<header class="container d-flex justify-content-between align-items-center fw-bold">
    <div class="py-3">
        <img src="/img/dc-logo.png" alt="Logo DC">
    </div>
    <div class="py-3">
        <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-3 m-0 p-0">
            @foreach ($database["headerLinks"] as $link)
                <li class="text-uppercase mx-2">
                    <a href="#">{{ $link["text"] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>

