# gutenberg-animated-counter

This is a set of example files to create a custom Gutenberg block for Wordpress. The block includes the use of ACF fields (fields PHP included) for admin ease as this was originally intended for a time-sensitive project. Please see the included screenshot - Counter-final-screenshot.png - for a reference of what this block would look like using the current code in a working example. 

The counters are generated and column width is automatically decided using a custom column layout implemented into the theme. This is based on admin conditions and the amount of statistics to be displayed. This layout is also responsive.

Each number is animated to count from 0 with an admin accessible duration parameter and other options to customise the display. The project has also been structured to work with a conditional scroll option which checks the block position in the viewport and will only run if the block is in view. The particle system in the background has been layered in and is also animated / interactive using the particlesjs library - https://vincentgarreau.com/particles.js/ 

The included .SCSS is the written version pre compilation and is usually compiled into a distribution folder using npm to package it.

The project is also usually broken down with the .JS and .SCSS in an /assets directory, Block Class in /theme/blocks directory, Block View in /theme/views. This would normally ensure that code is kept tidy and broken down as is displayed in this repo, however the normal use of /theme/views/ allows for the internal components of the block to be used outside of Gutenberg as well and will work immediately on any post or page that included the required ACF fields. 
