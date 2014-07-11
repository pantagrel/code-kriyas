#/ CHANGELOG /

_Ballard Workshop's record of leisurely coding._

༼ つ ◕_◕ ༽つ
  _____

* __071014__ I'm tired today. I am going to close my eyes and think about the shape of my future vision and that will be today's kriya.

* __070914__ More parallax. Why am I spending so much time on this? Because I think it will lend itself well to storytelling. More to come on that thought. But for now, I figure out how to control this guttersnipe.

* __070814__ Was too annoyed to sleep last night due to an exasperating request. Tired, grumpy, and still learning parallax scrolling this morning. Found a nice tutorial online...but then realized the fucking thing is chock full of custom javascript. What's the point? How do I learn how to use a library if someone else is going to modify the crap out of it? There's nuggets to take away, but also...but also...but also nothing, for now. Just kinda back to square one. Fucking tutorials. 

* __070714__ More research of parallax scrolling. 

* __070614__ Researching parallax scrolling, skrollr.

* __070514__ Thought more about next steps. Tweaked and tweaked and tweaked color. Need to proceed and let color come later. Trying to pin an aesthetic onto a vague notion when I really should be pinning it onto a details specification. Began futzing again with the circles tests from February. 

* __070414__ Squeezed my panicking dog and thought about next steps. As a result, did not see any fireworks.

* __070314__ I'll take a sketching respite now to consider the design elements of the Ballard Workshop website and the steps I'll take to proceed with the subsequent portion of this first kriyic practice. [Sketch one](http://ballardworkshop.com/_img/sketch1_070314.jpg), [sketch two](http://ballardworkshop.com/_img/sketch2_070314.jpg).

* __070214__ Now over 25% done with my initial kriyas goal of daily practice for 40 days. Yay! Also, maybe I'll make a button that sorts the index by user preference (ascending or descending date only at this time...but! that would be taking user feedback to alter your web experience. I know, I know. Nearly every fucking webpage on the planet can do that already. But _I_ didn't hand code those websites...so there's a big difference.)

* __070114__ Functions are easy--standard stuff. So now I'm writing a function to build an associative array. Each file with the suffix of .php in a particular directory I want to be added to a particular array as a value. Then I want to add the last date that particular file was modified to be added to the array as the associated key. So that's what I'm doing right now...aaaaaand...there we go! An index page that generates out of a directory on a server and sorts itself by date create, with the most recent item at the top of the list.

* __063014__ Started in on functions. Following that will be learning more (and learning again) about arrays of arrays. No tuples in php! Want to sort the files by either date created or date last modified.

* __062914__ Made interior navigation work with array. Now, on first page and last page you should only see the appropriate directional guidance. Realized I was comparing keys with values, so once I matched up the comparison elements, things fell into place. Cleaned up how the index page displays the list of kriyas. Flipped the fork me graphic to live on the top left corner. It was getting in the way on the right side. Now I'm wondering what order the main index should display results. Listened to [Preachin' the Blues](http://kexp.org/programs/PreachintheBlues) on KEXP. Best radio show. I get so excited for Sunday mornings.
  * Recent on top? Yes, I think so...but I need to add a date or a number and make the interior navigation reversed. Currently I click the first item and the nav I see says "previous", which doesn't make sense when it's the first thing I've looked at...
  * it would be cool to create an array on the fly that tracks what someone has seen and creates previous/next out of that info. "Unique" experience each time for each user.
  * it is intimidating to begin new chunks of work--it feels good to slowly update and bask in successful code/markup implementation. next steps, however:
      * make the nav into svg graphics
      * add js flags to show the name of the upcoming file
      * move nav from top to sidebar? or at least make it responsive from its current position


* __062814__ Added this change log to this live site. Set up a top nav for the interior pages of the 'kriyas' exporlations that are to come. Set up a template file that uses the php includes command to pull in the navigation. Created a snippet of that template file (Sublime Text 2's templating system) which has the base framework for the code experiments--navigation and an HTML shell, with placeholder copy for content that will need to be tweaked for each separate file. Snippets are pretty boss. There will definitely need to be more of these created at a future date. Moved from having everything be black, white and red, to shades of blue and cream. Blue is more Ballard--it looks more _right_ right now. 

* __062714__ Looked at fonts, created this change log and backfilled the entries. Font finding: attempted to do it calmly and with direction b/c this type of activity (selecting fonts, colors, etc) can be overwhelming for me. Easy to get diverted towards unplanned directions. I'd like to learn to be more _consistently_ deliberate about my choices, and I'm finding it helps to identify a driving ethos: 
  * "Funky interior shapes, slightly irregular as relates to the overall shape. Readable, friendly, a bit organic. Looks like the code work I'm doing: a bit wonky.
  * Chunky sans serif? Upper and lower case, or (if all uc or lc) two typefaces: one for titling, one for body copy. 
  
  I guess the driving ethos goes back to the simple question of WHY? 

  I could also identify what I don't want and that could be another sort of driving ethos:
  
   * No classic serifs. Too formal, diginified, polished. This work is not polished. (Though could the constrast create interesting tension within a viewer? Is 'tension' something that would build additional engagement? Or would this detail be too subtle and just come across as a poorly chosen typeface? Will have to invesigate!)

* __062614__ Found a [php function](http://www.php.net/manual/en/function.str-replace.php) that finds and replaces string[bits] within arrays. I like the php documentation. Also like the "needle" in a "haystack" analogy they use for array examples. Was tired from drinking too much the night before. I haaaaaate hangovers. They're too depressing.

* __062514__ Moved the php practice I've been doing into the index file. Converted all the files to .php. Removed the live site from the interwebs so I can focus on this work without worrying about how boring my live site looks.

* __062414__ Worked on creating "next" and "previous" functionality. Easy enough with use of array and $item-1/$item+1. The harder part seems like it will be attaching js animations to the links (the 'flag' which I've seen on other sites that pops out with the name of the page you're going to. looks groovy.) 

* __062314__ Delving again into php. Yesssss! Coding is fun no matter your level. Started using php documentation. Set up php file that returned into my browser the contents of a directory. Using MAMP as my 'server' so I can test php stuff on my local machine.

* __062214__ Dusted the cobwebs off the github page. Reconfigured and renamed the repo to be more tightly defined than before. Fussed with styling of the user-facing site. Tweaked the github readme content to have more accurate info.