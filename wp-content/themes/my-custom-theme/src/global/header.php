<header class="mx-5 max-w-7xl xl:mx-auto">
    <div class="py-10 border-b border-gray-500 grid grid-cols-3">
        <div class="flex gap-5 justify-start items-center">
            <button class="btn-outline-primary flex items-center gap-2 group/svg-menu">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20px"
                    height="20px"
                    viewBox="0 0 1024 1024"
                    class="icon fill-primary group-hover/svg-menu:fill-secondary"
                    version="1.1"
                >
                    <path d="M109.632 673.664h519.68c25.152 0 45.568-22.016 45.568-48.896 0-26.88-20.416-48.896-45.568-48.896h-519.68c-25.216 0-45.632 22.016-45.632 48.896 0 26.88 20.48 48.896 45.632 48.896z m0-228.096h519.68c25.152 0 45.568-21.952 45.568-48.896 0-26.88-20.416-48.896-45.568-48.896h-519.68c-25.216 0-45.632 22.016-45.632 48.896 0 26.88 20.48 48.896 45.632 48.896z m3.264-219.904h795.776c26.88 0 50.56-20.352 51.328-47.168A48.896 48.896 0 0 0 911.104 128H115.328c-26.88 0-50.56 20.416-51.328 47.168a48.896 48.896 0 0 0 48.896 50.56z m619.776 447.232V348.672L960 510.784l-227.328 162.112c0 0.768 0 0.768 0 0z m178.432 122.944H115.328c-26.88 0-50.56 20.48-51.328 47.232a48.896 48.896 0 0 0 48.896 50.496h795.776c26.88 0 50.56-20.416 51.328-47.232a48.896 48.896 0 0 0-48.896-50.496z"/>
                </svg>
                Menu
            </button>
            <a type="button" class="btn-outline-primary flex items-center gap-1 group/svg-shop" href="<?php echo site_url() . '/shop'; ?>">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30px"
                    height="30px"
                    viewBox="0 0 25 25"
                    class="icon
                        stroke-primary group-hover/svg-shop:stroke-secondary
                        fill-secondary group-hover/svg-shop:fill-primary"
                >
                    <path d="M8.5 10.5H5L6.5 19.5H18.5L20 10.5H16.5M8.5 10.5L10.2721 5.18377C10.4082 4.77543 10.7903 4.5 11.2208 4.5H13.7792C14.2097 4.5 14.5918 4.77543 14.7279 5.18377L16.5 10.5M8.5 10.5H16.5" stroke-width="1.2"/>
                    <path d="M12.5 10.5V19.5" stroke-width="1.2"/>
                    <path d="M9.5 19.5L8.5 10.5" stroke-width="1.2"/>
                    <path d="M15.5 19.5L16.5 10.5" stroke-width="1.2"/>
                    <path d="M19.5 13.5H5.5" stroke-width="1.2"/>
                    <path d="M19 16.5H6" stroke-width="1.2"/>
                </svg>
                Shop
            </a>
            <button class="btn-outline-primary flex items-center gap-1 group/svg-search">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20px"
                    height="20px"
                    viewBox="0 0 24 24"
                    class="icon
                        stroke-primary group-hover/svg-search:stroke-secondary
                        fill-secondary group-hover/svg-search:fill-primary"
                >
                    <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Search
            </button>
        </div>
        <div class="flex justify-center items-center">
            <a href="<?php echo site_url(); ?>">
                <h1 class="text-3xl font-extrabold text-primary leading-normal">Logo<span class="text-accent">Here</span></h1>
            </a>
        </div>
        <div class="flex gap-5 justify-end items-center">
            <button id="toggle-theme-btn" class="btn-primary">
                <h1>Toggle</h1>
            </button>
            <a type="button" class="btn-outline-primary flex gap-2 items-center group/svg-cart" href="<?php echo site_url() . '/cart'; ?>">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20px"
                    height="20px"
                    viewBox="0 0 24 24"
                    class="icon
                        stroke-primary group-hover/svg-cart:stroke-secondary
                        fill-secondary group-hover/svg-cart:fill-primary"
                >
                    <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Cart
            </a>
        </div>
    </div>
</header>