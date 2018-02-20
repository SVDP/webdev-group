@component('layouts.app')
    <header>
        <div id="header-top" class="bg-brand-color-red pt-12 pb-24 text-white">
            <img id="header-logo" class="absolute w-12" src="./images/bg-filled.svg" alt="PHP Antwerp" />
            <div class="m-auto w-grid">
                <nav class="flex justify-between">
                    <h1 class="w-5/9">
                        <span class="font-light text-3xs tracking-wider uppercase">PHP Antwerp</span>
                        <br />
                        <span class="font-text text-xs tracking-normal">All in the same boat since 2015</span>
                    </h1>
                    <ul class="flex font-heading font-light items-center justify-between text-3xs tracking-wider uppercase w-4/9">
                        <li><a class="menu-item" href="#">upcoming events</a></li>
                        <li><a class="menu-item" href="#">past events</a></li>
                        <li><a class="menu-item" href="#">participate</a></li>
                    </ul>
                </nav>
                <section class="mt-16 text-xs">
                    <hr class="bg-white">
                    <div class="flex space-between">
                        <h2 style="flex-basis: 15rem;" class="flex-none text-base">
                            About PHP
                            <br />
                            Antwerp
                        </h2>
                        <p>
                            PHP ANTWERP is not just a bunch of guys with a 21"inch laptop, pony tails and black tshirts. A rhoncus cursus nisi non eleifend.<br />
                            Proin laoreet lacinia imperdiet. Aliquam posuere a magna sit amet blandit. Mauris eu orci urna. Phasellus ac ligula a neque eleifend suscipit a sit amet tortor. A rhoncus cursus nisi non eleifend. Proin laoreet lacinia imperdiet.
                        </p>
                    </div>
                    <div class="flex space-between mt-8">
                        <h2 style="flex-basis: 15rem;" class="flex-none text-base">Get in touch</h2>
                        <p>
                            info@phpantwerp.be
                            <br />
                            @phpantwerp
                        </p>
                        <p>
                            github.com/phpantwerp
                            <br />
                            meetup.be/phpantwerp
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <div id="header-bottom" class="h-24 w-full">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="0, 0 100, 0 100, 100">
            </svg>
        </div>
    </header>
    <main>
        <section>
            <div id="upcoming-meetups" class="m-auto py-24 w-grid">
                <hr>
                <h2>
                    Upcoming
                    <br />
                    meetups
                </h2>
                <ul class="mt-16">
                    <li>
                        <div class="border-b border-brand-color-lighter-grey flex items-center justify-between list-item py-8">
                            <div class="font-medium font-heading text-xl text-brand-color-lighter-grey">
                                #13
                            </div>
                            <div class="font-heading font-light text-3xs text-brand-color-grey uppercase">
                                <span>Monday 13 februari 2017</span>
                                <br />
                                19h00
                            </div>
                            <div>
                                <button class="button" type="button" name="button">I want to give a talk</button>
                            </div>
                            <div>
                                <button class="button" type="button" name="button">I can help with a venue</button>
                            </div>
                            <div>
                                <button class="button" type="button" name="button">Join</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="border-b border-brand-color-lighter-grey flex items-center justify-between list-item py-8">
                            <div class="font-medium font-heading text-xl text-brand-color-lighter-grey">
                                #14
                            </div>
                            <div class="font-heading font-light text-3xs text-brand-color-grey uppercase">
                                <span>Tuesday 14 februari 2017</span>
                                <br />
                                19h00
                            </div>
                            <div class="">
                                <p class="text-xs">
                                    Alfred E. Neumann, Vince Geraldi
                                </p>
                            </div>
                            <div class="font-heading font-light text-3xs uppercase">
                                <span>Spotcrowd</span>
                                <br />
                                Melkmarkt 3, Antwerp
                            </div>
                            <div>
                                <button class="button" type="button" name="button">Join</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="border-b border-brand-color-lighter-grey flex items-center justify-between list-item py-8">
                            <div class="font-medium font-heading text-xl text-brand-color-lighter-grey">
                                #15
                            </div>
                            <div class="font-heading font-light text-3xs text-brand-color-grey uppercase">
                                <span>Friday 23 March 2017</span>
                                <br />
                                19h00
                            </div>
                            <div class="">
                                <p class="text-xs">
                                    Random name, Another random name
                                </p>
                            </div>
                            <div class="font-heading font-light text-3xs uppercase">
                                <span>Random host</span>
                                <br />
                                Rijnkaai 24, Antwerp
                            </div>
                            <div>
                                <button class="button" type="button" name="button">Join</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center justify-between list-item py-8">
                            <div class="font-medium font-heading text-xl text-brand-color-lighter-grey">
                                #16
                            </div>
                            <div class="font-heading font-light text-3xs text-brand-color-grey uppercase">
                                <span>Wednesday 28 March 2017</span>
                                <br />
                                19h00
                            </div>
                            <div>
                                <p class="text-xs">
                                    Another random name, Another random name
                                </p>
                            </div>
                            <div class="font-heading font-light text-3xs uppercase">
                                <span>Another random host</span>
                                <br />
                                Londenstraat 77, Antwerp
                            </div>
                            <div>
                                <button class="button" type="button" name="button">Join</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <div class="m-auto py-24 w-grid">
                <hr>
                <h2>
                    Past
                    <br />
                    meetups
                </h2>
                <div class="flex mt-16">
                    <div class="w-1/2">
                        <img class="break-out break-out-left" src="https://images.unsplash.com/photo-1518107616985-bd48230d3b20?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a0ef47dbfd623936425d08a198107b3e&auto=format&fit=crop&w=1950&q=80" alt="" />
                        <div class="mt-8 mr-8">
                            <h4 class="leading-tight text-4xl">
                                <span class="font-normal text-3xs tracking-wide">#13 — 21 december 2016</span>
                                <br />
                                hosted by PHPRO
                            </h4>
                            <div class="flex mt-8 space-between">
                                <div class="mr-16">
                                    <h5 class="font-light text-3xs text-brand-color-grey uppercase">Speakers</h5>
                                    <ul class="text-xs">
                                        <li>Alfred E. Neumann</li>
                                    </ul>
                                </div>
                                <div>
                                    <h5 class="font-light text-3xs text-brand-color-grey uppercase">Feedback</h5>
                                    <ul class="text-xs">
                                        <li>Feedback on Meetup</li>
                                        <li>Join.in</li>
                                        <li>GitHub</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <img class="break-out mt-8" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=1950&q=80" alt="" />
                        <div class="mt-8 ml-8">
                            <h4 class="leading-tight text-4xl">
                                <span class="font-normal text-3xs tracking-wide">#13 — 21 december 2016</span>
                                <br />
                                hosted by MCS
                            </h4>
                            <div class="flex mt-8 space-between">
                                <div class="mr-16">
                                    <h5 class="font-light text-3xs text-brand-color-grey uppercase">Speakers</h5>
                                    <ul class="text-xs">
                                        <li>Alfred E. Neumann</li>
                                        <li>Vince Geraldi</li>
                                    </ul>
                                </div>
                                <div>
                                    <h5 class="font-light text-3xs text-brand-color-grey uppercase">Feedback</h5>
                                    <ul class="text-xs">
                                        <li>Feedback on Meetup</li>
                                        <li>Join.in</li>
                                        <li>GitHub</li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<section>
            <div class="m-auto w-grid">
                <hr>
                <h2>Participate</h2>
                <div class="flex">
                    <div class="w-1/3">
                        <div class="square w-2/3">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=1950&q=80" alt="">
                        </div>
                        <div class="square">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=1950&q=80" alt="">
                        </div>
                        <div>
                            <h3>
                                Give
                                <br />
                                a talk
                            </h3>
                            <p class="text-xs">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                    <div class="w-1/3">
                        <div class="square">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=1950&q=80" alt="">
                        </div>
                        <div>
                            <h3>
                                Host
                                <br />
                                a meetup
                            </h3>
                            <p class="text-xs">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="square">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=1950&q=80" alt="">
                        </div>
                        <div class="square w-2/3">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=1950&q=80" alt="">
                        </div>
                    </div>
                    <div class="w-1/3">
                        <div>
                            <h3>
                                Attend
                                <br />
                                a meetup
                            </h3>
                            <p class="text-xs">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="square">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=1950&q=80" alt="">
                        </div>
                        <div>
                            <h3>
                                Sponsor
                                <br />
                                us
                            </h3>
                            <p class="text-xs">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
    </main>
    <!--<footer>
        <div id="footer-top" class="h-24 w-full">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="100, 0 100, 100 0, 100">
            </svg>
        </div>
        <div id="footer-bottom" class="bg-brand-color-black pt-24 pb-12 text-white">
            <div class="m-auto w-grid">
                <section>
                    <div class="">
                        <h2>Organized by</h2>
                        <div class="persona">
                            <img src="https://images.unsplash.com/photo-1504884790557-80daa3a9e621?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f105fd4834aecbe56af935dfb8bec57e&auto=format&fit=crop&w=2734&q=80" alt="" />
                            <p>
                                <span>Alfred E. Neumann</span>
                                <br />
                                @alfredeneumann
                            </p>
                        </div>
                        <div class="persona">
                            <img src="https://images.unsplash.com/photo-1504884790557-80daa3a9e621?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f105fd4834aecbe56af935dfb8bec57e&auto=format&fit=crop&w=2734&q=80" alt="" />
                            <p>
                                <span>Alfred E. Neumann</span>
                                <br />
                                @alfredeneumann
                            </p>
                        </div>
                        <div class="persona">
                            <img src="https://images.unsplash.com/photo-1504884790557-80daa3a9e621?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f105fd4834aecbe56af935dfb8bec57e&auto=format&fit=crop&w=2734&q=80" alt="" />
                            <p>
                                <span>Alfred E. Neumann</span>
                                <br />
                                @alfredeneumann
                            </p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="">
                        <h2>Proudly sponsored by</h2>
                        <img src="" alt="" />
                        <img src="" alt="" />
                        <img src="" alt="" />
                        <img src="" alt="" />
                        <img src="" alt="" />
                        <img src="" alt="" />
                        <img src="" alt="" />
                        <img src="" alt="" />
                        <img src="" alt="" />
                    </div>
                </section>
            </div>
        </div>
    </footer>-->
@endcomponent
