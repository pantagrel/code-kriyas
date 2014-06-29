#/ CHANGE LOG /

_Ballard Workshop's record of action._

༼ つ ◕_◕ ༽つ
  _____
* __6.29.14__ Made interior navigation work with array. Now, on first page and last page you should only see the appropriate directional guidance. Realized I was comparing keys with values, so once I matched up the comparison elements, things fell into place. Cleaned up how the index page displays the list of kriyas. Flipped the fork me graphic to live on the top left corner. It was getting in the way on the right side. Now I'm wondering what order the main index should display results. Listened to [Preachin' the Blues] (http://kexp.org/programs/PreachintheBlues) on KEXP. Best radio show. I get so excited for Sunday mornings.
  * Recent on top? Yes, I think so...but I need to add a date or a number and make the interior navigation reversed. Currently I click the first item and the nav I see says "previous", which doesn't make sense when it's the first thing I've looked at...
  * it would be cool to create an array on the fly that tracks what someone has seen and creates previous/next out of that info. "Unique" experience each time for each user.

* __6.28.14__ Added this change log to this live site. Set up a top nav for the interior pages of the 'kriyas' exporlations that are to come. Set up a template file that uses the php includes command to pull in the navigation. Created a snippet of that template file (Sublime Text 2's templating system) which has the base framework for the code experiments--navigation and an HTML shell, with placeholder copy for content that will need to be tweaked for each separate file. Snippets are pretty boss. There will definitely need to be more of these created at a future date. Moved from having everything be black, white and red, to shades of blue and cream. Blue is more Ballard--it looks more _right_ right now. 

* __6.27.14__ Looked at fonts, created this change log and backfilled the entries. Font finding: attempted to do it calmly and with direction b/c this type of activity (selecting fonts, colors, etc) can be overwhelming for me. Easy to get diverted towards unplanned directions. I'd like to learn to be more _consistently_ deliberate about my choices, and I'm finding it helps to identify a driving ethos: 
  * "Funky interior shapes, slightly irregular as relates to the overall shape. Readable, friendly, a bit organic. Looks like the code work I'm doing: a bit wonky.
  * Chunky sans serif? Upper and lower case, or (if all uc or lc) two typefaces: one for titling, one for body copy. 
  
  I guess the driving ethos goes back to the simple question of WHY? 

  I could also identify what I don't want and that could be another sort of driving ethos:
  
   * No classic serifs. Too formal, diginified, polished. This work is not polished. (Though could the constrast create interesting tension within a viewer? Is 'tension' something that would build additional engagement? Or would this detail be too subtle and just come across as a poorly chosen typeface? Will have to invesigate!)

* __6.26.14__ Found a [php function] (http://www.php.net/manual/en/function.str-replace.php) that finds and replaces string[bits] within arrays. I like the php documentation. Also like the "needle" in a "haystack" analogy they use for array examples. Was tired from drinking too much the night before. I haaaaaate hangovers. They're too depressing.

* __6.25.14__ Moved the php practice I've been doing into the index file. Converted all the files to .php. Removed the live site from the interwebs so I can focus on this work without worrying about how boring my live site looks.

* __6.24.14__ Worked on creating "next" and "previous" functionality. Easy enough with use of array and $item-1/$item+1. The harder part seems like it will be attaching js animations to the links (the 'flag' which I've seen on other sites that pops out with the name of the page you're going to. looks groovy.) 

* __6.23.14__ Delving again into php. Yesssss! Coding is fun no matter your level. Started using php documentation. Set up php file that returned into my browser the contents of a directory. Using MAMP as my 'server' so I can test php stuff on my local machine.

* __6.22.14__ Dusted the cobwebs off the github page. Reconfigured and renamed the repo to be more tightly defined than before. Fussed with styling of the user-facing site. Tweaked the github readme content to have more accurate info.