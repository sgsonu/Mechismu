<?php
$achievements = array(
    'Achievement1'=> array('image'=>'http://placehold.it/200x300/f44242/fff',  'title'=>'Achievement 1',  'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, doloremque!',  'buttonLink'=>'#',  'buttonText'=>'Go there',  'year'=>'2015'),
    'Achievement2'=> array('image'=>'http://placehold.it/200x300/f44242/fff',  'title'=>'Achievement 2',  'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, doloremque!',  'buttonLink'=>'#',  'buttonText'=>'Go there',  'year'=>'2015'),
    'Achievement3'=> array('image'=>'http://placehold.it/200x300/f44242/fff',  'title'=>'Achievement 3',  'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, doloremque!',  'buttonLink'=>'#',  'buttonText'=>'Go there',  'year'=>'2015'),
  );
class Achievements{
    public static function GenerateAchievements($items){
        $html = "<div class='panel-body'>
        <div class='timeline'>
            <div class='timeline__wrap'><div class='timeline__items'>";
        foreach($items as $key => $item) {
          $html .= "<div class='timeline__item'>          
          <div class='timeline__content'>
          <div class='row'>
          <div class='col-md-4'>
            <img src='{$item['image']}' class='card-img' alt='...'>
          </div>
          <div class='col-md-8'>
          <h5 class='card-title'>{$item['title']}</h5>
              <p class='card-text'>{$item['text']}</p>
              <a href='#' class='btn btn-success'>{$item['year']}</a>
              <a href='{$item['buttonLink']}' class='btn btn-primary'>{$item['buttonText']}</a>              
          </div>
          </div>
  </div>
  </div>\n";
        }
        $html.="</div>
        </div>
        </div>
        </div>";
        return $html;        
    }
}
?>
