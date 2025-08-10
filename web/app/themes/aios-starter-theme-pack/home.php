<?php get_header(); ?>
	
<section class="hero">
    <div class="hero__vid">
        <video autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    
    <div class="hero__overlay"></div>

    <div class="hero__content">
        <div class="hero__content--tagline">
            <h1>real state. <span class="mobile-break">real simple.</span></h1>
            <p>ASCEND Real Estate Group</p>
        </div>

        <div class="hero__content--button">
            <a href="/buying" class="btn">I am buying</a>
            <a href="/selling" class="btn">I am selling</a>
        </div>

    
    </div>
</section>


<section class="search">
    <div class="container">
    <div class="search__icon">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/search-icon.png" alt="">
    </div>

    <div class="search__content">
        <div class="search__content--dropdown">
             <button class="dropdown__toggle">Property Type <img src="<?php echo get_template_directory_uri();?>/assets/images/select-arrow.png" alt=""></button>
                <div class="dropdown__menu">
                    <a href="#">Item 1</a>
                    <a href="#">Item 2</a>
                    <a href="#">Item 3</a>
                </div>

            <button class="dropdown__toggle">Select city / zip <img src="<?php echo get_template_directory_uri();?>/assets/images/select-arrow.png" alt=""></button>
                <div class="dropdown__menu">
                    <a href="#">Item 1</a>
                    <a href="#">Item 2</a>
                    <a href="#">Item 3</a>
                </div>

            <button class="dropdown__toggle">Beds <img src="<?php echo get_template_directory_uri();?>/assets/images/select-arrow.png" alt=""></button>
                <div class="dropdown__menu">
                    <a href="#">Item 1</a>
                    <a href="#">Item 2</a>
                    <a href="#">Item 3</a>
                </div>

            <button class="dropdown__toggle">Baths <img src="<?php echo get_template_directory_uri();?>/assets/images/select-arrow.png" alt=""></button>
                <div class="dropdown__menu">
                    <a href="#">Item 1</a>
                    <a href="#">Item 2</a>
                    <a href="#">Item 3</a>
                </div>


            <button class="dropdown__toggle">min. price <img src="<?php echo get_template_directory_uri();?>/assets/images/select-arrow.png" alt=""></button>
                <div class="dropdown__menu">
                    <a href="#">Item 1</a>
                    <a href="#">Item 2</a>
                    <a href="#">Item 3</a>
                </div>

            <button class="dropdown__toggle">Max. price <img src="<?php echo get_template_directory_uri();?>/assets/images/select-arrow.png" alt=""></button>
                <div class="dropdown__menu">
                    <a href="#">Item 1</a>
                    <a href="#">Item 2</a>
                    <a href="#">Item 3</a>
                </div>
        </div>
    </div>

    <div class="search__button">
        <a href="/search" class="btn">Search</a>
        <a href="/advanced" class="btn">Advanced</a>
    </div>

    </div>
</section>


<section class="performance">
        <h1>proven performance</h1>

        <div class="performance__content">
            <div class="performance__content--sales">
                <h2>$18M+</h2>
                <p>TOTAL SALES <br>VOLUME 2023</p>
            </div>

            <div class="performance__content--sales">
                <h2>$40M+</h2>
                <p>TOTAL SALES <br>VOLUME SINCE 2017</p>
            </div>

            <div class="performance__content--sales">
                <h2>$750K+</h2>
                <p>AVERAGE SALE</p>
            </div>
        </div>
</section>  

