# Boiler WP


---


## Index
- [Built-In Functions](#built-in-functions)
- [Naming Conventions](#naming-conventions)
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
- [Footnotes](#footnotes)
- [Smooth Scroll](#smooth-scroll)
- [Cookies](#cookies)
- [Search Highlight](#search-highlight)
- [Breadcrumbs](#breadcrumbs)


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
- page navigation (not wp enabled)
- tooltips (not wp enabled)
- footnotes (not wp enabled)
- breadcrumbs


---


## Naming Conventions
The naming convention for this site is heavily based off of [BEM](https://css-tricks.com/bem-101/). Below is an example of how the name convention should be used.

### CSS Breakdown

```css
/* Block Element */
.card {}

/* Element Dependent on Block Element */
.card__title {}

/* Modifier That Changes Base Element */
.btn {
    &--large {}
}
```

### HTML Breakdown

```html
/* Block Element */
class="card"

/* Element Dependent on Block Element */
class="card__title"

/* Modifier That Changes Base Element */
class="btn btn--large"
```

### JS Actions
- When changing the state of an element with js use class names such as `is-open`, `is-hiding`, `is-fixed` to show/describe the change of state
- Elements that are targeted by js should have a duplicated class name with the addtiona of `js--` in front. An example of that is `clas-name js--class-name`, this way the scss will not get cluttered with the addtional `js--` and it is easier for a dev to see what elements within the html are targeted by js. This being said if there is a popup and a popup button, you only need to add the addtional `js--` to the button, which is the trigger. 

```html
<!-- Before Interacted with -->
class="accordion__trigger js--accordion__trigger"

<!-- After Interacted with -->
class="accordion__trigger js--accordion__trigger is-open"
```

### Comments
Comments should help keep the code clean and easy to scan. All comments should be the same base. Below are examples.

```html
<!-- Comment Placement
============================================= -->
```

```php
/* Comment Placement
============================================= */
```

```css
/* Comment Placement
============================================= */
```

```js
/* Comment Placement
============================================= */
```


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
Tooltips can either be buttons or inline text. The reusable is file is set up in `partials/reusables/tooltip.php`. This is currently not set up to hook into WP's admin area.

It is important that each tooltip has the following attrs set as unique strings:
- the trigger should have a unique id
- the pannel should have a unique id
- the trigger's aria-controls should match the pannel's id
- the pannel's aria-labelledby should match the trigger's id

Here is an example of the tooltip button:
```html
<span class="tooltip" style="background: khaki;">
	<button id="tooltip-2-btn" class="tooltip__trigger tooltip__trigger--btn js--tooltip__trigger" aria-expanded="false" aria-controls="tooltip-id-2">Tooltip Btn</button>
	<span id="tooltip-id-2" class="tooltip__panel" role="tooltip" aria-labelledby="tooltip-2-btn" hidden="true" aria-hidden="true" focusable="false">Tooltip copy placement.</span>
</span>
```

To convert a tooltip to be inline, simply swap the class `tooltip__trigger--btn` for `tooltip__trigger--inline`


---


## Footnotes
Footnotes a set up in a reusable located `partials/reusables/footnote.php`. This is currently not set up to hook into WP's admin area.

It is important that each footnote has the following attrs set as unique strings:
- the trigger should have a unique id
- the pannel should have a unique id
- the trigger's aria-controls should match the pannel's id
- the pannel's aria-labelledby should match the trigger's id
- the close btn's `content-panel` should match the pannel's id
- the close btn's `content-trigger` should match the trigger's id

Here is an example of a footnote:
```html
<div class="footnote" style="padding: 30px; font-size: 16px; background: thistle;">
    <button id="footnote-1-btn" class="footnote__trigger js--footnote__trigger" aria-expanded="false" aria-controls="footnote-id-1">Footnote One
        <span class="e-reader-only">Open footnote</span>
    </button>
    <div id="footnote-id-1" class="footnote__panel" role="region" aria-labelledby="footnote-1-btn" hidden="true" aria-hidden="true" focusable="false">
    	<div>
	        <p>Footnote One: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac lectus est.</p>
	    </div>
        <button class="footnote__close-btn" content-panel="footnote-id-1" content-trigger="footnote-1-btn">
        	<span><span class="e-reader-only">Close footnote</span></span>
			<span></span>
        </button>
    </div>
</div>
```

*Note: Essentially the footnote currently is a button that triggers a popover*


---


## Smooth Scroll
To activate smooth scroll you need a button/link and an element with an id. 
```html
<button scroll="placement-id">Scroll to placement id</button>
<h1 id="placement-id">Placement ID Title</h1>
```

*Note: You can use this for the page navigation: `partials/reusables/nav-page.php`. Page nav should be placed outside of the `<main>` tag.*


---


## Cookies
Within `assets/scr/scripts/partials/cookies.js` you will find reusable functions to creating cookies. Use the `getCookie()` and the `acceptCookie()` functions to create cookies for anything you need. **Note:** if you use cookies you much include a banner saying so, along with a privacy policy page. This page is typically created by the client's legal team and should be pointed out as a task for the client early in the project. 


---


## Search Highlight
At the bottom of the search php page you will find a script. *It is required to be there due to the direct php we are echoing into the js.* At the very bottom of it you will see that the `highlightSearchedTerm()` is being called and passing through the elements that the function needs to look through. I have it set particularly like that so the page doesn't crash go through every element on it. Update the elements to adjust to your theme's html markup.


___


## Breadcrumbs
Breadcrumbs will echo out the parent levels, or corresponding page titles. To echo breadcumbs simply place the code snippet `<?php breadcrumbs(); ?>`. Currently this code snippet is being called in all headers. To access the breadcrumb function go to `includes/front/breadcrumbs.php`. 

*Accessibility Note: the separators are created using sudo elements becuase e-readers will try and read them otherwise.* 

