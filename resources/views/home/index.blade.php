@component('layouts.app')
    <header class="overflow-hidden">
        <div class="header-top | bg-brand-color-red pt-12 pb-24 text-white">
            <img class="watermark watermark-header" src="/images/header-bg.svg" />
            <div class="m-auto w-grid">
                <nav class="flex justify-end | bt:justify-between">
                    <img class="header-logo | w-12 z-10" src="/images/logo-filled.svg" alt="PHP Antwerp" />
                    <h1 class="leading-less w-full | bt:w-auto">
                        <span class="font-normal text-3xs tracking-wider uppercase">PHP Antwerp</span>
                        <br />
                        <span class="font-text text-xs tracking-normal">All in the same boat since 2015</span>
                    </h1>
                    <ul class="flex font-heading font-normal items-center justify-between text-3xs tracking-wider uppercase w-4/9">
                        <li><a class="menu-item" href="#upcoming-meetups">upcoming <span class="menu-item-large">events</span></a></li>
                        <li><a class="menu-item" href="#past-meetups">past <span class="menu-item-large">events</span></a></li>
                        <li><a class="menu-item" href="#participate">participate</a></li>
                    </ul>
                </nav>
                <section class="mt-16 text-xs">
                    <hr class="bg-white">
                    <div style="--cols: 14em auto;" class="header-content">
                        <h2 class="text-base">
                            About PHP
                            <br />
                            Antwerp
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div style="--cols: repeat(3, 14em);" class="header-content | mt-8">
                        <h2 class="text-base">Get in touch</h2>
                        <p>
                            info@phpantwerp.be
                            <br />
                            @phpantwerp
                        </p>
                        <p class="flex-basis-20">
                            github.com/phpantwerp
                            <br />
                            meetup.be/phpantwerp
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <div class="header-bottom | h-24 mb-24 w-full">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon class="header-polygon" points="0, 0 100, 0 100, 100">
            </svg>
        </div>
    </header>
    <main>
        <section>
            <div id="upcoming-meetups" class="m-auto mb-24 w-grid">
                <hr>
                <h2>
                    Upcoming meetups
                </h2>
                <div class="events | mt-16">
                    <div class="event">
                        <div class="flex flex-none">
                            <div class="event-nr">
                                #13
                            </div>
                            <div class="font-heading font-normal text-3xs text-brand-color-grey uppercase">
                                Monday 13 februari 2017
                                <br />
                                19h00
                            </div>
                        </div>
                        <div>
                            <a href="#" class="button">I want to give a talk</a>
                        </div>
                        <div>
                            <a href="#" class="button">I can help with a venue</a>
                        </div>
                        <div>
                            <a href="#" class="button">Join</a>
                        </div>
                    </div>
                    <div class="event">
                        <div class="flex flex-none">
                            <div class="event-nr">
                                #14
                            </div>
                            <div class="font-heading font-normal text-3xs text-brand-color-grey uppercase">
                                Tuesday 14 februari 2017
                                <br />
                                19h00
                            </div>
                        </div>
                        <div>
                            <p class="text-left text-xs">
                                Alfred E. Neumann, Vince Geraldi
                            </p>
                        </div>
                        <div class="font-heading font-normal text-3xs uppercase">
                            Spotcrowd
                            <br />
                            Melkmarkt 3, Antwerp
                        </div>
                        <div>
                            <a href="#" class="button">Join</a>
                        </div>
                    </div>
                    <div class="event">
                        <div class="flex flex-none">
                            <div class="event-nr">
                                #15
                            </div>
                            <div class="font-heading font-normal text-3xs text-brand-color-grey uppercase">
                                Friday 23 March 2017
                                <br />
                                19h00
                            </div>
                        </div>
                        <div>
                            <p class="text-left text-xs">
                                Random name, Another random name
                            </p>
                        </div>
                        <div class="font-heading font-normal text-3xs uppercase">
                            Random host
                            <br />
                            Rijnkaai 24, Antwerp
                        </div>
                        <div>
                            <a href="#" class="button">Join</a>
                        </div>
                    </div>
                    <div class="event">
                        <div class="flex flex-none">
                            <div class="event-nr">
                                #16
                            </div>
                            <div class="font-heading font-normal text-3xs text-brand-color-grey uppercase">
                                Wednesday 28 March 2017
                                <br />
                                19h00
                            </div>
                        </div>
                        <div>
                            <p class="text-left text-xs">
                                Another random name, Another random name
                            </p>
                        </div>
                        <div class="font-heading font-normal text-3xs uppercase">
                            Another random host
                            <br />
                            Londenstraat 77, Antwerp
                        </div>
                        <div>
                            <a href="#" class="button">Join</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="past-meetups" class="m-auto mb-24 w-grid">
                <hr>
                <h2>
                    Past meetups
                </h2>
                <div class="mt-16 | md:flex">
                    <div class="w-full | md:w-1/2">
                        <img class="break-out break-out-left image-shadow" src="https://images.unsplash.com/photo-1518107616985-bd48230d3b20?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a0ef47dbfd623936425d08a198107b3e&auto=format&fit=crop&w=1950&q=80" alt="event #11" />
                        <div class="mt-8 mr-8">
                            <h4 class="leading-tight text-3xl">
                                <span class="font-light text-3xs tracking-wide">#11 — 21 december 2016</span>
                                <br />
                                hosted by PHPRO
                            </h4>
                            <div class="flex mt-8">
                                <div class="mr-8 | md:mr-16">
                                    <h5 class="font-normal text-3xs text-brand-color-grey uppercase">Speakers</h5>
                                    <ul class="text-xs">
                                        <li>Alfred E. Neumann</li>
                                    </ul>
                                </div>
                                <div>
                                    <h5 class="font-normal text-3xs text-brand-color-grey uppercase">Feedback</h5>
                                    <ul class="text-xs">
                                        <li>Feedback on Meetup</li>
                                        <li>Join.in</li>
                                        <li>GitHub</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 w-full | md:w-1/2 md:mt-0">
                        <img class="break-out image-shadow | mt-8" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=1950&q=80" alt="event 12" />
                        <div class="mt-8 | md:ml-8">
                            <h4 class="leading-tight text-3xl">
                                <span class="font-light text-3xs tracking-wide">#12 — 21 december 2016</span>
                                <br />
                                hosted by MCS
                            </h4>
                            <div class="flex mt-8">
                                <div class="mr-8 | md:mr-16">
                                    <h5 class="font-normal text-3xs text-brand-color-grey uppercase">Speakers</h5>
                                    <ul class="text-xs">
                                        <li>Alfred E. Neumann</li>
                                        <li>Vince Geraldi</li>
                                    </ul>
                                </div>
                                <div>
                                    <h5 class="font-normal text-3xs text-brand-color-grey uppercase">Feedback</h5>
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
            </div>
        </section>
        <section>
            <div id="participate" class="m-auto mb-24 w-grid">
                <hr>
                <h2>Participate</h2>
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
                                Give
                                <br class="hidden | md:block" />
                                a talk
                            </h3>
                            <p class="mt-6 text-xs">
                                That's awesome! Head over to the issue list to see if there are still meetups which are looking for a speaker. If none are available, why don't you start your own meetup? We'll gladly help you out! Or perhaps another meetup group in Belgium is still looking for speakers? Definitely go checkout meetup.com.
                            </p>
                        </div>
                    </div>
                    {{-- middle section --}}
                    <div class="w-full | md:px-2 md:w-1/3">
                        <div class="image image-shadow | hidden | md:block">
                            <img class="absolute h-full w-full" src="https://images.unsplash.com/photo-1514302240736-b1fee5985889?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd67c5d168faa96f37e825a562005e12&auto=format&fit=crop&w=1567&q=80" alt="image">
                        </div>
                        <div class="my-6">
                            <h3>
                                Host
                                <br class="hidden | md:block" />
                                a meetup
                            </h3>
                            <p class="mt-6 text-xs">
                                Thanks for helping out! If you want to host a meetup, open up an issue, fill in all the details and we'll get back to you as soon as possible! Or check out the open issues and see which ones still need a venue.
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
                        <div class="my-6">
                            <h3>
                                Attend
                                <br class="hidden | md:block" />
                                a meetup
                            </h3>
                            <p class="mt-6 text-xs">
                                Always welcome! Just confirm your attendance on Meetup so we know how many of you will join us. Definitely go checkout meetup.com.
                            </p>
                        </div>
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
                                We're always actively looking for sponsors to help out so we can pay meetup.com, promotional material and offer some swag to the attendees. If you want to sponsor, send an email to dries.vints@gmail.com and we'll get back to you as soon as possible.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="overflow-hidden">
        <div class="footer-top | h-24 w-full">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon class="footer-polygon" points="100, 100  0, 100 0, 0">
            </svg>
        </div>
        <div class="footer-bottom | bg-brand-color-black pt-24 pb-12 text-white">
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
