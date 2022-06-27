<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation" style="background:#0A0D21">
        <div class="container">
            <a class="navbar-brand logo-text" href="/" style="color:#FFF; text-shadow:#33b3f5 1px 0 10px">Word Sanctuary Global </a> 

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <router-link class="nav-link active" to="/">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/pages/about">About Us</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/pages/media">Online Church</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/pages/events">Events</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/pages/contact">Contact</router-link>
                    </li>
                </ul>
                <span class="nav-item">
                    <router-link to="/pages/givings" class="btn-solid-sm">Givings</router-link>
                </span>
            </div>
        </div>
    </nav>