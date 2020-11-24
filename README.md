# gutenberg-animated-counter

This is a set of example files to create a custom Gutenberg block for Wordpress. The block includes the use of ACF fields (fields PHP included) for admin ease as this was originally intended for a time-sensitive project. Please see the included screenshot - Counter-final-screenshot.png - for a reference of what this block would look like using the current code in a working example. 

The counters are generated and column width is automatically decided using a custom column layout implemented into the theme. This is based on admin conditions and the amount of statistics to be displayed. This layout is also responsive.

Each number is animated to count from 0 with an admin accessible duration parameter and other options to customise the display. The project has also been structured to work with a conditional scroll option which checks the block position in the viewport and will only run if the block is in view. The particle system in the background has been layered in and is also animated / interactive using the particlesjs library - https://vincentgarreau.com/particles.js/ 

The included .JS & .SCSS is the written version pre compilation and is usually compiled into a distribution folder using npm.

The project is currently arranged as a list of files for ease of access for this demonstration. Usually, these files are broken down with the .JS and .SCSS in an /assets directory, Block Class in /theme/blocks directory, Block View in /theme/views. This would normally ensure that code is kept tidy, however the normal use of /theme/views/ also allows for the internal components of the block to be used outside of Gutenberg without addtional files and will work immediately in any post or page template that includes the required ACF fields. 
