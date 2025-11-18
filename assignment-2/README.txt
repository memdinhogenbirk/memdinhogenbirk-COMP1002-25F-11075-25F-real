Not much to put here this time around. Syntax is laiden with annotations explaining why everything is what it is.
Page default zoom is designed to show whole the poster on my browser, size might be slightly smaller or larger for you.
Recommend starting at default zoom, mouse over the different parts of the page, you'll find many elements are anchors.
There are also invisible anchors for popouts. Swing that cursor around, there's six in all.

NOTE: The blade runner font, for whatever reason, appears slightly off in every browser I've used except for firefox. Not enough to ruin the page or anything, but for best viewing experience, if you have firefox, I recommend pasting the github pages link there. If not, then some of the characters will not be fully filled in, but the font will retain it's original shape, size, and position on the page.

Recommend side by siding the page with the original poster image
Here's the link (referenced also on CSS page)
https://static.wikia.nocookie.net/greatestmovies/images/1/11/Bladerunner204917018.jpg/
I aimed to replicate it as best as I possibly could, doing as much as possible with CSS. 
(Get it? Replicate?^ Replicants? Blade Runner?)

I should note, to achieve the snowing effect overlay, I originally googled it, gemini gave me one solution.
Didn't like the solution so I asked grok, which gave me a very similar solution.
Still didn't like it, so I found this https://blog.logrocket.com/css-overlay/ tutorial here. Basically the same method again.
So I attempted to tweak and alter it and find work arounds. In the end, these three were right, and I went back to a variation 
of this method.

Last note, all references for fonts, images, and the information for popouts, are referenced in the CSS and HTML
(respective to their appearance in the syntax)

Full reference list here for good measure.
HEADER GROUP LINKS
https://www.imdb.com/name/nm0331516/
https://www.imdb.com/name/nm0000148/
https://www.youtube.com/watch?v=gCcx85zbxz4

CSS BACKGROUNDS AND OVERLAY + ORIGINAL POSTER
-Left side of html background: https://wallpaper.mob.org/gallery/tag=blade%20runner%202049/
Credit to Blade Runner 2049 (the movie), minor editing to fit done by myself
-Right side of html background: https://www.pinterest.com/pin/529313762456533245/
Unable to find original artist, google lens had no luck finding the original source
-Original Promotional Poster: https://static.wikia.nocookie.net/greatestmovies/images/1/11/Bladerunner204917018.jpg/
-Blank Movie Poster: https://www.pinterest.com/pin/566961040594765620/
Sourced originally from: wallpapers.moviemania.io (link is broken though)
-Snowing Overlay Gif: https://www.pinterest.com/pin/winter-storm-watch-wednesday-more-snow--535224736979013449/

POPOUT IMAGES AND INFO SOURCES
-K Photo: https://hero.fandom.com/wiki/K?file=Joe_blade_runner.webp
-K Information Source: https://bladerunner.fandom.com/wiki/K
-Deckard Photo: https://www.radiotimes.com/movies/blade-runner-2049-harrison-ford-replicant/
-Deckard Information Source: https://bladerunner.fandom.com/wiki/Rick_Deckard
-Joi Photo: https://screenrant.com/ana-de-armas-blade-runner-2049-character-joi/
-Joi Information Source: https://bladerunner.fandom.com/wiki/Joi
-Wallace Photo Source: https://screenrant.com/blade-runner-2049-niander-wallaces-plan-explained/
-Wallace Information Source: https://bladerunner.fandom.com/wiki/Niander_Wallace
-FKM890 Photo: https://crealandia.com/shop/blade-runner-2049-officer-k-blaster-replica-prop/
-FKM890 Information Source: https://bladerunner.fandom.com/wiki/Pfl%C3%A4ger-Katsumata_Series_D_FKM890
-D5223 Photo: https://www.artstation.com/artwork/bll4Ld
-D5223 Information Source: https://bladerunner.fandom.com/wiki/Pfl%C3%A4ger-Katsumata_Series_D_5223

BOTTOM CREDIT LINKS AND IMAGES
https://www.alconent.com/
https://jhmovie.fandom.com/wiki/Columbia_Pictures?file=Columbia_Pictures_logo.svg
https://www.sonypictures.com/
https://logos.fandom.com/wiki/Scott_Free_Productions?file=Scott_Free_Productions.svg#1998-present
https://scottfree.com/
https://en.wikipedia.org/wiki/Motion_Picture_Association
https://www.motionpictures.org/
https://www.stickpng.com/img/icons-logos-emojis/iconic-brands/warner-bros-logo
https://www.warnerbros.com/

FONTS
@font-face{
    /*courtesy of dafont.com https://www.dafont.com/sf-movie-poster.font?
    credit to author ShyFonts http://www.shyfonts.com*/
    font-family: 'SF Movie Poster';
    src: url('../fonts/sf_movie_poster/SF\ Movie\ Poster.ttf') format('truetype');
    /*The readme file said don't change the font names, so I kept the original file name, which unfortunately contains spaces. Hence the backslashes.*/
    }
@font-face{
    /*courtesy of dafont.com https://www.dafont.com/blade-runner-movie-font.font?
    credit to author Phil Steinschneider*/
    font-family: 'BLADRMF_';
    src: url('../fonts/bladerunnerfont/BLADRMF_.TTF') format('truetype');
}
@font-face {
    /*courtest of dafont.com https://www.dafont.com/modern-sans-serif-7.font?
    credit to author Sizenko Alexander http://www.styleseven.com*/
    font-family: 'modern_sans_serif_7';
    src: url('../fonts/sans_serif_7/modern_sans_serif_7.ttf') format('truetype');
}
@font-face {
    /*courtest of dafont.com https://www.cufonfonts.com/font/dimensional
    credit to author Daniel P. Lyons uploader LyonsType_BU*/
    font-family: 'DimensionalBold';
    src: url('../fonts/dimensional/DimensionalBold.ttf') format('truetype');
}