<section class="team">
  <div class="team__background">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team.jpg" alt="Team background">
  </div>

  <div class="container">
    <div class="container-1">
        <div class="team__content">
        <h1>Meet <span class="mobile-break">the team</span></h1>
        <p>
            Our team of elite real estate professionals brings unparalleled expertise and a personalized approach to luxury property transactions in Beverly Hills. With years of experience and a deep understanding of the high-end market, we pride ourselves on delivering exceptional service, tailored to the discerning needs of our prestigious clients.
        </p>
        <a href="/learn" class="btn">learn more</a>
        </div>
    </div>

    <div class="container-2">
    <div class="team__slider-group">
      <div id="team-slider" class="splide" aria-label="Team Slider">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Adam-Cooper.jpg" alt="Adam Cooper">
                <div class="team-member__overlay"></div>
                <p class="team-member__name">Adam Cooper</p>
              </div>
            </li>
            <li class="splide__slide" style="width:150px">
              <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Emily-Denver.jpg" alt="Emily Denver">
                <div class="team-member__overlay"></div>
                <p class="team-member__name">Emily Denver</p>
              </div>
            </li>
            <li class="splide__slide"style="width:250px">
              <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Melisa-Taylor.jpg" alt="Melisa Taylor">
                <div class="team-member__overlay"></div>
                <p class="team-member__name">Melisa Taylor</p>
              </div>
            </li>
            <li class="splide__slide"style="width: 200px">
              <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Olivia-Wilson.jpg" alt="Olivia Wilson">
                <div class="team-member__overlay"></div>
                <p class="team-member__name">Olivia Wilson</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="arrows">
        <div class="arrows__arrow" id="team-prev" aria-label="Previous team">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
            <circle cx="40" cy="40" r="39.5" fill="black" fill-opacity="0.3" stroke="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.2197 41.0533C22.9268 40.7604 22.9268 40.2855 23.2197 39.9926L27.9926 35.2197C28.2855 34.9268 28.7604 34.9268 29.0533 35.2197C29.3462 35.5126 29.3462 35.9874 29.0533 36.2803L25.5607 39.773H56.25C56.6642 39.773 57 40.1088 57 40.523C57 40.9372 56.6642 41.273 56.25 41.273H25.5607L29.0533 44.7656C29.3462 45.0585 29.3462 45.5334 29.0533 45.8263C28.7604 46.1192 28.2855 46.1192 27.9926 45.8263L23.2197 41.0533Z" fill="white"/>
            </svg>
        </div>
        <div class="arrows__arrow" id="team-next" aria-label="Next team">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
            <circle cx="40" cy="40" r="39.5" transform="matrix(-1 0 0 1 80 0)" fill="black" fill-opacity="0.3" stroke="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M56.7803 41.0533C57.0732 40.7604 57.0732 40.2855 56.7803 39.9926L52.0074 35.2197C51.7145 34.9268 51.2396 34.9268 50.9467 35.2197C50.6538 35.5126 50.6538 35.9874 50.9467 36.2803L54.4393 39.773H23.75C23.3358 39.773 23 40.1088 23 40.523C23 40.9372 23.3358 41.273 23.75 41.273H54.4393L50.9467 44.7656C50.6538 45.0585 50.6538 45.5334 50.9467 45.8263C51.2396 46.1192 51.7145 46.1192 52.0074 45.8263L56.7803 41.0533Z" fill="white"/>
            </svg>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>


<section class="properties">
    <div class="properties__container">
        <h1 class="properties__title">Featured Properties</h1>

        <div class="properties__list">
            <div class="properties__card">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/property1.png" alt="">
                <div class="properties__description">
                    <p>3975 Rosswell Road, Atlanta, GA 30328</p>
                    <p>$ 7,900,000</p>
                    <p>4 BEDS • 5 BATHS • 14,727 SQFT</p>
                </div>
            </div>

            <div class="properties__card">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/property2.png" alt="">
                <div class="properties__description">
                    <p>2866 RIVERSIDE DRIVE, Sandy Springs, GA 30350</p>
                    <p>$ 5,900,000</p>
                    <p>4 BEDS • 5 BATHS • 14,727 SQFT</p>
                </div>
            </div>

            <div class="properties__card">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/property3.png" alt="">
                <div class="properties__description">
                    <p>3286 Smith Road, Buckhead, GA 30625</p>
                    <p>$ 4,750,000</p>
                    <p>5 BEDS • 4 BATHS • 13,850 SQFT</p>
                </div>
            </div>

            <div class="properties__card">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/property4.png" alt="">
                <div class="properties__description">
                    <p>3975 Rosswell Road, Atlanta, GA 30328</p>
                    <p>$ 4,750,000</p>
                    <p>5 BEDS • 4 BATHS • 13,850 SQFT</p>
                </div>
            </div>
        </div>

        <a href="/more" class="properties__button">View More Properties</a>
    </div>
</section>


<section class="communities">
    <div class="communities__title">
        <h1>Explore Communities</h1>
    </div>

    <div class="communities__cards">
        <div class="communities__cards--card">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/decatur.png" alt="">
            <p>Decatur</p>
        </div>

        <div class="communities__cards--card">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/midtown.png" alt="">
            <p>midtown</p>
        </div>

        <div class="communities__cards--card">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/inman-park.png" alt="">
            <p>inman park</p>
        </div>

        <div class="communities__cards--card">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/buckhead.png" alt="">
            <p>buckhead</p>
        </div>

        <div class="communities__cards--card">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/fourth.png" alt="">
            <p>old fourth ward</p>
        </div>

        <div class="communities__cards--card">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/sandy.png" alt="">
            <p>sandy springs</p>
        </div>
    </div>
</section>


