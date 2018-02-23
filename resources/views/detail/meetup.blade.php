@component('layouts.app')
    <header class="overflow-hidden">
        <div style="background-image: url('https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=1950&q=80'); filter: grayscale(1);" class="header-top | bg-brand-color-red mb-24 pt-12 pb-48 text-white">
            <div class="m-auto w-grid">
                <nav class="flex justify-end | bt:justify-between">
                    <img class="header-logo | w-12 z-10" src="/images/logo-filled.svg" alt="PHP Antwerp" />
                    <h1 class="leading-less w-full | bt:w-auto">
                        <span class="font-normal text-3xs tracking-wider uppercase">PHP Antwerp</span>
                        <br />
                        <span class="font-text text-xs tracking-normal">All in the same boat since 2015</span>
                    </h1>
                    <ul class="flex font-heading font-normal items-center justify-between text-3xs tracking-wider uppercase w-4/9">
                        <li><a class="menu-item" href="#general-info">general <span class="menu-item-large">info</span></a></li>
                        <li><a class="menu-item" href="#speakers-subjects">speakers <span class="menu-item-large">and subjects</span></a></li>
                        <li><a class="menu-item" href="#images">images</a></li>
                    </ul>
                </nav>
                <section class="flex justify-center mt-16">
                    <h4 class="leading-tight text-5xl">
                        <span class="font-light text-3xs tracking-wide">#12 — 21 december 2016</span>
                        <br />
                        hosted by MCS
                    </h4>
                </section>
            </div>
            <div class="header-bottom | absolute h-24 pin-b w-full">
                <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon class="header-polygon" points="0, 0 0, 100 100, 100">
                </svg>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div id="general-info" class="m-auto mb-24 w-grid">
                <hr>
                <h2>General info</h2>
                <div class="mt-16 | md:flex">
                    {{-- left section --}}
                    <div class="w-full | md:pr-4 md:w-1/3">
                        <div class="image image-shadow image-small | hidden mb-6 | md:block">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                        </div>
                        <div class="image image-shadow | hidden | md:block">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                        </div>
                        <div class="my-6">
                            <h3>
                                Some
                                <br class="hidden | md:block" />
                                details
                            </h3>
                            <p class="mt-6 text-xs">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                    </div>
                    {{-- middle section --}}
                    <div class="w-full | md:mt-40 md:px-2 md:w-1/3">
                        <div class="my-6">
                            <h3>
                                Meetup
                                <br class="hidden | md:block" />
                                location
                            </h3>
                            <p class="mt-6 text-xs">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                        <div class="image image-shadow | hidden | md:block">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                        </div>
                        <div class="image image-shadow image-small | hidden mt-6 | md:block">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                        </div>
                    </div>
                    {{-- right section --}}
                    <div class="w-full | md:w-1/3 md:mt-24 md:pl-4">
                        <div class="image image-shadow | hidden | md:block">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                        </div>
                        <div class="my-6">
                            <h3>
                                Sponsor
                                <br class="hidden | md:block" />
                                us
                            </h3>
                            <p class="mt-6 text-xs">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="overflow-hidden">
            <div id="past-meetups" class="m-auto mb-24 w-grid">
                <hr>
                <h2>Speakers and subjects</h2>
                <div class="mt-16 | md:flex">
                    <div class="w-full | md:w-1/2">
                        <img class="break-out break-out-left image-shadow | w-full" src="https://images.unsplash.com/photo-1507081323647-4d250478b919?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0fa4d3f142cecc5b16f59f21f8630923&auto=format&fit=crop&w=1000&q=80" alt="event 12" />
                        <div class="mt-8 | md:mr-8">
                            <h4 class="leading-tight text-3xl">
                                <span class="font-light text-3xs tracking-wide">Alfred E. Neumann</span>
                                <br />
                                on Laravel
                            </h4>
                            <div class="flex mt-8 text-xs">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 w-full | md:w-1/2 md:mt-0">
                        <img class="break-out image-shadow | mt-8 w-full" src="https://images.unsplash.com/photo-1474176857210-7287d38d27c6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5deb261ae9b9799a30f929c724286bed&auto=format&fit=crop&w=1950&q=80" alt="event 12" />
                        <div class="mt-8 | md:ml-8">
                            <h4 class="leading-tight text-3xl">
                                <span class="font-light text-3xs tracking-wide">Vince Geraldi</span>
                                <br />
                                about ES6
                            </h4>
                            <div class="flex mt-8 text-xs">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="participate" class="m-auto mb-24 w-grid">
                <hr>
                <h2>Images</h2>
                <div style="--cols: repeat(2, 1fr);" class="grid grid-rows mt-16 gap-8 | md:grid-cols">
                    <div class="image image-shadow">
                        <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                    </div>
                    <div class="image image-shadow">
                        <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                    </div>
                    <div class="image image-shadow">
                        <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                    </div>
                    <div class="image image-shadow">
                        <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                    </div>
                    <div class="image image-shadow">
                        <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                    </div>
                    <div class="image image-shadow">
                        <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="overflow-hidden">
        <div class="footer-bottom | bg-brand-color-black mt-24 pt-48 pb-24 text-white">
            <div class="footer-top | absolute h-24 pin-t w-full">
                <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon class="footer-polygon" points="0, 0 100, 0 100, 100">
                </svg>
            </div>
            <img class="watermark watermark-footer | w-full" src="/images/footer-bg.svg" />
            <div class="m-auto w-grid">
                <section>
                    <div style="--cols: repeat(3, 1fr);" class="grid gap-8 | md:grid-cols">
                        <div class="footer-content">
                            <div class="max-w-2xs">
                                <img class="absolute h-full w-full" src="https://research.vu.nl/files-asset/9682727/Pasfoto_KLBatenburg.jpg" alt="persona">
                            </div>
                            <p class="ml-4">
                                <span>Alfred E. Neumann</span>
                                <br />
                                @alfredeneumann
                            </p>
                        </div>
                        <div class="footer-content">
                            <div class="max-w-2xs">
                                <img class="absolute h-full w-full" src="https://research.vu.nl/files-asset/9682727/Pasfoto_KLBatenburg.jpg" alt="persona">
                            </div>
                            <p class="ml-4">
                                <span>Alfred E. Neumann</span>
                                <br />
                                @alfredeneumann
                            </p>
                        </div>
                        <div class="footer-content">
                            <div class="max-w-2xs">
                                <img class="absolute h-full w-full" src="https://research.vu.nl/files-asset/9682727/Pasfoto_KLBatenburg.jpg" alt="persona">
                            </div>
                            <p class="ml-4">
                                <span>Alfred E. Neumann</span>
                                <br />
                                @alfredeneumann
                            </p>
                        </div>
                    </div>
                </section>
                <section class="my-16">
                    <div class="footer-icons">
                        <img src="/images/icon.svg" alt="icon" />
                        <img src="/images/icon.svg" alt="icon" />
                        <img src="/images/icon.svg" alt="icon" />
                        <img src="/images/icon.svg" alt="icon" />
                        <img src="/images/icon.svg" alt="icon" />
                        <img src="/images/icon.svg" alt="icon" />
                        <img src="/images/icon.svg" alt="icon" />
                        <img src="/images/icon.svg" alt="icon" />
                        <img src="/images/icon.svg" alt="icon" />
                        <img src="/images/icon.svg" alt="icon" />
                    </div>
                </section>
            </div>
        </div>
    </footer>
@endcomponent
