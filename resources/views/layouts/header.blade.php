<section>
    <ul>
        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">home</a></li>
        <li><a href="/about" class="{{ request()->is('about/*') ? 'active' : '' }}">about</a></li>
    </ul>

</section>