<section id="testimonials-slider" class="splide testimonies" aria-label="Testimonials">
  <div class="container">
    <h1>what our clients <span class="mobile-break">are saying</span></h1>
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <div class="testimonies__comments--card">
            <p>“We can’t thank the Ascend Team enough for helping us find our dream home in Buckhead. It’s exactly what we dreamed it would be – and we didn’t go over our budget! The Ascend Team’s local market knowledge, expertise, and amazing dedication made the whole buying process truly enjoyable. Thank you so much, Ascend!”</p>
            <h4>bryan cooper</h4>
          </div>
        </li>

        <li class="splide__slide">
          <div class="testimonies__comments--card">
            <p>“Working with the Ascend Team was the best decision we made in our home-buying journey. From day one, they listened carefully to our needs, answered every question, and guided us through each step with patience and professionalism. We never felt rushed or pressured—they genuinely cared about helping us find the right place.”</p>
            <h4>Jessica Mendez</h4>
          </div>
        </li>

        <li class="splide__slide">
          <div class="testimonies__comments--card">
            <p>“As first-time homebuyers, we were overwhelmed and unsure of what to expect. But the Ascend Team made everything feel so much easier. They explained the process clearly, kept us updated, and worked tirelessly to negotiate the best deal on our behalf. Their knowledge of the local market gave us confidence, and their dedication gave us peace of mind.”</p>
            <h4>David and Amanda Lee</h4>
          </div>
        </li>

      </ul>
    </div>

    <div class="testimonies__arrows">
      <button class="testimonies__arrows--arrow" id="testimonial-prev" aria-label="Previous testimonial">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="12" viewBox="0 0 34 12" fill="none">
            <path fill="currentColor" fill-rule ="evenodd" clip-rule="evenodd" d="M0.21967 6.0533C-0.0732233 5.76041 -0.0732233 5.28553 0.21967 4.99264L4.99264 0.21967C5.28553 -0.0732234 5.76041 -0.0732234 6.0533 0.21967C6.34619 0.512563 6.34619 0.987437 6.0533 1.28033L2.56066 4.77297H33.25C33.6642 4.77297 34 5.10876 34 5.52297C34 5.93718 33.6642 6.27297 33.25 6.27297H2.56066L6.0533 9.76561C6.34619 10.0585 6.34619 10.5334 6.0533 10.8263C5.76041 11.1192 5.28553 11.1192 4.99264 10.8263L0.21967 6.0533Z" fill="black"/>
            </svg>
      </button>
      <button class="testimonies__arrows--arrow" id="testimonial-next" aria-label="Next testimonial">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="12" viewBox="0 0 34 12" fill="none">
            <path  fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M33.7803 6.0533C34.0732 5.76041 34.0732 5.28553 33.7803 4.99264L29.0074 0.21967C28.7145 -0.0732234 28.2396 -0.0732234 27.9467 0.21967C27.6538 0.512563 27.6538 0.987437 27.9467 1.28033L31.4393 4.77297H0.75C0.335785 4.77297 0 5.10876 0 5.52297C0 5.93718 0.335785 6.27297 0.75 6.27297H31.4393L27.9467 9.76561C27.6538 10.0585 27.6538 10.5334 27.9467 10.8263C28.2396 11.1192 28.7145 11.1192 29.0074 10.8263L33.7803 6.0533Z" fill="black"/>
            </svg>  
      </button>
    </div>

    <div class="testimonies__button">
      <a href="/stories" class="btn">see all success stories</a>
    </div>
  </div>
</section>


<section class="cta">
    <div class="container">
        <div class="cta__card">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/property1.png" alt="">
            
            <div class="cta__card--info">
                <h4>view</h4>
                <h3>listings</h3>
            </div>
        </div>

        <div class="cta__card">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/decatur.png" alt="">
            
            <div class="cta__card--info">
                <h4>view</h4>
                <h3>listings</h3>
            </div>
        </div>

        <div class="cta__card">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/sandy.png" alt="">
            
            <div class="cta__card--info">
                <h4>view</h4>
                <h3>listings</h3>
            </div>
        </div>

    </div>
</section>


