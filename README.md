High Desert Off Road Club website build
====

HDOR website<br>

-NOTES:<br>
++ if xampp wont start on windows:<br>
open new cmd window, issue command 'net stop http'<br>
++ xampp path:<br>
http://localhost/hdor/public_html/index.php<br>
++ less and js files<br>
download Koala less compiler and set up to auto<br>
compile css/main.less --> public_html/css/main.min.css<br>
and js/custom.js --> public_html/js/custom.min.js<br>
++ adding a component<br>
create a new componten.php file and 'include'<br>
into appropriate page<br>
++ moving content<br>
to make code more easily moved to PROD(server)<br>
moving min files, images, and main code into<br>
'public_html' directory<br>
content of 'public_html' directory will be copied<br>
to PROD(server)<br>
place minified versions of js and css into appropriate<br>
dir in 'public_html'<br>

-Colors<br>
Lt Green - #C8F283<br>
Med Green - #83D528<br>
Dk Green - #2F4A0F<br>
Lt Brown - #8F755E<br>
Med Brown - #94664C<br>
Dk Brown - #573B2F<br>

-GCal button<br>
https://commons.lbl.gov/display/google/Calendar+Button+to+add+event+to+my+calendar
