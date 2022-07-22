<div class="navbar bg-base-100 px-6 sm:px-12 fixed top-0 z-10 opacity-80">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="/">Homepage</a></li>
        <li><a href="{{ Route('blog') }}">Blog</a></li>
        <li><a href="{{ Route('portofolio') }}">Portfolio</a></li>
        <li><a href="{{ Route('about') }}">About</a></li>
      </ul>
    </div>
  </div>
  <div class="navbar-center">
    <p>
      <svg width="50" height="50" viewBox="0 0 537 310" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M184.825 0C220.34 0 248.607 11.5968 269.626 34.7905C291.008 57.6218 301.699 89.1507 301.699 129.377V306.591H209.287V141.88C209.287 121.586 204.032 105.821 193.522 94.5867C183.013 83.3523 168.879 77.735 151.121 77.735C133.364 77.735 119.23 83.3523 108.72 94.5867C98.2107 105.821 92.9559 121.586 92.9559 141.88V306.591H0V3.2616H92.9559V43.4881C102.378 30.0793 115.062 19.5697 131.008 11.9592C146.954 3.98641 164.893 0 184.825 0Z" fill="white"/>
      <path d="M536.545 3.2616V306.591H443.589V265.278C434.167 278.687 421.302 289.559 404.994 297.894C389.048 305.867 371.29 309.853 351.721 309.853C328.527 309.853 308.051 304.779 290.294 294.632C272.536 284.123 258.765 269.083 248.98 249.513C239.195 229.944 234.303 206.931 234.303 180.476V3.2616H326.715V167.973C326.715 188.267 331.97 204.032 342.479 215.266C352.989 226.501 367.123 232.118 384.88 232.118C403 232.118 417.315 226.501 427.825 215.266C438.334 204.032 443.589 188.267 443.589 167.973V3.2616H536.545Z" fill="white"/>
      </svg>
    </p>
  </div>
  <div class="navbar-end">
    <input type="checkbox" class="toggle rounded-full bg-neutral text-neutral" id="theme-toggle" >
  </div>
</div>