<section class="news">
    <div class="news__container">
        
        <div class="news__header">
            <h1>LATEST NEWS</h1>
            <p>Keep on top with latest and exclusive updates from our blog on the Los Angeles real estate world. Ascend Team posts about tips and trends for buyers, sellers, and investors every week. Whether it be about staging your property or a snapshot of the market, this is your one stop shop.</p>

        </div>

        <div class="news__cards">
            <div class="card">
                <div class="card__info">
                    <div class="card__info--image">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/news1.png" alt="">
                    </div>

                    <div class="card__info--description">
                        <h3>Tips for First-Time Homebuyers</h3>
                        <p>Most homebuyers start the process anxious, excited, nervous, and some are downright terrified. It’s natural. A home is the largest and most expensive purchase that most people will make in a lifetime. It can either</p>
                    </div>

                </div>

                <div class="card__info--button">
                    <a href="/read">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card__info">
                    <div class="card__info--image">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/news2.png" alt="">
                    </div>

                    <div class="card__info--description">
                        <h3>Signs that Now is the Time to Sell Your Home</h3>
                        <p>There are many reasons why it may be time to sell your home. You may need more space to make room for a growing family or you need to downsize after your kids leave the nest. Whatever your motivations, you want to make sure that you’re timing it right.</p>
                    </div>

                </div>

                <div class="card__info--button">
                    <a href="/read">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card__info">
                    <div class="card__info--image">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/news3.png" alt="">
                    </div>

                    <div class="card__info--description">
                        <h3>Remodeling Projects That Will Boost Your Home’s Value</h3>
                        <p>There are many reasons why it may be time to sell your home. You may need more space to make room for a growing family or you need to downsize after your kids leave the nest. Whatever your motivations, you want to make sure that you’re timing it right.</p>
                    </div>

                </div>

                <div class="card__info--button">
                    <a href="/read">Read more</a>
                </div>
            </div>
            
        </div>

        <div class="news__button">
            <a href="/post" class="properties__button">View all posts</a>
        </div>
    </div>
</section>


<section class="facebook">
    <div class="container">
        <div class="facebook__header">
            <div class="facebook__header--text">
                <h2>follow us on</h2>
                <h1>facebook</h1>
            </div>          

            <div class="facebook__header--button">
                <a href="/post">see more posts</a>
            </div>
        </div>

        <div class="facebook__posts">   
            <div class="card">
                <div class="card__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/post1.jpg" alt="">
                </div>

                <div class="card__content">
                    <div class="card__content--title">
                        <h4>Agent Image</h4>
                        <h5>POSTED 14 HOURS AGO</h5>
                    </div>

                    <div class="card__content--info">
                        <p>Dallas, here we go! Get ready to level up your real estate game at this year’s Tom Ferry Success ...</p>
                    </div>

                    <div class="card__content--link">
                        <a href="/read">read more</a>
                    </div>
                </div>

            </div>

            <div class="card">
                <div class="card__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/post2.jpg" alt="">
                </div>

                <div class="card__content">
                    <div class="card__content--title">
                        <h4>Agent Image</h4>
                        <h5>POSTED 14 HOURS AGO</h5>
                    </div>

                    <div class="card__content--info">
                        <p>Agent Image goes beyond just building you a real estate agent website; we’re here to help tell...</p>
                    </div>

                    <div class="card__content--link">
                        <a href="/read">read more</a>
                    </div>
                </div>

            </div>

            <div class="card">
                <div class="card__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/post3.png" alt="">
                </div>

                <div class="card__content">
                    <div class="card__content--title">
                        <h4>Agent Image</h4>
                        <h5>POSTED 14 HOURS AGO</h5>
                    </div>

                    <div class="card__content--info">
                        <p>Ready for some real estate inspo?  Meet the top 10 real estate websites for Septem...</p>
                    </div>

                    <div class="card__content--link">
                        <a href="/read">read more</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<section class="instagram">
    <div class="container">
        <div class="instagram__header">
            <div class="instagram__header--text">
                <h2>follow us on</h2>
                <h1>instagram</h1>
            </div>          

            <div class="instagram__header--button">
                <a href="/post">see more posts</a>
            </div>
        </div>

        <div class="instagram__posts">
            <div class="instagram__posts--card">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/insta1.png" alt="">
            </div>

            <div class="instagram__posts--card">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/insta2.png" alt="">
            </div>

            <div class="instagram__posts--card">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/insta3.png" alt="">
            </div>

        </div>
    </div>
</section>


<section class="contact">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/contact.jpg" alt="contact background">
    <div class="container">
        <div class="contact__title">
            <h1>send us <span class="mobile-break">a message</span></h1>
        </div>
        
        <div class="contact__form">
            <div class="contact__form--1">
				<input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
				<input type="email" placeholder="Email">
				<input type="tel" placeholder="Phone">
			</div>
			<div class="contact__form--2">
				<textarea placeholder="Message"></textarea>

                    <label>
                        <input type="checkbox" name="subscribe">
                        Stay in touch with Ascend's exclusive newsletter.
                    </label>
			</div>
        </div>
        
        <div class="contact__button">
            <a href="/submit">submit</a>
        </div>

    </div>
</section>
<?php get_footer(); ?>
