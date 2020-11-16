<!--In a new file unicorn.php, create an html form asking "Are you a human, a cat or a unicorn ?".
 When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, 
 as per the user input (you can find gifs here).
 Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition.
-->
 <h1>12. ternary operators</h1>

 <form action="" method="get">
 <label for="question">Are you a human, a cat or a unicorn ? </label>

 <label for="human">human</label>
 <input type="radio" name="question" value="human">

 <label for="cat">cat</label>
 <input type="radio" name="question" value="cat">

 <label for="unicorn">unicorn</label>
 <input type="radio" name="question" value="unicorn">

 <input type="submit" value="click">
 </form>
 

 <?php
 $unicorn = '<iframe src="https://giphy.com/embed/26vUw5sYGcqmMDoBy" width="480" height="340" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/icebreakers-unicorn-laser-ice-breakers-26vUw5sYGcqmMDoBy">via GIPHY</a></p>';
 $cat = '<iframe src="https://giphy.com/embed/BzyTuYCmvSORqs1ABM" width="500" height="340" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/hallmarkecards-cute-hallmark-shoebox-BzyTuYCmvSORqs1ABM">via GIPHY</a></p>';
 $human = '<iframe src="https://giphy.com/embed/MSgwmvbfUFZji35z7p" width="480" height="300" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/hello-hi-women-MSgwmvbfUFZji35z7p">via GIPHY</a></p>';
    if (isset($_GET['question'])){
     $resp=$_GET['question'];
     //echo $resp;
    $genre = ($resp == 'cat') ? $cat : false; 
        echo $genre;
    $genre = ($resp =='unicorn') ? $unicorn : false ;
        echo $genre;
    $genre =($resp == 'human') ? $human : false;
        echo $genre;
}
      //echo '<iframe src="https://giphy.com/embed/BzyTuYCmvSORqs1ABM" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/hallmarkecards-cute-hallmark-shoebox-BzyTuYCmvSORqs1ABM">via GIPHY</a></p>';
     
   
     
 
//$file =fopen("https://media.giphy.com/media/BzyTuYCmvSORqs1ABM/giphy.gif" , "x" );
//imagecreatefromgif (string $file) : resource
 


//echo '<iframe src="https://giphy.com/embed/BzyTuYCmvSORqs1ABM" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/hallmarkecards-cute-hallmark-shoebox-BzyTuYCmvSORqs1ABM">via GIPHY</a></p>';
//echo '<iframe src="https://giphy.com/embed/26vUw5sYGcqmMDoBy" width="480" height="346" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/icebreakers-unicorn-laser-ice-breakers-26vUw5sYGcqmMDoBy">via GIPHY</a></p>';
//echo '<iframe src="https://giphy.com/embed/MSgwmvbfUFZji35z7p" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/hello-hi-women-MSgwmvbfUFZji35z7p">via GIPHY</a></p>';              
 
 ?>
 