# OVERVIEW
## CANONICAL TIMEFRAME NOTES
I elected to make my site about the SEGA GENESIS video game console, which originally launched in 1989.
It is immediately worth noting that some of the content on the site technically came out after the release of the world wide web in 1993.

My reason for including games and accessories from 1994 is so that I could have more content on the site.

The time frame intended for this site is just on the cusp of the launch of SEGA SATURN and SEGA 32x, both released at the end of 1994.
For the sake of the project requirements, assume this site existed since the launch of the GENESIS, and the current iteration is the end of it's lifespan.

## OTHER NOTES
Classes were used on numerous occasions for both javascripting and better CSS control.
ID used seldomly, only for scripting

Three individual js documents were used for three different pages
- home page for carousel
- game guides for download selector
- feedback form for submission
I avoided using PHP due to it not agreeing with Git Pages, so the feedback form is operating as a functional but purely visual placeholder, where only the first name of the person
is grabbed using javascript, and displayed in a thank you message.

I am certain you will find all the features on your own but to summarize the most interesting parts of this site
- homepage contains a functional carousel for 3 unique images, with both directional arrows and togglable image specific buttons
- homepage also contains hover interactable gameplay gifs for the TOP PICKS section
- peripherals page contains hover interactable info blurbs for all peripheral/addon elements
- game guides page contains two downloadable game guide pdfs for the games sonic and sonic 2, error message for all other games on the list
- feedback page has a submission message for when form is filled and submitted
- about page contains a short but interesting history of sega
- games list page contains over 700 genesis games, and is divided by base model, sega cd, and 32x (with the message coming soon since they would not have released yet)

CSS is extensive but organized mainly based on page, with the exeption of grouped elements to save lines. 
CSS was used in tandom with JS for the carousel, peripherals, and feedback from.
After the last class, I modified all pages to wrap when viewport is shrunk. Since this was built from the ground up without mobile in mind, it is still not perfect.

The content for the about page, privacy policy, warranty, trouble shooting, lists of games, and console specs were either directly copied and pasted from listed sources,
or minorly modified for period correctness. No code was copied and pasted from external sources, only raw text. Git commits will back me up.

Sources are below, links done without using MD [title] to keep page names visible

# SOURCES
## IMAGES
### CSS
TV background for interactive hovers on homepage 

https://www.inverse.com/input/guides/gamers-are-rushing-to-scoop-up-retro-tvs-heres-what-to-look-for*/
### HEAD
Sega logo sourced from 

https://logos-world.net/sega-logo/
### HEADER
Genesis logo source 

https://gamerant.com/reasons-sega-genesis-better-snes-super-nintendo/
### HOME PAGE
- Carousel Images
    - genesis console 
    
        https://www.orbitdvd.com/products/segagenesisconsole-model1looseused
    - genesis library image 
    
        https://www.reddit.com/r/nostalgia/comments/16wnxuz/what_sega_genesis_games_are_you_the_most/
    - street fighter 2 gif created from a screen grab of this footage (Credit: Sega Lord X)
            
        https://www.youtube.com/watch?v=sPTb1nvRg4s
- Top Picks Images
    - Out Run 
    
        https://www.ebay.com/itm/295862278178
    - Altered Beast 
    
        https://www.loadingscreen.ca/products/altered-beast-sega-genesis
    - Sonic 2 
    
        https://www.walmart.ca/en/ip/Sega-Genesis-Sonic-The-Hedgehog-2-PC-Refurbished-Physical/73U0GZ8NAFS9
    - Toejam and Earl 
    
        https://www.thevideogamecompany.com/products/toejam-and-earl-sega-genesis
    - Earthworm Jim 
    
        https://www.ebay.ca/itm/295862301110
    - Castlevania Bloodlines 
    
        https://www.amazon.ca/Konami-Castlevania-Bloodlines-Renewed/dp/B0CLYM882Q
    - Street Fighter 2 
    
        https://nintendo.fandom.com/wiki/Street_Fighter_II:_Champion_Edition
    - NBA Jam 
    
        https://www.amazon.ca/SEGA-NBA-Jam/dp/B00002STA0
    - Phantasy Star 4 
    
        https://www.dkoldies.com/phantasy-star-iv-genesis-game/
