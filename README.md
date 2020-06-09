# Boiler WP

## Built-In Functions
- `e-reader-only` class 
	- *(see [#e-readers-text](#e-readers-text))*
- skip to main content btn *(see [#skip-to-main-content-btn](#skip-to-main-content-btn))*
- IE-friendly grid *(see [#ensuring-ie-styling](#ensuring-ie-styling))*
- search highlight *(see [#search-highlight](#search-highlight))*
- top bar search toggles with btn
- top bar hides on scroll down, shows on scroll up
- cookies function + cookie banner *(see [#cookies](#cookies))*
- custom theme options in the customizer *(see [#the-customizer](#the-customizer))*

## JS Actions
- When changing the state of an element with js use class names such as `is-open`, `is-hiding`, `is-fixed` to show/describe the change of state
- Elements that are targeted by js should have a duplicated class name with the addtiona of `js--` in front. An example of that is `clas-name js--class-name`, this way the scss will not get cluttered with the addtional `js--` and it is easier for a dev to see what elements within the html are targeted by js. This being said if there is a popup and a popup button, you only need to add the addtional `js--` to the button, which is the trigger. 


## Accessibility

### E-readers text
The global class `e-reader-only` will visually hide anything it is attached to but still allows an e-reader to get the content in order of the html. Best used on `div` or `span` tags

### Skip to main content btn
Part of Context's accessibility standards is to insure we have a working *Skip to Main Content* btn for e-readers. Within the header this button is included. It currently is set up to skip the top-bar and go to the html element with the id of `main-content`. It is citical that this is working on every template. 


## Ensuring IE Styling
- After the closing div of every `row` insure you add a div with the class `clear-float`
- The grid scss file is already set up to work so do not edit it unless necessary
- Duplicate the mixins, typography and variables from /src/styles/globals to src/ie-styles/globals
- Make the apportiate adjustments within the correct scss files/folders 


## The Customizer
Currently built into the customer are the following items:
- **Footer lgeal customization**: This allows you to currently edit the privacy policy page, terms of conditions and the copyright statment. In the theme's customizer you can edit this under: `customizing -> context custom panel -> miscellaneous settings`. If you wish to edit this in the code by editing/adding/removing options you can do by editing `includes/customizer/misc.php`. If you would like to echo any of these custom options within the theme look up `the_permalink( get_theme_mod() )` function. – The current example of these ones are in the `footer.php` file
- **Social links customization**: This allows you to currently edit the social media links in `customizing -> context custom panel -> social settings`. If you wish to edit this in the code by editing/adding/removing options you can do by editing `includes/customizer/social.php`. If you would like to echo any of these custom options within the theme look up `the_permalink( get_theme_mod() )` function. – The current example of these ones are in the `partials/reusables/social-links.php` file


## Cookies
Within `assets/scr/scripts/partials/cookies.js` you will find reusable functions to creating cookies. Use the `getCookie()` and the `acceptCookie()` functions to create cookies for anything you need. **Note:** if you use cookies you much include a banner saying so, along with a privacy policy page. This page is typically created by the client's legal team and should be pointed out as a task for the client early in the project. 


## Search Highlight
At the bottom of the search php page you will find a script. *It is required to be there due to the direct php we are echoing into the js.* At the very bottom of it you will see that the `highlightSearchedTerm()` is being called and passing through the elements that the function needs to look through. I have it set particularly like that so the page doesn't crash go through every element on it. Update the elements to adjust to your theme's html markup.
