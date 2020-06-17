# Boiler WP


---


## Index
- [Built-In Functions](#built-in-functions)
- [JS Actions](#js-actions)
- [Accessibility](#accessibility)
	- [E-readers text](#e-readers-text)
	- [Skip to Main Content Btn](#skip-to-main-content-btn)
	- [Accessible Cards](#accessible-cards)
- [Ensuring IE Styling](#ensuring-ie-styling)
- [The Customizer](#the-customizer)
	- [Footer Lgeal Customization ](#footer-lgeal-customization)
	- [Social Links Customization](#social-links-customization)
	- [Back to Top Btn](#back-to-top-btn-customization)
- [Accordions](#accordions)
- [Tooltips](#tooltips)
- [Smooth Scroll](#smooth-scroll)
- [Cookies](#cookies)
- [Search Highlight](#search-highlight)


---


## Built-In Functions
- `e-reader-only` class
- skip to main content btn
- IE-friendly grid
- search highlight
- top bar search toggles with btn
- top bar hides on scroll down, shows on scroll up
- mobile navigation with base styled hamham trigger
- cookies function + cookie banner
- custom theme options in the customizer
- custom footer options in the customerizer
- custom social options in the customerizer
- back to top btn w/ customerizer toogle
- accordion js functionality (not wp enabled)
- accessible cards
- smooth scroll
- page navigation
- tooltips


---


## JS Actions
- When changing the state of an element with js use class names such as `is-open`, `is-hiding`, `is-fixed` to show/describe the change of state
- Elements that are targeted by js should have a duplicated class name with the addtiona of `js--` in front. An example of that is `clas-name js--class-name`, this way the scss will not get cluttered with the addtional `js--` and it is easier for a dev to see what elements within the html are targeted by js. This being said if there is a popup and a popup button, you only need to add the addtional `js--` to the button, which is the trigger. 


---


## Accessibility

### E-readers Text
The global class `e-reader-only` will visually hide anything it is attached to but still allows an e-reader to get the content in order of the html. Best used on `div` or `span` tags

#### E-readers Text Example

```html
<span class="e-reader-only">Only e-readers can see this copy</span>
```

### Skip to Main Content Btn
Part of Context's accessibility standards is to insure we have a working *Skip to Main Content* btn for e-readers. Within the header this button is included. It currently is set up to skip the top-bar and go to the html element with the id of `main-content`. It is citical that this is working on every template. 

#### Skip to Main Content Btn Example

```html
<a class="e-reader-only" href="#main-content">Skip to main content</a>
```

### Accessible Cards
Accessible card (or block links) have been placed in the `partials/posts/content-excerpt.php` file as well as in the `assets/src/scripts/scripts.js` file. Accessible cards also have it's own scss file withing `assets/src/styles/partials/__accessible-cards.scss`. This scss file is **not for styling individual** card types. Individual card types should live in files such as `__post-card.scss`. To make a card accessible there are two html elements that are required:
1. The card container
2. A single link within the container

The card container should have:
- an id; example: `id="post-<?php the_ID(); ?>"`
- the classes `accessible-card js--accessible-card`

The single link within the container should have:
- the attr `accessible-card-link` set to match the card container's id; example `accessible-card-link="post-<?php the_ID(); ?>"`
- the classes `accessible-card__link js--accessible-card__link`

You do not need to add additional aria tags or other attrs to the card container or the card. 
Again, it's **important** not to use the accessible card classes as style elements, but rather only when an element should be a block link.

#### Accessible Card Example

```html
<li id="post-<?php the_ID(); ?>"  <?php post_class( 'post-card accessible-card js--accessible-card' ); ?> >
	<h1>Title Placement<h1>
	<p>Copy Placement...</p>
	<a href="<?php the_permalink(); ?>" class="post-card__link accessible-card__link js--accessible-card__link" accessible-card-link="post-<?php the_ID(); ?>">Link</a>
</li>
```


---


## Ensuring IE Styling
- After the closing div of every `row` insure you add a div with the class `clear-float`
- The grid scss file is already set up to work so do not edit it unless necessary
- Duplicate the mixins, typography and variables from /src/styles/globals to src/ie-styles/globals
- Make the apportiate adjustments within the correct scss files/folders 


---


## The Customizer
Currently built into the customer are the following items:

### Footer Lgeal Customization 
This allows you to currently edit the privacy policy page, terms of conditions and the copyright statment. In the theme's customizer you can edit this under: `customizing -> context custom panel -> footer settings`. If you wish to edit this in the code by editing/adding/removing options you can do by editing `includes/customizer/footer.php`. If you would like to echo any of these custom options within the theme look up `the_permalink( get_theme_mod() )` function. – The current example of these ones are in the `footer.php` file

### Social Links Customization
This allows you to currently edit the social media links in `customizing -> context custom panel -> social settings`. If you wish to edit this in the code by editing/adding/removing options you can do by editing `includes/customizer/social.php`. If you would like to echo any of these custom options within the theme look up `the_permalink( get_theme_mod() )` function. – The current example of these ones are in the `partials/reusables/social-links.php` file

### Back to top btn customization
Within the customizer a client can toggle the back to top btn on or off within `customizing -> context custom panel -> miscellaneous settings`. If you wish to edit this in the code by removing this option you can do by editing `includes/customizer/misc.php`. If you would like to echo any of these custom options within the theme look up `the_permalink( get_theme_mod() )` function. – The current example of these ones are in the `partials/reusables/back-top-top.php` file


---


## Accordions
There is a reusable file you can call within a loop when you want to add an accordion. The path to this reusable is: `partials/reusables/accordion.php`. This is currently not set up to hook into WP's admin area.

It is important that each accordion has the following attrs set as unique strings:
- the trigger should have a unique id
- the pannel should have a unique id
- the trigger's aria-controls should match the pannel's id
- the pannel's aria-labelledby should match the trigger's id

Here is an example of the accordion html markup
```html
<div class="accordion" style="padding: 30px; font-size: 16px; background: firebrick;">
    <button id="accordion-1-btn" class="accordion__trigger js--accordion__trigger" aria-expanded="false" aria-controls="accordion-id-1">Accordion One
        <span class="e-reader-only">Open Accordion</span>
    </button>
    <div id="accordion-id-1" class="accordion__panel" role="region" aria-labelledby="accordion-1-btn" hidden="true" aria-hidden="true" focusable="false">
        <p>Accordion One: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</div>
```


---


## Tooltips
Tooltips can either be buttons or inline text. The reusable is file is set up in `partials/reusables/tooltip.php`.

It is important that each tooltip has the following attrs set as unique strings:
- the trigger should have a unique id
- the pannel should have a unique id
- the trigger's aria-controls should match the pannel's id
- the pannel's aria-labelledby should match the trigger's id

Here is an example of the tooltip button (default file):
```html
<span class="tooltip" style="background: khaki;">
	<button id="tooltip-2-btn" class="tooltip__trigger tooltip__trigger--btn js--tooltip__trigger" aria-expanded="false" aria-controls="tooltip-id-2">Tooltip Btn</button>
	<span id="tooltip-id-2" class="tooltip__panel" role="tooltip" aria-labelledby="tooltip-2-btn" hidden="true" aria-hidden="true" focusable="false">Tooltip copy placement.</span>
</span>
```

To convert a tooltip to be inline, simply swap the class `tooltip__trigger--btn` for `tooltip__trigger--inline`


---


## Smooth Scroll
To activate smooth scroll you need a button/link and an element with an id. 
```html
<button scroll="placement-id">Scroll to placement id</button>
<h1 id="placement-id">Placement ID Title</h1>
```

*Note: You can use this for the page navigation: `partials/reusables/nav-page.php`*


---


## Cookies
Within `assets/scr/scripts/partials/cookies.js` you will find reusable functions to creating cookies. Use the `getCookie()` and the `acceptCookie()` functions to create cookies for anything you need. **Note:** if you use cookies you much include a banner saying so, along with a privacy policy page. This page is typically created by the client's legal team and should be pointed out as a task for the client early in the project. 


---


## Search Highlight
At the bottom of the search php page you will find a script. *It is required to be there due to the direct php we are echoing into the js.* At the very bottom of it you will see that the `highlightSearchedTerm()` is being called and passing through the elements that the function needs to look through. I have it set particularly like that so the page doesn't crash go through every element on it. Update the elements to adjust to your theme's html markup.