- Interactive gif references
    - Sonic 2 
    
        https://medium.com/@morgankitten/sonic-series-sonic-the-hedgehog-2-ddd0a880617d
    - Out Run 
    
        https://tenor.com/view/race-car-racing-pc-game-out-run-gif-14660997
    - Altered Beast 
    
        https://www.gogglebob.com/2017/06/14/fgc-289-altered-beast/
    - Toe Jam and Earl 
    
        https://www.gogglebob.com/2015/09/18/fgc-42-toejam-earl/
    - Earthworm Jim 
    
        https://www.pinterest.com/pin/708965166342681952/
    - NBA Jam 
    
        https://www.reddit.com/r/nostalgia/comments/pt6od0/nba_jam_1993/
    - Phantasy Star 4 
    
        https://www.tumblr.com/dnopls/138035264895/phantasy-star-iv-phantasy-star-the-end-of-the
    - Streetfighter 2 
    
        https://tenor.com/view/street-fighter-sf2-ryu-snes-arcade-gif-17103752
    - Castlevania Bloodlines 
    
        https://tenor.com/view/castlevania-bloodlines-bloodlines-castlevania-poke-eric-lecarde-gif-23786592

### PERIPHERALS PAGE
- 3 button controller image source 

    https://www.reddit.com/r/SEGAGENESIS/comments/tce0t9/any_sega_fans_know_where_i_can_find_brand_new_3/
- 6 button controller image source 

    https://www.sega-16.com/2004/08/genesis-accessory-peripheral-guide/
- 6 button wireless controller image source 

    https://www.theretroroom.ca/products/sega-genesis-controller-wireless
- 3 button arcade stick image source 

    https://gametrog.com/product/official-sega-genesis-3-button-arcade-power-stick-oem-genuine-model-1655/
- 6 button arcade stick image source 

    https://commons.wikimedia.org/wiki/File:Sega-Genesis-Arcade-Stick.jpg
- Sega CD image source 

    https://commons.wikimedia.org/wiki/File:Sega-CD-Base-Mk2-Bare-Front.jpg
- 32X image source 

    https://www.powerupgaming.ca/products/32xsystemw90daywarranty
### NEWS PAGE
- 32x attached to genesis image source 

    https://commons.wikimedia.org/wiki/File:Sega-Genesis-Model2-32X.png
- sonic 3 and knuckles gameplay gif, link is broken but google retained the gif 

    https://medium.com/@morgankitten/sonic-series-sonic-3-knuckles-949188aaf32d
- knuckles image from thumbnail for this video (Credit: AqualungGameReviews)

    https://www.youtube.com/watch?v=mAd7TGcPADw
- sonic, tails, knuckles jpg source 

    http://www.coronajumper.com/2016/01/sonic-3-and-knuckles-sega-genesis-1994.html
- sega saturn images sourced from wikipedia 

    https://en.wikipedia.org/wiki/Sega_Saturn
### ABOUT PAGE
- sega slot machine poster source 

    https://boudewijnhuijgens.getarchive.net/amp/media/sega-suddenly-its-1960-diamond-4-star-slot-machine-july-5th-1958-cash-box-advert-46fa4d
- periscope poster source 

    https://www.ebay.ca/itm/364282303121
- sega genesis advertisement image source 

    https://www.reddit.com/r/retrogaming/comments/6i9pjn/old_sega_genesis_ad_the_others_guys_just_dont/

## INFORMATION REFERENCES/SOURCES
### REFERENCES
- 32x article reference 

    https://x.com/VGArtAndTidbits/status/1081592831418994688/photo/2
- sonic and knuckles reference 

    https://en.wikipedia.org/wiki/Sonic_%26_Knuckles
- sega saturn article reference 

    https://www.segasaturnshiro.com/2020/05/03/saturn-lands-in-america/
### COPY AND PASTED/MINORLY MODIFIED INFORMATION
- footer copyright paragraph from segas official website 

    https://www.sega.com/
- Support page 
    - copy pasted warranty and trouble shooting from sega genesis manual reference 
    
        http://www.videogameconsolelibrary.com/images/Manuals/89_Sega_Genesis_Model_2-Manual.pdf
- privacy policy
    - content directly copied from 
    
        https://privacy.sega.com/sega-of-america-inc-privacy-policy formatting and minor tweaks by me
- console specs
    - copy pasted from 
    
        https://en.wikipedia.org/wiki/Sega_Genesis#Technical_specifications formatting and minor tweaks by me
- genesis games lists 
    - https://en.wikipedia.org/wiki/List_of_Sega_Genesis_games# 
    - https://en.wikipedia.org/wiki/List_of_Sega_CD_games 
    - https://en.wikipedia.org/wiki/List_of_32X_games
    - Organized into copy pastable format by https://grok.com/ formatted by me
- about page
    - sega history 
    
        https://en.wikipedia.org/wiki/Sega#1940%E2%80%931982:_Origins_and_arcade_success
    - periscope 
    
        https://en.wikipedia.org/wiki/Periscope_(arcade_game)
# SYNTAX REFERENCES
- Selected index learned from https://stackoverflow.com/questions/368219/javascript-onchange-within-option
- void container.offsetWidth; Trick learned from https://google.com/ 
    - who stole it from https://stackoverflow.com/questions/60686489/what-purpose-does-void-element-offsetwidth-serve
